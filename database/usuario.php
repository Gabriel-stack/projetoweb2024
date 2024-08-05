<?php

// arquivo de manipulação da tabela usuarios no banco de dados por meio de funções

// importa o arquivo de conexão com o banco de dados para poder utilizar a conexão
require_once "conexao.php";
// usa a variável de conexão criada no arquivo de conexão com o banco de dados
global $pdo;
// função para resgatar um usuário específico por email
function buscarUsuarioPorEMmail($email){
	global $pdo;
	
	$resultado = $pdo->query("SELECT * FROM usuarios where email = '$email'");
	$resultado = $resultado->fetch();
	return $resultado;
}
// função para inserir um novo usuário
function adicionarUsuario($nome, $email, $senha){
	global $pdo;
	$senha = password_hash($senha, PASSWORD_DEFAULT);
	$resultado = $pdo->query("INSERT INTO usuarios (nome, email, senha) values ('$nome','$email','$senha')");
	return $resultado->execute();	
}
// função para atualizar um usuário


