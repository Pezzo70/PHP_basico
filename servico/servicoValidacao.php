<?php 
//declare('strict type-1');  transforma php em tipado
function validaNome(string $nome) : bool
{
    if (empty($nome) or $nome[0] == ' ') {
        setMensagemErro('O campo nome nao pode ser vazio');
        return false;
      } else if (strlen($nome) < 3 or strlen($nome) > 40)
      {
        setMensagemErro('O nome deve conter entre 3 a 40 caracteres.');
        return false;
    }
        return true;
}
function validaIdade(string $idade) : bool
{

    if (!is_numeric($idade)) {
        setMensagemErro('A idade deve ser numerica.');
        return false;
    }else if(empty($idade)){
           setMensagemErro('O campo idade nao pode ser vazio');
            return false;        
        } 
        return true;
}
