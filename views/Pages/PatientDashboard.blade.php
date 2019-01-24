@extends('main')

@section('content')

    <link href="{{asset('css/PatientDashboard.css')}}" rel="stylesheet" >



  <body  style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Appearance_of_sky_for_weather_forecast%2C_Dhaka%2C_Bangladesh.JPG/1280px-Appearance_of_sky_for_weather_forecast%2C_Dhaka%2C_Bangladesh.JPG); background-size: 100%;">

  <div class="btn-group">
      <a class="btn-logout" type="button"  href="/">Logout</a>
  </div>

     <img src="C:\xampp\htdocs\GOT\cropped-health-logo.png" align="middle"  alt="Over-surgery-Logo" width="110" height="110" >

     <h1 class="Main-title" > Over Surgery</h1> <br>


     <div class="row">

       <div class="col col-md-2">   <a type="button"  class="button1" a href="CheckSpecificStaff">Check specific GP or Nurse availability </a>   </div>
        <div class="col col-md-2">   <a type="button"  class="button2" a href="BookAppointment" >Book an appointment</a>   </div>
         <div class="col col-md-2">   <button type="button"  class="button3" >Online chat with receptionist</button>   </div>


           <div class="col col-md-2">   <a type="button"  class="button4" a href="CheckAllStaff">Check all GP and Nurse availability  </a>   </div>
             <div class="col col-md-2">   <a type="button"  class="button5" a href="Test">Check test result</a>   </div>
              </div>

             <div class="helloUser">    <?php echo  $test = "Welcome  ", \Session::get( 'patient_name')," !";  ?>   </div>



  </body>


    @endsection