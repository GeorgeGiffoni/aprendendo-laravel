<html>
<head>
    <title>Pagina</title>
    <!-- <link href="{{ asset('css/app.css')}}" rel="stylesheet"> -->
    <!-- segunda maneira de incluir -->
    <link href="{{ URL::to('css/app.css')}}" rel="stylesheet">
</head>

    <body>
    
    <!-- PASSANDO ALGO PRO MEU COMPONENT -->
    <!-- TUDO DENTRO DO COMPONENTE O BLADE NOMEIA COMO SENDO UM SLOT -->
    <!-- LA DENTRO DO MEU COMPONENTE EU CHAMO  -->
    <!-- E TUDO QUE VC COLOCA DENTRO DO COMPONENTE NA PAGINA VAI PARA SEU COMPONENTE -->
    <!-- ATRAVES DA VARIAVEL SLOT -->
    @component('components.meucomponente', ['tipo'=>'danger', 'titulo'=>'Deu erro'])
        <strong>Erro: </strong> Sua mensagem de erro.
    @endcomponent

    </body>

    <footer>
        <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
    </footer>
</html>