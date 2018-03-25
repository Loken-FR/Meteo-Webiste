<?php

include 'includes/variables.php';
include 'includes/caches.php';
include 'includes/datas.php';

?>
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="src/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="src/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="src/favicon/favicon-16x16.png">
    <link rel="manifest" href="src/favicon/site.webmanifest">
    <link rel="mask-icon" href="src/favicon/safari-pinned-tab.svg" color="#5e7278">
    <meta name="msapplication-TileColor" content="#eeeeee">
    <meta name="theme-color" content="#ffffff">
    <!-- reset css -->
    <link rel="stylesheet" href="src/css/reset.css">
    <!-- main stylesheet -->
    <link rel="stylesheet" href="src/css/style.css">
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
                <form action="city.php" method="GET">
                <input class="input-text" type="text" name="city" value="City">
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
               <h2 class="city-title"><?= $city_name; ?></h2>
            </div>
            <!-- main contents -->
            <div class="main-contents">
                <div class="map-section">
                <img class="map" src="https://maps.googleapis.com/maps/api/staticmap?center=<?= $city->{'city'}->{'coord'}->{'lat'} ?>,<?= $city->{'city'}->{'coord'}->{'lon'} ?>&markers=<?= $city->{'city'}->{'coord'}->{'lat'} ?>,<?= $city->{'city'}->{'coord'}->{'lon'} ?>&zoom=12&size=500x400&key=AIzaSyAlXR7vVCbfzv0XHHHLO2ecZzY59-6P_mc">
                </div>
                <div class="forecast-section">
                    <div class="day-forecast day-forecast-1">
                        <h3 class="day-name">Now</h3>
                        <div class="sky"><?= $city_sky_now; ?></div>
                        <div class="temperature"><?= $city_temp_now; ?>°C</div>
                    </div>
                    <div class="day-forecast day-forecast-2">
                        <h3 class="day-name">In 24h</h3>
                        <div class="sky"><?= $city_sky_24h; ?></div>
                        <div class="temperature"><?= $city_temp_24h; ?>°C</div>
                    </div>
                    <div class="day-forecast day-forecast-3">
                        <h3 class="day-name">In 48h</h3>
                        <div class="sky"><?= $city_sky_48h; ?></div>
                        <div class="temperature"><?= $city_temp_48h; ?>°C</div>
                    </div>
                    <div class="day-forecast day-forecast-4">
                        <h3 class="day-name">In 72h</h3>
                        <div class="sky"><?= $city_sky_72h; ?></div>
                        <div class="temperature"><?= $city_temp_72h; ?>°C</div>
                    </div>
                    <div class="day-forecast day-forecast-5">
                        <h3 class="day-name">In 96h</h3>
                        <div class="sky"><?= $city_sky_96h; ?></div>
                        <div class="temperature"><?= $city_temp_96h; ?>°C</div>
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