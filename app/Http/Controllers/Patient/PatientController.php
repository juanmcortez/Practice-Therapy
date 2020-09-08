<?php

namespace App\Http\Controllers\Patient;

use App\Http\Models\Patients\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Patient::getFullPatientList($column = null, $filter = '1=1'));
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($column = null, $filter = null)
    {
        return response()->json(Patient::getFullPatientList($column, $filter));
    }
}
