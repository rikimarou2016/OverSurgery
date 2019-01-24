@extends('main')

@section('content')

    <link href="{{asset('css/StaffGiveTestResult.css')}}" rel="stylesheet" >

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


    <body style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Clouds_over_the_Atlantic_Ocean.jpg/1280px-Clouds_over_the_Atlantic_Ocean.jpg); background-size: 100%;">


    <form  name="loginForm" method="post" action="/tests">
        @csrf
        <a class="btn-successStaff" type="button"  href="/StaffDashboard">Back to dashboard</a>
        <img src="C:\xampp\htdocs\GOT\cropped-health-logo.png" align="center"  alt="Over-surgery-Logo" width="160" height="160">

        <h2 class="Main-title" > Over Surgery</h2>
        <h2 class="SecondTitle" > Provide test result </h2>
        <br>


        <p class="Datepicker">Date: <input type="text" id="datepicker" name="datepicker" required></p>
        <br>
        <p class="PatientSurname">Patient Firstname: <input type="text" id="surname" name="surname" required></p>
        <br>
        <p class="PatientLastname">Patient Lastname: <input type="text" id="lastname" name="lastname" required></p>
        <br>
        <p class="PatientNHSNumber">NHS number: <input type="text" id="nhs_number" name="nhs_number" required></p>
        <br>
        <p class="staffId">Staff identification number: <input type="text" id="staffId" name="staffId" required></p>
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
        <p class="Status">Status: <input type="text"  id="status"   title="In a few words explain the result of the test the patient has taken "   required name="status"  style="width: 500px ;/ " required></p>
        <br>

        <div ><button type="submit"  class="btn btn-success" a href='  Test/create'>OK</button></div>



    </form>

    </body>

@endsection