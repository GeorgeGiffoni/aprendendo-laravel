<html>
<head>
    <title>Produtos</title>
    <!-- <link href="{{ asset('css/app.css')}}" rel="stylesheet"> -->
    <!-- segunda maneira de incluir -->
    <link href="{{ URL::to('css/app.css')}}" rel="stylesheet">
</head>

    <body>
        
        @if(isset($produtos))

            @if ( count($produtos ) == 0 )
                <h1>Nenhum produtos</h1>
            @elseif ( count($produtos ) === 1 )
                <h1>Um produto</h1>
            @else
                <h1>Temos vários produtos</h1>

                @foreach($produtos as $p)
                    <p>Nome: {{$p}}</p>
                @endforeach

            @endif 

            @empty($produtos)
                <h2>nada em produtos</h2>
            @endempty


        @else
            <h2>Variável produtos não foi passada como parâmetro.</h2>
        @endif

    </body>

    <footer>
        <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
    </footer>
</html>