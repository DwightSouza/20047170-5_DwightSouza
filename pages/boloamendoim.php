<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Arte & Doce</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>


<body>
	<div id="topo">
    	<div id="barraNav">
			<h1>Arte & Doce</h1>
        	<h5>Aqui você encontra os melhores Doces Caseiros</h5>
			<br><br><br><br><br><br><br>
				<div id="menu">
            		<ul>
            			<li><a href="../index.php">Home</a></li>
                		<li><a href="../pages/quemsomos.php">Quem Somos</a></li>
                		<li><a href="../pages/contato.php">Contato</a></li>
                		<li><a href="../pages/localização.php">Localização</a></li>
            		</ul>
				</div>
        	</div>
    	</div>
	</div>
<br>
            <h5>Bolo de Amendoim</h5>
<br>
			<div class="center">
			<img src="../img/bolos/boloamendoim.jpg" width="350" height="350" alt="bolo 3 leites">
				<p>
                Bolo de amendoim com cobertura de chocolate, além de ficar uma delícia,
                é uma opção que, sem dúvida, vai agradar e surpreender a toda sua família
                no café ou lanche da tarde, pois fica fofinho e a cobertura dá um toque todo
                especial! Confira a receita completa abaixo e experimente em sua casa junto
                com a família, todos vão adorar!.
				</p>
			</div>
		</article>

		<footer>
		<div class="main-content">
			<div class="left box">
				<h2>Dados academicos</h2>
				<div class="content">
					<p>Instituição de Ensino:<a href= "https://www.unicesumar.edu.br/"target="blank">Unicesumar</a><br>
					Aluno: Dwight Almeida de Souza<br> RA: 20047170-5<br></p>
				
					<div class="social">
						<a href= "https://www.linkedin.com/in/dwight-souza-0112a474/"target="blank"><span class="fab fa-linkedin" class="logos-redes" width="60px" height="30px"></a>
						<a href= "https://github.com/DwightSouza"target="blank"><span class="fab fa-github" class="logos-redes" width="60px" height="30px"></a>
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
		</div><!--main-content-->
		<div class="bottom">
			<div class="center">
				<span class="credit">Criado por<a href="https://github.com/DwightSouza/20047170-5_DwightSouza.git"target="blank">Dwight Souza</a></span>
				<span class="far fa-copyright"> 2021 Todos os direitos reservados</span>
			</div>
		</div>
	</footer>

</body>

<style>

p{
	text-align: center;
}
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	color: #000000;
}
footer{
	margin-top: 10px;
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
header{
	color: rgb(0, 0, 0);
}
.main{
	max-width: calc(1150px - 40px - 40px);
	width: calc(96% - 80px);
	background: rgb(185, 185, 185);
	padding: 40px;
	margin: 0 auto;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
}
.main header{
	color: rgb(0, 0, 0);
	flex-basis: 100%;
}
.main article{
	padding: 10px 10px;
	background-color:rgb(165, 159, 159);
	color: rgb(0, 0, 0);
	margin: 10px 0;
	flex-basis: calc(25% - 40px - 10px);
}
.main article p{
	font-size: 1.1em;
	font-weight: 400;
}
.borda_arredondada{
	border-radius: 15px;
	-moz-border-radius: 15px;
	-webkit-border-radius: 15px;
}
.btn1{
	margin: 5px;
	color:rgb(255, 255, 255);
	padding: 8px 20px;
	font-size: 1.1em;
	font-weight: normal;
	border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	text-decoration: none;
}
.btn{
	margin: 5px;
	color:black;
	padding: 8px 20px;
	font-size: 1.1em;
	font-weight: normal;
	border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	text-decoration: none;
}
.btn:hover{
	cursor: pointer;
}
.btn_green{
	background-color:green;
}
.btn_green:hover{
	background-color: rgb(0, 0, 0);
	color: white;
}
@media (max-width: 640px){
	.main article{
		flex-basis: calc(100% - 40px);
}
}
body {
    background: silver;
    padding: 0;
    margin: 10;
    font-family: Verdana;
}
.barraNav {
	display: table;
	width: 100%;
	background: black;
}
#topo{
	background: url('../img/topo/capa.jpg');
	width: 100%;
}
h1{
	font-size: 50px;
	font-family: Verdana;
	margin: 0;
	padding: 10px 0px;
	text-align: center;
}
section header h2{
	text-align: center;
}
h5{
    font-size: 18px;
	font-family: verdana;
	text-align: center;
	margin: 0px;
}
a{
	font-size: 14px;
	color: white;
	text-align: center;
	text-decoration: none;
	padding: 5px 20px;
	cursor: pointer;
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
html, body {
	min-height: 100%;
}
#tudo {
	height: 100%;
}
html #tudo {
	height: 100%;
}
#tudo {
	position: relative;
}
#conteudo {
	padding-bottom: 30px;
}

</style>
</html>