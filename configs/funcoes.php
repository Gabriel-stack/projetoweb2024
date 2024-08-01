<?php
// arquivo de funções para usar em diversas situações

// criar função para redirecionar usuário para outra página
function irParaURL($url){
	header("Location: $url");
	die;
}