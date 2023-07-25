<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado do Final</h1>
        <p>
            <?php 
                $numero = $_GET['numero'];
                $antecessor = $numero - 1;
                $sucessor = $numero + 1;
        
                echo "O número escolhido foi <strong>$numero</strong>. <br>";
                echo "O seu <em>antecessor<em> é $antecessor. <br>";
                echo "O seu <em>sucessor<em> é $sucessor. <br>";

            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2b05;Voltar</button>        
    </main>
    
</body>
</html>