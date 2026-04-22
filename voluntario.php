<?php
session_start();
if(!isset($_SESSION['logado']) || $_SESSION)

$novo = [
        "nome"=>$nome,
        "telefone" => $telefone,
        "cpf" => $cpf,
        "linkedin" => $linkedin,
        "email" => $email,
        "instagram" => $instagram,
        "nascimento" => $nascimento,
        "curriculo" => $curriculo,

    ];

    $itens[] = $novo;
    saveJson($telefone, $cpf, $linkedin, $email, $instagram, $nascimento, $curriculo);
?>