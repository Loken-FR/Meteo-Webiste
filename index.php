<?php



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- reset csss -->
    <link rel="stylesheet" href="styles/reset.min.css">
    <!-- main stylesheet -->
    <link rel="stylesheet" href="styles/style.css">
    <title>Meteo Direct</title>
</head>
<body>

    <header class="header">
        <div class="logo">
            <h1>Meteo Direct</h1>
        </div>
        <div class="search-city">
            <form action="#" method="GET">
            <input type="text" value="" name="city">
            <input type="submit">
        </div>
        <div class="geolocation">
        </div>
    </form>
    </header>

    <section class="main">
        <div class="menu-section">
            <ul class="menu">
                <li class="text"><a href="#">Accueil</a></li>
                <li class="text"><a href="#">Prévisions</a></li>
                <li class="text"><a href="#">Observations</a></li>
            </ul>
        </div>
        <div class="contents-section">
            <div class="header-contents">
                <h2 class="title">Meteo France</h2>
                <div class="text">Aujourd'hui</div>
            </div>
        </div>
    </section>

    <footer class="footer">

    </footer>
    <script src="scripts/script.js" type="text/javascript"></script>
</body>
</html>