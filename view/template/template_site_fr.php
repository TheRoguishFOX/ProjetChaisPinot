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
            <h1>After WORK &amp; Before LUNCH</h1>
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

                <li><a href="index.php?action=cavebar">La cave et le bar</a></li>
                <li> <a href="index.php?action=actus">Actus</a></li>
                <li><a href="index.php?action=shop_home" id="bigbutton">La boutique en ligne</a></li>
                <li><a href="index.php?action=contact">Contact</a></li>

            </ul>
        </nav>
    </div>
        
        <!-- bouton lang  -->
        <div id=lang>
            <a href="indexEn.php"><img src="./public/images/logo/eng.png" class="flag"></a>
            <a href="index.php"><img src="./public/images/logo/fr.png" class="flag"></a>
        </div>
        
    </header>
    
    
    
    <br><br><br>
   
    <?= $content ?>
    
    <footer>

        <article class="footer">
            <p><a href="index.php?action=ConditionsGnrales"> Conditions générales</a><br>
                <a href="index.php?action=MentionsLegales"> Mentions légales</a><br>
                <a href="#"> Haut de page</a><br>
                <a href="#"> Retour accueil</a></p>

            <p class="tiret"></p>

            <p>Envie de tout savoir? <br> Inscrivez-vous à notre newsletter <br><br>
                <label for="mail"> Mail :</label>&nbsp;&nbsp;&nbsp;
                <input type="text" name="mail" placeholder="Quel est votre mail?" required />
                <input type="submit" class="valider" value="Valider" />
            </p>
            <p class="tiret"></p>
            <p> Restez connectés: <br><br>
                <strong id="logo"><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i> </a></strong>
                <strong id="logo"> <a href="https://www.instagram.com" target="_blank"> <i class="fab fa-instagram"></i> </a></strong>
                
            </p>
        </article>



    </footer>

</body>

</html>