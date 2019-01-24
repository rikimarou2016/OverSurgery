<?php

namespace App\Http\Controllers;
use App\Appointment;
use Illuminate\Http\Request;
use DB;

class StaffmemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */





    public function create()
    {

    }



    public function store(Request $request)
    {
//        The lines of codes below allows the staff member to book an appointment for any patient
        Appointment::create([

            'id'=> \Session::get('patient_id'),
            'surname' => $request->surname,
            'lastname' => $request-> lastname,

            'datepicker' => $request->datepicker,
            'timepicker' => $request-> timepicker,
            'staffName' => $request->staffName,
            'note' => $request->note,]);

        return redirect()->back();


    }



    public function edit()
    {

        $appointments = Appointment::all();

        return view('/Pages.StaffCancelAppointment')->with("appointments", $appointments);

  }



//   Function used to check the appointments
    public function index()
    {
//        $appointments = Appointment::all();
//        Select all the appointments where the  date is more or equal to first january 2018 and less or equal to 31 December2018.
        $appointments = DB::select(DB::raw("SELECT * FROM appointments WHERE datepicker >= '18-01-01' && datepicker <= '18-12-31'"));

        return view('/Pages.StaffCheckAppointment')->with("appointments", $appointments);
    }



    public function May2018()
    {
        $appointments = DB::select(DB::raw("SELECT * FROM appointments WHERE datepicker >= '18-05-01' && datepicker <= '18-05-31'"));

        return view('/Pages.StaffCheckAppointment')->with("appointments", $appointments);
    }

    public function June2018()
    {
        $appointments = DB::select(DB::raw("SELECT * FROM appointments WHERE datepicker >= '18-06-01' && datepicker <= '18-06-30'"));

        return view('/Pages.StaffCheckAppointment')->with("appointments", $appointments);
    }


    public function July2018()
    {
        $appointments = DB::select(DB::raw("SELECT * FROM appointments WHERE datepicker >= '18-07-01' && datepicker <= '18-07-31'"));

        return view('/Pages.StaffCheckAppointment')->with("appointments", $appointments);
    }


    public function August2018()
    {
        $appointments = DB::select(DB::raw("SELECT * FROM appointments WHERE datepicker >= '18-08-01' && datepicker <= '18-08-31'"));

        return view('/Pages.StaffCheckAppointment')->with("appointments", $appointments);
    }

    public function September2018()
    {
        $appointments = DB::select(DB::raw("SELECT * FROM appointments WHERE datepicker >= '18-09-01' && datepicker <= '18-09-30'"));

        return view('/Pages.StaffCheckAppointment')->with("appointments", $appointments);
    }


    public function October2018()
    {
        $appointments = DB::select(DB::raw("SELECT * FROM appointments WHERE datepicker >= '18-10-01' && datepicker <= '18-10-31'"));

        return view('/Pages.StaffCheckAppointment')->with("appointments", $appointments);
    }

    public function November2018()
    {
        $appointments = DB::select(DB::raw("SELECT * FROM appointments WHERE datepicker >= '18-11-01' && datepicker <= '18-11-30'"));

        return view('/Pages.StaffCheckAppointment')->with("appointments", $appointments);
    }

    public function December2018()
    {
        $appointments = DB::select(DB::raw("SELECT * FROM appointments WHERE datepicker >= '18-12-01' && datepicker <= '18-12-31'"));

        return view('/Pages.StaffCheckAppointment')->with("appointments", $appointments);
    }


    public function Today()
    {
        $appointments = DB::table('appointments')->whereDate('datepicker', DB::raw('CURDATE()'))->get();
        return view('/Pages.StaffCheckAppointment')->with("appointments", $appointments);
    }




//   Function used to cancel the appointments
    public function destroy($refNumber)
    {

        DB::table('appointments')->where('refNumber', '=', $refNumber)->delete();
        Appointment::destroy($refNumber);
        return redirect('/StaffCancelAppointment');

    }
}
