<?php
//define a constante RAIZ com o caminho do diretório raiz do projeto
define("RAIZ", dirname(__DIR__, 2));
//define a constante SERVER_ROOT com o caminho do servidor local, é importante para definir o caminho absoluto dos arquivos
define("SERVER_ROOT", "http://localhost/meu_projeto/");
//define a constante PAGE_LOGIN com o caminho da página de login usando o caminho absoluto definido anteriormente
define("PAGE_LOGIN", SERVER_ROOT . "login.php");
// define a constante PAGE_HOME com o caminho da página inicial do sistema onde vai ser exibida a lista de tarefas

// define a constante PAGE_CADASTRO com o caminho da página de cadastro de usuário

// define a constante PAGE_ATUALIZAR_TAREFA com o caminho da página de atualização de tarefa

// define as constantes do banco de dados, USERNAME, PASSWORD, DATABASE com as informações de conexão com o banco de dados

