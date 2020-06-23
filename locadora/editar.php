<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<head>
<link rel="sortcut icon" href="not.png" type="image/gif"/>
	<meta charset="utf-8">
	<title>Editar cadastro</title>
</head>
<style type="text/css">
     table{
        position: absolute;
        background-color: rgba(60, 209, 235, 0.685) ;
        color: black;	
        width: 45%;
        height: 390px;
        margin-left: 25%;
        margin-right: 25%;
        border-radius: 40px;
        margin-top: 15%;
    }
    form{
    position: relative;
     
      width: 20%;
    }
    input{
        border-radius: 8px;
        
    }
    input::placeholder{
       
        color: rgb(193, 193, 194);
    }
    input::placeholder:hover{
        color: rgb(112, 103, 103);
     
    }
    input:hover{
        background-color: #8190A5;
        color: white;
    }
    #a{
            margin-top: 1%;
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
			height: 590px;
			
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
			margin-top: 11%;
		    margin-left:40%;
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
		#dLog{
			position: absolute;
			margin-top: -0.3%;
			margin-right: -5%;
			width: 30%;
			
		}
            #princ{
                position: relative;
                font-family: sans-serif;	
                font-weight: bold;	
                height: 40px;
                font-size: 20px;
                color: #47525E;
            }
            #tit{
                margin-top: 2%;
            }     #butao{
                width: 20%;
                background-color: #FF9052;
                font-family: sans-serif;
                font-size: 20px;
                height: 15%;
                border-radius: 5px;
                
            }
            #butao:hover{
                background-color: indianred;
                color: white;
            }
            #caixE{
                width: 60%;
                height: 8%;
                font-size: 15px;
                margin-top: 4%;
            }
            #caixQ{
                width: 10%;
                height: 10%;
                font-size: 15px;
                margin-top: -15%;
                text-align: center;
            }
            #caixEs{
                width: 60%;
                height: 7s0px;
                font-size: 15px;
               
            }
            #caixP{
                width: 15%;
                height: 7%;
                font-size: 15px;
                margin-top: -4%;
            }
            
            #princ{
                
                font-family: sans-serif;	
                font-weight: bold;	
                font-size: 20px;
                color: #47525E;
                width: 80%;
                margin-left: 20%;
              
            }
        
        #dent{
            margin-top: -10%;
        }
        body{
			max-width: 100%;
			max-height: 100%;
		}
		
        </style>

<body background="fundo.png">
<div class="container-fluid" id="pr">
<div class="alert alert-success" role="alert">
			<strong>Olá!</strong> Essa é a página de edição dos dados cadastrados.
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
				<a href="listar.php" class="btn btn-light btn-lg" role="button" aria-pressed="true" id="bt">Produtos</a>
				<a href="sobre.html" class="btn btn-light btn-lg " role="button" aria-pressed="true" id="bt">Sobre</a>
		</div>

<div id="b">
    <div id="h1">
        <p>Editar cadastro</p>
    </div>
    <?php
    
    $id = isset($_GET['id']) ? $_GET['id'] : false;
    $eq = $_GET['eq'];
    $qu = $_GET['qu'];
    $es = $_GET['esp'];
    $pr = $_GET['pr'];
   
?>

<table>
   
   <form action="atualisa.php" method="POST">
       <tr>
           <td id="princ">
               <div id="dent">
        <input type="hidden" id="id" name="id" value="<?php echo $id;?>">
       Equipamento:*<input id="caixE"  type="text"  id="equip" name="equip" value="<?php echo $eq;?>" ><br><br>
       Quantidade:*<input id="caixQ" type="text"  id="quan" name="quan" value="<?php echo $qu;?>" ><br><br>
       Especificaçãoes:*<input id="caixEs" type="text"  id="esp" name="esp" value="<?php echo $es;?>" ><br><br>
       Preço R$:*<input id="caixP" type="text"  id="pre" name="pre"  value="<?php echo $pr;?>" ><br><br>
       </div>
       <input id="butao" type="submit" name="edita" value="Editar">
           </td>
           </tr>
           
   </form>
   
   </table>
   <?php
   include_once('conection.php');
?>
   </div>
<div id="c">
    <img src="rof.png" id="rodape">
</div>
</div>
</body>
</html>