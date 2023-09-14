<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../CSS/main.css" type="text/css" media="screen">
	<title>Alterar Registro</title>
</head>
<body>
<?php
require('../Model/registro.php');
session_start();
$registros=$_SESSION['registros'];
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
		  	<th><h2>ID</h2></th>
            <th><h2>Tipo</h2></th>
            <th><h2>Valor</h2></th>
            <th><h2>Descrição</h2></th>
			<th><h2>Data</h2></th>
        </tr>
        </thead>");
          foreach($registros as $indice=>$value){
                echo '<tr>';
				print_r('<td>' . $indice . '</td>');
                print_r('<td>' . $value->tipo . '</td>');
                print_r('<td>' . $value->valor . '</td>');
                print_r('<td>' . $value->descricao . '</td>');
				print_r('<td>' . $value->data . '</td>');
                echo '</tr>';
          }
        echo("</table>
        </div>");
?>
<h1>Digite qual registro voce deseja alterar</h1>
<div id="alterar">
	<form id="alterar" method="POST">
	<label>Qual registro voce deseja alterar:</label>
	<input type="number" name="id">
	<br>
	<br>
	<label>Digite o novo valor do registro:</label>
	<input type="number" name="valor">
	<br>
	<label>Digite a nova data do registro:</label>
	<input type="date" name="data">
	<br>
	<label>Digite a nova descrição do registro:</label>
	<input type="text" name="descricao">
	<br>
	<button type="submit" name="botao" value="enviar">Alterar</button>
	</form>
</div>
<?php require_once('../Controller/alterar.php');?>
</body>
</html>