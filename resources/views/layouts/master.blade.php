<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            .mynav {
                display: inline-block;
                width: 300px;
                height: 100vh;
                background-color: #F0F8FF;
                color: #4169E1;
                padding: 10px;
                position: fixed;
            }
            .mynav a {
                display: inline-block;
                width: 100%;
                padding: 2px;
                padding-top: 7px;
                text-decoration: none;
                color: #4169E1;
                border-bottom: 1px solid gray;
                font-size: 18px;
            }
            
            .mynav a:visited {
                background-color: #F0F8FF;
                color: #4169E1;
            }
            .mynav a:hover {
                background-color: #ADD8E6;
            }
            .mynav a:active {
                color: #191970;
            }
            
            .main {
                margin: 10px;
                margin-left: 310px;
                display: inline-block;
                width: calc(100% - 320px);
            }
        </style>
        @stack('style')

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="page">
            <div class="mynav">
                <a href="/users">Users</a>
                <a href="/projects">Projects</a>
                <a href="/categories">Categories</a>
                <a href="/issues">Issues</a>
            </div>
            <div class="main">
                <div class="title">
                    <h1>@yield('title')</h1>
                    <hr />
                </div>
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
        @stack('script')
    </body>
</html>
