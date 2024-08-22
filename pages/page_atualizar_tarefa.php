<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once("pages/template/head.php"); ?>
	<title>Atualizar tarefa</title>
</head>

<body class="bg-light min-vh-100">
	<?php require_once("pages/template/header.php"); ?>
	<div class="container bg-white p-2 shadow mt-3">
		<div class="text-end my-2">
			<button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalExcluir">Excluir</button>
		</div>
		<?php getMensagemInstantanea(); ?>
		<!-- Chamar função de mensagem instantânea -->
		<form action="forms/form_atualizar_tarefa.php" method="post">
			<input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">
						Atualizar Tarefa
					</h5>
				</div>
				<div class="card-body">
					<div class="form-group mb-2">
						<label class="form-label fw-bold" for="">Título <span class="text-danger">*</span></label>
						<!-- colocar o valor do título da tarefa que foi salvo no banco e mostrar no campo de texto -->
						<input type="text" class="form-control" name="titulo" id="" aria-describedby="helpId" placeholder=""
						value="<?php $tarefa['titulo']?>">
					</div>

					<div class="form-group mb-2">
						<label class="form-label fw-bold" for="">Descrição</label>
						<!-- colocar o valor da descrição da tarefa que foi salvo no banco e mostrar no campo de texto -->
						<textarea class="form-control" name="descricao" id="" rows="3"></textarea>
					</div>
					<div class="form-group mb-2">
						<label class="form-label fw-bold" for="">Status <span class="text-danger">*</span></label>
						<select class="form-select" name="status" id="">
							<!-- marcar como selecionado o status da tarefa que foi salvo no banco -->
							<option value="1">Não iniciada</option>
							<option value="2">Em andamento</option>
							<option value="3">Finalizada</option>
						</select>
					</div>
				</div>
				<div class="card-footer text-end">
					<button type="submit" class="btn btn-primary">Salvar</button>
				</div>
			</div>
		</form>
	</div>
	<div class="modal fade" id="modalExcluir" tabindex="-1" aria-labelledby="modalExcluirLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="forms/form_excluir_tarefa.php" method="post">
					<!-- adicionar campo oculto com o id da tarefa para saber qual tarefa excluir -->
					<input type="hidden" name="id" value="">
					<div class="modal-header">
						<h5 class="modal-title" id="modalExcluirLabel">Excluir tarefa</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<!-- mostrar o título da tarefa que será excluída -->
						<p>Deseja realmente excluir a tarefa <strong></strong>?</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
						<button type="submit" class="btn btn-danger">Excluir</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>