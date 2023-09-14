<?php
if(isset($_POST['botao'])){
    if($_POST['id']!=''){
    apagar($_POST['id']);
    }
}

function apagar($id){
    if(array_key_exists($id, $_SESSION['registros'])){
        $_SESSION['registros'][$id]->apagar($id);
        }else{
            echo("Chave não existe");
        }
    
}




?>