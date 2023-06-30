<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\imagenes;
use Illuminate\Support\Facades\Storage;
/* use App\imagenes; */

class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* $imagen = Imagenes::all(); */
        return view('artista.artista');
        /* return view('artista.artista'); */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('artista.agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image|max:2048',
        ]);
        $imagenes = $request->file('file')->store('public/imagenes');

        $archivo = Storage::url($imagenes);
        /* $titulo = Storage::titulo($imagenes); */

        Imagenes::create([
            'archivo' => $archivo,
            /* 'titulo' => $titulo, */
        ]);
        return redirect() ->route('artista.artista');
        /* $request->validate(
           ['titulo' =>'required|max:20',
           'file' => 'required|imagen']
        ); */
        /* $imagen = $request->file('file')->store('public/imagen');
        $url = Storage::url($imagen);
        file::create([
            'url' => $url
        ]); */
    }

    /**
     * Display the specified resource.
     */
    public function show($file)
    {
       /*  $cuentas = Cuentas::all();
        $data = [
            'cuentas' =>$cuentas,
        ];
        return view('categorias.show',$data);

        return view('artista.show'); */
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($file)
    {
        return view('artista.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($file)
    {
        //
    }
}
