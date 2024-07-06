<?php

// arquivo usado para tratamento de dados de formulário de adicionar tarefa, validação e redirecionamento

// importa o arquivo init.php para inicializar a aplicação com as configurações

// importa o arquivo de manipulação da tabela tarefas no banco de dados por meio de funções

// verifica se o navegador está acessando este arquivo por meio de uma requisição POST, senão, retorna um erro 405.

// Verifica se o campo de descrição da tarefa foi preenchido, senão, retorna mensagem de erro e redireciona para a página de adicionar tarefa.

// resgata o valor do campo descrição da tarefa do formulário de adicionar tarefa e faz a sanitização dos dados

// tenta inserir a nova tarefa no banco de dados, se der certo, adiciona mensagem de sucesso, senão, adiciona mensagem de erro

// redireciona para a página de lista de tarefas (index.php) com a mensagem de sucesso ou erro



