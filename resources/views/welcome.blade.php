<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Animal Health Management Project</title>

        <!-- Fonts -->
        <!--><link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <h1 class="welcome" style="Color: gray"><strong>Welcome All The Animal Lovers</strong></h1>
        <style>
        .welcome{
          text-align: center;
          background-color: Black;
          font-size: 10vh;
        }


        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-image: url('https://i.pinimg.com/564x/87/b9/b8/87b9b857cb7e61f564da5448f75c9a1d.jpg');
            }
            .write{
              text-align: center;
              width: 30%;
              height: 48%;
              padding:10px;
              border:1px solid gray;
              margin:100px auto;
              position: absolute;
              color: rgba(0,0,0,0.712);
              left: 35%;
              top: 20%;
              background-color: rgba(0,0,0,0.5);
            }
            .design1{
              color: white;
              font-size: 25px;
            }
            .design{
              font-size: 20px;
              color: #FF4500;
            }
             .link a:hover{
              background-color: #FF4500;
            }
        </style>
    </head>
    <body class="antialiased">
      <div class="write">
        <p class="design1"><strong>If you are looking for vet doctors as well as you want to donate for the betterment of animals and contribute for animal's health care, you are in a right place!!</strong></p>

        <div class="link">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home Page</a>
                    @else
                        <p class='design'><strong>Login if you already have an account!!</strong><br>

                           <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><button type="button" background-color:"green"><strong>Log in</strong></button></a>
                        </p>
                         @if (Route::has('register'))
                            <p class="design"><strong>Register if you don't have an account!!</strong><br>
                              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"><button type="button"><strong>Register</strong></button></a>
                              </p>
                        @endif
                    @endauth
                </div>
            @endif
          </div>


    </body>
</html>
