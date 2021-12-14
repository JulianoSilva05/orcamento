<?php

	//Variáveis
	$quant = $_POST['quant'];
	$rs = $_POST['produt']


	/*
	//Conectar ao SQL
	include "conexao.inc";
	
	//Receber Dados no SQL
	$sql = "INSERT INTO produtos(produto,valor,qnt_estoque)
	VALUES('$quant','$prod')";
	
	$rs = mysqli_query($conexao,$sql);
	*/

	if(!$rs){
		echo "Não foi possível conectar!";
	}
	else{
		echo "Cadastro efetuado.";
		
	}
	

?>