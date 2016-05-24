<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    /**
     * Une offre comporte plusieurs photos
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos()
    {
        return $this->hasMany('App\Photo');
    }
}
