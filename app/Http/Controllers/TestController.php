<?php

namespace App\Http\Controllers;
use App\Test;
use Illuminate\Http\Request;
use DB;
use App\Patient;
class TestController extends Controller
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
        return view ('Pages.StaffGiveTestResult');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nhs = $request->input('nhs_number');
        $patientId = Patient::all()->where('nhsNumber', $nhs)->first()->id;
        Test::create([
            'patients_id' => $patientId,
            'datepicker' => $request->datepicker,
            'surname' => $request->surname,
            'lastname' => $request-> lastname,
            'staffId' => $request-> staffId,
            'status' => $request->status,
            'staffName' => $request->staffName,

            ]);

        return redirect()->back();


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
    public function edit()
    {

        $tests = Test::all();

        return view('/Pages.Test')->with("tests", $tests);

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
