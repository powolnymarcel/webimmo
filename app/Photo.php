<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'offres_photos';
    protected $fillable = ['photo'];

    public function offre()
    {
        return $this->belongsTo('App\Offre');
    }
}
