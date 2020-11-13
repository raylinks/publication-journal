<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css2?family=BioRhyme:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Alegreya&display=swap" rel="stylesheet">

        <script src="https://kit.fontawesome.com/f8a270fd98.js" crossorigin="anonymous"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/style.css')}}" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!-- js -->
        <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

        <script src="{{asset('js/jquery-3.5.1.slim.min.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

        <title>LAJOP | @yield('mytitle')</title>

    </head>

    <body>
        <div style="background-image: url('{{asset("images/bg-opaque.png")}}');" class="home-bg">
            @include('nav')
            <div class="container">
                <div class="content-wrap" style="margin-top: 9%;">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('chattbox')

        <div class="text-center text-prima mt-3 font-weight-bold" style="font-size:10px">
            Copyright © 2020 LASU Journal of Philosophy (LAJOP). All rights reserved. <br>
            {{-- <i class="fas fa-eye"></i> --}}
        </div>
        
        <!-- js -->
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

        <script>
            function openForm() {
              document.getElementById("myForm").style.display = "block";
            }
            
            function closeForm() {
              document.getElementById("myForm").style.display = "none";
            }
        </script>
    </body>
</html>