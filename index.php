<!DOCTYPE html>
<!--connect db -->
<?php include("config.php"); ?>

<html lang="pt-BR">
	<head>	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Time Grid Maker</title>
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

		
		<style>
			body{
				background-color: #DCDCDC;
			}
			.container{
				height: 390px;
				width: 400px;
				margin: 160px auto auto auto;
				border: 1px solid #C0C0C0;
				box-shadow: 5px 5px 7px #696969;
				background-color: white;
			}
			.titulo{
				font-family: 'Raleway', sans-serif;
				text-align: center;
				margin-top: 60px;
			}
			.titulo h1{
				font-size: 45px;
			}
			.bloco-botoes{
				font-family: 'Open Sans', sans-serif;
				margin-top: 140px;
			}
			.bloco-botoes button{
				height: 45px;
			}
			a:link{
				text-decoration: none;
			}
		</style>
	</head>
	<body>		
		<div class="container">
			<div class="titulo">
				<h1>Time Grid Maker</h1>
			</div>
			<div class="bloco-botoes">
				<a href="cadastro.php"><button type="button" class="btn btn-primary btn-lg btn-block">Cadastrar</button></a><br>
				<a href="login.php"><button type="button" class="btn btn-primary btn-lg btn-block">Já sou cadastrado</button></a>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>
