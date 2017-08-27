<ol class="breadcrumb">
	<li class="breadcrumb-item"><a class="testA" <?php print" href=home.php?id=".@$_REQUEST["id"]."&email=".@$_REQUEST["email"]; ?>> <span class="subLink">Home</span> </a></li>
	<li class="breadcrumb-item active">Disciplina</li>
	<li class="breadcrumb-item active">Cadastrar Disciplina</li>
</ol>

<?php if(@$_REQUEST["res"]=="ok"){ ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	Cadastro de disciplina efetuado com sucesso!
</div>
<?php }?>


<h1 class="masterTitulo">Cadastrar Disciplina</h1>
<div class="subTitulo">Preencha todos os campos para realizar o cadastro</div>
<div class="cadastrarDocenteClass"> 
	<form action="salvar.php?acao=cadastro-disciplina&id=<?php print $_REQUEST["id"] ?>" method="POST" class="espacamentoform">
		<label for="nome_disciplina">Disciplina</label>
		<div class="input-group">
			<input type="text" class="form-control" name="nome_disciplina" id="nome_disciplina" minlength="1" maxlength="50" required>
		</div>

		<label for="turno_disciplina">Carga horaria</label>
		<div class="form-check">
		  <label class="form-check-label">
		    <input class="form-check-input" type="radio" name="turnoRadio" id="turno2h" value="2">
		    2 Horas/aula
		  </label>
		</div>
		<div class="form-check">
		  <label class="form-check-label">
		    <input class="form-check-input" type="radio" name="turnoRadio" id="turno4h" value="4">
		    4 Horas/aula
		  </label>
		</div>		

		<button type="submit" class="btn btn-primary btn-lg enviaFormPadrao" >Cadastrar</button>
		<button type="reset" class="btn btn-secondary btn-lg limpaCampos" >Limpar</button>
	</form>
</div>