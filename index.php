<html lang="pt-br">
    <head>  
        <meta charset = "UTF-8">
        <title> Formulário para Contato </title>
    </head>
    <body>
        <h1> Formulário de Contato </h1>
        <?php


        ?>
        <form method = "post" action = "processar_cadastra_mensagem.php"> 
            <label> Nome: </label>
            <input type = "text" name = "nome" placeholder = "Nome Completo "> <br> <br>

            <label> E-mail: </label>
            <input type = "email" name = "email" placeholder = "E-mail"> <br> <br>  

            <label> Assunto: </label>
            <input type = "text" name = "assunto" placeholder = "Assunto"> <br> <br>

            <label> Mensagem </label>
            <textarea name = "mensagem" rows  = "3" cols = "40"> </textarea> <br> <br>

            <input name = "enviar" type = "submit" value = "Enviar" >

        </form>

    </body>

</html>       