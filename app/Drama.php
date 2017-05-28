<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Drama extends Model
{
    //
    
     protected $primaryKey ='idDrama';

     public function user()
    {

      return $this->belongsToMany('App\User','userdramas')
      ->withTimestamps();
    }

    public function resenia()
    {
        return $this->hasMany('App\Resenia','idDrama','idDrama');
    }


}
