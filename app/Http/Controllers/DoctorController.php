<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('staff.new_doctor', compact('doctors'));
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
        //dd($request->all()); untuk debugging, nak tengok dah pass data ke belum, dumb and die

        Doctor::create([ //create data dalam table ceni je
            //'ID'       => auth()->user()->ID, -> ni id user yang masukkan, bukan ID every row
            'Staff_ID'      => $request->Staff_ID,
            'Name'          => $request->name, //name=column name in database
            'NRIC'          => $request->NRIC,
            'Position'      => $request->Position
        ]);

        //return view('staff.new_doctor', compact('task'));
        return redirect()->back(); //Navigate balik ke route sebelum ni. Balik ke form page tu. Sebab tu form tu tak berubah page lepas isi.
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
        //create new page
        //pass data dari selected id
        //dd($task);
        $doctors = Doctor::find($id);

//        $doctor = Doctor::where('id', $id)->first();
//        $doctor = Doctor::where('user_id', 1)->first(); //return object
//        $doctor = Doctor::where('user_id', 1)->get(); //return collection; array of object

        return view('staff.edit_doctor', compact('doctor',$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @param $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $doctor)
    {
        $doctor->validate($request, [
            'Staff_ID'      => 'required',
            'Name'          => 'required', //name=column name in database
            'NRIC'          => 'required',
            'Position'      => 'required'
        ]);

        $doctors = Doctor::find($id);
        $doctor->Staff_ID = $request->get('Staff_ID');
        $doctor->Name = $request->get('Name');
        $doctor->NRIC = $request->get('NRIC');
        $doctor->Position = $request->get('Position');

        $doctor->save();

        return redirect()->route('addStaff.index');
        //return redirect('task');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //find patient using MRN
        //delete

        $doctors = Doctor::find($id); //object

        //dd($task); //--> for debugging

        $doctors -> delete();

        return redirect()->back();
    }
}
