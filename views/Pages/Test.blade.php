@extends('main')

@section('content')

    <link href="{{asset('css/Test.css')}}" rel="stylesheet" >

    <form  name="Test"  method="post" action="/Test">
        @csrf
        <body style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Appearance_of_sky_for_weather_forecast%2C_Dhaka%2C_Bangladesh.JPG/1280px-Appearance_of_sky_for_weather_forecast%2C_Dhaka%2C_Bangladesh.JPG); background-size: 100%;">
        <a class="btn-successPatient" type="button"  href="/patientDashboard">Back to dashboard</a>
        <img src="C:\xampp\htdocs\GOT\cropped-health-logo.png" align="middle"  alt="Over-surgery-Logo" width="110" height="110" >

        <h1 class="Main-title" > Over Surgery</h1>
        <h2 class="secondTitle" > Check test result</h2>




        <table class="StaffTable">
            <tr>
                <th width="170">Date</th>
                <th width="170">GP or Nurse</th>
                <th width="170">Result</th>

            </tr>


            @foreach($tests as $Test)
                <tr>
                    <td>{{ $Test->datepicker }}</td>
                    <td>{{ $Test->staffName }}</td>
                    <td>{{$Test->status }}</td>


                </tr>

            @endforeach


        </table>





        </body>
    </form>

@endsection

