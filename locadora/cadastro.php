<!DOCTYPE html>
<html>
<head>
<link rel="sortcut icon" href="not.png" type="image/gif"/>
	<meta charset="utf-8">
	<title>Cadastro</title>
</head>
<style type="text/css">
    table{
        position: fixed;
        background-color: #50DBD0 ;
        color: black;	
        margin-left: 25%;
        width: 700px;
        height: 50%;
        border-radius: 61px;
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
                height: 440px;
                
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
                color: red;
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
            }
            #butao{
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
            #caixQ{
                width: 200px;
                height: 20px;
            }
            #caixEs{
                width: 300px;
                height: 100px;
            }
            #caixP{
                width: 200px;
                height: 20px;
            }
            #caixE{
                width: 200px;
                height: 20px;
            }
        </style>

<body>
	
	
<div id="a">
    <h1>Locação de equipamentos Informática</h1>
		<img src="not.png" id="logo"><br>
    </div>
    <div id="men">
        <a href="index.html">Home</a>
        <a href="listar.php">Produtos</a>
        <a href="sobre.html">Sobre</a>
    </div>

<div id="b">
    <div id="tit">
        <h1>Cadastro</h1>
    </div>
   
    	<table>
   
	<form action="salvar.php" method="POST">
		<tr>
			<td id="princ">
           <input type="hidden" value="id" name="id" size="5"><br>
		Equipamento:*<input  id="caixE"  type="text"  name="equip" id="equip"  size="20" placeholder="Qual é o equipamento..."><br><br>
		Quantidade:*<input  id="caixQ" type="text"  name="quan" id="quan"  size="20" placeholder="Qual é a quntidade..."><br><br>
        Especificaçãoes:*<input   id="caixEs" type="text"  id="esp" name="esp"  size="20" placeholder="Descreva o equipamento..."><br><br>
        Preço R$:*<input  id="caixP" type="text" name="pre" id="20" name="pre" placeholder="Qual é o preço equipamento..."><br><br>
            
        <input id="butao" type="submit" name="salva" value="Cadastrar">
			</td>
            </tr>
			
	</form>
    
    </table>
   
</div>
<div id="c">
    <img src="rof.png" id="rodape">
</div>
</body>
</html>