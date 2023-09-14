<?php
Class Registro{
    public $tipo;
    public $valor;
    public $data;
    public $descricao;

    public function __construct($tipo,$valor,$data,$descricao,$usuario){

        $this->tipo=$tipo;
        $this->valor=$valor;
        $this->data=$data;
        $this->descricao=$descricao;
        $this->usuario=$usuario;

    }

    public function alterar($valor,$data,$descricao){
    $this->valor=$valor;
    $this->data=$data;
    $this->descricao=$descricao;
    header('Location:../View/alterar.php');
    }

    public function apagar($id){
        unset($_SESSION['registros'][$id]);
        header('Location:../View/apagar.php');
    }
    



}




?>