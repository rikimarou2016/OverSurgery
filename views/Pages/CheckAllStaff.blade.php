@extends('main')

@section('content')


    <link href="{{asset('css/CheckAllStaff.css')}}" rel="stylesheet" >


    <body style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Appearance_of_sky_for_weather_forecast%2C_Dhaka%2C_Bangladesh.JPG/1280px-Appearance_of_sky_for_weather_forecast%2C_Dhaka%2C_Bangladesh.JPG); background-size: 100%;">
    <a class="btn-successPatient" type="button"  href="/patientDashboard">Back to dashboard</a>
<img src="C:\xampp\htdocs\GOT\cropped-health-logo.png" align="middle"  alt="Over-surgery-Logo" width="110" height="110" >

<h1 class="Main-title" > Over Surgery</h1>
<h3  class="SecondTitle" >Check all GP's and Nurse availability</h3>


<table class="StaffTable">
    <tr>
        <th>GP or Nurse</th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>

    </tr>
    <tr>
        <td>Dr M.De LaCruz</td>
        <td>OFF</td>
        <td>9am to 5pm</td>
        <td>9am to 5pm</td>
        <td>9am to 5pm</td>
        <td>OFF</td>
    </tr>
    <tr>
        <td>Dr A.Watson</td>
        <td>9am to 5pm</td>
        <td>9am to 3pm</td>
        <td>9am to 5pm</td>
        <td>OFF</td>
        <td>9am to 5pm</td>
    </tr>

    <tr>
        <td>R.Taylor (N)</td>
        <td>10am to 3pm</td>
        <td>9am to 5pm</td>
        <td>9am to 5pm</td>
        <td>10am to 3pm</td>
        <td>OFF</td>
    </tr>
    <tr>
        <td>P.Cole (N)</td>
        <td>OFF</td>
        <td>9am to 5pm</td>
        <td>9am to 5pm</td>
        <td>OFF</td>
        <td>9am to 2pm</td>
    </tr>

    <tr>
        <td>J.Thomson (N)</td>
        <td>9am to 5pm</td>
        <td>9am to 5pm</td>
        <td>9am to 5pm</td>
        <td>9am to 5pm</td>
        <td>9am to 5pm</td>
    </tr>

<p style="color: black">(N)Nurse </p>




</table>

</body>
</html>

    @endsection