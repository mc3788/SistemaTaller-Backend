<?php


class tipoDocumento extends Controller
{
	public function main( $id ='' ) {
		$modelName = 'TipoDocumentoModel';
		$this->dft( $modelName, $id );
	}

}