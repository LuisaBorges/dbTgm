<?php
	include("config.php");
	
	switch(@$_REQUEST["acao"]){
		case "cadastrar-usuario":
			$email = $_REQUEST["email_login"];
			$senha = $_REQUEST["senha_login"];

			$sql = "INSERT INTO `usuarios` (`id_usuarios`, `email_usuario`, `senha_usuario`, `status_usuario`) VALUES (NULL, '$email', '$senha', '1')";

			$conn->query($sql);

			header("Location: cadastro.php?res=ok");
		break;
		case "atualizar-usuario":
			$id = $_REQUEST["id"];
			$email = $_REQUEST["email_atualizar"];
			$senha = $_REQUEST["senha_atualizar"];

			$sql = "UPDATE `usuarios` SET `email_usuario` = '$email' AND `senha_login` = '$senha' WHERE `usuarios`.`id_usuarios` = '$id'";

			$conn->query($sql);

			header("Location: adusuario.php?res=ok&id=".$id."email=".$email);
		break;
	}
?>