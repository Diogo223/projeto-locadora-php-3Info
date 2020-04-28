<?php
$id = $_POST["id"];
$eq = $_POST['equip'];
$qu = $_POST['quan'];
$es = $_POST['esp'];
$pr = $_POST['pre'];

include_once('index.html');
include_once('conection.php');

$sql = "UPDATE locadora SET equip = '$eq', quant = '$qu', espec = '$es', preco = '$pr'  WHERE locadora.id = $id ";

$r = mysqli_query($con, $sql);

if($r){
    echo "Dados atualizado com sucesso";
}else{
    echo "Erro ao atualizar". $sql . "<br>" . mysqli_error($con);
}

?>