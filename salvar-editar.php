<?php
	switch(@$_REQUEST["acao"]){
		case "editar-usuario":
		
			$nome = $_REQUEST["nome_usuario"];
			$senha = $_REQUEST["senha_usuario"];
			$id = $_REQUEST["id"];
			
			
			$sql = "UPDATE `usuarios` SET `nome_usuario`='$nome', `senha_usuario`='$senha' WHERE `usuarios`.`id_usuarios`= $id";
			
			$result = $conn->query($sql);
			
			if($result){				
				print "<script>location.href='?page=atualizar-usuario&res=ok&usu=1&id=".$id."';</script>";
			}else{
				print "Não foi possível atualizar!";
			}
		break;
		
		case "excluir-usuario":
		
			$id = $_REQUEST["id"];
			$sql = "UPDATE `usuarios` SET `status_usuario` = '0' WHERE `usuarios`.`id_usuarios` = ".$id;
			
			
			$result = $conn->query($sql);
			
			if($result){				
				print "<script>location.href='?page=excluir-usuario&res=ok&usu=1&id=".$id."';</script>";
			}else{
				print "Não foi possível atualizar!";
			}
		break;
		
		case "editar-personagem":
			$id_personagem = $_REQUEST["id_personagem"];
			$nome = $_REQUEST["nome_perso"];
			$level = $_REQUEST["level_perso"];
			$guild = $_REQUEST["guild_perso"];
			$fama = $_REQUEST["fama_perso"];
			$kills = $_REQUEST["kills_perso"];
			$id = $_REQUEST["id"];
		
			$sql = "UPDATE `personagens` SET `nome_perso` = '$nome', `level_perso` = '$level', `guild_perso` = '$guild', `fama_perso` = '$fama', `kills_perso` = '$kills' WHERE `personagens`.`id_personagens` = $id_personagem";
		
			$result = $conn->query($sql);
			
			if($result){				
				print "<script>location.href='?page=cadastrar-personagem&res=atualizacao&usu=1&id=".$id."';</script>";
			}else{
				print "Não foi possível atualizar!";
			}
	
		break;
		
		case "excluir-personagem":
		$id_personagens = $_REQUEST["id_personagens"];
	
		$id_usuarios = $_REQUEST["id"];
		
		$sql = "DELETE FROM `personagens` WHERE `personagens`.`id_personagens` = $id_personagens";
		
		$result = $conn->query($sql);
		
		if($result){				
			print "<script>location.href='?page=cadastrar-personagem&res=exclusao&usu=1&id=".$id."';</script>";
		}else{
			print "Não foi possível atualizar!";
		}
		break;
	}
?>












