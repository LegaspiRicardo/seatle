<?php

namespace App\Http\Controllers;

use App\Models\Maestro;
use App\Http\Requests\StoreMaestroRequest;
use App\Http\Requests\UpdateMaestroRequest;

class MaestroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreMaestroRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMaestroRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Maestro  $maestro
     * @return \Illuminate\Http\Response
     */
    public function show(Maestro $maestro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Maestro  $maestro
     * @return \Illuminate\Http\Response
     */
    public function edit(Maestro $maestro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMaestroRequest  $request
     * @param  \App\Models\Maestro  $maestro
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMaestroRequest $request, Maestro $maestro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maestro  $maestro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maestro $maestro)
    {
        //
    }
}