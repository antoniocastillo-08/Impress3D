<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePrintersRequest;
use App\Http\Requests\UpdatePrintersRequest;
use App\Models\Printers;

class PrintersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $printers = Printers::all();
        return view('index', ['printers_list' => $printers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrintersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Printers $printers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Printers $printers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrintersRequest $request, Printers $printers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Printers $printers)
    {
        //
    }
}
