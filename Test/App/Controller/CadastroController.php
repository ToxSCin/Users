<?php


namespace App\Controller; 
use App\Model\CadastroModel;

class CadastroController extends Controller //Abrindo CadastroController para poder ser usada na controller
{
    public static function form()  //Cadstro Form
    {
        $model = new CadastroModel();

        if(isset($_GET['id']))
        {
            $model = $model->getById( (int) $_GET['id']);
        }

        parent::render('Cadastro/cadastro_form', $model);
    }

    public static function save() //Pegando no banco de dados
    {
        parent::isAuthenticated();
        
        $model = new CadastroModel();
        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];

        $model->save();
        header("Location: /cadastro/lista");
    }

    public static function lista()
    {
        $model = new CadastroModel();
        $model->getAllRows();

        parent::render('Cadastro/cadastro_lista', $model); 
    }

    public static function delete()  //Delete (não delta o id)
    {
        parent::isAuthenticated();
        
        $model = new CadastroModel();
        $model->delete( (int) $_GET['id']);

        header("Location: /cadastro/lista"); //cadastro de login
    }
}