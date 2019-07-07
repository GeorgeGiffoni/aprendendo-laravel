<html>
<head>
    <title>Pagina</title>
    <!-- <link href="{{ asset('css/app.css')}}" rel="stylesheet"> -->
    <!-- segunda maneira de incluir -->
    <link href="{{ URL::to('css/app.css')}}" rel="stylesheet">
</head>
    <body>
    <div class="alert alert-primary" role="alert">
  A simple primary alert—check it out!
</div>
    <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>