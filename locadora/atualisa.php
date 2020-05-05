<?php

$id = (isset($_GET["id"]) && $_GET["id"] != null) ? $_GET["id"] :   "";
$eq = (isset($_GET["equip"]) && $_GET["equip"] != null) ? $_GET["equip"] :   "";
$qu = (isset($_GET["quant"]) && $_GET["quant"] != null) ? $_GET["quant"] :   "";
$es = (isset($_GET["esp"]) && $_GET["esp"] != null) ? $_GET["esp"] :   "";
$pr = (isset($_GET["pr"]) && $_GET["pre"] != null) ? $_GET["pre"] :   "";

include_once('conection.php');

$sql = "UPDATE locadora SET equip = '$eq', quant = '$qu', espec = '$es', preco = '$pr'  WHERE id = $id ";

$r = mysqli_query($con, $sql);

if($r){
    echo "Dados atualizado com sucesso";
}else{
    echo "Erro ao atualizar". $sql . "<br>" . mysqli_error($con);
}

?>
