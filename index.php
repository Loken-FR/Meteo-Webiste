<?php

include 'includes/variables.php';
include 'includes/caches.php';
include 'includes/datas.php';
include 'includes/translate.php';

?>
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
                <a href="index.php"><h1>Meteo Direct</h1></a>
            </div>
            <div class="search-city">
                <form action="#" method="GET">
                <input class="input-text" type="text" value="<?= $city; ?>" name="city">
                <input class="input-submit" type="submit">
            </div>
        </div>
        <!-- menu section -->
        <div class="menu-section">
            <ul class="menu">
                <li class="text text-1"><a href="index.php">Accueil</a></li>
                <li class="text text-2"><a href="previsions.php">Prévisions</a></li>
                <li class="text text-3"><a href="#">Actualités</a></li>
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
                <div class="text">Aujourd'hui</div>
            </div>
            <!-- main contents -->
            <div class="main-contents">
                <div class="primary-city">
                    <div class="city city-1">
                        <a href=""><h3 class="city-name"><?= $primary_city['a']; ?></h3></a>
                        <div class="map"></div>
                        <div class="meteo-section">
                            <div class="morning">
                                <h4 class="time-day">Meteo :</h4>
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
                        <div class="map"></div>
                        <div class="meteo-section">
                            <div class="morning">
                                <h4 class="time-day">Meteo :</h4>
                                <div class="sky">Ensoleillé</div>
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
                        <div class="map"></div>
                        <div class="meteo-section">
                            <div class="morning">
                                <h4 class="time-day">Meteo :</h4>
                                <div class="sky">Nuageux</div>
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
                        <div class="map"></div>
                        <div class="meteo-section">
                            <div class="morning">
                                <h4 class="time-day">Meteo :</h4>
                                <div class="sky">Nuageux</div>
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
                        <div class="map"></div>
                        <div class="meteo-section">
                            <div class="morning">
                                <h4 class="time-day">Meteo :</h4>
                                <div class="sky">Nuageux</div>
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
                <li class="text text-1"><a href="#">A propos</a></li>
                <li class="text text-2"><a href="#">Nous Contacter</a></li>
                <li class="text text-3"><a href="#">Mentions légales</a></li>
            </ul>
        </div>
    </footer>
    <!-- <script src="scripts/script.js" type="text/javascript"></script> -->
</body>
</html>