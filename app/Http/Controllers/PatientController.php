<?php

namespace App\Http\Controllers;

use App\Timetable;
use Illuminate\Http\Request;
use App\Patient;
use App\Test;
use DB;
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


        return view ('Pages.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Pages.Registration');
    }

    public function display()
    {
        return view ('Pages.Test');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Patient::create([
            'nhsNumber' => $request->nhsNumber,
            'title' => $request->title,
            'surname' => $request-> surname,
            'lastname' => $request->lastname,
            'dateOfBirth' => $request->dateOfBirth,
            'contactNumber' => $request->contactNumber,
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password]);



        return redirect('/patients');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show()
    {
        $timetables = DB::select(DB::raw("SELECT * FROM timetables WHERE Firstname = 'Marc' "));

        return view('/Pages.CheckSpecificStaff')->with("timetables", $timetables);
    }

    public function showWatson()
    {
        $timetables = DB::select(DB::raw("SELECT * FROM timetables WHERE Firstname = 'Anthony' "));

        return view('/Pages.CheckSpecificStaff')->with("timetables", $timetables);
    }


    public function showTaylor()
    {
        $timetables = DB::select(DB::raw("SELECT * FROM timetables WHERE Firstname = 'Rose' "));

        return view('/Pages.CheckSpecificStaff')->with("timetables", $timetables);
    }

    public function showCole()
    {
        $timetables = DB::select(DB::raw("SELECT * FROM timetables WHERE Firstname = 'Paul' "));

        return view('/Pages.CheckSpecificStaff')->with("timetables", $timetables);
    }

    public function showThomson()
    {
        $timetables = DB::select(DB::raw("SELECT * FROM timetables WHERE Firstname = 'Jessica' "));

        return view('/Pages.CheckSpecificStaff')->with("timetables", $timetables);
    }





    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        $tests = Test::all()->where('patients_id', \Session::get('patient_id'));
//
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


