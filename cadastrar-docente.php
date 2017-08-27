<ol class="breadcrumb">
	<li class="breadcrumb-item"><a class="testA" <?php print" href=home.php?id=".@$_REQUEST["id"]."&email=".@$_REQUEST["email"]; ?>> <span class="subLink">Home</span> </a></li>
	<li class="breadcrumb-item active">Docente</li>
	<li class="breadcrumb-item active">Cadastrar Docente</li>
</ol>

<?php if(@$_REQUEST["res"]=="ok"){ ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	Cadastro de docente efetuado com sucesso!
</div>
<?php }?>


<h1 class="masterTitulo">Cadastrar Docente</h1>
<div class="subTitulo">Preencha todos os campos para realizar o cadastro</div>
<div class="cadastrarDocenteClass"> 
	<form action="salvar.php?acao=cadastro-docente&id=<?php print $_REQUEST["id"] ?>" method="POST" class="espacamentoform">
		<label for="nome_docente">Nome</label>
		<div class="input-group">
			<input type="text" class="form-control" name="nome_docente" id="nome_docente" minlength="1" maxlength="50" required>
		</div>
		<label for="cpf_docente">CPF</label>
		<div class="input-group">
			<input type="text" class="form-control" name="cpf_docente" id="cpf_docente" minlength="14" maxlength="14" onchange="javascript: mascaraCpf()" data-container="body" data-toggle="popover" data-placement="right" data-content="Por favor, digite um CPF válido."  required>
		</div>
		<label for="matricula_docente">Matrícula</label>
		<div class="input-group">
			<input type="text" class="form-control" name="matricula_docente" id="matricula_docente" minlength="5" maxlength="20" required>
		</div>					
		<button type="submit" class="btn btn-primary btn-lg enviaFormPadrao" >Cadastrar</button>
		<button type="reset" class="btn btn-secondary btn-lg limpaCampos" >Limpar</button>
	</form>
</div>
<div class="associarDisciplinaClass">
	<h1 class="masterTitulo">Associar Disciplina</h1>
	<div class="subTitulo">Preencha todos os campos para realizar o cadastro</div>
</div>
<div class="associarDisponibilidadeClass">
	<h1 class="masterTitulo">Associar Disponibilidade</h1>
	<div class="subTitulo">Preencha todos os campos para realizar o cadastro</div>
</div>