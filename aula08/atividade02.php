<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="UTF-8"/>
	<title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
	<div>
		<?php

			//Pegando Valores da URL
			$ano = isset($_GET["ano"])?$_GET["ano"]:"0";
			$nome = isset($_GET["nome"])?$_GET["nome"]:"[Nao Informado]";
			$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Nao Informado]";

			//Calculando Idade com o ano Atual
			$idade = date("Y") - $ano;

			//Exibindo Valores 

			echo "$nome e $sexo e tem $idade anos!";



		?>

		<a href="localhost" >Voltar</a>

	</div>
</body>
</html>
