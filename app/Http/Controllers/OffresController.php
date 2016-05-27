<?php

namespace App\Http\Controllers;

use App\Offre;
use App\Photo;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests\OffreRequest;
use App\Http\Utiles\Pays;
use Illuminate\Http\UploadedFile;

class OffresController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except'=>['voir','accueil','accueil2']]);

        parent::__construct();
    }

    public function accueil2(){
        $offres=Offre::all();
        return response()->json($offres);

    }

    public function accueil(){
        $offres=Offre::all();
        return view('pages.accueil',[
            'offres'=>$offres
        ]);
    }

    public function index()
    {

        $pays=Pays::tout();

        return view('offres.creation',[
            'pays'=>$pays
        ]);
    }
    public function creation(OffreRequest $request)
    {
        $input = $request->all();
        //dd($request->all());
        $codepostal =$input['codepostal'];
        $rue        =$input['rue'];
        Offre::create($request->all());
        //$this->utilisateur->publier(new Offre($request->all()));
        flash()->success('Succes ! ','Votre offre a été publiée');
        sleep(1);
        return redirect(route('voirOffre',['codepostal'=>$codepostal,'rue'=>$rue]));
        //return redirect()->back();
    }


    public function voir($codepostal, $rue)
    {
        $offre = Offre::LocatedAt($codepostal, $rue);
        return view('offres.voir', compact('offre'));
    }


public function ajoutPhoto($codepostal,$rue,Request $request)
{

  //  $this->validate($request,[
  //      'photo'=>'mimes:jpg,png,jpeg,bmp',
  //      'photo'=>required
  //  ] );

   // $fichier= $request->file('file');
    //Un nom unique
   // $nom = time()  . $fichier->getClientOriginalName();
    //Déplacer la photo dans dossier photos


 //On verifie que l'user a bien crée le post
//    if($offre->utilisateur_id !== \Auth::id()){
   // if($offre->proprieteDe(\Auth::user())){
//    if(!$offre->proprieteDe($this->utilisateur)){
        if(!$this->offreCreeParUtilisateur($request)){

      // if($request->ajax()){
      //     return response(['message'=>'Hors de question !!'],403);
      // }
      // flash('Hors de question');
      // redirect('/');
      return  $this->interdiction($request);
    }
    $photo= $this->fairePhoto($request->file('file'));
    //Trouver l'offre
    //Offre::LocatedAt($codepostal, $rue)->ajoutPhoto($photo);
    Offre::LocatedAt($codepostal, $rue)->ajoutPhoto($photo);


   // //Ajouter une photo à l'offre
   // $offre->photos()->create(['chemin'=>"offres/photos/{$nom}"]);

}

    protected function fairePhoto(UploadedFile $fichier){
        return Photo::nommee($fichier->getClientOriginalName())
            ->deplacer($fichier);

    }

    public function offreCreeParUtilisateur(Request $request){
//Si une offre a ete cree par l'user en cours
        return Offre::where([
           'codepostal'=>$request->codepostal,
            'rue'=>$request->rue,
            'utilisateur_id'=>$this->utilisateur->id
        ])->exists();
    }

public function interdiction(Request $request){
    if($request->ajax()){
        return response(['message'=>'Hors de question !!'],403);
    }
    flash('Hors de question');
    redirect('/');
}










}
