<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link id="pagestyle" href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="https://fonts.googleapis.com/css?family=Lato:300,400,700" type="text/css"/> 
    <title>Didier Motte</title>
</head>
<header>
    
</header>
<body>
    <section class="presentation">
        <div>
            <navebar>
            </navebar>
        </div>
        <div class="carte">
            <img class="logo" src="images/logo.png">
            Antiquité • Décoration • Aménagements d'intérieur
            <p><a class="tel" href="tel:+32495684234" title="Cliquez pour lancer un appel téléphonique: +32 495/20.59.34">☎  +32 495/20.59.34</a></p>
        </div>
        <div class="menu-bouton">
            <ul>
                <li><a href="presentation.php">Présentation</a></li>
                <li><a href="stock.php">Le Stock</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </section>
    <section class="sectionprincipale">
        <section class="stock">   
            <h2>LE STOCK</h2>
            <p>Fouillez le stock</p>
            <form method="POST" action="accueil.php">
                <input class="textarea" type="text" name="search" placeholder="Exemple : Table">
                <input class="search-but" type="submit" name="submit" value="rechercher">
            </form>
            <div class="Dernierobjet">            
                <h2>Derniers Objets</h2>
                <img src="images/image1.jpg">
                <img src="images/image2.jpg">
                <img src="images/image3.jpg">
                <img src="images/image4.jpg">
                <img src="images/image5.jpg">
                <img src="images/image6.jpg">
            </div>
            <div class="selectionpage">
                <ul>
                    <li class="current"><a href="accueil/page01.php">1</a></li>
                    <li><a href="accueil/page02.php">2</a></li>
                    <li><a href="accueil/page03.php">3</a></li>
                    <li><a href="accueil/page04.php">4</a></li>
                    <li><a href="accueil/page05.php">5</a></li>
                    <li><a href="accueil/page02.php">Next</a></li>
                </ul>
        </section>
        <section class="stock">
                <p>Fouillez le stock</p>
                <input class="textarea" type="text" name="search" placeholder="Exemple : Table">
                <input class="recherche" type="submit" name="submit" value="rechercher">
                </form>
                <div class="motclé">
                    <?php
                    $cat = array(
                        "acajou (1)",
                        "Agencement de bar (1)",
                        "art dÃ©co (1)",
                        "Balance (1)",
                        "Barbier (2)",
                        "Bibliothéque (3)",
                        "Bibliothéque de notaire (1)",
                        "bois (1)",
                        "bois recyclé",
                        );
                        ?>
                </div>
            </div>
        </section>
    </section>
    <section class="momentpoesie">
        <div class="citation">
            "L'ennui naquit un jour de l'uniformité"
        </div>
        <div class="auteur">
            - Antoine Houdar de la Motte
        </div>
    </section>
</body>
<footer>
    <span>© 2018 Didier Motte +32 495 20 59 34 - <a class="email" href="mailto:dmotte@skynet.be">dmotte@skynet.be</a> - <a href="https://didiermotte.be/contact/">Plan d'accès</a></span>
    <span>Décorateur, Antiquités, Aménagement d'intérieurs, Belgique</span>
    <span>Restez à jour via: <a href="https://www.facebook.com/antiquites.decoration">Facebook</a>  <a href="https://www.instagram.com/DidierMotte/">Instagram</a></span>
    <span>Conçu & développé par <a href="https://pixeline.be">pixeline</a></span>
    <span>Modifié par <a href="https://github.com/gretzerjerome">Gretzer Jérôme</a> - Pour <a href="https://www.becode.org/">BeCode</a></span>
</footer>
</html>

<?php

?>