<?php

use \Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MarcaModel extends Model
{

	use SoftDeletes;

	protected $table = 'marca';
	protected $fillable = ['nombre','updated_by'];


}