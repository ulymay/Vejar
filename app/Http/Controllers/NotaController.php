<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Nota;

use App\Category;

use App\SubCategory;

use App\Solucion;

use App\Http\Requests\CreatNotasRequest;

use Storage;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nombre = $request->get('buscar');

        $notas=Nota::with('Category')->get();
        $notas=Nota::nombre($nombre)->with('Category')->get();
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
    public function store(CreatNotasRequest $request)
    {
        //
        //$this->validate($request, ['nombre'=>'required']);
        $request->validate([
            'nombre'=> 'required',
            'descripcion' => 'required',
            'solucion' => 'required',
            'recomendaciones' => 'required'
        ]);
        
        $nota = new Nota;

        $nota->nombre=$request->nombre;
        $nota->descripcion=$request->descripcion;
        $nota->usuario = auth()->user()->email;
        $nota->category_id=$request->category_id;
        $nota->solucion=$request->solucion;
        $nota->recomendaciones=$request->recomendaciones;
        $nota->guia=$request->guia;
        $nota->relacionado=$request->relacionado;

        $doc = $request->file('archivo');
        
        if($doc){
            
        $doc_route = time().'_'.$doc->getClientOriginalName();

        Storage::disk('adjuntos')->put($doc_route, file_get_contents($doc->getRealPath()));
        
        $nota->urlDoc=$doc_route;
        }
        
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
        $nota=Nota::with('Solucion')->findOrFail($id);
        
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
        $nota=Nota::with('Category')->findOrFail($id);

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
