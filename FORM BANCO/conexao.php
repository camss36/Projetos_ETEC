<?php

$servidor="localhost";
$usuario="root";
$senha= "";
$database="formu";

$conexão= mysqli_connect($servidor, $usuario, $senha, $database);

if($conexão){
    echo 'Conectado com sucesso!';

}else{
    echo 'Falha ao conectar';
}

?>
 git config --global user.email "you@example.com"
  git config --global user.name "camss36"