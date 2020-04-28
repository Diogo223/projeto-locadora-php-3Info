<?php 
include_once("conexao.php");

	$login = $_POST['user'];
	$senha = $_POST['pas'];

	$sql = "SELECT * FROM USER WHERE usuario = '$login' AND senha = '$senha'";
	$r = mysqli_query($con, $sql);
	if($r){
		echo "Conectado com sucesso";
	}else{
		echo "Usuario ou senha incorreta";
	}
?>