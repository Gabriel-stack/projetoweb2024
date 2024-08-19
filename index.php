<?php
//importa o arquivo init.php para inicializar a aplicação com as configurações

require_once "configs/init.php";

// importao arquivo de tarefa para utilizar as funções para comunicação com o banco de dados e manipulação da tabela 'tarefas'
require_once "database/tarefa.php";
// verifica se o usuário está logado, se não estiver redireciona para a página de login
if(usuarioLogado() == false){
	irParaURL("login.php");
}

// define o título da página para exibir no navegador

// resgata tarefas não iniciadas, em andamento e finalizadas para exibir na página em 3 variáveis diferentes
$tarefasNaoIniciadas = getTarefasPorStatus(1);
$tarefasEmAndamento = getTarefasPorStatus(2);
$tarefasFinalizadas = getTarefasPorStatus(3);
// inclui o arquivo da página de lista de tarefas
require_once "pages/page_home.php";