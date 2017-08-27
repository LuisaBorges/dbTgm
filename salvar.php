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

			$cpf = substr($cpf,0,3) . substr($cpf,4,3) . substr($cpf,8,3) . substr($cpf,12,2);

			$sql = "INSERT INTO `docente`(`id_docente`, `usuarios_id_usuarios`, `nome_docente`, `cpf_docente`, `matricula_docente`, `status_docente`) VALUES (NULL, '$id_conta', '$nome', '$cpf', '$matricula', '1')";

			$conn->query($sql);

			$sql = "SELECT * FROM `usuarios` WHERE `id_usuarios` = '$id_conta'";

			$result = $conn->query($sql);

			$row = $result->fetch_assoc();

			header("Location: home.php?page=cadastrar-docente&res=ok&id=".$id_conta."&email=".$row["email_usuario"]);

		break;

		case "exclusao-docente":
			$id_usuario = $_REQUEST["id"];
			$id_docente = $_REQUEST["id_docente"];

			$sql = "DELETE FROM `docente` WHERE `docente`.`id_docente` = '$id_docente'";

			$conn->query($sql);

			$sql = "SELECT * FROM `usuarios` WHERE `id_usuarios` = '$id_usuario'";

			$result = $conn->query($sql);

			$row = $result->fetch_assoc();

			header("Location: home.php?page=visualizar-docente&res=deleteok&id=".$id_usuario."&email=".$row["email_usuario"]);
		break;
		case "atualizacao-docente":
			$id_usuario = $_REQUEST["id"];
			$id_docente = $_REQUEST["id_docente"];
			$nome = $_REQUEST["nome_docente"];
			$cpf = $_REQUEST["cpf_docente"];
			$matricula = $_REQUEST["matricula_docente"];
			if(strlen($cpf) == 14)
				$cpf = substr($cpf,0,3) . substr($cpf,4,3) . substr($cpf,8,3) . substr($cpf,12,2);

			$sql = "UPDATE `docente` SET `nome_docente` = '$nome', `cpf_docente` = '$cpf', `matricula_docente` = '$matricula'  WHERE `docente`.`id_docente` = $id_docente;";
			
			$conn->query($sql);

			$sql = "SELECT * FROM `usuarios` WHERE `id_usuarios` = '$id_usuario'";

			$result = $conn->query($sql);

			$row = $result->fetch_assoc();

			header("Location: home.php?page=visualizar-docente&res=updateok&id=".$id_usuario."&email=".$row["email_usuario"]);
		break;		

		case "cadastro-disciplina":
			$id = $_REQUEST["id"];
			$nome = $_REQUEST["nome_disciplina"];
			$turno = $_REQUEST["turnoRadio"];

			$sql = "INSERT INTO `disciplina` (`id_disciplina`, `usuarios_id_usuarios`, `nome_disciplina`, `cod_cargaHoraria`) VALUES (NULL, '$id', '$nome','$turno');";


			$conn->query($sql);

			$sql = "SELECT * FROM `usuarios` WHERE `id_usuarios` = '$id'";

			$result = $conn->query($sql);

			$row = $result->fetch_assoc();

			header("Location: home.php?page=cadastrar-disciplina&res=ok&id=".$id."&email=".$row["email_usuario"]);
		break;

		case "exclusao-disciplina":
			$id = $_REQUEST["id"];
			$id_disciplina = $_REQUEST["id_disciplina"];

			$sql = "DELETE FROM `disciplina` WHERE `disciplina`.`id_disciplina` = '$id_disciplina'";

			$conn->query($sql);

			$sql = "SELECT * FROM `usuarios` WHERE `id_usuarios` = '$id'";

			$result = $conn->query($sql);

			$row = $result->fetch_assoc();

			header("Location: home.php?page=visualizar-disciplina&res=deleteok&id=".$id."&email=".$row["email_usuario"]);

		break;

		case "atualizacao-disciplina":
			$id = $_REQUEST["id"];
			$id_disciplina = $_REQUEST["id_disciplina"];
			$nome = $_REQUEST["nome_disciplina"];
			$turno = $_REQUEST["turnoRadio"];

			$sql = "UPDATE `disciplina` SET `nome_disciplina` = '$nome', `cod_cargaHoraria` = '$turno' WHERE `id_disciplina` = '$id_disciplina'";

			$conn->query($sql);

			$sql = "SELECT * FROM `usuarios` WHERE `id_usuarios` = '$id'";

			$result = $conn->query($sql);

			$row = $result->fetch_assoc();

			header("Location: home.php?page=visualizar-disciplina&res=updateok&id=".$id."&email=".$row["email_usuario"]);
		break;
	}
?>