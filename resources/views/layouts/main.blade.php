<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
  
</head>
<body>
<div class="navbar">
  <div class="logo">
    BINTICKET
  </div>

    @auth
      <a href="/profile"> Halo, {{ auth()->user()->name }}</a>
    @else
    <ul class="menu">
      <li><a href="/login" class="login">Login</a></li>
      <li><a href="/register" class="register">Daftar</a></li>
    </ul>
    @endauth
    
  
</div>
  @yield('header')
<div class="content">
  @yield('content')
</div>



</body>
</html>