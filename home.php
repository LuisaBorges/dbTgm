<!DOCTYPE html>
<!--connect db -->
<html lang="pt-BR">
	<head>	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<title>Time Grid Maker</title>


		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

		<style>
			body
			{
				width: 100%;
			}
			.container
			{
				position: relative;
				/*padding: 10px 0px 0px 10px; */
 				margin: 0;
			}
			#faDoc
			{
				margin-right: 15px;
			}
			#faTur
			{
				margin-right: 10px;
			}
			#faDis
			{
				margin-right: 13px;
			}
			#faGe
			{
				margin-right: 15px;
			}
			#faChe
			{
				margin-left: 90px;
			}
			#faChe1
			{
				margin-left: 97px;
			}
			#faChe2
			{
				margin-left: 80.7px;
			}
			#test
			{
				color: black;
			}
			#test:hover
			{
				color: #0000CD;
			}
			.clDoc:hover
			{
				color: #0000CD;
			}
			.clTur:hover
			{
				color: #0000CD;
			}
			.clDis:hover
			{
				color: #0000CD;
			}
			.clGer:hover
			{
				color: #0000CD;
			}
			.hiddenHidden
			{
				display: none;
			}
			.liHo:hover
			{
				color: #0000CD;
			}
			#fafa
			{
				margin-right: 10px;
			}
			.ulHo, .list-group
			{
				list-style-type: none;
			}
			a:link, a:visited
			{
				text-decoration: none;
				color: black;
			}
			a:hover
			{
				color: #0000CD;
			}

			.row
			{
				margin-top: 10px;
			}
		</style>

	</head>
	<body>		
		<nav class="navbar navbar-dark bg-primary">
			<a class="navbar-brand" <?php print" href=home.php?id=".@$_REQUEST["id"]."&email=".@$_REQUEST["email"]; ?> >TIME GRID MAKER</a>

			<span class="navbar">
		    	<?php print @$_REQUEST["email"]; ?> &nbsp; <a <?php print "href='?page=adusuario&id=".$_REQUEST["id"]."&email=".$_REQUEST["email"]."'" ?>> <i class="fa fa-cog fa-lg" aria-hidden="true"></i></a> &nbsp; <a href="index.php"><i id="test" class="fa fa-sign-out fa-lg" aria-hidden="true"></i> </a>
		    </span>
		</nav>

		<div class="container-fluid">
			<div class="row">
				<div class="col-3">
					<ul class="list-group">
						<li class="clDoc" onclick="javascript: clickAba(1)" ><i id="faDoc" class="fa fa-user" aria-hidden="true"></i>Docente
						<i id="faChe" class="fa fa-chevron-down" aria-hidden="true" ></i></li>

						<div id="abaDoc" class="hiddenHidden">
							<ul class="ulHo">
								<li class="liHo">
								<a <?php print "href='?page=cadastrar-docente&id=".$_REQUEST["id"]."&email=".$_REQUEST["email"]."'" ?>>
								<i id="fafa" class="fa fa-user-plus" aria-hidden="true"></i>Cadastrar Docente</li></a>

								<li class="liHo"> <i id="fafa" class="fa fa-eye" aria-hidden="true"></i>Visualizar Docente</li>
								<li class="liHo"> <i id="fafa" class="fa fa-pencil-square-o" aria-hidden="true"></i>Editar Docente</li>
							</ul>
						</div>

						<li class="clTur" onclick="javascript: clickAba(2)" ><i id="faTur" class="fa fa-users" aria-hidden="true"></i>Turmas
						<i id="faChe1" class="fa fa-chevron-down" aria-hidden="true" ></i></li>

						<div id="abaTur" class="hiddenHidden">
							<ul class="ulHo">
								<li class="liHo"> <i id="fafa" class="fa fa-user-plus" aria-hidden="true"></i>Cadastrar Turma</li>
								<li class="liHo"> <i id="fafa" class="fa fa-eye" aria-hidden="true"></i>Visualizar Turma</li>
								<li class="liHo"> <i id="fafa" class="fa fa-pencil-square-o" aria-hidden="true"></i>Editar Turma</li>
							</ul>
						</div>

						<li class="clDis" onclick="javascript: clickAba(3)" ><i id="faDis" class="fa fa-book" aria-hidden="true"></i>Disciplina
						<i id="faChe2" class="fa fa-chevron-down" aria-hidden="true" ></i></li>

						<div id="abaDis" class="hiddenHidden">
							<ul class="ulHo">
								<li class="liHo"> <i id="fafa" class="fa fa-user-plus" aria-hidden="true"></i>Cadastrar Disciplina</li>
								<li class="liHo"> <i id="fafa" class="fa fa-eye" aria-hidden="true"></i>Visualizar Disciplina</li>
								<li class="liHo"> <i id="fafa" class="fa fa-pencil-square-o" aria-hidden="true"></i>Editar Disciplina</li>
							</ul>
						</div>

						<li class="clGer" ><i id="faGe" class="fa fa-clock-o" aria-hidden="true"></i>Gerar grade horária</li>
					</ul>
				</div>
				<div class="col-8">
				

					<?php
						//busca as páginas internas
						switch(@$_REQUEST["page"]){

							case "cadastrar-docente":
								include("cadastrar-docente.php");
							break;
							case "adusuario":
								include("adusuario.php");
							break;
						}
					?>
				</div>
				
			</div>
		</div>

		<script>
			var cont1 = 0, cont2 = 0, cont3 = 0;

			function clickAba(optAba)
			{
				switch(optAba)
				{
					case 1:
						if(cont1 == 0)
						{
							$( "#faChe" ).attr( "class", "fa fa-chevron-up" );
							$( "#abaDoc" ).show();
							cont1++;
						}
						else
						{
							$( "#faChe" ).attr( "class", "fa fa-chevron-down" );
							$( "#abaDoc" ).hide();
							cont1--;
						}
					break;
					case 2:
						if(cont2 == 0)
						{
							$( "#faChe1" ).attr( "class", "fa fa-chevron-up" );							
							$( "#abaTur" ).show();
							cont2++;
						}
						else
						{
							$( "#faChe1" ).attr( "class", "fa fa-chevron-down" );
							$( "#abaTur" ).hide();
							cont2--;
						}
					break;
					case 3:
						if(cont3 == 0)
						{
							$( "#faChe2" ).attr( "class", "fa fa-chevron-up" );							
							$( "#abaDis" ).show();
							cont3++;
						}
						else
						{
							$( "#faChe2" ).attr( "class", "fa fa-chevron-down" );
							$( "#abaDis" ).hide();
							cont3--;
						}					
					break;
				}
				
			}

		</script>
		
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

	</body>
</html>