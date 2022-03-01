 <?php 
   session_start();
 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Primeiro projeto PHP</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width-device-width, initial-scale-1">
    <link rel="stylesheet" href="Css/style.css">
</head>

<body>
    <div class = "box"> 
 <p>FORMULARIO PARA INSCRICAO DE NADADADORES</p>

 <form action="script.php" method = "post" class="form">
     <?php
     /***IF TERNARIO*** 
       *E um if escrito em uma unica linha, o '?' representa a execucao caso seja verdadeiro, ou seja, seria 
      as chaves '{}' no if comum, o ':' representa o else*/
      $mensagemDeSucesso = isset($_SESSION['mensagem de sucesso']) ? $_SESSION['mensagem de sucesso'] : '';
      if(!empty($mensagemDeSucesso)){
          echo $mensagemDeSucesso;
          echo '<br/>';
      }
      $mensagemDeErro = isset($_SESSION['mensagem de erro']) ? $_SESSION['mensagem de erro'] : '';
      if(!empty($mensagemDeErro)){
          echo $mensagemDeErro;
          echo '<br/>';
      }
     ?>
     
    <input type="text" name="nome" placeholder="nome"/> 
    <br/><br/>
    <input type="text" name="idade" placeholder="idade"/> 
    <br/><br/>
    <input type="submit"/>
     </div>   
 </form>
</body> 