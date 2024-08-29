<?php

// arquivo usado para tratamento de dados de formulário de excluir tarefa, validação e redirecionamento

// importa o arquivo init.php para inicializar a aplicação com as configurações
require_once "../configs/init.php";

// importa o arquivo de manipulação da tabela tarefas no banco de dados por meio de funções
require_once "../database/tarefa.php";

// Verifica se o campo id foi preenchido, senão, retorna mensagem de erro e redireciona para a página anterior.
if(empty($_POST['id'])){
	setMensagemInstantanea("erro", "Erro ao excluir tarefa: id não informado.");
	irParaURL(PAGE_HOME);
}
// resgata o valor do campo id da tarefa do formulário de excluir tarefa e faz a sanitização dos dados
$id = $_POST['id'];
//resgata a tarefa pelo id informado no formulário de excluir tarefa
$tarefa = getTarefaPorId($id);
// se a tarefa não for encontrada, retorna mensagem de erro e redireciona para a página anterior
if($tarefa == false){
	setMensagemInstantanea("erro", "Erro ao excluir tarefa: tarefa não encontrada.");
	irParaURL(PAGE_HOME);
}

// tenta excluir a tarefa no banco de dados, se der certo, adiciona mensagem de sucesso, senão, adiciona mensagem de erro
excluirTarefa($id);
// redireciona para a página de lista de tarefas (index.php) com a mensagem de sucesso ou erro
setMensagemInstantanea("sucesso", "Tarefa excluída com sucesso.");
irParaURL(PAGE_HOME);	