<?php 	
	
	include_once('conection.php');
	
	$id = $_GET['id'];
	
	$sql = "DELETE FROM locadora WHERE id = '$id'";

	$r = mysqli_query($con, $sql);

	if ($r) {
		echo  "<script>alert('Produto ecxcluído com sucesso!');</script>" ;
		header('location: listar.php');
	}else{
		echo  "<script>alert(Erro ao excluir.');</script>" . $sql . "<br>" . mysqli_error($con);
	}
	
	

?>