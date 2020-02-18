<?php

use \Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreditoCajaModel extends Model
{

	use SoftDeletes;

	protected $table = 'creditoCaja';
	protected $fillable = ['fecha','idCierre','noDocumento','monto','descripcion','tipo','updated_by'];


}