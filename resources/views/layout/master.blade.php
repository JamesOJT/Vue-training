<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    
    <!-- Font Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @yield('style')

    <!-- CSS Link-->
    {{-- <link rel="stylesheet" href="css/form.css"> --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    {{-- <style>
        body {
            overflow-x: hidden;
            color: rgb(138, 138, 138);
        }

        .login {
            padding: 20px 0px 25px 0px;
            color:rgb(44, 44, 44);
            text-align: center;
        }

        .btn {
            display: flex;
            justify-content: center;
            text-align: center;
            background-color: rgb(1, 155, 40);
            color: white;

            border: 0px;
            padding: 12px;
            margin: auto;
            margin-top: 20px;
            
            width: 120px;
            border-radius: 50px;
        }

        .btn:hover {
            background-color: rgb(1, 95, 24);
            color: white;
        }

        .main_box_form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 720px;
        }

        .container-md {
            display: flex;
            justify-content: center;
            padding: 20px;

            width: 30%;
            background-color: rgb(237, 237, 237);

            border-radius: 20px;
            overflow: hidden;
        }

        .form-control {
            width: 350px;
            height: 60px;
            border: 0px;
        }
    </style> --}}
    
</head>
<body>
    <!-- containers -->
    @yield('fname')
    @yield('mname')

    @yield('lname')
    @yield('age')

    @yield('var1')
    @yield('var2')

        @yield('SampleForm')
        @yield('script')
    

    @yield ('table_name')
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    
</body>
</html>