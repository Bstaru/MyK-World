<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resenia extends Model
{
    protected $table= "resenia";

     public function user()
    {

      return $this->belongsTo('App\User','idUser');
    }

     public function drama()
    {

        return $this->belongsTo('App\Drama','idDrama');
    }

}
