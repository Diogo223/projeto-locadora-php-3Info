<?php
include_once('conection.php');

$id = $_GET['id'];
$eq = $_GET['eq'];
$qu = $_GET['qu'];
$es = $_GET['esp'];
$pr = $_GET['pr'];

$sql = "UPDATE locadora SET equip = '$eq', quant = '$qu', espec = '$es', preco = '$pr'  WHERE id = '$id' ";

$r = mysqli_query($con, $sql);

if ($r) {
    echo "<script> alert('Edição concluída com sucesso!'.);</script>" ;
   
  header('location: listar.php');

}else{
    echo "<script>alert('Erro ao editar'.);</script>" . $sql . "<br>" . mysqli_error($con);
}

?>
