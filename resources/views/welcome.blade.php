<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    

    <h1>Questo è il nuovo progetto Laravel!</h1>
    @if($nome)
        <p>Benvenuto {{$nome}}</p>
    @endif

    <a href="/chi-siamo">Chi siamo</a>
    <a href="/Lavora-con-noi">Lavora con noi</a>

</body>
</html>