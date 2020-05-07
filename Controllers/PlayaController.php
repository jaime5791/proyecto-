<?php

namespace App\Http\Controllers;

use App\Playa;
use Illuminate\Http\Request;

class PlayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $playas = Playa::paginate();

        return view('playas.index', compact('playas')); 
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('playas.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validacion
        $this->validate($request, ['nombre'=>'required', 'fondo'=>'required', 'picos'=>'required', 'mejor_marea'=>'required', 'oleaje_medio'=>'required',  ]);
        //
        $playa = Playa::create($request->all());

        return redirect()->route('playas.edit', $playa->id)->with('info', 'Playa guardada con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Playa  $playa
     * @return \Illuminate\Http\Response
     */
    public function show(Playa $playa)
    {
        //
        return view('playas.show', compact('playa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Playa  $playa
     * @return \Illuminate\Http\Response
     */
    public function edit(Playa $playa)
    {
        //
        return view('playas.edit', compact('playa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Playa  $playa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Playa $playa)
    {
        //
        $playa->update($request->all());

        return redirect()->route('playas.show', $playa->id)->with('info', 'Playa actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Playa  $playa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Playa $playa)
    {
        //
        $playa->delete();

        return back()->with('info', 'Playa borrada con exito');
    }
    
}
