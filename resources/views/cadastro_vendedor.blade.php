<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Vendedor</title>
    <link rel="stylesheet" href="/css/vendedor.css">
</head>
<body>
        <p class="p">Cadastro de Vendedor</p>

    <form id="vendform" action="/criar_vendedor" method="post">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name">
        <br>

        <label for="matricula">Matricula</label>
        <input type="text" name="matricula">
        <br>

        <label for="comissao">Comissão</label>
        <input type="text" name="comissao">
        <br>

        <input id="btn" type="submit" value="Salvar">
    </form>
</body>
</html>