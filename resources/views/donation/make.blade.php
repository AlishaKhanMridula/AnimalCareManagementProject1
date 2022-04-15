<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      </head>
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
      </div>

      <h1 class="city">
         <p><strong>Want To Donate For Animals!!</strong></p>
         <p><strong>Then you are in a right track</strong></p>
      </h1>

  <style>
  .city{
    background-image: url('https://cdn.pixabay.com/photo/2018/10/01/09/21/pets-3715733_960_720.jpg');
    color: Black;
    font-size: 14vh;
    text-align: center;
    padding: 9px;
  }
  .city1{
    color: Black;
    font-size: 5vh;
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
  .column1 {
  float: left;
  width: 50%;
  font-size: 3vh;
  padding-right: 50px;
  padding-top: 50px;
}
.column2 {
float: right;
width: 50%;
font-size: 2vh;
padding-top: 50px;

}

.row:after {
  content: "";
  display: table;
  clear: both;
}
.cure{
  font-size: 4vh;
}
body{
  padding-left: 50px;
  padding-right: 50px;
}
  </style>
<body>
  <div class="row">
  <div class="column1"><p>In the present times, the number of many animals in the world are decresing day by day. There are many reason behind this. Main reason is climate change. In 2019, a huge fire broke out in the Amazon forest. About 906,000 hectares of areas are burned and manyb animals losses their lives and thousands of animals were badly injured.</p>
    <p>However, we can see that many animals are going to be extinct. Huge amount of money is required to ensure their proper foods and habitants.Therefore, if you are interested to contribute for this poor animals, feel free to donate.</p>
  <p><strong>To donate please register yourself first.After register yourself, you can donate the money.</strong></p>
  <p class="cure"><strong>Here is the registration form:</strong></p>
  <x-guest-layout>
    <form action='\store' method="POST">
      @csrf
      <div>
        <x-jet-label for="name" value="{{ __('Name') }}" />
        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
      </div>
    </br>
      <div>
        <x-jet-label for="email" value="{{ __('Email') }}" />
        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
      </div>
    </br>
    <div>
      <x-jet-label for="text" value="{{ __('Address') }}" />
      <x-jet-input id="text" class="block mt-1 w-full" type="text" name="number" :value="old('text')" required autofocus autocomplete="text" />
    </div>
  </br>
  <div>
    <x-jet-label for="number" value="{{ __('Phone Number') }}" />
    <x-jet-input id="number" class="block mt-1 w-full" type="text" name="number" :value="old('number')" required autofocus autocomplete="number" />
  </div>
</br>
<div>
  <x-jet-label for="string" value="{{ __('NID Number') }}" />
  <x-jet-input id="string" class="block mt-1 w-full" type="text" name="string" :value="old('string')" required autofocus autocomplete="string" />
</div>
</br>
<div>
  <x-jet-label for="text" value="{{ __('Reason Of Your Donation ') }}" />
  <x-jet-input id="text" class="block mt-1 w-full" type="text" name="text" :value="old('text')" required autofocus autocomplete="text" />
</div>
</br>
<div>
  <x-jet-label for="digit" value="{{ __('Donation Amount') }}" />
  <x-jet-input id="digit" class="block mt-1 w-full" type="text" name="digit" :value="old('digit')" required autofocus autocomplete="digit" />
</div>
</br>
<div>
  <x-jet-button class="ml-4">
      {{ __('Submit') }}
  </x-jet-button>
</div>
</br>
  </x-guest-layout>
   </div>
  <div class="column2">
  <p><image src="https://www.aljazeera.com/wp-content/uploads/2020/10/2020-09-07T120136Z_1114740794_RC2OTI9X40PQ_RTRMADP_3_CLIMATE-CHANGE-BRAZIL-ANIMALS.jpg?resize=770%2C513" width="600" height="341" title="Rescuing animals"></p>
  </br>
  <image src="https://ichef.bbci.co.uk/news/976/cpsprodpb/46C1/production/_108531181_gettyimages-860719438.jpg" width="600" height="341"> </div>
</div>
</body>
</html>
