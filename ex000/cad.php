<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas Vindas</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <main>
        <h3>Seja bem-vindo!</h3>
        <?php
        if ($_GET["name"] == "" && $_GET["lastname"] == "") {

            $name = "Fulano";
            $lastname = "De Tal";
        } else {
            $name = $_GET["name"];
            $lastname = $_GET["lastname"];
        }
        echo "<h1>Olá, $name $lastname.</h1>";
        ?>
        <p>Este é meu primeiro "site" com PHP</p>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>

</html>