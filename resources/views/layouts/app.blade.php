<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Urban Vision Design</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
    <!-- Styles -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">  -->
     <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> 
</head>
<body class="sticky">


    <header>
    
<div>

 <object class="logo-svg" type="image/svg+xml" data="../assets/svg/uvlogo.svg">Your browser doesn't supportSVG, time for an upgrade</object>
    <!-- <img  class='logo' src="assets/logo1.png" alt="logo for urban vision design"> -->
    @include('templates.nav')
    
    
    
    </div>

    <img  class="hero" src="../assets/header.jpg"/>


    </header>


   <main>
    <hr>
   


       

          @yield('content')
   
   {{--      <section>
                <div class="panel">
                <h3>Book Now</h3>
                    <button>CLick me motherfucker</button>

                </div>
        </section> --}}
  {{--   </div> --}}
<hr>
<div>
    @yield('latest')

</div>
 </main>
            
<footer>
        
            <nav><ul>
                <li><a href="{{ url('/')}}">Home</a></li>
                <li><a href="{{ url('about')}}">About</a></li>
                <li><a href="{{ url('gallery')}}">Portfolio</a></li>
                <li><a href="#">Book</a></li>
                <li><a href="{{ url('contact')}}">Contact</a></li>
                </ul>
            </nav>
            <nav>
            <ul class="extras">
                <li> All content &copy; Urban Vision Design 2017 &nbsp; Design by <a href="http://www.carlwoolley.co.nz/" target="_blank">Carl Woolley</a></li>
                
@if (Auth::guest())
                <li>
                <a href="{{ url('/login') }}">Admin login</a>
                </li>

 @else         
 
     <li><a href="{{ url('/logout') }}">Admin Logout</a></li>        
    @endif               </ul>
            </nav>      
    </footer>
               
               <!--  <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul> -->

                <!-- Right Side Of Navbar -->
                <!-- <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                   <!--  @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else -->
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a> -->

                            <!-- <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul> --> 
     

    

    <!-- JavaScripts -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
