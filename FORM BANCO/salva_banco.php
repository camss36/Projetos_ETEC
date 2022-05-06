<?php

include_once('conexao.php');
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];

$sql= "INSERT INTO table
( , ) VALUES 
('$nome', '$cpf')";

$query= mysqli_query($conexão, $sql);

?>
