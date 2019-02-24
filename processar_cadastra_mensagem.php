<?php   
session_start();
include_once 'conexao.php';

//Verifica se o usuário clicou no botão 
$enviar = filter_input(INPUT_POST, 'enviar', FILTER_SANITIZE_STRING);
if ( $enviar ){
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);



}else{
    $_SESSION ['msg'] = "<p style='color:red;'> Mensagem não foi enviada com sucesso </p>";
    header("Location: index.php");
}
