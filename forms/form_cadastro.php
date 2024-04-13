<?php

if(empty($_POST['nome']) ||
	empty($_POST['email']) ||
	empty($_POST['senha'])){
	echo "preencha todos os campos";
}else{
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];	
	echo "$nome cadastrado com sucesso";
}