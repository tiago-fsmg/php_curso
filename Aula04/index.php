<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula4</title>
	<meta charset="utf-8">
</head>
<body>
<?php

	$num = 22;
	$name = "Tiago";

	echo $name. " tem ". $num. " anos! <br>";
	echo "$name tem $num anos!";

	//Pegando Valor da URL, Acresente no final da URL o segunte parametro  ?a=32&b=16

	$n1 = $_GET["a"];
	$n2 = $_GET["b"];

	//Fazendo Operaçoes com os Valores recebidos...

	echo " <br>A soma de $n1 + $n2 e ". ($n1+$n2);

	echo " <br>A Subitração de $n1 - $n2 e ". ($n1-$n2);

	echo " <br>A Multiplicação de $n1 X $n2 e ". ($n1*$n2);
	
	echo " <br>A Divizão de $n1 % $n2 e ". ($n1/$n2);
	
	echo " <br>O Resto de $n1 % $n2 e ". ($n1%$n2);
?>

</body>
</html>
