<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Test</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('public/css/estilos.css')}}" />
        <style>
            body {
          
                background-color: #34D938
            }
            .container{
            padding-top: 5%;
            padding-bottom: 5%;
            
            }
            #titulo{
            margin: auto !important;
            text-align: center !important;
            }
            #navbar{
            background-color: #F6B169
            }
            #logo_nav{
                color: #16199b;
                font-weight: bold;
            }
            footer{
                margin-right:20px;
                text-align: right !important;
            }
        </style>
    </head>
    <body>
       <nav id="navbar" class="navbar navbar-light" >
            <div class="container-fluid">
                <a id="logo_nav" class="navbar-brand" href="#">
                <img src="icon_proges.png" alt="" width="40" height="34" class="d-inline-block ">
                Grupo Progestion
                </a>
            </div>
        </nav>

    @yield('content')
    </body>

    <footer class="main-footer">
        Test desarrollo- {{date('Y')}}.
    </footer>
</html>