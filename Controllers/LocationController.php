<?php

namespace App\Http\Controllers;

use App\Location;
use App\User;
use App\Profile;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;




class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $locations = Location::paginate();

        return view('locations.index', compact('locations')); 
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = Auth::user();
        $location=$user->location;

        if (isset($location)) {

            $idlocation = $location->id; 

            return redirect()->route('locations.edit', $idlocation )->with('info', 'Puede editar su localización');
        }
        else {
            return view('locations.create'); 
        }   
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = Auth::user();

        $location = new Location; 

        $location->profile_id=$user->profile->id;
        $location->localidad=$request->localidad;
        
    
        $location->save();

        return redirect()->route('locations.index', $location->id)->with('info', 'Localización del usuario creada con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
       

        return view('locations.show', compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        //
        $user= Auth::user();
        if ($user->profile->id==$location->profile_id) {
            return view('locations.edit', compact('location'));
        }
        else{

            return redirect()->route('locations.index', $location->id)->with('info', 'Solo puedes editar o borrar localización de tu perfil');

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        //
        $location->update($request->all()); 

        return redirect()->route('locations.index')->with('info', 'Location actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        //
        $user = Auth::user();
        $location=$user->location;
        $location->delete();

        return redirect()->route('home')->with('info', 'Localización borrada con exito');
    }
    
}
