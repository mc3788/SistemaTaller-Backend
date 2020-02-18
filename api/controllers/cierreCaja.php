<?php


class cierreCaja extends Controller
{
	public function main( $id = '' ) {
		require_once ("api/core/ResponseAdministrator.php");
		require_once ("api/core/Auth.php");

		$modelName = 'CierreCajaModel';

		
		if ($_SERVER['REQUEST_METHOD'] === 'GET'){

			$this->get($modelName, $id, null);
			
		}elseif($_SERVER['REQUEST_METHOD'] === 'POST') {

			$model = $this->model( $modelName );

			$inputJSON = file_get_contents('php://input');
			$input = json_decode($inputJSON, TRUE);

			try {

				if( !isset($input['mes']) || !isset($input['anio']) ){
					ResponseAdministrator::responseBadRequest();
				}

				$month = $input['mes'];
				$obs  = $input['observaciones'];
//				$year = date("Y");
				$year = $input['anio'];



				$realizado = true;

				try{
					$model::where(
						[ 'mes' => $month,
						  'azo' => $year
						]
					)->firstOrFail();

				} catch (Exception $exception ){
					$realizado = false;
				}

				if( $realizado ){
					ResponseAdministrator::responseData( ['estado' => 'ERROR', 'mensaje' => 'Ya existe un cierre para el periodo ' . $month . '-' . $year] );
				}

				$initial = date( 'Y-m-d', strtotime($year . "-" . $month . "-" . "01") );
				$final = date( 'Y-m-d', strtotime('last day of this month', strtotime($initial) ) );

				$debito = $this->model( 'DebitoCajaModel' );
				$credito = $this->model( 'CreditoCajaModel' );

				$montoCredito = $credito::whereBetween('fecha', [$initial, $final])->sum('monto');
				$montoDebito = $debito::whereBetween('fecha', [$initial, $final])->sum('monto');
				$montoCierre = $montoCredito - $montoDebito;


				$cierre = [
					'mes'           => $month,
					'azo'           => $year,
					'fechaInicio'   => $initial,
					'fechaFinal'    => $final,
					'fechaCierre'   => date('Y-m-d'),
					'montoCredito'  => $montoCredito,
					'montoDebito'   => $montoDebito,
					'montoCierre'   => $montoCierre,
					'observaciones' => $obs
				];

				$m = $model::create( $cierre );

				$credito::whereBetween('fecha', [$initial, $final])->update(['idCierre' => $m->id] );
				$debito::whereBetween('fecha', [$initial, $final])->update(['idCierre' => $m->id] );

				if ( $montoCierre > 0 ) {
					$month = $month + 1;
					if( $month > 12 ){
						$month = 1;
						$year = $year + 1;
					}
					$initial = date( 'Y-m-d', strtotime($year . "-" . $month . "-" . "01") );
					$cred = [
						'fecha'     => $initial,
						'monto'     => $montoCierre,
						'descripcion'   => 'Generado por el cierre',
						'tipo'  => 1
					];
					$credito::create($cred);
				}

				ResponseAdministrator::responseData( ['estado' => 'OK', 'mensaje' => 'Cierre realizado.'] );
//				ResponseAdministrator::responseData(
//					[ 'initial' => $initial,
//					  'final' => $final,
//					  'montoCredito' => $montoCredito,
//					  'montoDebito' => $montoDebito,
//					  'montoCierre' => $montoCierre
//					] );

			} catch ( Exception $exception ) {
				ResponseAdministrator::responseUnauthorized();
			}

		} elseif ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
			ResponseAdministrator::responseSuccess();
		} else {
			ResponseAdministrator::responseBadRequest();
		}
	}

}