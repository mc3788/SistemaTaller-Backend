<?php

use \Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoDocumentoModel extends Model
{

	use SoftDeletes;

	protected $table = 'tipoDocumento';
	protected $fillable = ['descripcion','operacion','updated_by'];


}