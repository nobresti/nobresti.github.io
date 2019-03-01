<?php
if(!empty($_POST)){
	$cab = "From: ".$_POST['name']." <".$_POST['email'].">\n";

	$mensagem = "Contato via site - nobresti.com.br\n";
	$mensagem.= "Nome: ".$_POST['name']." \n";
	$mensagem.= "Email: ".$_POST['email']." \n";
	$mensagem.= "Assunto: ".$_POST['subject']." \n";
	$mensagem.= "Mensagem: ". $_POST['mensagem'];
    $index = "../index.html";

    /*
    "contato@nobresti.com.br, emanuel@nobresti.com.br, fernando@nobresti.com.br, jessiely@nobresti.com.br"
    */
    
	if(mail("contato@nobresti.com.br, emanuel@nobresti.com.br, fernando@nobresti.com.br, jessiely@nobresti.com.br", "Contato - nobresti.com.br", $mensagem,$cab)){
		echo "<script>alert('Mensagem enviada com sucesso!');</script>";
		sleep(3);
		header("Location: index.html");
	}
	else{
		echo "<script type=\"text/javascript\">alert(\"Ocorreu um erro ao tentar enviar sua mensagem.\");history.go(-1);</script>\n";
	}
}
else{
	header("Location: contato.html");
}
?> 