<?php
require('../Model/usuario.php');
session_start();

if (!isset($_SESSION['usuarios'])) {
    $_SESSION['usuarios'] = array();
}


if(isset($_POST['botao'])){
$nome=isset($_POST['nome']) ? $_POST['nome'] : '';
$email=isset($_POST['email']) ? $_POST['email'] : '';
$senha=isset($_POST['senha']) ? $_POST['senha'] : '';
if(!empty($_POST['nome']) && !empty($_POST['email']) &&  !empty($_POST['senha'])){
cadastro($nome,$email,$senha);
}
}




function cadastro($nome,$email,$senha){
    $usuario = new Usuario($nome,$email,$senha);
    $_SESSION['usuarios'][]=$usuario;
    header('Location:login.php');
}




?>