<?php

use \Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProveedorModel extends Model
{

	use SoftDeletes;

	protected $table = 'proveedor';
	protected $fillable = ['nit','nombre','telefono','direccion','observaciones','updated_by'];


}