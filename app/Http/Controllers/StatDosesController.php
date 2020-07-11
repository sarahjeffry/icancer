<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatDosesController extends Controller
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
     * @param $request
     * @return void
     */
    public function create(Request $request)
    {
        //dd($request->all()); untuk debugging, nak tengok dah pass data ke belum, dumb and die

        StatDoses::create([ //create data dalam table ceni je
            //'ID'      => auth()->user()->ID,
            //'id'      => $request->id,
            'Date'      => $request->name, //name=column name in database
            'Time'      => $request->NRIC,
            'Drug'      => $request->MRN,
            'Dose'      => $request->Sex,
            'Unit'      => $request->Height
        ]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
