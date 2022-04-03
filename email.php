<?php


if (isset($_POST['nome'])  && !empty($_POST['email']))   {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['mensag']);


$to = "marcielle0644@gmail.com";
$subject = "Contato - Programador";
$body = "Nome:".$nome."\r\n".
 "Email:".$email."\r\n".
  "mensagem:".$mensagem;

$header = "From:marciellejorge812@gmail.com"."\r\n"
."Replay-To".$email."\e\n"
."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo "email enviado";
}else{
  echo "nao enviado";
}

}
