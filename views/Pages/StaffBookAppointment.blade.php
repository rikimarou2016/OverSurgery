@extends('main')

@section('content')


    <link href="{{asset('css/StaffBookAppointment.css')}}" rel="stylesheet" >


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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
                dateFormat: 'yy-mm-dd',//check change

            });

        } );
    </script>


    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

    {{--This Jquery is used to pick a time and the range is restricted from 9am to 5pm because that's the Over surgery opening hours--}}
    <script>
        $( function() {
            $( "#timepicker" ).timepicker({timeFormat: 'h:mm p',
                minTime: '09' ,maxTime:'17'});

        } );
    </script>



  <body style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Clouds_over_the_Atlantic_Ocean.jpg/1280px-Clouds_over_the_Atlantic_Ocean.jpg); background-size: 100%;">


  <form  name="loginForm" method="post" action="/Staffmember">
          @csrf
      <a class="btn-successStaff" type="button"  href="/StaffDashboard">Back to dashboard</a>
           <img src="C:\xampp\htdocs\GOT\cropped-health-logo.png" align="center"  alt="Over-surgery-Logo" width="160" height="160">

        <h2 class="Main-title" > Over Surgery</h2>
         <h2 class="SecondTitle" > Book Appointment</h2>
          <br>
            <p class="PatientSurname">Patient Firstname: <input type="text" id="surname" name="surname" required></p>
            <br>
             <p class="PatientLastname">Patient Lastname: <input type="text" id="lastname" name="lastname" required></p>
              <br>
              <p class="Datepicker">Date: <input type="text" id="datepicker" name="datepicker" required></p>
           <br>
          <p class="timepicker">Time: <input type="text" id="timepicker" name="timepicker" required></p>
        <br>
       <p class="note">Note: <input type="text" id="note" name="note" title="In a few words explain why you need an appointment" required></p>
       <br>
       <p class="GPorNurse">GP or Nurse name:
        <select class="dropdownB" name="staffName" required>
            <option></option>
             <option>Dr. Marc De LaCruz</option>
              <option>Dr. Anthony Watson</option>
               <option>Jessica Thomson</option>
              <option>Rose Taylor</option>
            <option>Paul Cole</option>
         </select>
       </p>
              <br>
            <div ><button type="submit"  class="btn btn-success" a href='  Staffmember/create'>OK</button></div>
          <p class="OpeningHours">Surgery open from 9am to 5pm Monday to Friday</p>


   </form>

</body>

@endsection