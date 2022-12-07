<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>
    <style>
        
    body{
        background-color: white;
        font-size: 25px;
        font-family:Zen Dots;
        background-position: center;
    }
    h1{
        color:#363636;
        font-size: 70px;
    }
    label{
        color:black;
        width:100px;
        display: inline-block;
    }
    input{
        width:250px;
    }
   
    </style>
</head>
<body>
    <center>
    <h1> LOGIN </h1>
    <br>
    <form action="/login/auth" method="post">

    <label>E-mail:</label>
    <input name="email" type="text" placeholder="@tec" required/>
    <br>
    <label>Senha:</label>
    <input name="senha" type="password" placeholder="111" required/>
    <br>
    <?php if(isset($_GET['erro']))
    {
        echo '<span style="color:#CA2400;"> E-mail ou senha estão incorretos </span>';
    }
    ?>
    <br>
    <button type="button" class="btn btn-outline-dark">Entrar</button>
    </form>    
    <a href="/cadastro">Cadastro</a>
    </center> 
</body>
</html>