<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Clase;
use Illuminate\Support\Facades\clases;

class ClaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clases = Clase:: all();
        return view('clase.index')-> with('clases', $clases);//
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
        $clases = new Usuario();   
        $clases->tipo_programa = $request->get('tipo_programa');
        $clases->codigo_Prog = $request->get('codigo_Prog');
        $clases->num_sesiones_mes = $request->get('num_sesiones_mes');

     ;
     
        $clases->save();//


        $table->string('tipo_programa');
         

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
        $clases = Usuario:: find($id);
        return view('usuario.edit')-> with('usuarios', $clases);//

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
        $clases = Usuario:: find($id);
        $clases->delete();
        return redirect('/usuarios');//
    }
}
