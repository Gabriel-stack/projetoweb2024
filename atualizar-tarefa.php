<?php
// importa o arquivo init.php para inicializar a aplicação com as configurações
require_once "configs/init.php";
// importa o arquivo 'tarefa.php' para utilizar as funções para comunicação com o banco de dados e manipulação da tabela 'tarefas'
require_once "database/tarefa.php";
// verifica se o usuário está logado, se não estiver redireciona para a página de login
if(usuarioLogado() == false){
	irParaURL(PAGE_LOGIN);
}
// resgata a tarefa específica para mostrar as informações no formulário e poder atualizar
$tarefa = getTarefaPorId($_GET['id']);
// verifica se o resgate da tarefa foi bem sucedido, se não for redireciona para a página de lista de tarefas pois a tarefa não existe
if($tarefa == false){
	irParaURL(PAGE_HOME);
}

// se chegar aqui, a tarefa foi resgatada com sucesso, então inclui o arquivo da página de atualização de tarefa
require_once "pages/page_atualizar_tarefa.php";