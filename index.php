<?php
    session_start();
?>
<html lang="pt-br">
    <head>  
        <meta charset = "UTF-8">
        <meta name="viewport" content = "width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <title> Formulário para Contato </title>
        <link rel = "stylesheet" type = "text/css" href = "style.css">
    </head>
    <body>
        <?php
        if( isset( $_SESSION['msg'] ) ){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
    <section class = "content">
        <div class = "contato">
            <h3> Formulário de Contato </h3>
        <form class = "form" method = "POST" action = "processar_cadastra_mensagem.php"> 
            <input class = "field" type = "text" name = "nome" placeholder = "Nome Completo " required> <br> <br>
            <input class = "field" type = "email" name = "email" placeholder = "E-mail" required> <br> <br>  
            <input class = "field" type = "text" name = "assunto" placeholder = "Assunto" required> <br> <br>
            <textarea class = "field" name = "mensagem" placeholder = "Digite sua mensagem aqui"></textarea> 
            <input class = "field" name = "enviar" type = "submit" value = "Enviar" >
        </form>
        </div>
    </section>  
    </body>
</html>      
 