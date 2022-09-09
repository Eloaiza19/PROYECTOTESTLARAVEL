<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Materia;
use Illuminate\Http\Request;


class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daticos = Curso::all();
        return view('curso.index', compact('daticos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('curso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = new Curso();
        $datos->nombre = $request->input('nombre');
        $datos->descripcion = $request->input('descripcion');
        $datos->duracion = $request->input('duracion');
        if($request->hasFile('imagen')){
            $datos->imagen = $request->file('imagen')->store('public/curso');
        }
        $datos->save();
        return view('curso.add');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datos = Curso::find($id);
        $materias = Materia::all();
        return view('curso.show', compact('datos', 'materias'));//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos=Curso::find($id);

       return view('curso.edit', compact('datos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos= Curso::find($id);

        $datos->fill($request->except('imagen'));
        if($request->hasFile('imagen')){
            $datos->imagen = $request->file('imagen')->store('public/curso');
        }
        $datos->save();
        return view('curso.upload');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos = Curso::find($id);
        $urlImagenBD = $datos->imagen;
        //return $urlImagenBD;
        $nombreImagen = str_replace('public/', '\storage\\', $urlImagenBD);
        //return $nombreImagen;
        $rutaCompleta = public_path().$nombreImagen;
        //return $rutaCompleta;
        //unlink($rutaCompleta);
        $datos -> delete();
        return view('curso.delete');
    }
}
