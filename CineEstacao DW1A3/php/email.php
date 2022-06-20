<?php

/* 
    o navegador nao interpreta o php entao ele só exibe o codigo da pasta, é necessario um servidor 
*/

if(isset($_POST(['email']) && !empty($_POST(['email']))))

$nome = addslashes($_POST(['name']))
$email = addslashes($_POST(['email']))
$mensagem = addslashes($_POST(['message']))

$to = "contato@cineestacao.com.br"
$subject = "Contato - Cine Estacao"
$body = "Nome: ".$nome. "\n"
        "Email: ".$email. "\n"
        "Mensagem: ".$mensagem;
$header = "From: cineestacao@cineestacao.com.br"."\r\n"
        ."Reply-to:".$email."\e\n"
        ."X=Mailer:PHP/".phpversion();

       if (mail($to,$subject,$body,$header)){

        echo("Email enviado com sucesso!")
       }else{
        echo("Ocorreu um erro durante o envio")";"
       }

     

?>