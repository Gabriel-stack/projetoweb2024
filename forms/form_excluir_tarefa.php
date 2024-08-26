<?php

// arquivo usado para tratamento de dados de formulário de excluir tarefa, validação e redirecionamento

// importa o arquivo init.php para inicializar a aplicação com as configurações
require_once "../configs/init.php";

// importa o arquivo de manipulação da tabela tarefas no banco de dados por meio de funções
require_once "../database/tarefa.php";

// Verifica se o campo id foi preenchido, senão, retorna mensagem de erro e redireciona para a página anterior.

// resgata o valor do campo id da tarefa do formulário de excluir tarefa e faz a sanitização dos dados

//resgata a tarefa pelo id informado no formulário de excluir tarefa

// se a tarefa não for encontrada, retorna mensagem de erro e redireciona para a página anterior


// tenta excluir a tarefa no banco de dados, se der certo, adiciona mensagem de sucesso, senão, adiciona mensagem de erro

// redireciona para a página de lista de tarefas (index.php) com a mensagem de sucesso ou erro