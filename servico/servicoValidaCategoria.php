<?php
function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    if(validaNome($nome) && validaIdade($idade)){
removeMensagemErro();
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
if ($idade >= 6 and $idade <= 12) {
    for ($i = 0; $i < count($categorias); $i++) {
      if ($categorias[$i] == 'infantil') {
        setMensagemSucesso('O nadador ' . $nome . '(' . $idade . ' anos) e da categoria ' . $categorias[$i]);
        return null;
      }
    }
  } else if ($idade <= 18) {
    for ($i = 0; $i < count($categorias); $i++) {
      if ($categorias[$i] == 'adolescente') {
        setMensagemSucesso('O nadador ' . $nome . '(' . $idade . ' anos) e da categoria ' . $categorias[$i]);
        return null;
      }
    }
  } else {
    for ($i = 0; $i < count($categorias); $i++) {
      if ($categorias[$i] == 'adulto') {
        setMensagemSucesso('O nadador ' . $nome . '(' . $idade . ' anos) e da categoria ' . $categorias[$i]);
        return null;
      }
    }
  }
}else{
    removeMensagemSucesso();
    return getMensagemErro();
}
  

}