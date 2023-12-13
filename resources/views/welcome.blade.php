<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
     
     
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>


        <title>Laravel</title>

        <!-- Fonts -->

        <style>
            body {

        background: url('/img/background/wallpaper.png');

                }


        </style>
      
    </head>
    <body>

        <script>

            window.onload = (event) => {
          
              document.getElementsByTagName('a')[1].style.borderBottom = '2px solid green'
          
            };
            
            </script>

        <div>

            @include('layouts.header')

        </div>

        <main>

                <h1>HOME</h1>
    

           

        </main>

      
    </body>
</html>

<section>