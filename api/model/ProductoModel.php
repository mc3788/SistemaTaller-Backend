<?php

use \Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductoModel extends Model
{

	use SoftDeletes;

	protected $table = 'producto';
	protected $fillable = ['idProveedor','nombre','precioCosto','precioVenta','idMarca','observaciones','updated_by'];

	public function proveedor() {
		require_once 'api/model/ProveedorModel.php';
		return $this->hasOne( 'ProveedorModel', 'id', 'idProveedor' )->select(['id','nit','nombre']);
	}

	public function marca() {
		require_once 'api/model/MarcaModel.php';
		return $this->hasOne( 'MarcaModel', 'id', 'idMarca' )->select(['id','nombre']);
	}

}