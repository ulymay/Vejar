<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Nota;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $notas=Nota::all();
        return view('notas.index', compact("notas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('notas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $nota = new Nota;

        $nota->nombre=$request->nombre;
        $nota->descripcion=$request->descripcion;
        $nota->usuario = auth()->user()->email;

        $nota->save();
        return back()->with('mensaje', 'Nota Agregada!');
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
        $nota=Nota::findOrFail($id);

        return view("notas.show", compact("nota"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $nota=Nota::findOrFail($id);

        return view("notas.edit", compact("nota"));
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
        //
        $nota=Nota::findOrFail($id);

        $nota->update($request->all());

        return redirect("/notas");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $nota=Nota::findOrFail($id);

        $nota->delete();

        return redirect("/notas");
    }
}
