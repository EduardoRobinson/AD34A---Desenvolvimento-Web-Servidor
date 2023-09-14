<?php 
if(isset($_POST['logout'])){
    logout();

}

function logout(){
    $_SESSION['logado']->logout();

}

?>