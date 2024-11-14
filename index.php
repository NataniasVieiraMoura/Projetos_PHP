

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/icone-serenatto.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Serenatto - Cardápio</title>
</head>
<body>
    <!--Para abrir o código html no navegador Ctrol + U -->
    <main>
        <!--1. Apresente a página do arquivo index.html do projeto Cardápio Digital;-->
        <!--Você pode colocar o código php separado do html com uma tag que referencia o php:-->
        <?php include 'código_por_trás.php';?>
        <section class="container-banner">
            <div class="container-texto-banner">
                <img src="img/logo-serenatto.png" class="logo" alt="logo-serenatto">
            </div>
        </section>
        <h2>Cardápio Digital</h2>
        <section class="container-cafe-manha">
            <div class="container-cafe-manha-titulo">
                <h3>Opções para o Café</h3>
                <img class= "ornaments" src="img/ornaments-coffee.png" alt="ornaments">
            </div>
            <div class="container-cafe-manha-produtos">
                <?php foreach ($produtoCafe as $cafe):?>
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="<?= $cafe['imagem']#esse "=" serve para substituir o echo?>">
                    </div>
                    <p><?= $cafe['nome']?></p>
                    <p><?= $cafe['descrição']?></p>
                    <p><?= $cafe['preço']?></p>
                    <?php endforeach;?>
                </div>
                
                <div class="container-produto">
                    <?php foreach ($produtoCafe4 as $cafe4):?>
                    <div class="container-foto">
                        <img src="<?= $cafe4['imagem']?>">
                    </div>
                    <!--2. Nesse mesmo arquivo apresente o código abaixo:-->
                    <p><?= $cafe4['nome']?></p>
                    <p><?php echo $cafe4['descrição']?></p>
                    <p><?php print $cafe4['preço']?></p>
                    <?php endforeach;?>
                </div>
                <div class="container-produto">
                    <?php foreach ($produtoCafe2 as $cafe2):?>
                    <div class="container-foto">
                        <img src="<?= $cafe2['imagem']?>">
                    </div>
                    <p><?= $cafe2['nome'] ?></p>
                    <p><?= $cafe2['descrição']?></p>
                    <p><?= $cafe2['preço']?></p>
                    <?php endforeach;?>
                </div>
                <div class="container-produto">
                    <?php foreach ($produtoCafe3 as $cofe3):?>
                    <div class="container-foto">
                        <img src="<?php echo $cofe3['imagem']?>">
                    </div>
                    <!--3.1. Mostre que a listagem da pagina do arquivo admin.html não está coerente com a
lista de produtos que aparecem na página index.html;-->
                    <p><?= $cofe3['nome']?></p>
                    <p><?= $cofe3['descrição']?></p>
                    <p><?= $cofe3['preço']?></p>
                </div>
                <?php endforeach;?>
            </div>
        </section>
        <section class="container-almoco">
            <div class="container-almoco-titulo">
                <h3>Opções para o Almoço</h3>
                <img class= "ornaments" src="img/ornaments-coffee.png" alt="ornaments">
            </div>
            <div class="container-almoco-produtos">
                <?php foreach ($almoço1 as $al1):?>
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="<?= $al1['imagem']?>">
                    </div>
                    <p><?= $al1['nome']?></p>
                    <p><?= $al1['descrição']?></p>
                    <p><?= $al1['preço']?></p>
                    <?php endforeach;?>
                </div>
                <div class="container-produto">
                    <?php foreach ($almoço2 as $al2):?>
                    <div class="container-foto">
                        <img src="<?= $al2['imagem']?>">
                    </div>
                    <p><?= $al2['nome']?></p>
                    <p><?= $al2['descrição']?></p>
                    <p><?= $al2['preço']?></p>
                    <?php endforeach;?>
                </div>
                <div class="container-produto">
                    <?php foreach ($almoço3 as $al3):?>
                    <div class="container-foto">
                        <img src="<?= $al3['imagem']?>">
                    </div>
                    <p><?=$al3['nome']?></p>
                    <p><?=$al3['descrição']?></p>
                    <p><?=$al3['preço']?></p>
                    <?php endforeach;?>
                </div>
                <div class="container-produto">
                    <?php foreach ($almoço4 as $al4):?>
                    <div class="container-foto">
                        <img src="<?= $al4['imagem']?>">
                    </div>
                    <p><?=$al4['nome']?></p>
                    <p><?=$al4['descrição']?></p>
                    <p><?=$al4['preço']?></p>
                </div>
                <?php endforeach;?>
            </div>                
        </section>
    </main>
</body>
</html>