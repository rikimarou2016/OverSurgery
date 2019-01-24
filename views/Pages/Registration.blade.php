@extends('main')

@section('content')


    <link href="{{asset('css/Registration.css')}}" rel="stylesheet" >

<body style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Appearance_of_sky_for_weather_forecast%2C_Dhaka%2C_Bangladesh.JPG/1280px-Appearance_of_sky_for_weather_forecast%2C_Dhaka%2C_Bangladesh.JPG); background-size: 100%;">

           <img src="C:\xampp\htdocs\GOT\cropped-health-logo.png" align="middle"  alt="Over-surgery-Logo" width="110" height="110" >
            <h2 class="text-center" style="color:black; font-style:italic"> Over Surgery</h2>
              <h3  class="text-center" style="color:black; font-style:italic">Registration</h3>



           <form  method="Post" action="/patients" name="RegistrationForm">
               @csrf
            <p class="NHSnumber"   >NHS number <input type="text" id="nhsNumber" name="nhsNumber" required  maxlength="10"></p>
             <p class="Title"   >Title <input type="text" id="title" name="title" required maxlength="255"></p><!-- maxlength used against cross site scripting-->
             <p class="Surname"   >Firstname <input type="text" id=surname name="surname" required maxlength="255"></p>
              <p class="Lastname"   >Lastname <input type="text" id="lastname" name="lastname" required maxlength="255" ></p>
               <p class="DateOfBirth"   >Date of birth <input type="Date" id="dateOfBirth" name="dateOfBirth" required maxlength="255"></p>
                <p class="Contact"   >Contact number <input type="text" id="contactNumber" name="contactNumber" required maxlength="255"></p>
               <p class="email"   >Email <input type="text" id="email" name="email" required maxlength="255"></p>

               <p class="Username"   >Username <input type="text"  id="username" name="username"  maxlength="255" required pattern="([a-zA-Z0-9]){4,16}" title="Username should be 4 to 16 characters long !!"></p>
               <p class="Password"  >Password <input type="password" id="password" name="password" maxlength="255" required pattern="([a-zA-Z0-9]){4,16}" title="Password should be 4 to 16 characters long !!"></p>

                 <input type="submit" value="OK"  class="btn btn-success"   >
           </form>





</body>

@endsection