<?php
require('../Model/registro.php');
session_start();
if(isset($_POST['botao'])){
    $tipo=isset($_POST['tipo_imovel']) ? $_POST['tipo_imovel'] : '';
    listar($tipo);
}

function listar($tipo){
    $registro=$_SESSION['registros'];
    if($tipo==''){
        echo("<div style=' width: 20%;
        margin: 0 auto; 
        text-align: center; 
        padding: 20px;
        table, th, td {
            border:1px solid black;
          }
        '>
        <table> 
        <thead>
        <tr>
            <th><h2>Tipo</h2></th>
            <th><h2>Valor</h2></th>
            <th><h2>Descrição</h2></th>
        </tr>
        </thead>");
          foreach($registro as $value){
                echo '<tr>';
                print_r('<td>' . $value->tipo . '</td>');
                print_r('<td>' . $value->valor . '</td>');
                print_r('<td>' . $value->descricao . '</td>');
                echo '</tr>';
          }
        echo("</table>
        </div>");
    }
    if($tipo=='Casa'){
        echo("<div style=' width: 20%;
        margin: 0 auto; 
        text-align: center; 
        padding: 20px;
        table, th, td {
            border:1px solid black;
          }
        '>
        <table> 
        <thead>
        <tr>
            <th><h2>Tipo</h2></th>
            <th><h2>Valor</h2></th>
            <th><h2>Descrição</h2></th>
        </tr>
        </thead>");
        $casa=[];
          foreach($registro as $value){
            if($value->tipo=='Casa'){
                $casa[]=$value;
            }
          }
          foreach($casa as $value){
                echo '<tr>';
                print_r('<td>' . $value->tipo . '</td>');
                print_r('<td>' . $value->valor . '</td>');
                print_r('<td>' . $value->descricao . '</td>');
                echo '</tr>';
          }
        echo("</table>
        </div>");
        
        
    }
    if($tipo=='Apartamento'){
        echo("<div style=' width: 20%;
        margin: 0 auto; 
        text-align: center; 
        padding: 20px;
        table, th, td {
            border:1px solid black;
          }
        '>
        <table> 
        <thead>
        <tr>
            <th><h2>Tipo</h2></th>
            <th><h2>Valor</h2></th>
            <th><h2>Descrição</h2></th>
        </tr>
        </thead>");
        $apartamentos=[];
          foreach($registro as $value){
            if($value->tipo=='Apartamento'){
                $apartamentos[]=$value;
            }
          }
          foreach($apartamentos as $value){
                echo '<tr>';
                print_r('<td>' . $value->tipo . '</td>');
                print_r('<td>' . $value->valor . '</td>');
                print_r('<td>' . $value->descricao . '</td>');
                echo '</tr>';
          }
        echo("</table>
        </div>");
        
    }
    if($tipo=='Condominio'){
        echo("<div style=' width: 20%;
        margin: 0 auto; 
        text-align: center; 
        padding: 20px;
        table, th, td {
            border:1px solid black;
          }
        '>
        <table> 
        <thead>
        <tr>
            <th><h2>Tipo</h2></th>
            <th><h2>Valor</h2></th>
            <th><h2>Descrição</h2></th>
        </tr>
        </thead>");
        $condominio=[];
          foreach($registro as $value){
            if($value->tipo=='Condominio'){
                $condominio[]=$value;
            }
          }
          foreach($condominio as $value){
                echo '<tr>';
                print_r('<td>' . $value->tipo . '</td>');
                print_r('<td>' . $value->valor . '</td>');
                print_r('<td>' . $value->descricao . '</td>');
                echo '</tr>';
          }
        echo("</table>
        </div>");
        
        
    }

}



?>