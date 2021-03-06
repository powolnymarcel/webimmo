<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function proprietaireOffre($relationUtilisateurAvecOffre){
    return $relationUtilisateurAvecOffre->utilisateur_id == $this->id;
    }

public function offres(){
   return  $this->hasMany(Offre::class);
}

public function publier(Offre $offre){
 $this->offres()->save($offre);
}



















}
