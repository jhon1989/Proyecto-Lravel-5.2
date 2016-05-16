<?php

namespace Curso;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Genero extends Model
{
	use SoftDeletes;

	protected $fillable = [
        'genero',
    ];
   protected $table = 'generos';

   protected $dates = ['deleted_at'];
}
