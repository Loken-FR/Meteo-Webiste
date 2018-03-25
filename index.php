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
                <input class="input-text" type="text"  name="city" value="City">
                <a href="city.php"><input class="input-submit" type="submit" value="Validate"></a>
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
            <div class="header-contents">
                <h2 class="title">METEO FRANCE</h2>
                <div class="separator">-</div>
                <div class="text">Today</div>
            </div>
            <!-- main contents -->
            <div class="main-contents">
                <div class="primary-city">
                    <div class="city city-1">
                        <a href=""><h3 class="city-name"><?= $primary_city['a']; ?></h3></a>
                        <img class="map" src="https://maps.googleapis.com/maps/api/staticmap?center=<?= $paris_forecast->{'city'}->{'coord'}->{'lat'} ?>,<?= $paris_forecast->{'city'}->{'coord'}->{'lon'} ?>&markers=<?= $paris_forecast->{'city'}->{'coord'}->{'lat'} ?>,<?= $paris_forecast->{'city'}->{'coord'}->{'lon'} ?>&zoom=12&size=500x400&key=AIzaSyAlXR7vVCbfzv0XHHHLO2ecZzY59-6P_mc">
                        <div class="meteo-section">
                            <div class="morning">
                                <h4 class="time-day">Weather :</h4>
                                <div class="sky"><?= $paris_sky; ?></div>
                                <div class="temperature"><?= $paris_temp; ?>°C</div>
                            </div>
                            <!-- <div class="afternoon">
                                <h4 class="time-day">Après midi :</h4>
                                <div class="sky">Nuageux</div>
                                <div class="temperature">9°C</div>
                            </div>
                            <div class="evening">
                                <h4 class="time-day">Soir :</h4>
                                <div class="sky">Pluvieux</div>
                                <div class="temperature">2°C</div>
                            </div> -->
                        </div>
                    </div>
                    <div class="city city-2">
                        <a href=""><h3 class="city-name"><?= $primary_city['b']; ?></h3></a>
                        <img class="map" src="https://maps.googleapis.com/maps/api/staticmap?center=<?= $marseille_forecast->{'city'}->{'coord'}->{'lat'} ?>,<?= $marseille_forecast->{'city'}->{'coord'}->{'lon'} ?>&markers=<?= $marseille_forecast->{'city'}->{'coord'}->{'lat'} ?>,<?= $marseille_forecast->{'city'}->{'coord'}->{'lon'} ?>&zoom=12&size=500x400&key=AIzaSyAlXR7vVCbfzv0XHHHLO2ecZzY59-6P_mc">
                        <div class="meteo-section">
                            <div class="morning">
                                <h4 class="time-day">Weather :</h4>
                                <div class="sky"><?= $marseille_sky; ?></div>
                                <div class="temperature"><?= $marseille_temp; ?>°C</div>
                            </div>
                            <!-- <div class="afternoon">
                                <h4 class="time-day">Après midi :</h4>
                                <div class="sky">Ensoleillé</div>
                                <div class="temperature">15°C</div>
                            </div>
                            <div class="evening">
                                <h4 class="time-day">Soir :</h4>
                                <div class="sky">Eclaircie</div>
                                <div class="temperature">6°C</div>
                            </div> -->
                        </div>
                    </div>
                    <div class="city city-3">
                        <a href=""><h3 class="city-name"><?= $primary_city['c']; ?></h3></a>
                        <img class="map" src="https://maps.googleapis.com/maps/api/staticmap?center=<?= $lyon_forecast->{'city'}->{'coord'}->{'lat'} ?>,<?= $lyon_forecast->{'city'}->{'coord'}->{'lon'} ?>&markers=<?= $lyon_forecast->{'city'}->{'coord'}->{'lat'} ?>,<?= $lyon_forecast->{'city'}->{'coord'}->{'lon'} ?>&zoom=12&size=500x400&key=AIzaSyAlXR7vVCbfzv0XHHHLO2ecZzY59-6P_mc">
                        <div class="meteo-section">
                            <div class="morning">
                                <h4 class="time-day">Weather :</h4>
                                <div class="sky"><?= $lyon_sky; ?></div>
                                <div class="temperature"><?= $lyon_temp; ?>°C</div>
                            </div>
                            <!-- <div class="afternoon">
                                <h4 class="time-day">Après midi :</h4>
                                <div class="sky">Ensoleillé</div>
                                <div class="temperature">10°C</div>
                            </div>
                            <div class="evening">
                                <h4 class="time-day">Soir :</h4>
                                <div class="sky">Eclaircie</div>
                                <div class="temperature">2°C</div>
                            </div> -->
                        </div>
                    </div>
                    <div class="city city-4">
                        <a href=""><h3 class="city-name"><?= $primary_city['d']; ?></h3></a>
                        <img class="map" src="https://maps.googleapis.com/maps/api/staticmap?center=<?= $nantes_forecast->{'city'}->{'coord'}->{'lat'} ?>,<?= $nantes_forecast->{'city'}->{'coord'}->{'lon'} ?>&markers=<?= $nantes_forecast->{'city'}->{'coord'}->{'lat'} ?>,<?= $nantes_forecast->{'city'}->{'coord'}->{'lon'} ?>&zoom=12&size=500x400&key=AIzaSyAlXR7vVCbfzv0XHHHLO2ecZzY59-6P_mc">
                        <div class="meteo-section">
                            <div class="morning">
                                <h4 class="time-day">Weather :</h4>
                                <div class="sky"><?= $nantes_sky; ?></div>
                                <div class="temperature"><?= $nantes_temp; ?>°C</div>
                            </div>
                            <!-- <div class="afternoon">
                                <h4 class="time-day">Après midi :</h4>
                                <div class="sky">Nuageux</div>
                                <div class="temperature">9°C</div>
                            </div>
                            <div class="evening">
                                <h4 class="time-day">Soir :</h4>
                                <div class="sky">Pluvieux</div>
                                <div class="temperature">2°C</div>
                            </div> -->
                        </div>
                    </div>
                    <div class="city city-5">
                        <a href=""><h3 class="city-name"><?= $primary_city['e']; ?></h3></a>
                        <img class="map" src="https://maps.googleapis.com/maps/api/staticmap?center=<?= $toulouse_forecast->{'city'}->{'coord'}->{'lat'} ?>,<?= $toulouse_forecast->{'city'}->{'coord'}->{'lon'} ?>&markers=<?= $toulouse_forecast->{'city'}->{'coord'}->{'lat'} ?>,<?= $toulouse_forecast->{'city'}->{'coord'}->{'lon'} ?>&zoom=12&size=500x400&key=AIzaSyAlXR7vVCbfzv0XHHHLO2ecZzY59-6P_mc">
                        <div class="meteo-section">
                            <div class="morning">
                                <h4 class="time-day">Weather :</h4>
                                <div class="sky"><?= $toulouse_sky; ?></div>
                                <div class="temperature"><?= $toulouse_temp; ?>°C</div>
                            </div>
                            <!-- <div class="afternoon">
                                <h4 class="time-day">Après midi :</h4>
                                <div class="sky">Nuageux</div>
                                <div class="temperature">9°C</div>
                            </div>
                            <div class="evening">
                                <h4 class="time-day">Soir :</h4>
                                <div class="sky">Pluvieux</div>
                                <div class="temperature">2°C</div>
                            </div> -->
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
                <li class="text text-1"><a href="#">About</a></li>
                <li class="text text-2"><a href="#">Contact us</a></li>
                <li class="text text-3"><a href="#">Legal notice</a></li>
            </ul>
        </div>
    </footer>
    <!-- <script src="scripts/script.js" type="text/javascript"></script> -->
</body>
</html>