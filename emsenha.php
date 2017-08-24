<!DOCTYPE html>
<!--connect db -->
<?php include("config.php"); ?>

<html lang="pt-BR">
	<head>	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
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
				height: 430px;
				width: 520px;
				margin: 160px auto auto auto;
				border: 1px solid #C0C0C0;
				box-shadow: 5px 5px 7px #696969;
				background-color: white;
				position: relative;
			}
			.titulo{
				font-family: 'Raleway', sans-serif;
				text-align: center;
				margin-top: 70px;
			}
			.titulo h1{
				font-size: 60px;
			}
			.bloco-form{
				font-family: 'Open Sans', sans-serif;
				margin-top: 160px;
			}
			.bloco-form button{
				height: 55px;
			}
			.espacamentoform .input-group{
				height: 40px;
				margin-bottom: 20px;
			}
			.alert{
				position: absolute;
				top: -80px;
				left: 0px;
				width: 519px;
			}
		</style>

	</head>
	<body>		
		<div class="container">

			<?php if(@$_REQUEST["res"]=="notok"){ ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Este e-mail não existe
				</div>
			<?php } ?>

			<div class="titulo">
				<h1>Time Grid Maker</h1>
			</div>

			<div class="bloco-form">
				<form action="validar.php?acao=buscarEmail" method="POST" class="espacamentoform">
					<div class="input-group">
						<div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
					    <input type="email" class="form-control" name="email_login" id="email_login" placeholder="E-mail" maxlength="50" required>
					</div>
					<button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
				</form>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>
