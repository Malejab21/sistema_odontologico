<?php

namespace App\Http\Controllers;

use App\Models\Instrumento;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;

class InstrumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $instrumentos = Instrumento::paginate(5);
        return view('instrumentos.index', compact('instrumentos'));
    }
    public function pdf()
    {
        //
        $instrumentos = Instrumento::paginate(5);
        $pdf = FacadePdf::loadView('instrumentos.pdf',['instrumentos'=>$instrumentos]);
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('instrumentos.crear');
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
        $request->validate([
            'descripcion' => 'required','cantidad' => 'required', 'imagen' => 'required|image|mimes:jpeg,png,svg|max:1024'
       ]);

        $instrumento = $request->all();

        if($imagen = $request->file('imagen')) {
            $rutaGuardarImg = 'imagen/';
            $imagenInstrumento = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenInstrumento);
            $instrumento['imagen'] = "$imagenInstrumento";             
        }
        
        Instrumento::create($instrumento);
        return redirect()->route('instrumentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instrumento  $instrumento
     * @return \Illuminate\Http\Response
     */
    public function show(Instrumento $instrumento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instrumento  $instrumento
     * @return \Illuminate\Http\Response
     */
    public function edit(Instrumento $instrumento)
    {
        //
        return view('instrumentos.editar', compact('instrumento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instrumento  $instrumento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instrumento $instrumento)
    {
        //
        $request->validate([
            'descripcion' => 'required','cantidad' => 'required'
        ]);
         $inst = $request->all();
         if($imagen = $request->file('imagen')){
            $rutaGuardarImg = 'imagen/';
            $imagenInstrumento = date('YmdHis') . "." . $imagen->getClientOriginalExtension(); 
            $imagen->move($rutaGuardarImg, $imagenInstrumento);
            $inst['imagen'] = "$imagenInstrumento";
         }else{
            unset($inst['imagen']);
         }
         $instrumento->update($inst);
         return redirect()->route('instrumentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instrumento  $instrumento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instrumento $instrumento)
    {
        //
        $instrumento->delete();
        return redirect()->route('instrumentos.index');
    }
}
