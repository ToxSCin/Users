<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
	<link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    body{
        background-color: white;
        font-size: 25px;
        font-family:Zen Dots;
        background-position: center;
    }
    h1{
        color:#363636;
        font-size: 45px;
    }
    label{
        color:black;
        width:120px;
        display: inline-block;
    }
    input{
        width:239px;
    }
  
    
    </style>
    
</head>
<body>
    <center>
        <h1>Lista de Usuários</h1>
        <table border="2">
            <tr>
                <th></th>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha (criptografado)</th>
            </tr>

            <?php foreach($model->rows as $item): ?>
            <tr>
                <td> <a href="/cadastro/delete?id=<?= $item['id'] ?>">X</a> </td>
                <td><?= $item['id'] ?></td>
                <td>&nbsp<a href="/cadastro?id=<?= $item['id'] ?>"> <?= $item['nome'] ?> </a>&nbsp</td>
                <td>&nbsp<?= $item['email'] ?>&nbsp</td>
                <td>&nbsp<?= $item['senha'] ?>&nbsp</td>

            </tr>
            <?php endforeach ?>

            
            <?php if(count($model->rows) == 0): ?>
                <tr>
                    <td colspan="10">Nenhum registro encontrado.</td>
                </tr>
            <?php endif ?>



        </table>
        <br>
    <a href="/cadastro">
    <button type="button" class="btn btn-outline-dark">Voltar</button>
        </center>
    </a>
</body>