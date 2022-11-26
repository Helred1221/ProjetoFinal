<!DOCTYPE html>

<html lang="pt-br">
	<head>
    	<meta http-equiv="content-type" charset="utf-8"/>
        <title>contato</title>
                
	</head>
<body>

	<?php
		//Recebendo os dados do formulário.
		
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$assunto = $_POST["assunto"];
		$mensagem = $_POST["comentario"];
		
		$conteudo = "Nome: $nome <br>E-mail: $email Assunto: $assunto <br> Mensagem: $mensagem";
		$emaildestino = "rluisdecarvalho31@gmail.com";
		$headers = "MINE_Version: 1.0\r\n";
		$headers .="Content-type: text/html; charset=iso-8859-1\rzn";
		$headers .="From: $email";
		$assuntodoemail = "Teste - Contato do site";
		
		$enviar = mail($emaildestino, $assuntodoemail, $conteudo, $headers);
		
		if($enviar)
		{
			echo "<script type='text/javascript'>
			alert('Contato Enviado com Sucesso!');
			window.location.href='contato.html';
			</script>";
		}
		else
		{
			echo "<script type='text/javascript'>
			alert('Ocorreu algum erro ao enviar o fomul&Aacute;rio');
			</acript>";
		}

	?>
</body>
</html>