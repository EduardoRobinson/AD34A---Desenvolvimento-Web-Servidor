<?php 
if(isset($_POST['botao'])){
    if($_POST['id']!='' && !empty($_POST['valor']) && !empty($_POST['data']) &&  !empty($_POST['descricao'])){
    alterar($_POST['id'],$_POST['valor'],$_POST['data'],$_POST['descricao']);
    }
}


function alterar($id,$valor,$data,$descricao){
    if(array_key_exists($id, $_SESSION['registros'])){
    $_SESSION['registros'][$id]->alterar($valor,$data,$descricao);
    }else{
        echo("Chave não existe");
    }
}






?>