<?php

$servidor="localhost";
$usuario="root";
$senha= "";
$database="";

$conexão= mysqli_connect($servidor, $usuario, $senha, $database);

if($conexão){
    echo 'Conectado com sucesso!';

}else{
    echo 'Falha ao conectar';
}

?>