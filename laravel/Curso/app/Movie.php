<?php

namespace Curso;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Movie extends Model
{
   protected $table = 'movies';

   protected $fillable = ['name', 'path', 'cast', 'direction', 'duration', 'genero_id'];

   public function setPathAttribute($path)
   {
      if(!empty($path))
      {

         $this->attributes['path'] = Carbon::now()->second . $path->getClientOriginalName();
         $name = Carbon:: now()->second . $path->getClientOriginalName();
         \Storage::disk('local')->put($name, \File::get($path));

      }

   }

   public static function Movies()
   {
   	   return DB::table('movies')
   	   ->join('generos', 'generos.id', '=', 'movies.genero_id')
   	   ->select('movies.*', 'generos.genero')
   	   ->get();
   }
}
