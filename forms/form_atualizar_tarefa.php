<?php

// arquivo usado para tratamento de dados de formulário de atualizar tarefa, validação e redirecionamento

// importa o arquivo init.php para inicializar a aplicação com as configurações
require_once "../configs/init.php";
// importa o arquivo de manipulação da tabela tarefas no banco de dados por meio de funções
require_once "../database/tarefa.php";

// Verifica se os campos titulo, descricão e id foram preenchidos, senão, retorna mensagem de erro e redireciona para a página de atualizar tarefa.
if(empty($_POST['titulo']) ||
	empty($_POST['status']) ||
	empty($_POST['id'])){
		setMensagemInstantanea("erro", "Preencha todos os campos obrigatórios.");
		irParaURL(PAGE_HOME);		
	}
// resgata os valores dos campos titulo, descricao e id da tarefa do formulário de atualizar tarefa e faz a sanitização dos dados
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$status = $_POST['status'];
$id = $_POST['id'];
//resgata a tarefa pelo id informado no formulário de atualizar tarefa
$tarefa = getTarefaPorId($id);
// se a tarefa não for encontrada, retorna mensagem de erro e redireciona para a página de atualizar tarefa
if($tarefa == false){
	setMensagemInstantanea("erro", "Tarefa não encontrada.");
	irParaURL(PAGE_HOME);
}
// tenta atualizar a tarefa no banco de dados, se der certo, adiciona mensagem de sucesso, senão, adiciona mensagem de erro
atualizarTarefa($id, $titulo, $descricao, $status);
setMensagemInstantanea("sucesso", "Tarefa atualizada com sucesso.");
irParaURL(PAGE_HOME);
// redireciona para a página de lista de tarefas (index.php) com a mensagem de sucesso ou erro