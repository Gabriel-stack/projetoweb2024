<?php
// arquivo para saida do usuário do sistema
// importa o arquivo init.php para inicializar a aplicação com as configurações
require_once "../configs/init.php";
// sai do sistema e redireciona para a página de login
logout();
irParaURL(PAGE_LOGIN);