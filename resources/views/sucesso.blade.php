<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($nome == 'Bruno')
    <h1> O Aluno: {{$nome}} {{$sobrenome}} foi cadastrado com sucesso</h1>
    @else
    <h1>Não é o Bruno</h1>
    @endif
</body>
</html>