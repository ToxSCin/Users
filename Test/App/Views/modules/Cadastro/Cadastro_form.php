<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cadastro</title>
    <style>
    body{
        background-color: whitesmoke;
        font-size: 25px;
        font-family:Zen Dots;
        background-position: center;
    }
    h4{
        color:#363636;
        font-size: 45px;
    }
    label{
        color:red;
        width:120px;
        display: inline-block;
    }
    input{
        width: 240px;
    }
    
    
    </style>
</head>
<center>
<body>
    <h4> Cadastro </h4>
    <br>
    <form action="/cadastro/save" method="post">

    <input type="hidden" value="<?= $model->id ?>" name="id" />
    <label>Nome:</label>
    <input name="nome" type="text" value="<?= $model->nome ?>" placeholder="Tox" required/>
    <br>
    <label>E-mail:</label>
    <input name="email" type="text" value="<?= $model->email ?>" placeholder="etec.com" required/>
    <br>
    <label>Senha:</label>
    <input name="senha" type="password" placeholder="123" required/>
    <br>
    <?php if(isset($_GET['erro']))
    {
        echo '<span style="color:#CA2400;"> E-mail ou senha estão incorretos </span>';
    }
    ?>
    <br>
    <button type="button" class="btn btn-outline-dark">Cadastrar</button>
    </form>    
    <a href="/login">Login</a>
    <br>
    <a href="/cadastro/lista"> Lista de Usuários </a>
</body>
</center>
</html>