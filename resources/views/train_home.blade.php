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
                                        <span class="fw-semibold">Nome azienda: </span>{{ $train['nome_azienda']}}
                                    </div>
                                    <div>
                                        <span class="fw-semibold">Stazione di partenza: </span>{{ $train['stazione_di_partenza']}}
                                    </div>
                                    <div>
                                        <span class="fw-semibold">Stazione di arrivo: </span>{{ $train['stazione_di_arrivo']}}
                                    </div>
                                    <div>
                                        <span class="fw-semibold">Orario di partenza: </span>{{ $train['orario_di_partenza']}}
                                    </div>
                                    <div>
                                        <span class="fw-semibold">Orario di arrivo: </span>{{ $train['orario_di_arrivo']}}
                                    </div>
                                    <div>
                                        <span class="fw-semibold">Codice treno: </span>{{ $train['codice_treno']}}
                                    </div>
                                    <div>
                                        <span class="fw-semibold">Numero di carozze: </span>{{ $train['numero_di_carozze']}}
                                    </div>
                                    <div>
                                        @if ($train['in_orario'] == 1)
                                        <span class="fw-semibold">In orario: </span><span>SI</span>
                                        @else
                                        <span class="fw-semibold">In orario: </span><span>NO</span>
                                        @endif
                                    </div>
                                    <div>
                                        @if ($train['cancellato'] == 1)
                                        <span class="fw-semibold">Cancellato: </span><span>SI</span>
                                        @else
                                        <span class="fw-semibold">Cancellato: </span><span>NO</span>
                                        @endif
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