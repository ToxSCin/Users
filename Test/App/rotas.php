<?php

use App\Controller\{
    LoginController,
    CadastroController
};

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($uri_parse)
{

    // Rotas Login
    case '/login':
        LoginController::index();
    break;

    case '/login/auth':
        LoginController::auth();
    break;

    case '/logout':
        LoginController::logout();
    break;


    // Rotas Cadastro
    case '/cadastro':
        CadastroController::form();        
    break;

    case '/cadastro/save':
        CadastroController::save();
    break;

    case '/cadastro/lista':
        CadastroController::lista();
    break;

    case '/cadastro/delete':
        CadastroController::delete();
    break;
        
    
    // Erro
    default:
        LoginController::index();
    break;
}