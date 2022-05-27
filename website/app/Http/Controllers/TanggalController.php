<?php

namespace App\Http\Controllers;

use App\Models\Tanggal;
use App\Http\Requests\StoreTanggalRequest;
use App\Http\Requests\UpdateTanggalRequest;

class TanggalController extends Controller
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
     * @param  \App\Http\Requests\StoreTanggalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTanggalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tanggal  $tanggal
     * @return \Illuminate\Http\Response
     */
    public function show(Tanggal $tanggal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tanggal  $tanggal
     * @return \Illuminate\Http\Response
     */
    public function edit(Tanggal $tanggal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTanggalRequest  $request
     * @param  \App\Models\Tanggal  $tanggal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTanggalRequest $request, Tanggal $tanggal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tanggal  $tanggal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tanggal $tanggal)
    {
        //
    }
}
