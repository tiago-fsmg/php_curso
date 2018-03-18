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
        
        $ano = isset($_GET["ano"])?$_GET["ano"]:"0";

        if ($ano == 0){
        	echo "Preencha o Campo de Idade";
        }
        else {

        	$idade = date("Y") - $ano;

        	echo "Voce tem $idade anos! <br><br>";

        	if ($idade >= 18){

        		$v = "ja pode votar";
        		$d = "ja pode dirigir";

        	}
        	else {
        		$v = "nao pode votar";
        		$d = "nao pode dirigir";
        	}

        	echo "E com essa idade você $v e $d !";
        }

    ?>
</div>
</body>
</html>
 