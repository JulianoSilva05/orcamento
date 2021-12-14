<?php
	$conexao = mysqli_connect('localhost','root',"")
	or die ("A conexão não foi executada!"); 
	
	$bd = mysqli_select_db($conexao,'produtos')
	or die ("O Banco não foi conectado!");
?>