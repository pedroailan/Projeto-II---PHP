<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="logo.jpg" width="40" height="40" class="d-inline-block align-top" alt="">
					FUNDAT
				</a>
			</div>
		</nav>

		<div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item active"><a href="index.php">Cadastrar</a></li>
						<!-- <li class="list-group-item"><a href="excluir.php">Novo Cadastro</a></li> -->
						<li class="list-group-item"><a href="listar.php">Listar Cadastros</a></li>
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Cadastrar Equipamento </h4>
								<hr />

								<div class="row mb-3 d-flex align-items-center tarefa">
								<form class="formulario" method="post" action="const_cadastro.php">
									<div class="cadastro-p1" align="">
										<div class="">
										<span>Tipo</span>
										<select required class="selecao" name="Tipo">
											<option value="CPU">CPU</option>
											<option value="Monitor">Monitor</option>
											<option value="Teclado">Teclado</option>
											<option value="Mouse">Mouse</option>
											<option value="Impressora">Impressora</option>
											<option value="Estabilizador">Estabilizador</option>
											<option value="Cabo">Cabo</option>
										</select>
										</div>
										<br>
										<div>
											<span>Quantidade</span>
											<input required type="number" class="input-dados" name="Quantidade" value="Quantidade">
										</div>
										<br>
										<div>
											<span>Data</span>
											<input required type="date" class="input-dados" name="Data" value="Data">
										</div>
										<br>
										<div align="center">
											<input type="submit" class="botao-cadastrar" value="Cadastrar">
										</div>
									</div>
								</form>
					
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>