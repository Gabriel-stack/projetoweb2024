<?php
// arquivo de conexão com o banco de dados
// primeiro usar um bloco de tentativa para tentar conectar ao banco de dados, e se der erro, exibir a mensagem de erro
try {
	$pdo = new PDO('mysql:host=localhost;dbname=' . DATABASE, USERNAME, PASSWORD);
} catch (Exception $e) {
	echo "Erro de conexão:" . $e->getMessage();
}