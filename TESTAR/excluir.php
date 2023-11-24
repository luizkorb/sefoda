<?php


if (isset($_POST["excluir"])) {

$comando = $pdo->prepare("DELETE FROM cadastro_bombeiro WHERE cpf=\"$cpf\"");
$resultado = $comando->execute();

header("Location: html.php");

}

?>