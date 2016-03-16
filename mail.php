<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>Főoldal - Rédei Katalin weboldala</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
    </head>
    <body>
        <header>
            <img src="img/header.png" alt="header kép" class="header-image"/>
        </header>
        <nav>
            <a href="index.html">Főoldal</a>
            <a href="story.html">Történet</a>
            <a href="types.html">Macskafajták</a>
            <a href="contact.html">Kérdőív</a>
        </nav>
        <article>
            <h1>A kérdőív kiértékelése</h1>
            <p>Az emailt elküldtük a(z) <?php echo $_POST["email"]; ?> címre (nem)!</p>
            <p>Szerined a legszebb színű cica <?php echo $_POST["color"]; ?></p>
            <p>Van-e cicád <?php echo $_POST["hascat"]; ?></p>
            <p>Ilyen fajta cicát fogadnál szívesen örökbe <?php echo $_POST["type"]; ?></p>
        </article>
        <footer>
            <p>ez itt a footer</p>
        </footer>
        <script src="script.js"></script>
    </body>
</html>
