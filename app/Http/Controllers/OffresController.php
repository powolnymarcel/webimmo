<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
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
    public function creation(Request $request)
    {
    var_dump($request->all());
    }
}
