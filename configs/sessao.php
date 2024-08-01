<?php

// --> As sessões são importantes para manter o usuário logado, para armazenar informações temporárias durante a navegação do usuário e persisti-las entre páginas diferentes.<--

// primeiro passo é iniciar a sessão caso não esteja iniciada
if(session_status() != PHP_SESSION_ACTIVE){
	session_start();
}

// função para adicionar os dados do usuário na sessão ao logar
function setUsuario($usuario){
	$_SESSION['usuario_logado'] = $usuario;
}
// função para verificar se o usuário está logado
function usuarioLogado(){
	if(isset($_SESSION['usuario_logado'])){
		return true;
	}
	return false;
}
// função para criar mensagens de alerta de sucesso ou erro de ações feitas pelo usuário

// função para resgatar a mensagem de alerta de sucesso ou erro

// função para resgatar informações do usuário logado na sessão
function getUsuario(){
	if(usuarioLogado()){
		return $_SESSION['usuario_logado'];
	}
	return null;
}

// função para destruir a sessão e redirecionar para a página de login
function logout(){
	session_destroy();
}