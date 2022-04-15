<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

      <h1 class="city">
         <strong>Vet Doctors</strong>
      </h1>
  <style>
  .city{
    color: Black;
    font-size: 10vh;
    text-align: center;
    padding: 10px;
  }
  .navbar{
    background: #333;
    overflow: hidden;
    border-style: 2px solid;
    border color: white;
  }
  .navbar a{
    float: left;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px
  }
  .navbar a:hover{
    background-color: #66FF66;
    color: white;
  }
  .navbar a.active{
    background-color: #04AA6D;
    color: white;
  }
  </style>
</head>
<body>
  <div class="navbar">
  <a href="{{ url('/dashboard') }}" :active="request()->routeIs('dashboard')">
      {{ __('Home Page') }}
  </a>
  <a href="{{ url('/care') }}" :active="request()->routeIs('care')">
      {{ __('Animal Health Care Routine') }}
  </a>
  <a href="{{ url('/vet') }}" :active="request()->routeIs('vet')">
      {{ __('Vet Doctors') }}
  </a>
  <a href="{{ url('/make') }}" :active="request()->routeIs('make')">
      {{ __('Donation') }}
  </a>
</body>
</html>
