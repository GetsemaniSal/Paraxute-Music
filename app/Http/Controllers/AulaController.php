<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;
use Illuminate\Support\Facades\aulas;
class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aulas = Aula:: all();
        return view('aula.index')-> with('aulas', $aulas);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aula.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aulas = new aula();
        $aulas->name = $request->get('name');
        $aulas->email = $request->get('email');
        $aulas->role = $request->get('role');
        $aulas->password = $request->get('password');
        $aulas->phone = $request->get('phone');
        $aulas->save();//

        return redirect('/aulas');

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
        $aulas = aula:: find($id);
        return view('aula.edit')-> with('aulas', $aulas);//

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
        $aula = aula::find($id);
        $aula->name = $request->get('name');
        $aula->email = $request->get('email');
        $aula->role = $request->get('role');
        $aula->password = $request->get('password');
        $aula->phone = $request->get('phone');
        $aula->save();//

        return redirect('/aulas');//

        
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aulas = aula:: find($id);
        $aulas->delete();
        return redirect('/aulas');//
    }
}
