<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use App\Patient;

class AppointmentController extends Controller
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
        return view ('Pages.BookAppointment');
    }

    public function display()
    {

        return view ('Pages.StaffCheckAppointment');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        Because the patient has already logged in their id number , surname and lastname will be automaticly
//        entered inside the database in the table called "appointmetns". The four other informations
//       ( date , time , staff member , and a note )will have to be filled by the patient
        Appointment::create([

             'id'=> \Session::get('patient_id'),
            'surname'=> \Session::get('patient_surname'),
            'lastname'=> \Session::get('patient_lastname'),

            'datepicker' => $request->datepicker,
            'timepicker' => $request-> timepicker,
            'staffName' => $request->staffName,
            'note' => $request->note,]);


        return view('Pages.PatientDashboard');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



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
    public function destroy($refNumber)
    {

//        DB::table('appointments')->where('refNumber', '=', $refNumber)->delete();
    }
}



