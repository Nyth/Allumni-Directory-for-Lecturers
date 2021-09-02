<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Alumni Directory for Lecturers</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                
                background: 
    linear-gradient(
      rgba(0, 0, 0, 0.6),
      rgba(0, 0, 0, 0.6)
    ),
 url("images/2.jpg");
                
                color: #636b6f;
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
                height: 100vh;
                width: fixed;
                
              

            }
            

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 90px;
            }
            

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            
        </style>
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="btn btn-dark mx-2" href="{{ url('/home') }}">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
     <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
     <ul class="navbar-nav ml-auto">
      <a class="btn btn-success mx-2" href="{{ route('register') }}">Register</a>
      <a class="btn btn-success mx-2"href="{{ route('login') }}">Login</a>
      </ul>
    </div>
    <a class="btn btn-dark mx-2" href="http://localhost/alumn/forum/">Forum</a>
  </div>
</nav>


            <div class="content">
                
                    <marquee behavior="slide" direction="up" scrollamount="50">
                        
                    <div class="boxed"style="background-color: #1B6D4F">
                    <h1 style="color: white; font-size: 5em; font-family: Arial, Helvetica, sans-serif"  >ALUMNI DIRECTORY FOR LECTURERS</h1>
                    </div> 
                        
        
        
                   
                            
                    </marquee>
                    
                    <marquee behavior="slide" direction="down" scrollamount="50">
                        <div class="jumbotron" style="width:80%;height:50%;margin-left:10%;background-color:purple">
  
  <p class="lead"  style="color:white">Founded by Asif & Nayem</p>
  <hr class="my-4">
  <p <p class="p-heading p-large"style="color:white">The system allows lecturers to keep record of their alumni's record. Authorized Alumni's can register and view their info at anytime in  the system once the lecturer authorize them. Besides,there is a discussion forum where alumni's and lecturer's can make discussions </p>
  <a class="btn btn-secondary btn-lg" href="{{ route('register') }}" role="button">Click Here To Register</a>
</div>
                    </marquee>
                
                

        
        </div>
    
    </body>
</html>
