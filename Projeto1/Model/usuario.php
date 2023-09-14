<?php
Class Usuario{
    public $nome;
    public $email;
    public $senha;

    public $tokenLogado;
    public function __construct($nome,$email,$senha){

        $this->nome=$nome;
        $this->email=$email;
        $this->senha=$senha;

    }

    public function login(){
        $_SESSION['logado']=$this;
        header('Location:../View/registro.php');
    }

    public function logout(){
        session_destroy();
        header('Location:logout.php');
    }
   



}

?>