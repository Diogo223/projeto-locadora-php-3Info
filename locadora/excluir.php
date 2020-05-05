<?php 	
	
	$id = $_GET["id"];
	
include_once('conection.php');


	$sql = "DELETE FROM locadora WHERE id = '$id'";
	
	$r = mysqli_query($con, $sql);

	if($r){
		echo "Deletado";
		header('location:listar.php');
	}else{
		echo "Ocorreu um Erro";
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
	
?>
