<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- reset css -->
    <link rel="stylesheet" href="src/stylesheets/reset.css">
    <!-- main stylesheet -->
    <link rel="stylesheet" href="src/stylesheets/style.css">
    <title>Meteo Direct</title>
</head>
<body>
    <!-- header -->
    <header class="header">
        <!-- search section  -->
        <div class="high-section">
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
        </div>
        <!-- menu section -->
        <div class="menu-section">
            <ul class="menu">
                <li class="text"><a href="#">Accueil</a></li>
                <li class="text"><a href="#">Prévisions</a></li>
                <li class="text"><a href="#">Observations</a></li>
            </ul>
        </div>
    </form>
    </header>
    <!-- main -->
    <section class="main">
        <!-- contents -->
        <div class="contents-section">
            <!-- header contents -->
            <div class="header-contents">
                <h2 class="title">Meteo France</h2>
                <div class="text">Aujourd'hui</div>
            </div>
            <!-- main contents -->
            <div class="main-contents">
            <div class="primary-city">
                <div class="city-1">
                    <h3 class="city-name"></h3>
                    <div class="meteo-section">
                    </div>
                </div>
                <div class="city-2">
                    <h3 class="city-name"></h3>
                    <div class="meteo-section">
                    </div>
                </div>
                <div class="city-3">
                    <h3 class="city-name"></h3>
                    <div class="meteo-section">
                    </div>
                </div>
                <div class="city-4">
                    <h3 class="city-name"></h3>
                    <div class="meteo-section">
                    </div>
                </div>
                <div class="city-5">
                    <h3 class="city-name"></h3>
                    <div class="meteo-section">
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer class="footer">
        <!-- footer menu -->
        <div class="menu-section">
            <ul class="menu">
                <li class="text"><a href="#">A propos</a></li>
                <li class="text"><a href="#">Contact</a></li>
                <li class="text"><a href="#">Mentions légales</a></li>
            </ul>
        </div>
    </footer>
    <script src="scripts/script.js" type="text/javascript"></script>
</body>
</html>