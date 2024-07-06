<?php require_once "template/head.php"; ?>
<body class="vh-100 bg-light">
	<div class="container h-100 d-flex justify-content-center align-items-center flex-column">
		<h3 class="text-center">Login</h3>
		<!-- chama função para mostrar mensagem de de sucesso ou erro caso haja -->
		<form class="d-flex flex-column gap-2 p-4" style="min-width:360px" action="" method="POST">
			<input class="form-control" name="email" type="email" placeholder="Email">
			<input class="form-control" name="senha" type="password" placeholder="Senha">
			<button class="btn btn-success" type="submit">Login</button>
			<p class="text-center">Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
		</form>
	</div>
</body>
<?php require_once "template/footer.php"; ?>