<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <h1>Resultado do procesamento</h1>
    </header>
    <main>
        <?php 
            // var_dump($_GET) // Request é junção de $_GET, $_POST, $_COOKIES
            $n = $_GET["nome"] ?? "UNDERKNOW";
            $s = $_GET["sobrenome"] ?? "UNDER";
            echo "<p>É um prazer te conhecer, <strong>$n $s</strong>! Este é o meu site :)</p>"
        ?>
        <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </main>
    
</body>
</html>