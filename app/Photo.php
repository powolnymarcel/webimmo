<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

class Photo extends Model
{
    protected $table = 'offres_photos';
    protected $fillable = ['chemin'];
    protected $baseDit = 'offres/photos';

    public function offre()
    {
        return $this->belongsTo('App\Offre');
    }

public static function fromForm(UploadedFile $fichier){
    $photo = new static;
    $nom = time()  . $fichier->getClientOriginalName();
    $photo->chemin= $photo->baseDit .'/' . $nom;
    $fichier->move($photo->baseDit,$nom);
return $photo;

}

}
