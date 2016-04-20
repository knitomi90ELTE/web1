<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>Főoldal - Rédei Katalin weboldala</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
    </head>
    <body>
        <header id="navHeader">
            <nav>
                <a href="index.html">Főoldal</a>
                <a href="story.html">Történet</a>
                <a href="types.html">Macskafajták</a>
                <a href="contact.html">Kérdőív</a>
            </nav>
        </header>
        <header>
            <img src="img/header.jpg" alt="header kép" class="header-image"/>
        </header>
        <section>
            <h1>A kérdőív kiértékelése</h1>
            <article>
                <h2>Fogadott adatok</h2>
                <p>Az emailt elküldtük a(z) <?php echo $_POST["email"]; ?> címre (nem)!</p>
                <p>Szerined a legszebb színű cica <?php echo $_POST["color"]; ?></p>
                <p>Van-e cicád <?php echo $_POST["hascat"]; ?></p>
                <p>Ilyen fajta cicát fogadnál szívesen örökbe <?php echo $_POST["type"]; ?></p>
                
                <img src="img/satisfied_cat.jpg" alt="Elégedett cica" />
            </article>
        </section>
        <footer>
            <p>Ez a honlap a Webfejlesztés 1. kurzus kereteiben készült</p>
            <p>Készítette: Rédei Katalin - OW03SW</P>
            <p>Forrás: <a href="https://hu.wikipedia.org/wiki/Macska" target="blank">Macskák</a></p>
        </footer>
        <script src="js/script.js"></script>
    </body>
</html>
