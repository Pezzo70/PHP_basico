<?php
phpinfo();
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = 'Gabriel';
$idade = 8;

//print_r($categorias);

  if($idade >= 6 AND $idade <= 12){
    for($i = 0; $i < count($categorias);$i ++){
        if($categorias[$i] == 'infantil'){
            echo 'O nadador '.$nome.'  e da categoria '.$categorias[$i];
        }
    }
  }else if($idade <= 18){
    for($i = 0; $i < count($categorias);$i ++){
        if($categorias[$i] == 'adolescente'){
            echo 'O nadador '.$nome.'  e da categoria '.$categorias[$i];
        }
    }
  }else{
    for($i = 0; $i < count($categorias);$i ++){
        if($categorias[$i] == 'adulto'){
            echo 'O nadador '.$nome.'  e da categoria '.$categorias[$i];
        }
    }
  }