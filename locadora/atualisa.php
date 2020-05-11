<?php
include_once('conection.php');

    $id = isset($_POST['id']) ? $_POST['id'] : false;
    $eq = $_POST['equip'];
    $qu = $_POST['quan'];
    $es = $_POST['esp'];
    $pr = $_POST['pre'];

$sql = "UPDATE locadora SET equip='$eq', quant='$qu', espec='$es', preco='$pr' WHERE id='$id' ";

$r = mysqli_query($con, $sql);

if ($r) {
  echo "Editado com sucesso!  ";
  header('location: listar.php');
 
}else{
    echo "Erro ao editar'" . $sql . "<br>" . mysqli_error($con);
    header('location: listar.php');
}

?>
