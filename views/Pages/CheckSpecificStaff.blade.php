@extends('main')

@section('content')

    <link href="{{asset('css/CheckSpecificStaff.css')}}" rel="stylesheet" >


<body style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Appearance_of_sky_for_weather_forecast%2C_Dhaka%2C_Bangladesh.JPG/1280px-Appearance_of_sky_for_weather_forecast%2C_Dhaka%2C_Bangladesh.JPG); background-size: 100%;">

<form  name="RegistrationForm">
    @csrf
    <a class="btn-successStaff" type="button"  href="/patientDashboard">Back to dashboard</a>
    <img src="C:\xampp\htdocs\GOT\cropped-health-logo.png" align="middle"  alt="Over-surgery-Logo" width="100" height="100" >

    <h2 class="MainTitle" style="color:black; font-style:italic"> Over Surgery</h2>
      <h3  class="text-center" style="color:black; font-style:italic">Check GP or Nurse avalaibility</h3>
        <br>
    <br>




    <div class="containerCheckstaff">
        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-sm">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">GP's and Nurses
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href='/CheckSpecificStaff/'>Dr Marc De LaCruz</a></li>
                        <li><a href="/CheckSpecificStaff/showWatson">Dr Anthony Watson</a></li>
                        <li><a href="/CheckSpecificStaff/showTaylor">Rose Taylor</a></li>
                        <li><a href="/CheckSpecificStaff/showCole">Paul Cole</a></li>
                        <li><a href="/CheckSpecificStaff/showThomson">Jessica Thomson </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>

<br>
    <table class="StaffTable">
        <tr>
            <th width="170">Firstname</th>
            <th width="170">Lastname</th>
            <th width="170">Monday</th>
            <th width="170">Tuesday</th>
            <th width="170">Wednesday</th>
            <th width="170">Thursday</th>
            <th width="170">Friday</th>

        </tr>

        @foreach($timetables as $Timetable)
            <tr>
                <td>{{ $Timetable->firstname }}</td>
                <td>{{ $Timetable->lastname }}</td>
                <td>{{$Timetable->monday }}</td>
                <td>{{ $Timetable->tuesday }}</td>
                <td>{{ $Timetable->wednesday }}</td>
                <td>{{ $Timetable->thursday }}</td>
                <td>{{ $Timetable->friday }}</td>



            </tr>

        @endforeach

    </table>









 </form>

</body>

@endsection