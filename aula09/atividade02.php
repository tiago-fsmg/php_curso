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

        	if ($idade < 16 ) {
                $tipovoto = "nao Vota!";
            }
            elseif (($idade >= 16 && $idade < 18) || ($idade > 65)) {
                $tipovoto = "Voto Opcional!";
            }
            else {
                $tipovoto = "Voto Obrigatorio!";
            }

            echo "Para essa idade, $tipovoto";
        }

    ?>
</div>
</body>
</html>
 