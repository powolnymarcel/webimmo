<?php

namespace App\Http\Controllers;

use App\Offre;
use Illuminate\Http\Request;

use App\Http\Requests\OffreRequest;
use App\Http\Utiles\Pays;

class OffresController extends Controller
{
    public function index()
    {

        $pays=Pays::tout();

        return view('offres.creation',[
            'pays'=>$pays
        ]);
    }
    public function creation(OffreRequest $request)
    {
       Offre::create($request->all());

        flash()->success('Succes ! ','Votre offre a été publiée');

        return redirect()->back();
    }
}
