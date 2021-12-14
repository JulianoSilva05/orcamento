<?php

	//Variáveis
	$produto = $_POST['produto'];
	$valor = $_POST['valor'];
	$qnt_estoque = $_POST['qnt_estoque'];

	//Conectar ao SQL
	include "conexao.inc";
	
	//Receber Dados no SQL
	$sql = "INSERT INTO produtos(produto,valor,qnt_estoque)
	VALUES('$produto','$valor','$qnt_estoque')";
	
	$rs = mysqli_query($conexao,$sql);
	
	if(!$rs){
		echo "Não foi possível conectar!";
	}
	else{
		echo "Cadastro efetuado.";
		
	}
	

?>