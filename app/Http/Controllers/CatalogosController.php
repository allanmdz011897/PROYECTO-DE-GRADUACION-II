<?php

namespace App\Http\Controllers;

use App\Catalogos;
use Illuminate\Http\Request;

class CatalogosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['catalogos']=Catalogos::paginate(37);
        return view('catalogos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('catalogos.create');

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
        $datosCatalogos=Request()->Except('_token');

        catalogos::insert($datosCatalogos);
        
        return view('catalogos.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Catalogos  $catalogos
     * @return \Illuminate\Http\Response
     */
    public function show(Catalogos $catalogos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Catalogos  $catalogos
     * @return \Illuminate\Http\Response
     */
    public function edit(Catalogos $catalogos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Catalogos  $catalogos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catalogos $catalogos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Catalogos  $catalogos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catalogos $catalogos)
    {
        //
    }
}
