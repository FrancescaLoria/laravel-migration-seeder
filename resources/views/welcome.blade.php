<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <h1 class="title text-center my-4">TRENI CHE PARTONO OGGI (25/05/2023)</h1>
        <div class="container">
            <div class="row row-cols-4 g-3">
                @foreach ($trains as $train)
                <div class="col">
                    <div class="card p-4">
                        <div class="codice">CODICE TRENO:{{$train->codice_treno}}</div>
                        <div class="data text-success">DATA: {{$train->data}}</div>
                        <div class="partenza">STAZIONE DI PARTENZA: {{$train->stazione_di_partenza}}</div>
                        <div class="arrivo">STAZIONE DI ARRIVO {{$train->stazione_di_arrivo}}</div>
                        <div class="orario-part">ORARIO DI PARTENZA: {{$train->orario_di_partenza}}</div>
                        <div class="orario-arr">ORARIO DI ARRIVO {{$train->orario_di_arrivo}}</div>

                    </div>
                </div>
                    
                @endforeach
            </div>
        </div>
       
    </main>

</body>

</html>