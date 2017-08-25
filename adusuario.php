<?php
	include("config.php");
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


<h1>Alterar E-mail</h1>
<form action="validar.php?acao=validar-atualizar-email&id=<?php print $id ?>" method="POST" class="espacamentoform">
	<label for="email_login">E-mail:</label>
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
		<input type="email" class="form-control" name="email_atualizar" id="email_login" placeholder="E-mail" maxlength="50" value="<?php print $row["email_usuario"] ?>" required>
	</div>
	<label for="senha_login">senha:</label>
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></div>
		<input type="password" class="form-control" name="senha_atualizar" id="senha_login" minlength="5" maxlength="20"  value="<?php print $row["senha_usuario"] ?>" required>
	</div>
	<label for="senha_login_conf">Repetir senha:</label>
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></div>
		<input type="password" class="form-control" id="senha_login_conf" oninput="javascript: validaSenha()" minlength="5" maxlength="20" data-container="body" data-toggle="popover" data-placement="right" data-content="As senhas estão diferentes." required>
	</div>					
	<button type="submit" class="btn btn-primary btn-lg btn-block" id="enviaForm">Atualizar</button>	
</form>


<h1>Alterar Senha</h1>
<form action="validar.php?acao=validar-atualizar-senha&id=<?php print $id ?>" method="POST" class="espacamentoform">
	<label for="senha_login">Senha antiga:</label>
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></div>
		<input type="password" class="form-control" name="senha_atualizar" id="senha_login" minlength="5" maxlength="20" value="<?php print $row["senha_usuario"] ?>" required>
	</div>
	<label for="senha_login">Senha nova:</label>
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></div>
		<input type="password" class="form-control" name="senha_atualizar_nova" id="senha_login_nova" minlength="5" maxlength="20"  required>
	</div>
	<label for="senha_login_conf">Repetir senha:</label>
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></div>
		<input type="password" class="form-control" id="senha_login_conf2" oninput="javascript: validaSenhaNova()" minlength="5" maxlength="20" data-container="body" data-toggle="popover" data-placement="right" data-content="As senhas estão diferentes." required>
	</div>
	<button type="submit" class="btn btn-primary btn-lg btn-block" id="enviaForm">Atualizar</button>
</form>


<h1>Deletar conta</h1>
<form action="salvar.php?acao=deletar-conta&id=<?php print $id ?>" method="POST" class="espacamentoform">
	<label for="senha_login">Escreva "Deletar" para deletar a conta</label>
	<div class="input-group">
		<input type="text" class="form-control" id="deletar" minlength="5" maxlength="20" oninput="javascript: validaMensagem()" required>
	</div>
	<button type="submit" class="btn btn-primary btn-lg btn-block" id="enviaFormDeletar">Deletar</button>
</form>