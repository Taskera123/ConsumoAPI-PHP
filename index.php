<!DOCTYPE html>
<html lang="pt-br">
    <head>        
        <meta charset="UTF-8">
        <title> Consumir API </title>
    </head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
    <title>Consumo API</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Bulma Version 0.7.2-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <section class="hero is-info is-small">
      <div class="hero-body">
        <div class="container has-text-centered">
          <p class="title">
            Consumo do metodo nova transação
          </p>
          <p class="subtitle">
            Consumo de API com PHP
          </p>
        </div>
      </div>
    </section>
    <?php
        $host = 'https://hgateway.startpay.com.br/Transacoes/Nova.php';
        $user_name = 'x-uid';
        $password = '230';
        $ch = curl_init($host);
        $headers = array(
                'Content-Type: application/json',
                'Authorization: Basic '. base64_encode("$user_name:$password")
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        if(curl_errno($ch)){
            throw new Exception(curl_error($ch));
        }
        curl_close($ch);
        echo $response;
        ?>
    </body>
</html>