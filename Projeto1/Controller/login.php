<?php 
require('../Model/usuario.php');
session_start();


if(isset($_POST['botao'])){
    $email=isset($_POST['email']) ? $_POST['email'] : '';
    $senha=isset($_POST['senha']) ? $_POST['senha'] : '';
    if(!empty($_POST['senha']) && !empty($_POST['email'])){
    login($email,$senha);
    }
    }




function login($email,$senha){
    $sucesso=0;
    for($i=0;$i<count($_SESSION['usuarios']);$i++){
        if($_SESSION['usuarios'][$i]->email==$email && $_SESSION['usuarios'][$i]->senha==$senha){
            $sucesso=1;
            $_SESSION['usuarios'][$i]->login();
        }
    }
    if($sucesso==0){
        print_r("Usuario ou senha incorreta");
    }
}




?>