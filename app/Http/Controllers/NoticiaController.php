<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function index(){
        $carganoticia = Noticia::orderBy('id', 'DESC')->paginate(2);
        return view('pages.noticias.noticias', compact('carganoticia'));
    }
    public function store(Request $request){
        $request->validate([
            'portada'=>'image',
        ]);

        try{
            $newnoticia = new Noticia();
            $newnoticia->titulo = $request->titulo;
            $newnoticia->contenido = $request->contenido;

            if($request->fotoportada!=null){
                $fotoportada=time()."_".$request->file('fotoportada')->getClientOriginalName();
                $newnoticia->portada=$fotoportada;
                $request->file('fotoportada')->storeAs('public/images/noticias', $fotoportada);
            }
            $newnoticia->user_id = Auth()->user()->id;
            $newnoticia->save();
        }
        catch(QueryException $exception){
            return route('');
        }

        return redirect()->route('noticias');
    }
}
