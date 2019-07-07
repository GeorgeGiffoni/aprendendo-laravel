<html>
    <head>
        <title>Meu layout base - @yield('titulo')</title>
    </head>
    <body>
        @section('barralateral')
            Esta parte da seção é do template PAI
        @show
        <div>
            <!-- renderiza a section que vc criou no filho.blade -->
            @yield('conteudo')
        </div>
    </body>
</html>