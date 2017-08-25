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

		case "atualizar-usuario-email":
			$id = $_REQUEST["id"];
			$email = $_REQUEST["email_atualizar"];
			
			$sql = "UPDATE `usuarios` SET `email_usuario` = '$email' WHERE `usuarios`.`id_usuarios` = '$id'";
			
			$conn->query($sql);
			
			header("Location: home.php?page=adusuario&res=ok&id=".$id."&email=".$email);
		break;

		case "atualizar-usuario-senha":
			$id = $_REQUEST["id"];
			$senha = $_REQUEST["senha_nova"];

			$sql = "UPDATE `usuarios` SET `senha_usuario` = '$senha' WHERE `usuarios`.`id_usuarios` = '$id'";

			$conn->query($sql);


			$sql = "SELECT * FROM `usuarios` WHERE `id_usuarios` = '$id'";

			$result = $conn->query($sql);

			$row = $result->fetch_assoc();

			header("Location: home.php?page=adusuario&res=ok&id=".$id."&email=".$row["email_usuario"]);
		break;

		case "deletar-conta":
			$id = $_REQUEST["id"];

			$sql = "DELETE FROM `usuarios` WHERE `usuarios`.`id_usuarios` = '$id'";

			$conn->query($sql);

			header("Location: login.php");
		break;

		case "cadastro-docente":
			$id_conta = $_REQUEST["id"];
			$nome = $_REQUEST["nome_docente"];
			$cpf = $_REQUEST["cpf_docente"];
			$matricula = $_REQUEST["matricula_docente"];



			$sql = "INSERT INTO `docente` VALUES (null, '$id_conta', '$nome', '$cpf', '$matricula', '1')";

			$conn->query($sql);

			$sql = "SELECT * FROM `usuarios` WHERE `id_usuarios` = '$id_conta'";

			$result = $conn->query($sql);

			$row = $result->fetch_assoc();

			header("Location: home.php?page=cadastrar-docente&res=ok&id=".$id_conta."&email=".$row["email_usuario"]);

		break;
	}
?>