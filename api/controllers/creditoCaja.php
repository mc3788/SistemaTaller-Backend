<?php


class creditoCaja extends Controller
{
	public function main( $id ='' ) {
		$modelName = 'CreditoCajaModel';
		$this->dft( $modelName, $id );
	}

	public function filtrofecha( $fechaInicio ='', $fechaFin ='' ) {
		require_once ("api/core/ResponseAdministrator.php");

		try
		{
			
			$am = $this->model( 'CreditoCajaModel' );

			$cc = $am::select('creditoCaja.id','creditoCaja.fecha','creditoCaja.noDocumento','creditoCaja.monto','creditoCaja.descripcion')
				->whereBetween('fecha', [$fechaInicio, $fechaFin])->get();
			ResponseAdministrator::responseData( $cc );

		} catch ( Exception $exception ) {
				ResponseAdministrator::responseError();
		}
	}

}