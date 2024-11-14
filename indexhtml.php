<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento PHP</title>
</head>
<body>
    <?php include 'index_remetente.php';?>
<!--include serve para chamar um arquivo php para execução nesse arquivo-->
    <h1>PHP</h1>
    <h2>Bases suportadas:</h2>
    <h3><?= $controle?></h3>
</body>
</html>