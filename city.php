<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- reset css -->
    <link rel="stylesheet" href="src/styles/reset.css">
    <!-- main stylesheet -->
    <link rel="stylesheet" href="src/styles/style.css">
    <title>Direct Weather</title>
</head>
<body>
    <!-- header -->
    <header class="header">
        <!-- search section  -->
        <div class="high-section">
            <div class="logo">
                <a href="index.php"><h1>Direct Weather</h1></a>
            </div>
            <div class="search-city">
                <form action="#" method="GET">
                <input class="input-text" type="text" name="city">
                <input class="input-submit" type="submit" value="Validate">
            </div>
        </div>
        <!-- menu section -->
        <div class="menu-section">
            <ul class="menu">
                <li class="text text-1"><a href="index.php">Home</a></li>
                <li class="text text-2"><a href="forecasts.php">Forecasts</a></li>
                <li class="text text-3"><a href="#">Actuality</a></li>
            </ul>
        </div>
    </form>
    </header>
    <!-- main -->
    <section class="main">
        <!-- contents -->
        <div class="contents-section">
            <!-- header contents -->
            <div class="header-contents-2">
               <h2 class="city-title">Paris</h2>
            </div>
            <!-- main contents -->
            <div class="main-contents">
                <div class="map-section">
                    <div class="map-forecast"></div>
                </div>
                <div class="forecast-section">
                    <div class="day-forecast day-forecast-1">
                        <h3 class="day-name">Lundi</h3>
                        <div class="sky">Nuageux</div>
                        <div class="temperature">3°C</div>
                    </div>
                    <div class="day-forecast day-forecast-2">
                        <h3 class="day-name">Vendredi</h3>
                        <div class="sky">Nuageux</div>
                        <div class="temperature">3°C</div>
                    </div>
                    <div class="day-forecast day-forecast-3">
                        <h3 class="day-name">Lundi</h3>
                        <div class="sky">Nuageux</div>
                        <div class="temperature">3°C</div>
                    </div>
                    <div class="day-forecast day-forecast-4">
                        <h3 class="day-name">Lundi</h3>
                        <div class="sky">Nuageux</div>
                        <div class="temperature">3°C</div>
                    </div>
                    <div class="day-forecast day-forecast-5">
                        <h3 class="day-name">Lundi</h3>
                        <div class="sky">Nuageux</div>
                        <div class="temperature">3°C</div>
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
                <li class="text text-1"><a href="#">About</a></li>
                <li class="text text-2"><a href="#">Contact us</a></li>
                <li class="text text-3"><a href="#">Legal notice</a></li>
            </ul>
        </div>
    </footer>
    <!-- <script src="scripts/script.js" type="text/javascript"></script> -->
</body>
</html>