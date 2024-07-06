<?php

// arquivo usado para tratamento de dados de formulário de atualizar tarefa, validação e redirecionamento

// importa o arquivo init.php para inicializar a aplicação com as configurações

// importa o arquivo de manipulação da tabela tarefas no banco de dados por meio de funções

// verifica se o navegador está acessando este arquivo por meio de uma requisição POST, senão, retorna um erro 405.

// Verifica se os campos titulo, descricão e id foram preenchidos, senão, retorna mensagem de erro e redireciona para a página de atualizar tarefa.

// resgata os valores dos campos titulo, descricao e id da tarefa do formulário de atualizar tarefa e faz a sanitização dos dados

//resgata a tarefa pelo id informado no formulário de atualizar tarefa

// se a tarefa não for encontrada, retorna mensagem de erro e redireciona para a página de atualizar tarefa

// tenta atualizar a tarefa no banco de dados, se der certo, adiciona mensagem de sucesso, senão, adiciona mensagem de erro

// redireciona para a página de lista de tarefas (index.php) com a mensagem de sucesso ou erro