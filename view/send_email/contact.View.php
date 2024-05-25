<?php
require "setting/Mail.php";
$nome = trim(strip_tags(filter_input(INPUT_POST, 'name', FILTER_DEFAULT)));
$email = trim(strip_tags(filter_input(INPUT_POST, 'email', FILTER_DEFAULT)));
$celular = trim(strip_tags(filter_input(INPUT_POST, 'phone', FILTER_DEFAULT)));
$orcamento = trim(strip_tags(filter_input(INPUT_POST, 'budget', FILTER_DEFAULT)));
$assunto = trim(strip_tags(filter_input(INPUT_POST, 'subject', FILTER_DEFAULT)));
$headerEmail = trim(strip_tags(filter_input(INPUT_POST, 'message', FILTER_DEFAULT)));

function Validador($input){
  if($input == null || $input == '' || $input == '‎' || empty($input)){
    return true;
  }else{
    return false;
  }
}

if( 
  Validador($nome) == true 
&& 
  Validador($nome) == true 
&&  
  Validador($email) == true 
&&  
  Validador($celular) == true 
&& 
  Validador($assunto) == true 
&&  
  Validador($headerEmail) == true 
  ){
    $_SESSION['error'] = 'input_vasio';
    header('Location: ?pagina=home');
    die();
}

$message = "
<!DOCTYPE html>
<html lang='pt-BR'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Email HTML</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .email-container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 20px;
      border: 1px solid #dddddd;
    }

    .header {
      background-color: #4e4caf;
      color: #ffffff;
      padding: 10px 0;
      text-align: center;
    }

    .content {
      padding: 20px;
      text-align: left;
    }

    .footer {
      background-color: #f4f4f4;
      color: #333333;
      padding: 10px 0;
      text-align: center;
      font-size: 12px;
    }

    .button {
      display: inline-block;
      padding: 10px 20px;
      color: #ffffff;
      background-color: #4e4caf;
      text-decoration: none;
      border-radius: 5px;
    }

    span {
      color: #333333;
      font-weight: 600;
    }
  </style>
</head>

<body>
  <div class='email-container'>
    <div class='header'>
      <h1>Nova mensagem</h1>
    </div>
    <div class='content'>
      <p>Olá,</p>
      <p>Foi enviado uma mensagem pelo site <a href='https://paulodevelop.com.br/'>paulodevelop.com.br</a>!</p>
      <br>
      <p><span>Nome: </span> " . $nome . "</p>
      <p><span>E-mail:</span> " . $email . "</p>
      <p><span>Celular:</span> " . $celular . "</p>
      <p><span>Orçamento:</span> " . $orcamento . "</p>
      <p><span>Assunto:</span> " . $assunto . "</p>
      <p><span>Mensagem:</span> " . $headerEmail . "</p>
      <br>
      <p>Atenciosamente,<br>Equipe do Paulo develop</p>
    </div>
    <div class='footer'>
      <p>&copy; 2024 Paulo develop. Todos os direitos reservados.</p>
    </div>
  </div>
</body>

</html>"
;
enviarEmail($assunto, $message);

?>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
  }

  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .message-sent {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
  }

  .message-sent h2 {
    color: #4CAF50;
  }

  .message-sent p {
    color: #333333;
    margin-bottom: 20px;
  }

  .message-sent a {
    display: inline-block;
    background-color: #4CAF50;
    color: #ffffff;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s;
  }

  .message-sent a:hover {
    background-color: #45a049;
  }
</style>
<main class="view" id="view">
  <div class="container">
    <div class="message-sent">
      <h2>Mensagem Enviada!</h2>
      <p>Sua mensagem foi enviada com sucesso.</p>
      <a href="index.php">Voltar para a página inicial</a>
    </div>
  </div>
</main>