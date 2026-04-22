<?php
session_start();

if(!$_SESSION["logado"]) {
    header("Location: public/formCadastro.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>

</head>
<body>
    <h2>Bem vindo, Admin!</h2>
    <a href="form.cliente/cliente.html">Cadastrar Cliente</a><br>
    <a href="form.voluntario/voluntario.html">Cadastrar Voluntário</a><br>
    <a href="voluntario.php">Armazenar Voluntário</a><br>
    <a href="cliente.php">Armazenar Cliente</a><br>
    

    

</body>
</html>