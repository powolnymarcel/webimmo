<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;

class Photo extends Model
{
    protected $table = 'offres_photos';
    protected $fillable = ['chemin','nom','thumbnail_path'];
    protected $baseDit = 'offres/photos';

    public function offre()
    {
        return $this->belongsTo('App\Offre');
    }

public static function nommee($nom){
    return (new static)->saveAs($nom);
}

    public function saveAs($nom){

       $this->nom=sprintf("%s-%s",time(),$nom);
       $this->chemin=sprintf("%s/%s",$this->baseDit,$this->nom);
           $this->thumbnail_path=sprintf("%s/tn-%s",$this->baseDit,$this->nom);
        return $this;
    }

        public function deplacer(UploadedFile $fichier){
        $fichier->move($this->baseDit,$this->nom);


            $this->faireMiniature();


            return $this;

    }

    public function faireMiniature(){
        Image::make($this->chemin)
            ->fit(200)
            ->save($this->thumbnail_path);

    }
}
