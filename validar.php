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
	}
?>