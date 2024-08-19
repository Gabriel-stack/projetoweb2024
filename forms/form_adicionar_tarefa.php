<?php

// arquivo usado para tratamento de dados de formulário de adicionar tarefa, validação e redirecionamento

// importa o arquivo init.php para inicializar a aplicação com as configurações
require_once "../configs/init.php";
// importa o arquivo de manipulação da tabela tarefas no banco de dados por meio de funções
require_once "../database/tarefa.php";
// verifica se o navegador está acessando este arquivo por meio de uma requisição POST, senão, retorna um erro 405.

// Verifica se o campo de descrição da tarefa foi preenchido, senão, retorna mensagem de erro e redireciona para a página de adicionar tarefa.
if(empty($_POST['titulo'])||
	empty($_POST['status'])){
		setMensagemInstantanea("erro", "Preencha todos os campos obrigatórios.");
		irParaURL(PAGE_HOME);
	}
// resgata o valor do campo descrição da tarefa do formulário de adicionar tarefa e faz a sanitização dos dados
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$status = $_POST['status'];
$id_usuario = getUsuario()['id'];
// tenta inserir a nova tarefa no banco de dados, se der certo, adiciona mensagem de sucesso, senão, adiciona mensagem de erro
adicionarTarefa($titulo, $descricao, $status, $id_usuario);
setMensagemInstantanea("sucesso", "Tarefa adicionada com sucesso.");
irParaURL(PAGE_HOME);
// redireciona para a página de lista de tarefas (index.php) com a mensagem de sucesso ou erro



