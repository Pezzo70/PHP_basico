<?php
 session_start();
 function  setMensagemErro(string $mensagem) : void
 {
     $_SESSION['mensagem de erro'] = $mensagem;
 }
 function getMensagemErro() : ?string // O '?' define que a funcao pode retornar
                                      // tanto string como outro valor, e um coringa
 {
     return isset($_SESSION['mensagem de erro']) ? $_SESSION['mensagem de erro'] : null;
 }
 function  setMensagemSucesso(string $mensagem) : void
 {
     $_SESSION['mensagem de sucesso'] = $mensagem;
 }
 function getMensagemSucesso() : ?string 
 {
     return isset($_SESSION['mensagem de sucesso']) ? $_SESSION['mensagem de sucesso'] : null;
 }

 function removeMensagemErro() : void
 {
    if(isset($_SESSION['mensagem de erro']))
      unset($_SESSION['mensagem de erro']);
 }
 function removeMensagemSucesso() : void
 {
    if(isset($_SESSION['mensagem de sucesso']))
      unset($_SESSION['mensagem de sucesso']);
 }