
@extends('main')

@section('content')


    <link href="{{asset('css/StaffCancelAppointment.css')}}" rel="stylesheet" >



<body style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Clouds_over_the_Atlantic_Ocean.jpg/1280px-Clouds_over_the_Atlantic_Ocean.jpg); background-size: 100%;">


<form  name="loginForm">
    @csrf
    <a class="btn-successStaff" type="button"  href="/StaffDashboard">Back to dashboard</a>

    <img src="C:\xampp\htdocs\GOT\cropped-health-logo.png" align="center"  alt="Over-surgery-Logo" width="160" height="160">

    <h2 class="Main-title" > Over Surgery</h2>
      <h2 class="SecondTitle" >Cancel Appointment</h2>
   <br>

             <br>

    <table class="StaffTable">
        <tr>
            <th width="170">Firstname</th>
            <th width="170">Lastname</th>
            <th width="170">Date</th>
            <th width="170">Time</th>
            <th width="170">Note</th>
            <th width="170">GP or Nurse</th>
            <th width="170">Action</th>
        </tr>
      <?php
         foreach($appointments as $Appointment){
        ?>
            <tr>
                <td><?php echo  $Appointment->surname ?> </td>
                <td><?php echo  $Appointment->lastname ?> </td>
               <td><?php echo  $Appointment->datepicker ?> </td>
               <td><?php echo  $Appointment->timepicker ?> </td>
               <td><?php echo  $Appointment->note ?> </td>
               <td><?php echo  $Appointment->staffName ?> </td>


                <td><a href="/StaffDeleteAppointment/<?php echo $Appointment->refNumber ?>" >Cancel appointment</a> </td>
            </tr>
    <?php
         }
      ?>


    </table>

</form>

</body>

@endsection