<?php
//importa o arquivo init.php para inicializar a aplicação com as configurações
require_once "configs/init.php";

//verifica se o usuário está logado para redirecionar para a página de de lista de tarefas (index.php)

// define o título da página para exibir no navegador
$title = "Cadastro";

// inclui o arquivo da página de cadastro
require_once "pages/page_cadastro.php";