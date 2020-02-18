<?php


class proveedor extends Controller
{

	public function main( $id ='' ) {
		$modelName = 'ProveedorModel';
		$this->dft( $modelName, $id );
	}

}