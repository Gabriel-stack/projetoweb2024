<?php
// arquivo usado para tratamento de dados de formulário de cadastro, validação e redirecionamento

// importa o arquivo init.php para inicializar a aplicação com as configurações

// importa o arquivo de manipulação da tabela usuarios no banco de dados por meio de funções

// verifica se o navegador está acessando este arquivo por meio de uma requisição POST, senão, retorna um erro 405.

// Verifica se os campos de nome, email e senha foram preenchidos, senão, retorna mensagem de erro e redireciona para a página de cadastro. Caso contrário, prossegue com a validação e inserção do novo usuário no banco de dados.

// resgata os valores dos campos nome, email e senha do formulário de cadastro e faz a sanitização dos dados

// verifica se o email informado já está cadastrado no banco de dados, se sim, retorna mensagem de erro e redireciona para a página de cadastro

// caso o email não esteja cadastrado, insere o novo usuário no banco de dados e redireciona para a página de login com uma mensagem de sucesso