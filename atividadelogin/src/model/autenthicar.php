<?php

include '../model/usuario.php';

use APP\model\usuario;

$usuario = $_POST['email'];
$senha = $_POST['password'];


$novoUsuario = new usuario ($usuario, $senha);

if ($usuario == "admin" && $senha == "admin123"){
    echo "<script>alert('login com sucesso !') </script>";
}
    else {
    echo "<script>alert('login com falha !') </script>";
};