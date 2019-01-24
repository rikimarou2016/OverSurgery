@extends('main')
@section('content')



    <link href="{{asset('css/home.css')}}" rel="stylesheet" >

    <body style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Appearance_of_sky_for_weather_forecast%2C_Dhaka%2C_Bangladesh.JPG/1280px-Appearance_of_sky_for_weather_forecast%2C_Dhaka%2C_Bangladesh.JPG); background-size: 100%;">

        <div class="btn-group">
          <a class="btn-logout" type="button"  href="/">Welcome page</a>
           </div>
              <img src="C:\xampp\htdocs\GOT\cropped-health-logo.png" align="center"  alt="Over-surgery-Logo" width="160" height="160">
                 <h2 class="text-center" style="color:black; font-style:italic"> Over Surgery</h2>
                  <br>
                    <br>




        <form action="/loginme" method="post" >
            <input type="hidden" name="_token" value="{{csrf_token()}}">


            <p class="Username"   >Username <input type="text" name="username" id="Username" required pattern="([a-zA-Z0-9]){4,16}" title="Username should be 4 to 16 characters long !!"></p>
            <p class="Password"  >Password <input type="password" name="password" id="Password" required pattern="([a-zA-Z0-9]){4,16}" title="Password should be 4 to 16 characters long !!"></p>




            <div class="row">
            <div class="col col-md-6"><a type="button"  class="btn btn-warning"  a href='patients/create'  >Register</a> </div>
               <div class="col col-md-6"> <input type="submit" value="Login"  class="btn btn-success"></div>
            </div>

           </form>





    </body>

    @endsection