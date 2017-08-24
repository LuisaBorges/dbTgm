<h1>Atualizar</h1>
<?php
	$id = @$_REQUEST["id"];

	$sql = "SELECT * FROM `usuarios` WHERE `id_usuarios` = '$id'";

	$result = $conn->query($sql);
	if($result->num_rows>0)
	{
		$row = $result->fetch_assoc();
	}
?>
<?php if(@$_REQUEST["res"]=="ok"){ ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	Atualizado com sucesso
</div>
<?php }elseif(@$_REQUEST["res"]=="notok"){?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	O e-mail já está sendo utilizado.
</div>
<?php } ?>
<form action="validar.php?acao=validar-atualizar&id=<?php print $id ?>" method="POST" class="espacamentoform">
	<label for="email_login">E-mail:</label>
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
		<input type="email" class="form-control" name="email_atualizar" id="email_login" placeholder="E-mail" maxlength="50" value="<?php print $row["email_usuario"] ?>" required>
	</div>
	<label for="senha_login">Nova senha:</label>
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></div>
		<input type="password" class="form-control" name="senha_atualizar" id="senha_login" minlength="5" maxlength="20"  required>
	</div>
	<label for="senha_login_conf">Confirme a sua senha:</label>
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></div>
		<input type="password" class="form-control" id="senha_login_conf" oninput="javascript: validaSenha()" minlength="5" maxlength="20" data-container="body" data-toggle="popover" data-placement="right" data-content="As senhas estão diferentes." required>
	</div>					
	<button type="submit" class="btn btn-primary btn-lg btn-block" id="enviaForm">Atualizar</button>	
</form>