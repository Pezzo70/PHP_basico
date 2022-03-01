<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

 if(empty($nome) OR empty($idade) OR $nome[0] == ' '){
   echo("Os campos devem ser preenchidos corretamente.");
   return 0;
 }
 if(strlen($nome) < 3 OR strlen($nome) > 40){
   echo("O nome deve conter entre 3 a 40 caracteres.");
   return  0;
 }
 if(!is_numeric($idade)){
  echo('A idade deve ser um numero.');
  return 0;
 }

//print_r($categorias);


  if($idade >= 6 AND $idade <= 12){
    for($i = 0; $i < count($categorias);$i ++){
        if($categorias[$i] == 'infantil'){
            echo 'O nadador '.$nome.'('.$idade.' anos) e da categoria '.$categorias[$i];
        }
    }
  }else if($idade <= 18){
    for($i = 0; $i < count($categorias);$i ++){
        if($categorias[$i] == 'adolescente'){
            echo 'O nadador '.$nome.'('.$idade.' anos) e da categoria '.$categorias[$i];
        }
    }
  }else{
    for($i = 0; $i < count($categorias);$i ++){
        if($categorias[$i] == 'adulto'){
            echo 'O nadador '.$nome.'('.$idade.' anos) e da categoria '.$categorias[$i];
        }
    }
  }