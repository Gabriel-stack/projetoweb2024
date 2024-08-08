<?php
// arquivo usado para tratamento de dados de formulário de login, autenticação e redirecionamento

// importa o arquivo init.php para inicializar a aplicação com as configurações
require_once "../configs/init.php";
// importa o arquivo de manipulação da tabela usuarios no banco de dados por meio de funções
require_once "../database/usuario.php";
// verifica se o navegador está acessando este arquivo por meio de uma requisição POST, senão, retorna um erro 405.

// Verifica se os campos de email e senha foram preenchidos, senão, retorna mensagem de erro e redireciona para a página de login. Caso contrário, prossegue com a autenticação.
if(empty($_POST['email']) ||
  empty($_POST['senha'])){
	setMensagemInstantanea('erro', 'Preencha todos os campos!');
	irParaURL(PAGE_LOGIN);
}

// resgata os valores dos campos email e senha do formulário de login e faz a sanitização dos dados
$email = $_POST['email'];
$senha = $_POST['senha'];
// busca o usuario pelo email informado no formulário de login
$usuario = buscarUsuarioPorEMmail($email);
// se o usuário não for encontrado ou a senha informada não for a mesma do banco de dados, retorna mensagem de erro e redireciona para a página de login
if($usuario == false ||
	password_verify($senha, $usuario['senha']) == false){
	setMensagemInstantanea('erro', 'Email ou senha inválidos!');
	irParaURL(PAGE_LOGIN);
}
// se o usuário for encontrado e a senha informada for a mesma do banco de dados, define a sessão do usuário usando a função de sessão setUsuario e redireciona para a página de lista de tarefas (index.php) com uma mensagem de sucesso