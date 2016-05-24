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
    /**
     * Une offre comporte plusieurs photos
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos()
    {
        return $this->hasMany('App\Photo');
    }
}
