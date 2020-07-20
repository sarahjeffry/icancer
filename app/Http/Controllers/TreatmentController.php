<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    public function index($id)
    {
        $patients = Patient::find($id);
        return view('addRecord', compact('patients'));
    }

    public function statdoses($id)
    {
        $patients = Patient::find($id);
        return view('forms.form_statdoses', compact('patients'));
    }

    public function oral($id)
    {
        $patients = Patient::find($id);
        return view('forms.form_oral', compact('patients'));
    }

    public function infusion($id)
    {
        $patients = Patient::find($id);
        return view('forms.form_infusion', compact('patients'));
    }

    public function treatmentchanges($id)
    {
        $patients = Patient::find($id);
        return view('forms.form_treatmentchanges', compact('patients'));
    }

    public function premedication($id)
    {
        $patients = Patient::find($id);
        return view('forms.form_premedication', compact('patients'));
    }

    public function injection($id)
    {
        $patients = Patient::find($id);
        return view('forms.form_injection', compact('patients'));
    }

    public function operation($id)
    {
        $patients = Patient::find($id);
        return view('forms.form_operation', compact('patients'));
    }

    public function topical($id)
    {
        $patients = Patient::find($id);
        return view('forms.form_topical', compact('patients'));
    }

}
