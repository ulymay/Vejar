<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Nota;

use App\Category;

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

        $notas=Nota::with('Category')->get();
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
        $categories = Category::all();
        return view('notas.create', compact('categories'));
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
        $nota->category_id=$request->category_id;

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
        $categories = Category::all();
        return view("notas.edit", compact("nota", "categories"));
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
