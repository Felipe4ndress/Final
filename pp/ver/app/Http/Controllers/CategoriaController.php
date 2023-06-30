<?php

namespace App\Http\Controllers;
use App\Models\cuentas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection\modelKeys;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() #HomeController
    {
        return view('categorias.home');

    }


    public function login(Request $request)
    {
        return view('categorias.login');
        $credentials = [
            "user" => $request->user,
            "password" => $request->password,
        ];
        $remember = ($request->has('remember') ? true : false);

        if(Auth::attempt($credentials,$remember)){
            $request->session()->regenerate();
            return redirect()->intended();

        }else{
            return redirect('artista.atista');
        }
    }
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $cuenta = new cuentas();


        $cuenta-> user = $request->user;
        $cuenta-> nombre = $request->nombre;
        $cuenta-> apellido = $request->apellido;
        $cuenta-> password = Hash::make($request->password);
        $cuenta-> updated_at = $request-> updated_at;
        $cuenta-> created_at =$request-> created_at;
        $cuenta->save();

        /* Auth::login($cuenta); */
        return view('categorias.create');
    }

    /* *
     * Display the specified resource.
     */
    public function show()
    {
        $cuentas = Cuentas::all();
        $data = [
            'cuentas' =>$cuentas,
        ];
        return view('categorias.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cuentas = Cuentas::find($id);
        $data = [
            'cuentas' =>$cuentas,
        ];
        return view('categorias.edit',$data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cuenta = Cuentas::find($id);

        $cuenta-> user = $request->user;
        $cuenta-> nombre = $request->nombre;
        $cuenta-> apellido = $request->apellido;
        $cuenta-> password = Hash::make($request->password);
        $cuenta-> updated_at = $request-> updated_at;
        $cuenta-> created_at =$request-> created_at;
        $cuenta->save();

        /* Auth::login($cuenta); */
        return view('categorias.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        $cuenta = Cuentas::all();
        $cuenta->deleted();
        return view('categorias.show');
    }
}
