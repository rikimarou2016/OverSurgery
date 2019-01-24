<?php

namespace App\Http\Controllers;

class PagesController extends Controller {


    public function getBookAppointment(){

        return view('Pages/BookAppointment');
    }

    public function getCheckAllStaff(){

        return view('Pages/CheckAllStaff');
    }

    public function getCheckSpecificStaff(){

        return view('Pages/CheckSpecificStaff');
    }

    public function gethome(){

        return view('Pages/home');
    }

    public function getPatientDashboard(){

        return view('Pages/PatientDashboard');
    }

    public function getRegistration(){

        return view('Pages/Registration');
    }

    public function getStaffBookAppointment(){

        return view('Pages/StaffBookAppointment');
    }
    public function getStaffCancelAppointment(){

        return view('Pages/StaffCancelAppointment');
    }

    public function getStaffGiveTestResult(){

        return view('Pages/StaffGiveTestResult');
    }
    public function getStaffCheckAppointment(){

        return view('Pages/StaffCheckAppointment');
    }

    public function getStaffDashboard(){

        return view('Pages/StaffDashboard');
    }

    public function getTest(){

        return view('Pages/Test');
    }


    public function getwelcome(){

        return view('Pages/welcome');
    }



}



