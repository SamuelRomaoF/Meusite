<?php
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);

$para = "ofc.samuelromao@gmail.com";
$assunto = "contato - Agencia SML";

$corpo = "nome: " . $nome . "\n" . "E-mail: " . $email . "\n" . "telefone" . $telefone;

$cabeca = "From: ofc.samuelromao@gmail.com" . "\n" . "Reply-to: " . $email . "\n" . "X=Mailer:PHP/" . phpversion();

if (mail($para, $assunto, $corpo, $cabeca)) {
    echo ("E-mail enviado com sucesso!");
} else {
    echo ("Houve um erro ao enviar o email!");
}

?>