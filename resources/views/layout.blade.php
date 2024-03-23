<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bewugur </title>
    <!-- Css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    {{-- <link rel="stylesheet" href="style.css" /> --}}
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.17/tailwind.min.css">

    @yield('head')
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      
    />
  </head>
  <body>
    <div id="wrapper">
      <!-- header -->
     @yield('header')

      <!-- sidebar -->
      <div class="sidebar">
        <span class="closeButton">&times;</span>
        <p class="brand-title"><a href="">hei</a></p>

        <div class="side-links">
          <ul>
            <li><a class="{{Request::routeIs('welcome.index')? 'active' : ''}}"  href="{{route('welcome.index')}}">Home</a></li>
            <li><a class="{{Request::routeIs('blog.index')? 'active' : ''}}"  href="{{route('blog.index')}}">Blog</a></li>
            <li><a class="{{Request::routeIs('about')? 'active' : ''}}"  href="{{route('about')}}">About</a></li>
            <li><a class="{{Request::routeIs('contact.index')? 'active' : ''}}"  href="{{route('contact.index')}}">Contact</a></li>
            @guest
            <li><a class="{{Request::routeIs('Login')? 'active' : ''}}"  href="{{route('login')}}">Login</a></li>
            {{-- <li><a class="{{Request::routeIs('register')? 'active' : ''}}"  href="{{route('register')}}">Register</a></li> --}}
            @endguest
            @auth
              
            
            <li><a class="{{Request::routeIs('dashboard')? 'active' : ''}}"  href="{{route('dashboard')}}">Dashboard</a></li>
            @endauth
          </ul>
        </div>

        <!-- sidebar footer -->
        <footer class="sidebar-footer">
          <div>
            <a href="https://www.facebook.com/profile.php?id=100064978720345"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/mehmet_uursahin/"><i class="fab fa-instagram"></i></a>
            <a href=""><i class="">x</i></a>
            <a href=""><i class="	fab fa-github-square"></i></a>
            <a href="https://www.linkedin.com/in/mehmet-u%C4%9Fur-%C5%9Fahin-47438523a/"><i class="	fab fa-linkedin"></i></a>
          </div>

          <small></small>
        </footer>
      </div>
      <!-- Menu Button -->
      <div class="menuButton">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
     @yield('main')

      <!-- Main footer -->
      <footer class="main-footer">
        <div>
          <a href=""><i class="fab fa-facebook-f"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
        </div>
        <small></small>
      </footer>
    </div>


    <!-- Click events to menu and close buttons using javaascript-->
    <script>
      document
        .querySelector(".menuButton")
        .addEventListener("click", function () {
          document.querySelector(".sidebar").style.width = "100%";
          document.querySelector(".sidebar").style.zIndex = "5";
        });

      document
        .querySelector(".closeButton")
        .addEventListener("click", function () {
          document.querySelector(".sidebar").style.width = "0";
        });
    </script>
    @yield('scripts')
  </body>
</html>
