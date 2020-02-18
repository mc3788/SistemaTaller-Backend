<?php


class creditoCaja extends Controller
{
	public function main( $id ='' ) {
		$modelName = 'CreditoCajaModel';
		$this->dft( $modelName, $id );
	}

}