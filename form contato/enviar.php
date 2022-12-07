<?php
  $to= "carloshenriguejk@gmail.com"; //destinatario

  $assunto = "Formulario do site ";

  $mensagem = $_POST['mensagem']." - " .$_POST['nome'];

  $email = $_POST['email'];

  // To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: $to';
$headers[] = 'From: $email';


 $status = mail( $to, $assunto,   $mensagem,  implode("\r\n", $headers));

 if ( $status==true) {
   print "Mensagem foi Enviada com sucesso!";
 }else {
    print "Mensagem não foi Enviada !" ;
}
