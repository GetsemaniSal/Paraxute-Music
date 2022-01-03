<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Horario;
use Illuminate\Support\Facades\horarios;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = Horario:: all();
        return view('horario.index')-> with('horarios', $horarios);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('horario.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horarios = new horario();
        $horarios->name = $request->get('name');
        $horarios->email = $request->get('email');
        $horarios->role = $request->get('role');
        $horarios->password = $request->get('password');
        $horarios->phone = $request->get('phone');
        $horarios->save();//

        return redirect('/horarios');

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
        $horarios = horario:: find($id);
        return view('horario.edit')-> with('horarios', $horarios);//

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
        $horario = horario::find($id);
        $horario->name = $request->get('name');
        $horario->email = $request->get('email');
        $horario->role = $request->get('role');
        $horario->password = $request->get('password');
        $horario->phone = $request->get('phone');
        $horario->save();//

        return redirect('/horarios');//

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $horarios = horario:: find($id);
        $horarios->delete();
        return redirect('/horarios');//
    }
}
