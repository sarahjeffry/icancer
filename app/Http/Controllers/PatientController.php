<?php


namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //

        $patients = Patient::all();
        return view('patients.new_patient', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view(dashboard);
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

        Patient::create([ //create data dalam table ceni je
            //'ID'       => auth()->user()->ID,
            //'id'        => $request->id,
            'Name'      => $request->name, //name=column name in database
            'NRIC'      => $request->NRIC,
            'MRN'       => $request->MRN,
            'Sex'       => $request->Sex,
            'Height'    => $request->Height,
            'Weight'    => $request->Weight,
            'BMI'       => $request->BMI,
            'Type'    => $request->Type,
            'Smoking'   => $request->Smoking
        ]);

        //return view('patients.new_patient', compact('task'));
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
    public function edit(Patient $patient)
    {
        $arr['patient'] = $patient;

//        $task = Patient::where('id', $id)->first();
//        $task = Patient::where('user_id', 1)->first(); //return object
//        $task = Patient::where('user_id', 1)->get(); //return collection; array of object


        return view('patients.edit_patient', compact('patient'));
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
        $patient = Patient::find($id);
        $patient->update([
            'Name'      => $request->name, //name=column name in database
            'NRIC'      => $request->NRIC,
            'MRN'       => $request->MRN,
            'Sex'       => $request->Sex,
            'Height'    => $request->Height,
            'Weight'    => $request->Weight,
            'BMI'       => $request->BMI,
            'Type'    => $request->Type,
            'Smoking'   => $request->Smoking
        ]);

        $patient = Patient::all();
        return redirect()->route('patients.new_patient', compact('patient'));
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

        $patient = Patient::find($id); //object

        //dd($task); //--> for debugging

        $patient -> delete();

        return redirect()->back();

    }
}
