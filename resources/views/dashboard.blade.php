<x-app-layout>
  <x-slot name="header">
      <h1 class="city">
         <strong>Animal Health Care Management</strong>
      </h1>
  </x-slot>
  <style>
  .city{
    background-image: url('https://bestanimations.com/media/nature/1001371578sunset-paradise-gif.gif');
    color: #FF0000;
    font-size: 18vh;
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
    color: blue;
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


  <!--<div class="navbar">
        <a class="active" href="{{url('/dashboard')}}" style="Color: white"><strong>Home</strong</a>
        <a href="{{url('/dashboard')}}" style="Color: white"><strong>Health Care Routin of Pets</strong</a>
        <a href="{{url('/dashboard')}}" style="Color: white"><strong>Vet Doctors</strong</a>
        <a href="{{url('/dashboard')}}" style="Color: white"><strong>Donation</strong</a>
  </div>-->


</x-app-layout>
