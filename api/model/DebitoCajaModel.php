<?php

use \Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DebitoCajaModel extends Model
{

	use SoftDeletes;

	protected $table = 'debitoCaja';
	protected $fillable = ['fecha','idProveedor','idCierre','noFactura','noOrden','monto','descripcion','updated_by'];

	public function proveedor() {
		require_once 'api/model/ProveedorModel.php';
		return $this->hasOne( 'ProveedorModel', 'id', 'idProveedor' )->select(['id','nit','nombre']);
	}


}