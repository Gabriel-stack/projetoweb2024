<nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-between p-2 align-items-center">
	<a class="navbar-brand" href="<?php echo PAGE_HOME ?>">Tarefas</a>
	<div class="d-flex gap-2 align-items-center">
		<a class="btn btn-link text-decoration-underline text-white" href=""><?php echo getUsuario()['nome']; ?> </a>
		<form class="nav-link" action="forms/logout.php" method="POST">
			<button class="btn text-white" type="submit">Sair</button>
		</form>
	</div>
</nav>