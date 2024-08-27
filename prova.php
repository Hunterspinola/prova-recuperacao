<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>PROVA</legend>
        <?php
          
            $frase = $_POST['frase'];

            echo "FRASE ORIGINAL: $frase\n"; 

            $fraseMaiuscula = strtoupper($frase);
            echo "<br><br>Frase em maiúsculas: $fraseMaiuscula\n"; 

            $comprimento = strlen($fraseMaiuscula);
            $meio = intval( floor($comprimento / 2));
            echo "<br><br>Caractere na posição do meio: $fraseMaiuscula[$meio]\n";

            $vogais = array('A', 'E', 'I', 'O', 'U');
            $X = 'X';
            $FraseX = str_replace($vogais, $X, $fraseMaiuscula);
            echo "<br><br>Vogais subistituidas por X: $FraseX\n";

            $caracteresNaoVogais = preg_replace('/[AEIOU\s\.,]/', '', $fraseMaiuscula);
            $quantidadeNaoVogais = strlen($caracteresNaoVogais);
            echo "<br><br>Quantidade de caracteres que não são vogais: $quantidadeNaoVogais\n";

            $inicio = 10;
            $novaFrase = substr($frase, $inicio);
            echo "<br><br>A nova frase fica: $novaFrase\n";

            $inverteNovaFrase = strrev($novaFrase);
            echo "<br><br>A nova frase invertida fica: $inverteNovaFrase\n";

        ?>
</fieldset>
</body>
</html>