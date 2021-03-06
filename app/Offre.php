<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{

    protected $fillable=[
        'rue',
        'ville',
        'pays',
        'prix',
        'codepostal',
        'description'
    ];

    public static function  LocatedAt($codepostal,$rue){
        $rue= str_replace('-',' ',$rue);
        return static::where(compact('codepostal','rue'))->firstOrFail();
    }

    public function ajoutPhoto(Photo $photo){
    return $this->photos()->save($photo);
        
    }

    /**
     * Une offre comporte plusieurs photos
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos()
    {
        return $this->hasMany('App\Photo');
    }

    public function getPriceAttributes($prix)
    {
        return '€' . number_format($prix);
    }

    public function proprietaire(){
        return $this->belongsTo('App\User','utilisateur_id');
    }

    public function proprieteDe(User $utilisateur){
        return $this->utilisateur_id == $utilisateur->id;
    }

}
