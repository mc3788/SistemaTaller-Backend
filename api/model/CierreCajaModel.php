<?php

use \Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CierreCajaModel extends Model
{

	use SoftDeletes;

	protected $table = 'cierreCaja';
	protected $fillable = ['mes','azo','fechaInicio','fechaFinal','fechaCierre','montoCredito','montoDebito','montoCierre','observaciones','updated_by'];


}