<h1>Cadastrar Usuário</h1>
<?php if(@$_REQUEST["res"]=="ok"){ ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	  Cadastro efetuado com sucesso!
	</div>
<?php }elseif(@$_REQUEST["res"]=="inva"){?>
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	O Nome já está sendo utilizado!
	</div>
<?php }elseif(@$_REQUEST["res"]=="not"){ ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  Preencha os campos!
</div>
<?php } ?>

<form action="index.php?page=validar&Validacao=cad" method="POST">
	<div class="form-group">
		<label>Nome do usuário</label>
		<input type="text" name="nome_usuario" class="form-control" maxlength="25" />
		<br>
		<label>Senha</label>
		<input type="password" name="senha_usuario" class="form-control" maxlength="40" />
		<br>
		<button type="submit" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true" ></i> Cadastrar</button>
	</div>
</form>
<br>
<h1>Usuários cadastrados</h1>
<table class="table table-bordered table-striped table-hover">
	<tr>
		<th>Nome</th>
		<th>
			Situação
		</th>
	</tr>
	<?php
		$sql = "SELECT * FROM usuarios";
		
		$result = $conn->query($sql);
		
		if($result->num_rows>0){
			while($row = $result->fetch_assoc()){
				print "<tr>";
				print "<td>".$row["nome_usuario"]."</td>";
				if($row["status_usuario"] == 1){
					print "<td>Ativo <i class='fa fa-check-circle' aria-hidden='true'></i></td>";
					
				}else{
					print "<td>Desativado <i class='fa fa-ban' aria-hidden='true'></i></td>";
				}
				print "</tr>";
			}
		}else{
			print "
			<div class='alert alert-info' role='alert'>
				Sem usuários cadastrados
			</div>
			";
		}
	?>
</table>