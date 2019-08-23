<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./public/css/headerFooter.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <?= $css ?>
    <title><?= $title_page ?></title>
    
</head>

<body>
    <header>
        <div id="logotitle">
           <a href="index.php"> <img src="./public/images/logo/logo_chais_pinot_blanc.png" alt="Logo Chais Pinot"></a>
            <h1>Administrateur</h1>
        </div>
    <a id="wrapper" class="ancre"></a>
    <a id="close" class="ancre"></a>
    <a a href="#wrapper" id=hamburger>
    <i class="fas fa-bars"></i>
    </a>
    <a href="#close" id="close">
    </a>
    
    <div id="wrapper">
        <nav>
            <ul>

                <li><a href="index.php?action=adminVins">Vins</a></li>
                <li> <a href="index.php?action=adminClients">Clients</a></li>
                <li><a href="index.php?action=adminNewsletter">Newsletter</a></li>
                <li><a href="index.php?action=adminComments">Commentaires</a></li>

            </ul>
        </nav>
    </div>
        
    </header>
    
    
    
    <br><br><br>
   
    <?= $content ?>
    
 
</body>

</html>