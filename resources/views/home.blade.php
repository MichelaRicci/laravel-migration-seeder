<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    @vite('resources/js/app.js')
</head>
<body>

    @foreach ($trains as $train)
            <div class="card" style="max-width: 18rem;">
                <div>Treno: {{$train['id']}}</div>
                <div>
                  <p>Azienda: {{$train['azienda']}}</p>
                  <p>Partenza da: {{$train['stazione_di_partenza']}}</p> 
                  <p>alle ore: {{$train['orario_di_partenza']}}</p>
                  <p>Arrivo a: {{$train['stazione_di_arrivo']}}</p>
                  <p>alle ore: {{$train['orario_di_arrivo']}}</p>
                  <p>Compagnia ferroviaria: {{$train['azienda']}}</p>
                  <p>Codice treno: {{$train['codice_treno']}}</p>
                  <p>Numero carrozza: {{$train['numero_carrozze']}}</p>

                </div>
            </div>
            @endforeach
</body>
</html>