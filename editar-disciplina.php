<ol class="breadcrumb">
	<li class="breadcrumb-item"><a class="testA" <?php print" href=home.php?id=".@$_REQUEST["id"]."&email=".@$_REQUEST["email"]; ?>> <span class="subLink">Home</span> </a></li>
	<li class="breadcrumb-item active">Disciplina</li>
	<li class="breadcrumb-item active">Visualizar Disciplina</li>
</ol>
<h1 class="masterTitulo">Editar Disciplina</h1>
<div class="subTitulo">Preencha todos os campos para realizar a atualização</div>
<?php
    //include("config.php");
	
	if(isset($_REQUEST["id_disciplina"])){
		$sql = "SELECT * FROM `disciplina` JOIN `usuarios` ON disciplina.id_disciplina = '".$_REQUEST["id_disciplina"]."'";
	            //die($sql);
		$result = $conn->query($sql);

		$row = $result->fetch_assoc();
?>
<div class="cadastrarDocenteClass"> 
	<form action="salvar.php?acao=atualizacao-disciplina&id=<?php print $_REQUEST["id"] ?>&id_disciplina=<?php print $_REQUEST["id_disciplina"] ?>" method="POST" class="espacamentoform">
		<label for="nome_disciplina">Disciplina</label>
		<div class="input-group">
			<input type="text" class="form-control" name="nome_disciplina" id="nome_disciplina" minlength="1" maxlength="50" value="<?php print $row["nome_disciplina"]; ?>" required>
		</div>

		<label for="turno_disciplina">Carga horaria</label>
		<?php
			if($row["cod_cargaHoraria"] == 2)
			{
		?>
		<div class="form-check">
		  <label class="form-check-label">
		    <input class="form-check-input" type="radio" name="turnoRadio" id="turno2h" value="2" checked>
		    2 Horas/aula
		  </label>
		</div>
		<div class="form-check">
		  <label class="form-check-label">
		    <input class="form-check-input" type="radio" name="turnoRadio" id="turno4h" value="4">
		    4 Horas/aula
		  </label>
		</div>		
		<?php }else{ ?>
		<div class="form-check">
		  <label class="form-check-label">
		    <input class="form-check-input" type="radio" name="turnoRadio" id="turno2h" value="2">
		    2 Horas/aula
		  </label>
		</div>
		<div class="form-check">
		  <label class="form-check-label">
		    <input class="form-check-input" type="radio" name="turnoRadio" id="turno4h" value="4" checked>
		    4 Horas/aula
		  </label>
		</div>		
		<?php } ?>

		<button type="submit" class="btn btn-primary btn-lg enviaFormPadrao" >Cadastrar</button>
		<button type="reset" class="btn btn-secondary btn-lg limpaCampos" >Limpar</button>
	</form>
	<?php
		}else{
			print "<div class='alert alert-info' role='alert'>
					Nenhuma disciplina selecionada. Vá para a <a class=\"testA\" href='?page=visualizar-disciplina&id=".$_REQUEST['id']."&email=".$_REQUEST['email']."'>Visualização de disciplinas</a>";
		}
	?>
</div>