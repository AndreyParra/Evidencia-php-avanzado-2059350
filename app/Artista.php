<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    protected $table ="artists";
    protected $primaryKey ="ArtistId";
    public $timestamps= false;
    
    //Relacion Atista-Albumes
    //Relacion de 1:N usando hasMany metodo eloquent
    public function albumes() { 
        return $this ->hasMany('App\Album', 'ArtistId');
    }
}
