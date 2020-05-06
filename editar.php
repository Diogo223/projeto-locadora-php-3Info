<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<head>
<link rel="sortcut icon" href="not.png" type="image/gif"/>
	<meta charset="utf-8">
	<title>Editar cadastro</title>
</head>
<style type="text/css">
    table{
        background-color: #50DBD0 ;
        color: black;	
        width: 45%;
        height: 390px;
        margin-left: 25%;
        margin-right: 25%;
        border-radius: 40px;
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
                height: 25px;
            }
            #b{
                
                background-color: #13B1CE;
                text-decoration: none;
                text-align: center;
                height: 60%;
                
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
            #bt{
            margin-top: 0.2%;
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
        #dent{
            margin-top: -10%;
        }
        </style>

<body>
<div id="a">
    <h1>Locação de equipamentos Informática</h1>
		<img src="not.png" id="logo"><br>
    </div>
    <div id="men">
    <button id="bt" type="button" class="btn btn-light btn-sm btn-lg active"><a href="index.html">Home</a></button>
    <button id="bt" type="button" class="btn btn-light btn-sm"><a href="listar.php">Produtos</a></button>   
    <button id="bt" type="button" class="btn btn-light btn-sm"><a href="cadastro.html">Cadastro</a> </button>
    <button id="bt" type="button" class="btn btn-light btn-sm"> <a href="sobre.html">Sobre</a></button>
    </div>

<div id="b">
    <div id="tit">
        <h1>Editar cadastro</h1>
    </div>
    <?php
    
    $id = $_GET['id'];
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
        <input type="hidden" id="id" value="echo<?php echo $id;?>">
       Equipamento:*<input id="caixE"  type="text"  id="equip" name="equip" value="<?php echo $eq;?>" ><br><br>
       Quantidade:*<input id="caixQ" type="text"  id="quan" name="quan" value="<?php echo $qu;?>" ><br><br>
       Especificaçãoes:*<input id="caixEs" type="text"  id="esp" name="esp" value="<?php echo $es;?>" ><br><br>
       Preço R$:*<input id="caixP" type="text"  id="pre" name="pre"  value="<?php echo $pr;?>" ><br><br>
       </div>
       <input id="butao" type="submit" name="salva" value="Editar">
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
</body>
</html>