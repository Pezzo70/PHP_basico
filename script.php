<?php
include 'servico/servicoMensagemSessao.php';
include 'servico/servicoValidacao.php';
include 'servico/servicoValidaCategoria.php';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome,$idade);
header('location: index.php');