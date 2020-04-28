<?php 

	$con = mysqli_connect("db4free.net", "diogobatista", "moreira-2019", "diogospring");

	if ($con) {
		echo "Conectado com Sucesso";
	}else{
		echo "Erro na conexão";
	}

 ?>