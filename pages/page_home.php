<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<?php require_once("pages/template/head.php"); ?>
	<title>Tarefas</title>
</head>

<body class="bg-light min-vh-100">
	<!-- incluir arquivo do template de cabeçalho -->
	<?php require_once("pages/template/header.php"); ?>
	<div class="container mt-3">
		<!-- inserir função para exibir mensagem instantânea -->
	<?php getMensagemInstantanea(); ?>
	</div>
	<div class="container p-0 shadow mt-3">
		<form action="forms/form_adicionar_tarefa.php" method="post">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">
						Nova Tarefa
					</h5>
				</div>
				<div class="card-body">
					<div class="form-group mb-2">
						<label class="form-label fw-bold" for="">Título <span class="text-danger">*</span></label>
						<input type="text" class="form-control" name="titulo" id="" aria-describedby="helpId" placeholder="">
					</div>
					<div class="form-group mb-2">
						<label class="form-label fw-bold" for="">Descrição</label>
						<textarea class="form-control" name="descricao" id="" rows="3"></textarea>
					</div>
					<div class="form-group mb-2">
						<label class="form-label fw-bold" for="">Status <span class="text-danger">*</span></label>
						<select class="form-select" name="status" id="">
							<option value="1">Não iniciada</option>
							<option value="2">Em andamento</option>
							<option value="3">Finalizada</option>
						</select>
					</div>
				</div>
				<div class="card-footer text-end">
					<button type="submit" class="btn btn-primary">Adicionar</button>
				</div>
			</div>
		</form>
	</div>
	<div class="container bg-white p-2 shadow mt-2">
		<div class="row mx-2 p-2">
			<div class="col-12">
				<h2 class="text-center">Tarefas</h2>
			</div>
			<div class="col-12 my-1 p-2 rounded">
				<table class="table table-bordered">
					<thead class="table-primary">
						<tr>
							<th colspan="2">Não iniciada</th>
						</tr>
						<tr>
							<th scope="col" class="col-10">Título</th>
							<th class="col-2">Ação</th>
						</tr>
					</thead>
					<tbody>
						<!-- inserir loop para exibir tarefas não iniciadas -->
					</tbody>
				</table>
			</div>
			<div class="col-12 my-1 p-2 rounded">
				<table class="table table-bordered">
					<thead class="table-warning">
						<tr>
							<th colspan="2">Em andamento</th>
						</tr>
						<tr>
							<th scope="col" class="col-10">Título</th>
							<th class="col-2">Ação</th>
						</tr>
					</thead>
					<tbody>
						<!-- inserir loop para exibir tarefas em andamento -->
					</tbody>
				</table>
			</div>
			<div class="col-12 my-1 p-2 rounded">
				<table class="table table-bordered">
					<thead class="table-danger">
						<tr>
							<th colspan="2">Finalizada</th>
						</tr>
						<tr>
							<th scope="col" class="col-10">Título</th>
							<th class="col-2">Ação</th>
						</tr>
					</thead>
					<tbody>
						<!-- inserir loop para exibir tarefas finalizadas -->
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>

</html>