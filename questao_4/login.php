<?php 
	# Recebendo os dados do formulário
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	# Testar os dados para esse login
	if($email != "joao2023@gmail.com"){		
		header("location: index.php?msg=email_nao_encontrado");
	}elseif($senha != 'qwe123'){
		header("location: index.php?msg=senha_incorreta");
	}else{
		header("location: index.php?msg=login_sucedido");
	}
?>