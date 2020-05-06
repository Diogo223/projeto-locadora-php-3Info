<?php 
	include_once('conection.php');
	
	$eq = $_POST['equip'];
	$qu = $_POST['quan'];
	$es = $_POST['esp'];
	$pr = $_POST['pre'];
	
	$sql = "INSERT INTO locadora (equip, quant, espec, preco) VALUES ('$eq', '$qu', '$es', '$pr')";
	
	$r = mysqli_query($con, $sql);

	
	if ($r) {
		echo  "<script>alert('Produto cadastrado com sucesso!');</script>" ;
	}else{
		echo "<script>alert(' Erro ao cadastrar'.);</script>" . $sql . "<br>" . mysqli_error($con);
	}
	mysqli_close($con);
	
?>