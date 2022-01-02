<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario:: all();
        return view('usuario.index')-> with('usuarios', $usuarios);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios = new Usuario();
        $usuarios->name = $request->get('name');
        $usuarios->email = $request->get('email');
        $usuarios->role = $request->get('role');
        $usuarios->password = $request->get('password');
        $usuarios->phone = $request->get('phone');
        $usuarios->save();//

        return redirect('/usuarios');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarios = Usuario:: find($id);
        return view('usuario.edit')-> with('usuarios', $usuarios);//

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->name = $request->get('name');
        $usuario->email = $request->get('email');
        $usuario->role = $request->get('role');
        $usuario->password = $request->get('password');
        $usuario->phone = $request->get('phone');
        $usuario->save();//

        return redirect('/usuarios');//

        
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarios = Usuario:: find($id);
        $usuarios->delete();
        return redirect('/usuarios');//
    }
}
