<?php 
	include_once('conection.php');
	include_once('index.html');
	
	$id = $_POST['id'];
	$eq = $_POST['equip'];
	$qu = $_POST['quan'];
	$es = $_POST['esp'];
	$pr = $_POST['pre'];
	
	$sql = "INSERT INTO locadora (equip, quant, espec, preco) VALUES ('$eq', '$qu', '$es', '$pr')";
	
	$r = mysqli_query($con, $sql);

	
	if ($r) {
		echo "Produto cadastrado com sucesso!" ;
	}else{
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
	
	mysqli_close($con);
	
?>