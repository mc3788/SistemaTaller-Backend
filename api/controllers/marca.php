<?php


class marca extends Controller
{
	public function main( $id ='' ) {
		$modelName = 'MarcaModel';
		$this->dft( $modelName, $id );
	}

}