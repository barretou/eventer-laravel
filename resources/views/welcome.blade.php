<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


</head>

<body>
    <h1>algum título</h1>
    
    @if ( $nome == "Fábio" )
        <p>a condição é true, pois o nome é {{ $nome }}</p>
    @else
        <p>a condição é false, pois o nome não é {{ $nome }}</p>
    @endif


</body>

</html>
