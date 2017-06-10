<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="../../public/img/head/head.png" type="image/png">


    <link rel="stylesheet" href="../../public/js/jquery-ui-1.12.1/jquery-ui.css">
    <link rel="stylesheet" href="../../public/css/main.css">

    <link rel="stylesheet" href="../../public/font/fontello/css/fontello.css">


    <script src="../../public/js/jquery-3.2.1.min%20(1).js"></script>
    <script src="../../public/js/main.js"></script>
    <script src="../../public/js/jquery-ui-1.12.1/jquery-ui.js"></script>
    <script src="../../public/js/maskedinput/jquery.maskedinput.min.js"></script>

    <title>Настольные игры</title>
</head>
<body>


@section('menu')
    @include('layouts.menu')
@show
<div class="break"></div>


<div id="main_content">
@section('main-content')

    @show
</div>

</body>
</html>