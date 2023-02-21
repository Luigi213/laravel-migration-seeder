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
        <div class="container">
            <div class="row">
                @foreach ($trains as $train)
                    <div class="col-3 py-4">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title">{{ $train['id']}}</h1>
                                <div class="card-text">
                                    <div>
                                        <span>Nome azienda: </span>{{ $train['nome_azienda']}}
                                    </div>
                                    <div>
                                        <span>Nome stazione di partenza: </span>{{ $train['stazione_di_partenza']}}
                                    </div>
                                    <div>
                                        <span>Nome stazione di arrivo: </span>{{ $train['stazione_di_arrivo']}}
                                    </div>
                                    <div>
                                        <span>Nome orario di partenza: </span>{{ $train['orario_di_partenza']}}
                                    </div>
                                    <div>
                                        <span>Nome orario di arrivo: </span>{{ $train['orario_di_arrivo']}}
                                    </div>
                                    <div>
                                        <span>Nome codice treno: </span>{{ $train['codice_treno']}}
                                    </div>
                                    <div>
                                        <span>Nome numero di carozze: </span>{{ $train['numero_di_carozze']}}
                                    </div>
                                    <div>
                                        <span>Nome in orario: </span>{{ $train['in_orario']}}
                                    </div>
                                    <div>
                                        <span>Nome cancellato: </span>{{ $train['cancellato']}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>

</html>