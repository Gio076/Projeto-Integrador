<?php
session_start();
if(!isset($_SESSION['logado']) || $_SESSION)

$novo = [
    "nome"=>$nome,
    "telefone" => $telefone,
    "cpf" => $cpf,
    "email" => $email,
    "instagram" => $instagram,
    "nascimento" => $nascimento,
    "acessibilidade" => $acessibilidade,

];

$itens[] = $novo;
saveJson($telefone, $cpf, $linkedin, $email, $instagram, $nascimento, $curriculo);
?>