<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacto=Contacto::all();
        return $contacto;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $contacto= new Contacto();
        $contacto->nombre=$request->nombre;
        $contacto->tel=$request->tel;
        $contacto->num_libros=$request->num_libros;
        $contacto->save();
        return $contacto;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        $contacto=Contacto::where('nombre',$contacto)->first();
        return $contacto;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacto $contacto)
    {
        $contacto=Contacto::where('nombre','=',$contacto);
        $contacto->nombre=$request->nombre;
        $contacto->tel=$request->tel;
        $contacto->num_libros=$request->num_libros;
        $contacto->save();
        return  $contacto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contacto)
    {
        $contacto=Contacto::where('nombre','=',$contacto);
        $contacto->delete();
    }
}
