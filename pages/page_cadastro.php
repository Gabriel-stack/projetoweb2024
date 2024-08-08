<?php require_once "template/head.php"; ?>

<body class="vh-100 bg-light">
	<div class="container h-100 d-flex justify-content-center align-items-center flex-column">
		<h3 class="text-center">Cadastro</h3>
		<!-- chama função para mostrar mensagem de de sucesso ou erro caso haja -->
		<?php getMensagemInstantanea();?>
		<form class="d-flex flex-column gap-2 p-4" style="min-width:360px" action="forms/form_cadastro.php" method="POST">
			<input class="form-control" name="nome" type="text" placeholder="Insira seu nome">
			<input class="form-control" name="email" type="email" placeholder="Email">
			<input class="form-control" name="senha" type="password" placeholder="Senha">
			<button class="btn btn-success" type="submit">Cadastro</button>
			<p class="text-center">já tem uma conta? <a href="login.php">entre</a></p>
		</form>
	</div>
</body>
<?php require_once "template/footer.php"; ?>