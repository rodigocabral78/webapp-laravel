<?php

namespace App\Http\Controllers;

use App\Models\Servidor;
use Illuminate\Http\Request;
use Illuminate\Pagination\CursorPaginator;

class ServidorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		// $servidores = Servidor::orderBy('id_servidor', 'desc')->simplePaginate();
		// $servidores = Servidor::orderBy('id_servidor', 'desc')->cursorPaginate();
		$servidores = Servidor::orderBy('id_servidor', 'desc')->paginate();
		// $servidores = Servidor::latest()->paginate();
		return view('servidor.index', compact('servidores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servidor  $servidor
     * @return \Illuminate\Http\Response
     */
    public function show(Servidor $servidor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servidor  $servidor
     * @return \Illuminate\Http\Response
     */
    public function edit(Servidor $servidor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servidor  $servidor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servidor $servidor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servidor  $servidor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servidor $servidor)
    {
        //
    }
}
