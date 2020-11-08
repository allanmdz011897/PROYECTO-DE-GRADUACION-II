<?php

namespace App\Http\Controllers;

use App\PagosClientes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagosClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['pagosclientes']=PagosClientes::paginate(10);
        return view('pagosclientes.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pagosclientes.create');
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
        $datosPagos=Request()->Except('_token');

        pagosclientes::insert($datosPagos);
        
        return view('pagos.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PagosClientes  $pagosClientes
     * @return \Illuminate\Http\Response
     */
    public function show(PagosClientes $pagosClientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PagosClientes  $pagosClientes
     * @return \Illuminate\Http\Response
     */
    public function edit(PagosClientes $pagosClientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PagosClientes  $pagosClientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PagosClientes $pagosClientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PagosClientes  $pagosClientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(PagosClientes $pagosClientes)
    {
        //
    }
}
