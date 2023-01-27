<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reporte Sigma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .bg-sigma {
            background-color: #101f2d!important;
        }

        .bg-gray {
            background-color: rgb(242, 242, 242)!important;
        }
    
        .bg-yellow-so {
            background-color: rgba(255, 192, 0)!important;
        }
    
        .bg-yellow {
            background-color: rgba(255, 192, 0, .2)!important;
        }
    
        .text-yellow {
            color: rgb(255, 192, 0)!important;
        }
    
        .bg-red-so {
            background-color: rgba(255, 0, 0)!important;
        }
    
        .bg-red {
            background-color: rgba(255, 0, 0, .2)!important;
        }
    
        .text-red {
            color: rgba(255, 0, 0)!important;
        }
    
        .bg-green-so {
            background-color: rgba(0, 176, 80)!important;
        }
    
        .bg-green {
            background-color: rgba(0, 176, 80, .2)!important;
        }
    
        .text-green {
            color: rgb(0, 176, 80)!important;
        }
    
        .bg-blue-so {
            background-color: rgb(68, 114, 196)!important;
        }
    
        .bg-bluem-so {
            background-color: rgb(68, 84, 106)!important;
        }
    
        .tb-border {
            border-width: 1px;
            border-color: black;
            border-style: solid;
        }
    
        .table-collapse {
            border-collapse: collapse;
        }

        .tabla-con-bordes td, .tabla-con-bordes th{
            border-width: 1px;
            border-color: black;
            border-style: solid;            
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); 
            gap: 1rem;
        }

        .bg-gray {
            background-color: #efefef!important;
        }
        .bg-dgray {
            background-color: #595959!important;
        }
    </style>
</head>

<body class="bg-gray">    

    @if (Route::currentRouteName() !== 'login')
        @include('layouts.navbar')
    @endif

    <div class="container mt-3">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    
    <script src="https://code.highcharts.com/highcharts.js"></script>
    @yield('scripts')
</body>

</html>