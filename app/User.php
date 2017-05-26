<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
     protected $primaryKey ='id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username','lastname','birthday','gender',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function artist()
    {
        return $this->hasOne('App\artist',"idArtist","idArtist");
    }

      public function dramaArtist()
    {
        return $this->hasOne('App\artist',"idArtist","idDramaArtist");
    }

   

    public function group()
    {
        return $this->hasOne('App\Group',"idGroup","idGroup");
    }

    public function dramafav()
    {
        return $this->hasOne('App\Drama',"idDrama","idDrama");
    }


    
    public function drama()
    {
    return $this->belongsToMany('App\Drama','userdramas', 'idUser', 'idDrama')
      ->withTimestamps();
    }
         

}
