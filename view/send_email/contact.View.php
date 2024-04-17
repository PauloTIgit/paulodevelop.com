<?php
    $nome = trim(strip_tags(filter_input(INPUT_POST,'name',FILTER_DEFAULT)));
    $email = trim(strip_tags(filter_input(INPUT_POST,'email',FILTER_DEFAULT)));
    $celular = trim(strip_tags(filter_input(INPUT_POST,'phone',FILTER_DEFAULT)));
    $orcamento = trim(strip_tags(filter_input(INPUT_POST, 'budget',FILTER_DEFAULT)));
    $assunto = trim(strip_tags(filter_input(INPUT_POST, 'subject',FILTER_DEFAULT)));
    $headerEmail = trim(strip_tags(filter_input(INPUT_POST, 'message',FILTER_DEFAULT)));
    $ObjCntroller = new Controller;
    $settingEmail = $ObjCntroller->settingEmail($nome,$email,$celular,$orcamento,$assunto,$headerEmail);
    if($settingEmail != '403'){
        $logMessage =  "Error 403: ao gerar E-mail " . date("Y-m-d H:i:s") . "\n" .$settingEmail . " EMAIL = ".$email . " CONTATO ".$celular." MENSAGEM " . $headerEmail."\n" ;
        $logPath = "log/view/error_log_Email". date("Y-m-d") . ".txt";
        file_put_contents($logPath, $logMessage, FILE_APPEND);
    }elseif($$settingEmail === '500'){
        $logMessage =  "Error 500: ao enviar E-mail " . date("Y-m-d H:i:s") . "\n" .$settingEmail . " EMAIL = ".$email . " CONTATO ".$celular." MENSAGEM " . $headerEmail."\n" ;
        $logPath = "log/view/error_log_Email". date("Y-m-d") . ".txt";
        file_put_contents($logPath, $logMessage, FILE_APPEND);
    }else{
        $logMessage =  "Error desconhecido: ao enviar E-mail " . date("Y-m-d H:i:s") . "\n" .$settingEmail . " EMAIL = ".$email . " CONTATO ".$celular." MENSAGEM " . $headerEmail."\n" ;
        $logPath = "log/view/error_log_Email". date("Y-m-d") . ".txt";
        file_put_contents($logPath, $logMessage, FILE_APPEND);
    }

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