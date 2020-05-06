<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<head>
<link rel="sortcut icon" href="not.png" type="image/gif"/>
	<meta charset="utf-8">
	<title>Produtos</title>
</head>
<style type="text/css">

table{
	background-color: white ;
	color: black;	
	margin-left: 25%;
	margin-right: 25%;
	width: 50%;
	margin-top: 1%;
}

input{
	border-radius: 25px;
	
}
#a{
            
			background-color: #13B1CE;
			text-decoration: none;
			text-align: center;
			height: 100px;
            
		}
		#logo{
			width: 15% ;
			margin-top: -5%;
			margin-left: -85%;
		}
        #men{
			height: 50px;
		}
		#b{
            
			background-color: #13B1CE;
			text-decoration: none;
			text-align: center;
			height: 30%;
			
		}
		#c{
			background-color:#13B1CE;
			text-decoration: none;
			text-align: center;
			height:170px;
		}
		h1{
			margin-top: 1%;
			color: white;
			font-family: sans-serif;
		}
		a{
			text-decoration: none;
			font-size: 25px;
			margin-left: 5%;
           color: black;
        }
		a:hover{
			text-decoration: none;
			color: white;
		}
		#rodape{
			width: 100%;
			height: 100%;
		}
		#princ{
			background-color: #C0CCDA;
			font-family: sans-serif;	
			font-weight: bold;	
			height: 40px;
		}
		#tit{
			margin-top: 2%;
		}
		#bt{
            margin-top: 0.1%;
			text-decoration: none;
			font-size: 25px;
			margin-left: 3%;
           	color: rgb(33, 38, 39);
		
		}
		#bt:hover{
			background-color: rgb(59, 67, 68);
			text-decoration: none;
			font-size: 25px;
			margin-left: 3%;
           	color: white;
		
		}
		
</style>
<body>
<div class="container-fluid">
	<?php include_once('listar.php');?>
	<div id="a">
		<h1>Locação de equipamentos Informática</h1>
		<img src="not.png" id="logo"><br>
		
	</div>
	<div id="men">
	<button id="bt" type="button" class="btn btn-light btn-sm btn-lg active" ><a href="index.html">Home</a></button>
	<button id="bt" type="button" class="btn btn-light btn-sm"><a href="cadastro.html">Cadastro</a></button>
	<button id="bt" type="button" class="btn btn-light btn-sm"><a href="sobre.html">Sobre</a></button>
	</div>
	<div id="b"><br>
		<div id="tit">
			<h1>Equipamentos Cadastrados</h1>
		</div>
	<table border="1">
		
		<tr id="princ">
			<td>Id</td>
			<td>Equipamento</td>
			<td>Quant</td>
			<td>Especificações</td>
			<td>Preço R$</td>
			<td>Atualizar</td>
			<td>Excluir</td>
		</tr>
		<?php
		  include_once('conection.php');
		  $sql = "SELECT * FROM locadora";
		  $r = mysqli_query($con,$sql);

		  if ($r) {
		  	while ($result = mysqli_fetch_array($r)) {?>

		  		<tr>
		<td> <?php echo $result['id']; ?> </td>
		<td> <?php echo $result['equip']; ?> </td>
		<td> <?php echo $result['quant']; ?> </td>
		<td> <?php echo $result['espec']; ?> </td>
		<td> <?php echo $result['preco']; ?> </td>
		<td> <a href="editar.php? id= <?php echo $result['id']; ?> &eq=<?php echo $result['equip'] ?>&qu=<?php echo $result['quant']?>&esp=<?php echo $result['espec']?>&pr=<?php echo $result['preco'];?>"><img src="atu.png" width="20" height="20"></a> </td>
		<td> <a href="excluir.php? id=<?php echo $result['id']; ?>"><img src="exc.png" width="20" height="20"></a> </td>
		  		</tr>
		  		<?php 
		  	}
		  }
		 
		  
		  ?>

	</table>
</div>

	<div id="c">
		<img src="rof.png" id="rodape">
	</div>
	</div>
</body>
</html>