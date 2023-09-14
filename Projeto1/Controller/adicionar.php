<?php
require('../Model/usuario.php');
require('../Model/registro.php');
session_start();

if (!isset($_SESSION['registros'])) {
    $_SESSION['registros'] = array();
}

if(isset($_POST['botao'])){
    $tipo=isset($_POST['tipo_imovel']) ? $_POST['tipo_imovel'] : '';
    $valor=isset($_POST['valor']) ? $_POST['valor'] : '';
    $data=isset($_POST['data']) ? $_POST['data'] : '';
    $descricao=isset($_POST['descricao']) ? $_POST['descricao'] : '';
    $usuario=$_SESSION['logado']->nome;
    if(!empty($_POST['tipo_imovel']) && !empty($_POST['valor']) && !empty($_POST['data']) && !empty($_POST['descricao'])){
    adicionar($tipo,$valor,$data,$descricao,$usuario);
    }
    }
function adicionar($tipo,$valor,$data,$descricao,$usuario){
        $registro = new Registro($tipo,$valor,$data,$descricao,$usuario);
        $_SESSION['registros'][]=$registro;
}



?>