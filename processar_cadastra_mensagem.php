<?php   
session_start();
include_once 'conexao.php';

//Verifica se o usuário clicou no botão 
$enviar = filter_input(INPUT_POST, 'enviar', FILTER_SANITIZE_STRING);
if ( $enviar ){
    //Receber os dados do formulário
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

    //Inserir no Banco de dados
    $resultado_mensagem = "INSERT INTO mensagens_contatos (nome, email, assunto, mensagem) VALUES (:nome, :email, :assunto, :mensagem)";

    $insert_mensagem_contato = $conexao->prepare( $resultado_mensagem );  
    $insert_mensagem_contato->bindParam(':nome', $nome);
    $insert_mensagem_contato->bindParam(':email', $email);
    $insert_mensagem_contato->bindParam(':assunto',$assunto);
    $insert_mensagem_contato->bindParam(':mensagem',$mensagem);

    if( $insert_mensagem_contato->execute() ){
        $_SESSION ['msg'] = "<p style = 'color:green;'> Mensagem foi enviada com sucesso </p>";
        header("Location: index.php");

    }else{
        $_SESSION ['msg'] = " <p style = 'color:red;'> Mensagem não foi enviada com sucesso </p>";
        header("Location: index.php");

    }

}else{
    $_SESSION ['msg'] = "<p style = 'color:red;'> Mensagem não foi enviada com sucesso </p>";
    header("Location: index.php");
}
