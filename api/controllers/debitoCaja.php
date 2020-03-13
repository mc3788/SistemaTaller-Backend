<?php


class debitoCaja extends Controller
{
	public function main( $id ='' ) {
		require_once ("api/core/ResponseAdministrator.php");
		$modelName = 'DebitoCajaModel';
		if ($_SERVER['REQUEST_METHOD'] === 'GET')
		{
			try
			{
				$data = $this->getData($modelName, $id, null);
				if ( isset( $data ) ){
					$data->load(['proveedor']);
				}
				ResponseAdministrator::responseData( $data);
			} catch( Exception $exception ){
				ResponseAdministrator::responseError();
			}
		} elseif ($_SERVER['REQUEST_METHOD'] === 'POST')
		{
			$this->post($modelName);
		} elseif ($_SERVER['REQUEST_METHOD'] === 'PUT' )
		{
			$this->put($modelName, $id);
		} elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE')
		{
			$this->delete( $modelName, $id );
		} elseif ($_SERVER['REQUEST_METHOD'] === 'OPTIONS')
		{
			ResponseAdministrator::responseSuccess();
		} else {
			ResponseAdministrator::responseBadRequest(); 
		}
	}

	public function filtrofecha( $fechaInicio ='', $fechaFin ='' ) {
		require_once ("api/core/ResponseAdministrator.php");

		try
		{
			
			$am = $this->model( 'DebitoCajaModel' );

			$cc = $am::select('debitoCaja.fecha','debitoCaja.idProveedor','debitoCaja.noFactura','debitoCaja.noOrden','debitoCaja.monto','debitoCaja.descripcion')
				->join( 'proveedor', 'proveedor.id', '=', 'debitoCaja.idProveedor')
				->whereBetween('fecha', [$fechaInicio, $fechaFin])->get();
				if ( isset( $cc ) ){
					$cc->load(['proveedor']);
				}
			ResponseAdministrator::responseData( $cc );

		} catch ( Exception $exception ) {
				ResponseAdministrator::responseError();
		}
	}

}