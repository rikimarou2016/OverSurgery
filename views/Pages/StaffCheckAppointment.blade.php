@extends('main')

@section('content')

    <link href="{{asset('css/StaffCheckAppointment.css')}}" rel="stylesheet" >

<body style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Clouds_over_the_Atlantic_Ocean.jpg/1280px-Clouds_over_the_Atlantic_Ocean.jpg); background-size: 100%;">

 <form  name="loginForm"  method="post" action="/Staffmember">
     @csrf
     <a class="btn-successStaff" type="button"  href="/StaffDashboard">Back to dashboard</a>
      <img src="C:\xampp\htdocs\GOT\cropped-health-logo.png" align="center"  alt="Over-surgery-Logo" width="140" height="140">
     <h2 class="Main-title" > Over Surgery</h2>
          <h2 class="SecondTitle" > Check Appointment</h2>

     <br>

     <div class="row">
         <div class="col-sm-2"></div>
         <div class="col-sm-4">     <div class="dropdown">
                 <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Calendar 2018
                     <span class="caret"></span></button>
                 <ul class="dropdown-menu">
                     <li><a href='/StaffCheckAppointment/'>year 2018</a></li>
                     <li><a href='/StaffCheckAppointment/Today'>Today</a></li>
                     <li><a href='/StaffCheckAppointment/May2018'>May 2018</a></li>
                     <li><a href='/StaffCheckAppointment/June2018'>June 2018</a></li>
                     <li><a href='/StaffCheckAppointment/July2018'>July 2018</a></li>
                     <li><a href='/StaffCheckAppointment/August2018'>August 2018</a></li>
                     <li><a href='/StaffCheckAppointment/September2018'>September 2018</a></li>
                     <li><a href='/StaffCheckAppointment/October2018'>Octobre 2018</a></li>
                     <li><a href='/StaffCheckAppointment/November2018'>November 2018</a></li>
                     <li><a href='/StaffCheckAppointment/December2018'>December 2018</a></li>
                 </ul>
             </div>        </div>
         <div class="col-sm-2"></div>
     </div>




     <table class="StaffTable">
         <tr>
             <th width="170">Firstname</th>
              <th width="170">Lastname</th>
               <th width="170">Date</th>
              <th width="170">Time</th>
             <th width="170">Note</th>
             <th width="170">GP or Nurse</th>
         </tr>

         @foreach($appointments as $Appointment)
             <tr>
                 <td>{{ $Appointment->surname }}</td>
                   <td>{{ $Appointment->lastname }}</td>
                     <td>{{$Appointment->datepicker }}</td>
                    <td>{{$Appointment->timepicker }}</td>
                   <td>{{ $Appointment->note }}</td>
                 <td>{{ $Appointment->staffName }}</td>

             </tr>

         @endforeach

     </table>

 </form>

</body>

@endsection