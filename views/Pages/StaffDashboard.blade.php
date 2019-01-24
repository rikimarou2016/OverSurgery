@extends('main')

@section('content')

    <link href="{{asset('css/StaffDashboard.css')}}" rel="stylesheet" >

<body  style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Clouds_over_the_Atlantic_Ocean.jpg/1280px-Clouds_over_the_Atlantic_Ocean.jpg); background-size: 100%;">

    <div class="btn-group">
      <a class="btn-logout" type="button"  href="/">Logout</a>
       </div>
        <img src="C:\xampp\htdocs\GOT\cropped-health-logo.png" align="middle"  alt="Over-surgery-Logo" width="110" height="110" >

         <h1 class="Main-title" > Over Surgery</h1> <br>

    <div class="row">
      <div class="col col-md-6">   <a type="button"  class="button1" a href="StaffCheckAppointment">Check Appointment </a>   </div>
        <div class="col col-md-6">   <a type="button"  class="button2" a href="StaffBookAppointment" >Book Appointment</a>   </div>
    </div>
     <br>
       <br>
        <div class="row2">
          <div class="col col-md-6">   <a type="button"  class="button3" a href="StaffGiveTestResult">Provide test result </a>   </div>
           <div class="col col-md-6">   <a type="button"  class="button4" a href="StaffCancelAppointment">Cancel Appointment</a>   </div>
        </div>

    </body>
    <div class="helloUser">    <?php echo  $test = "Welcome  ", \Session::get( 'patient_name')," !";  ?>   </div>

    @endsection