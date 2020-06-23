<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
		margin-top: 10%;
		}

		input{
		border-radius: 25px;
		}
		#a{
            margin-top: 1%;
			background-color:rgba(60, 209, 235, 0.438);
			text-decoration: none;
			text-align: center;
			height: 100px;
            
		}
		#logo{
			width: 50% ;
			height: 80%;
			margin-top: 5%;
			margin-left: -40%;
			margin-right: -5%;
		}
		
       
		#b{
            
			background-color: rgba(60, 209, 235, 0.438);
			text-decoration: none;
			text-align: center;
			height: 500px;
			
		}
		#c{
			background-color: rgba(60, 209, 235, 0.438);
			text-decoration: none;
			text-align: center;
			height:170px;
		}
		#h1{
			position: absolute;
			color: rgba(255, 255, 255, 0.918);
			font-family: Maiandra GD;
			font-size: 35px;
			margin-top: 4%;
		    margin-left:37%;
			margin-right: 25%;
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
		
		
		#men{
			position: absolute;
			margin-left: 40%;
			margin-top: 3%;
			width: 55%;
			height: 7%;
			
			font-family: Maiandra GD;
		}
		body{
			max-width: 100%;
			max-height: 100%;
		}
		#pr{
			height: 100%;
			width: 100%;
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
			text-decoration: none;
			font-size: 20px;
			margin-left: 3%;
			background-color: rgba(60, 209, 235, 0.158);
		}
		#bt:hover{
			background-color: rgba(38, 134, 151, 0.877);
			text-decoration: none;
			font-size: 20px;
			margin-left: 3%;
           color: white;
		
		}
		#dLog{
			position: absolute;
			margin-top: -0.3%;
			margin-right: -5%;
			width: 30%;
			
		}
	
</style>
<body background="fundo.png">
<div class="container-fluid" id="pr">
	<?php include_once('listar.php');?>
	<div class="alert alert-success" role="alert">
			<strong>Olá!</strong> Essa é a página de listagem de dados.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
	</div>
	<div id="a">
	<div id="dLog">
		<img src="not.png" id="logo" class="img-fluid" alt="Responsive image">
		</div>
		<div id="men">
				<a href="index.html" class="btn btn-light btn-lg" role="button" aria-pressed="true" id="bt">Home</a>
				<a href="cadastro.html" class="btn btn-light btn-lg " role="button" aria-pressed="true" id="bt">Cadastro</a>
				<a href="sobre.html" class="btn btn-light btn-lg " role="button" aria-pressed="true" id="bt">Sobre</a>
		</div>
	</div>
	<div id="b"><br>
		<div id="h1">
			<p>Equipamentos Cadastrados</p>
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