<?php
session_start();
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome) or empty($idade) or $nome[0] == ' ') {
  $_SESSION['mensagem de erro'] = 'Os campos devem ser preenchidos corretamente.';
  header('location: index.php');
  return;
} else if (strlen($nome) < 3 or strlen($nome) > 40) {
  $_SESSION['mensagem de erro'] = 'O nome deve conter entre 3 a 40 caracteres.';
  header('location: index.php');
  return;
} else if (!is_numeric($idade)) {
  $_SESSION['mensagem de erro'] = 'A idade deve ser numerica.';
  header('location: index.php');
  return; 
}else{
  $_SESSION['mensagem de erro'] = '';
}

//print_r($categorias);


if ($idade >= 6 and $idade <= 12) {
  for ($i = 0; $i < count($categorias); $i++) {
    if ($categorias[$i] == 'infantil') {
      $_SESSION['mensagem de sucesso'] = 'O nadador ' . $nome . '(' . $idade . ' anos) e da categoria ' . $categorias[$i];
      header('location: index.php');
      return;
    }
  }
} else if ($idade <= 18) {
  for ($i = 0; $i < count($categorias); $i++) {
    if ($categorias[$i] == 'adolescente') {
      $_SESSION['mensagem de sucesso'] = 'O nadador ' . $nome . '(' . $idade . ' anos) e da categoria ' . $categorias[$i];
      header('location: index.php');
      return;
    }
  }
} else {
  for ($i = 0; $i < count($categorias); $i++) {
    if ($categorias[$i] == 'adulto') {
      $_SESSION['mensagem de sucesso'] = 'O nadador ' . $nome . '(' . $idade . ' anos) e da categoria ' . $categorias[$i];
      header('location: index.php');
      return;
    }
  }
}
