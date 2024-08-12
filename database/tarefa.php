<?php

// arquivo de manipulação da tabela tarefas no banco de dados por meio de funções

// importa o arquivo de conexão com o banco de dados para poder utilizar a conexão
require_once "conexao.php";
// usa a variável de conexão criada no arquivo de conexão com o banco de dados
global $pdo;
// função para resgatar tarefas por id
function getTarefasPorStatus($status){
	global $pdo;
	$usuario = getUsuario();
	$id_usuario = $usuario['id'];
	$resultado = $pdo->query("SELECT * FROM tarefas WHERE status = $status AND usuario_id = $id_usuario");
	return $resultado->fetchAll();
}
// função para resgatar uma tarefa específica
function getTarefaPorId($id){
	global $pdo;
	$resultado = $pdo->query("SELECT * FROM tarefas WHERE id = $id");
	return $resultado->fetch();
}
// função para inserir uma nova tarefa
function adicionarTarefa($titulo, $descricao, $status, $usuario_id){
	global $pdo;
	$resultado = $pdo->query("INSERT INTO tarefas(titulo,descricao,status,usuario_id) values ('$titulo','$descricao',$status, $usuario_id)");
	return $resultado;
}
// função para atualizar uma tarefa
function atualizarTarefa($id, $titulo, $descricao, $status){
	global $pdo;
	$resultado = $pdo->query("UPDATE tarefas SET titulo = '$titulo', descricao = '$descricao', status = $status WHERE id = $id");
	return $resultado;
}
// função para excluir uma tarefa
function excluirTarefa($id){
	global $pdo;
	$resultado = $pdo->query("DELETE FROM tarefas WHERE id = $id");
	return $resultado;
}
