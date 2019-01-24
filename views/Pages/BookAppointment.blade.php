@extends('main')

@section('content')

    <link href="{{asset('css/BookAppointment.css')}}" rel="stylesheet" >  <!-- Link to book appointment css page -->

    <!-- function used to pick a date on a calendar (the date is displayed the americain style with MM/DD/YYYY)
     The four lines below are the link used to add the timepicker Jquery -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <!-- https://www.experts-exchange.com/questions/26253346/jquery-datepicker-make-ALL-sunday-and-monday-unselectable.html -->
    {{--This Jquery is used to pick a date. Every saturdays and sundays are disabled as the surgery in Over is Closed--}}
    <script>
        $( function() {
            $( "#datepicker" ).datepicker({

                beforeShowDay: function(d) {
                    var dy = d.getDay();
                    if (dy == 0 || dy == 6) {
                        return [false, "closed"]
                    } else {
                        return [true, ""]
                    }
                },
                dateFormat: 'yy-mm-dd' });

        } );
    </script>


    <!-- function used to pick a a time slot. The two lines below are the link used to add the timepicker Jquery -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

    {{--This Jquery is used to pick a time and the range is restricted from 9am to 5pm because that's the Over surgery opening hours--}}
    <script>
        $( function() {
            $( "#timepicker" ).timepicker({timeFormat: 'h:mm p',
                minTime: '09' ,maxTime:'17'});

        } );
    </script>

    <!-- body style is used to display the background image whilst background size strech the picture so it fit the entire page-->
<body style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Appearance_of_sky_for_weather_forecast%2C_Dhaka%2C_Bangladesh.JPG/1280px-Appearance_of_sky_for_weather_forecast%2C_Dhaka%2C_Bangladesh.JPG); background-size: 100%;">



      <a class="btn-successPatient" type="button"  href="/patientDashboard">Back to dashboard</a>

        <img src="C:\xampp\htdocs\GOT\cropped-health-logo.png" align="middle"  alt="Over-surgery-Logo" width="120" height="120" >

        <h2 class="text-center" style="color:black; font-weight: bold;"> Over Surgery</h2>
          <h3  class="text-center" style="color:black; font-style:italic">Book Appointment</h3>
            <br>
        <form  name="RegistrationForm" method="post" action="/appointments">
            @csrf
              <p class="Datepicker">Date: <input type="text" id="datepicker" name="datepicker" required></p>
               <br>
                 <p class="timepicker">Time: <input type="text" id="timepicker" name="timepicker" required></p>
                  <br>
                 <p class="note">Note: <input type="text" id="note" name="note" title="In a few words explain why you need an appointment" required></p>
                <br>
                 <p class="GPorNurse">GP or Nurse name:
                <select class="dropdownB"  name="staffName" required>
                   <option></option>
                    <option>Dr. Marc De LaCruz</option>
                     <option>Dr. Anthony Watson</option>
                      <option>Jessica Thomson</option>
                    <option>Rose Taylor</option>
                  <option>Paul Cole</option>
                </select>
              </p>
               <br>
                 <div >

                    <div><input type="submit"  class="btn btn-success" value="OK" a href='Appointment/create'></div>
                   <p class="OpeningHours">Surgery open from 9am to 5pm Monday to Friday</p>
                 </div>
       </form>

 </body>

    @endsection