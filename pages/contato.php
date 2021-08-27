<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Arte & Doce</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

	


</head>

<body>
	<div id="topo">
    	<div id="barraNav">
			<h1>Arte & Doce</h1>
        	<h5>Aqui você encontra os melhores Doces Caseiros</h5>
			 <class="quebra"></class>
				<div id="menu">
            		<ul>
            			<li><a href="../index.php">Home</a></li>
                		<li><a href="quemsomos.php">Quem Somos</a></li>
                		<li><a href="contato.php">Contato</a></li>
                		<li><a href="localização.php">Localização</a></li>
            		</ul>
				</div>
        	</div>
    	</div>
	</div>
<form>
    <form name="f_cadastro" action="#" method="get">
    <label>Nome:</label>
    <input class="espaco quebra" type="text" name="f_nome" 
    maxlength="30" size="30">
    <label>E-mail:</label>
    <input class="espaco quebra" type="text" name="f_email" value=""
    size="30">
    <label>Mensagem:</label>
    <input class="espaco quebra" type="text" name="f_mensagem" 
    maxlength="200">
    <label class="espaco quebra"><h5>Escolha as opções abaixo:</h5></label>

	<p>Pedido personalizado</p>
	<input class="quebra" type="checkbox" name="f_pedido">Contato
    <input class="quebra" type="checkbox" name="f_contato">Trufa de Cafe
    <input class="quebra" type="checkbox" name="f_trufa">Trufa de Coco
    <input class="quebra" type="checkbox" name="f_trufa">Trufa de Maracuja
    <br>
    <input class="quebra" type="checkbox" name="f_bolo">Bolo de Cenoura
    <input class="quebra" type="checkbox" name="f_bolo">Bolo de Amendoim
    <input class="quebra" type="checkbox" name="f_bolo">Bolo de Paçoca
    <br>
    <input class="quebra" type="checkbox" name="f_bombom">Bombom de Cereja
    <input class="quebra" type="checkbox" name="f_bombom">Bombom de Morango
    <input class="quebra" type="checkbox" name="f_bombom">Bombom de Damasco
	<input class="quebra" type="checkbox">
    <div id="dv_btns">
        <input class="espaco_t quebra" type="submit" name="f_btn_enviar" value="Enviar">
        <input class="espaco_t quebra" type="reset" name="f_btn_limpar" value="Limpar">

    </div>

    
</form>
<br>

<footer>
		<div class="main-content">
			<div class="left box">
				<h2>Dados academicos</h2>
				<div class="content">
					<p>Instituição de Ensino:<a href= "https://www.unicesumar.edu.br/"target="blank">Unicesumar</a><br>
					Aluno: Dwight Almeida de Souza<br> RA: 20047170-5<br></p>
				
					<div class="social">
						<a href= "https://www.linkedin.com/in/dwight-souza-0112a474/"target="blank"><span class="fab fa-linkedin" class="logos-redes" width="60px" height="30px"></a>
						<a href= "https://github.com/DwightSouza/20047170-5_DwightSouza.git"target="blank"><span class="fab fa-github" class="logos-redes" width="60px" height="30px"></a>
						<a href= "https://wa.me/554796053086"target="blank"><span class="fab fa-whatsapp" class="logos-redes" width="40px" height="40px"></a>
					</div>
				</div>
			</div><!--left-box-->
			<div class="right box">
				<h2>Endereço</h2>
				<div class="content">
					<div class="place">
						<span class="fas fa-map-marker"></span>
						<span class="text">Germano Lemos, Volta Grande, Navegantes-SC
					</div>

					<div class="email">
						<span class="fas fa-envelope"></span>
						<span class="text">dwightsouza@gmail.com</span>
					</div>

					<div class="phone">
						<span class="fas fa-phone-alt"></span>
						<span class="text">+55 47 99605-3086
					</div>
				</div>
			</div><!--center-box-->
					</form>
				</div>
			</div><!--center-box-->
		</div><!--main-content-->
		<div class="bottom">
			<div class="center">
				<span class="credit">Criado por<a href="https://github.com/DwightSouza/20047170-5_DwightSouza.git"target="blank">Dwight Souza</a></span>
				<span class="far fa-copyright"> 2021 Todos os direitos reservados</span>
			</div>
		</div>
	</footer>
</body>
</html>

<style>
a{
  font-size: 14px;
  color: white;
	text-align: center;
	text-decoration: none;
	padding: 5px 20px;
}
a:hover{
	color: black;
	background: white;
	text-decoration: underline;
}
#menu{
	background-color: black;
	padding: 10px;
}
#menu ul{
  display: table;
  margin: 5px auto;
}
#menu ul li{
  display:inline;    
}
#topo{
	background: url('../img/topo/capa.jpg');
	width: 100%;
}
.barraNav {
	display: table;
	width: 100%;
	background: black;
}
h1{
  font-size: 50px;
	font-family: Verdana;
	margin: 0;
	padding: 10px 0px;
  text-align: center;
  color: black;
}
h5{
  font-family: verdana;
  text-align: center;
  margin: 0px;
}
.rodape_final {
	width: 99%;
	height: 65px;
	background-color: rgb(0, 0, 0);
	color:rgb(255, 255, 255);
	position:floatval;
	bottom: 0;
	margin: 10;
	padding: 10px;
	display: flex;
	justify-content: space-around;
}
.rodape_final article h6{
	text-decoration: none;
}
.art_rod{
	width: 33.33%;
}
.quebra{
  display: block;
}
.espaco{
  margin-bottom: 10px;
}
.espaco_t{
  margin-top: 15px;
}
form{
  margin-top: 60px;
  margin-left: 300px;
  margin-right: 300px;
  border: 1px solid #000;
  padding:20px;
  border-radius: 25px;
  background-color: #eee;
  font: verdana;
}
form input{
  padding: 4px;
  width:100%;
}
#dv_btns{
  display: flex;
}
footer{
	position: absolute;
	width: 100%;
	background:rgb(58, 56, 56);
}
.main-content{
	display: flex;
}
.main content .box{
	flex-basis: 50%;
	padding: 10px 20px;
}
.box h2{
	font-size: 18px;
	font-weight: 600;
	text-transform: uppercase;
}
.box .content{
	margin: 20px 0 0 0;
	position: relative;
}
.box .content:after{
	position: absolute;
	content: '';
	width: 15%;
	height: 2px;
	background: red;
	top: -10px;
}
.box .content:before{
	position: absolute;
	content: '';
	height: 2px;
	width: 100%;
	background: #1a1a1a;
	top: -10px;
}
.left .content .social a{
	padding: 0 2px;
}
.left .content .social a span{
	width: 40px;
	height: 40px;
	background: #1a1a1a;
	text-align: center;
	line-height: 40px;
	border-radius: 5px;
	font-size: 18px;
	transition: 0.3s;
}
.left .content .social a span:hover{
	background: red;
}
.left .content p{
	text-align: justify;
}
.center .content .fas{
	font-size: 23px;
	background: #1a1a1a;
	width: 45px;
	height: 45px;
	line-height: 45px;
	text-align: center;
	border-radius: 50%;
	transition: 0.3s;
	cursor: pointer;
}
.center .content .fas:hover{
	background: red;
}
.center .content .text{
	font-size: 17px;
	font-weight: 500;
	padding-left: 10px;
}
.center .content .phone{
	margin: 10px 0;
}
.center .content .msg{
	margin-top: 10px;
}
.right form input, .right form textarea{
	width: 100%;
	font-size: 17px;
	background: #151515;
	padding-left: 10px;
	border: 1px solid #222222;
}
.right form input{
	height: 35px;
}
.right form input:focus,
.right form textarea:focus{
	outline-color: #3498db;
}
.right form .text{
	font-size: 17px;
	margin-bottom: 2px;
	color: #656565;
}
.right form .btn{
	margin-top: 10px;
}
.right form .btn button{
	height: 40px;
	width: 100%;
	background: red;
	font-size: 17px;
	font-weight: 500;
	cursor: pointer;
	transition: .3s;
}
.right form .btn button:hover{
	background: black;
}
.bottom .center{
	padding: 5px;
	font-size: 15px;
	background: #151515;
	text-align: center;
}
.bottom .center span{
	color: #656565;
}
.bottom .center a{
	color: red;
	text-decoration: none;
}
.bottom .center a:hover{
	text-decoration: underline;
}
@media screen and (max-width:100%){
	footer{
		position: fixed;
		bottom: 0px;
	}
	.main-content{
		flex-wrap: wrap;
		flex-direction: column;
	}
	.main-content .box{
		margin: 5px 0;
	}
}
.center{
	text-align: center;
}
</style>