<?php
	
	//Criar a conexao
	$con = mysqli_connect("localhost", "root", "psy2504crbc2504", "hairafrodite");
	
	if(!$con){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>