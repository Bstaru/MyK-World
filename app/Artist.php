<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //
    protected $primaryKey ='idArtist';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
