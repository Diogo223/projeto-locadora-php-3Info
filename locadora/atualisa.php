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
  header('location: listar.php');
  echo "<script>echo('Editado com sucesso!')</script> ";
 
}else{ 
    header('location: listar.php');
    echo "<script>echo('Erro ao editar')</script> " . $sql . "<br>" . mysqli_error($con);
}

?>
