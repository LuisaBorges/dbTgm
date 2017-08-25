<?php
	//busca as páginas internas
	include("config.php");
	
	switch(@$_REQUEST["acao"])
	{
		case "validar-cadastro":
			$email = $_REQUEST["email_login"];
			$senha = $_REQUEST["senha_login"];
			
			$sql = "SELECT * FROM `usuarios` WHERE `email_usuario` = '$email' ";

			$result = $conn->query($sql);

			if($result->num_rows>0)
			{			
				header("Location: cadastro.php?res=notok");
			}
			else
			{
				header("Location: salvar.php?acao=cadastrar-usuario&email_login=$email&senha_login=$senha");
			}
		break;

		case "validar-login":
			$email = $_REQUEST["email_login"];
			$senha = $_REQUEST["senha_login"];

			$sql = "SELECT * FROM `usuarios` WHERE `email_usuario` = '$email' AND senha_usuario = '$senha' LIMIT 1";

			$result = $conn->query($sql);

			if($result->num_rows>0)
			{
				$row = $result->fetch_assoc();

				header("Location: home.php?id=".$row["id_usuarios"]."&email=".$row["email_usuario"]);
			} 
			else
			{
				header("Location: login.php?res=notok");
			}
		break;

		case "validar-atualizar-email":
			$id = $_REQUEST["id"];
			$email = $_REQUEST["email_atualizar"];
			$senha = $_REQUEST["senha_atualizar"];

			$sql = "SELECT * FROM `usuarios` WHERE `email_usuario` = '$email'";
			
			$result = $conn->query($sql);

			if($result->num_rows>0)
			{	
				header("Location: home.php?page=adusuario&res=notok&id=".$id."&email=".$email);
			}
			else
			{
				$sql = "SELECT * FROM `usuarios` WHERE `id_usuarios` = '$id'";

				$result = $conn->query($sql);
				
				if($result->num_rows>0)
				{
					$row = $result->fetch_assoc();

					if($senha === $row["senha_usuario"])
					{
						header("Location: salvar.php?acao=atualizar-usuario-email&id=".$id."&email_atualizar=".$email);
					}
				}
				else
				{
					header("Location: home.php?page=adusuario&res=notok&id=".$id."&email=".$email);
				}
			}
		break;

		case "validar-atualizar-senha":
			$id = $_REQUEST["id"];
			$senha = $_REQUEST["senha_atualizar"];
			$senhaNova = $_REQUEST["senha_atualizar_nova"];

			$sql = "SELECT * FROM `usuarios` WHERE `id_usuarios` = '$id'";

			$result = $conn->query($sql);

			if($result->num_rows>0)
			{
				$row = $result->fetch_assoc();

				if($senha === $row["senha_usuario"])
				{
					header("Location: salvar.php?acao=atualizar-usuario-senha&id=".$id."&senha_nova=".$senhaNova);
				}
			}
			else
			{
				print "<script>location.href='?page=adusuario&res=notok&id=".$id."email=".$row["email_usuario"].";</script>";
			}
		break;
	}
?>