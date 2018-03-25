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
            <div class="header-contents">
                <h2 class="title">METEO FRANCE</h2>
                <div class="separator-forecast">-</div>
                <div class="text-forecast">Forecasts for the 4 nexts days</div>
            </div>
            <!-- main contents -->
            <div class="main-contents">
                <div class="city-forecast">
                    <div class="city-forecast-1">
                        <div class="left">
                            <a href=""><h3 class="city-name-forecast"><?= $primary_city['a']; ?></h3></a>
                            <img class="map-forecast" src="https://maps.googleapis.com/maps/api/staticmap?center=<?= $paris_forecast->{'city'}->{'coord'}->{'lat'} ?>,<?= $paris_forecast->{'city'}->{'coord'}->{'lon'} ?>&markers=<?= $paris_forecast->{'city'}->{'coord'}->{'lat'} ?>,<?= $paris_forecast->{'city'}->{'coord'}->{'lon'} ?>&zoom=11&size=400x300&key=AIzaSyAlXR7vVCbfzv0XHHHLO2ecZzY59-6P_mc">
                        </div>
                        <div class="right">
                            <div class="day-1 day">
                                <h4 class="day-name">Now</h4>
                                <div class="sky"><?= $paris_sky; ?></div>
                                <div class="temperature"><?= $paris_temp; ?>°C</div>
                            </div>
                            <div class="day-2 day">
                                <h4 class="day-name">In 24h</h4>
                                <div class="sky"><?= $paris_sky_24h; ?></div>
                                <div class="temperature"><?= $paris_temp_24h; ?>°C</div>
                            </div>
                            <div class="day-3 day">
                                <h4 class="day-name">In 48h</h4>
                                <div class="sky"><?= $paris_sky_48h; ?></div>
                                <div class="temperature"><?= $paris_temp_48h; ?>°C</div>
                            </div>
                            <div class="day-4 day">
                                <h4 class="day-name">In 72h</h4>
                                <div class="sky"><?= $paris_sky_72h; ?></div>
                                <div class="temperature"><?= $paris_temp_72h; ?>°C</div>
                            </div>
                            <div class="day-5 day">
                                <h4 class="day-name">In 96h</h4>
                                <div class="sky"><?= $paris_sky_96h; ?></div>
                                <div class="temperature"><?= $paris_temp_96h; ?>°C</div>
                            </div>
                        </div>
                    </div>
                    <div class="city-forecast-2">
                        <div class="left">
                            <a href=""><h3 class="city-name-forecast"><?= $primary_city['b']; ?></h3></a>
                            <img class="map-forecast" src="https://maps.googleapis.com/maps/api/staticmap?center=<?= $marseille_forecast->{'city'}->{'coord'}->{'lat'} ?>,<?= $marseille_forecast->{'city'}->{'coord'}->{'lon'} ?>&markers=<?= $marseille_forecast->{'city'}->{'coord'}->{'lat'} ?>,<?= $marseille_forecast->{'city'}->{'coord'}->{'lon'} ?>&zoom=11&size=400x300&key=AIzaSyAlXR7vVCbfzv0XHHHLO2ecZzY59-6P_mc">
                        </div>
                        <div class="right">
                            <div class="day-1 day">
                                <h4 class="day-name">Now</h4>
                                <div class="sky"><?= $marseille_sky; ?></div>
                                <div class="temperature"><?= $marseille_temp; ?>°C</div>
                            </div>
                            <div class="day-2 day">
                                <h4 class="day-name">In 24h</h4>
                                <div class="sky"><?= $marseille_sky_24h; ?></div>
                                <div class="temperature"><?= $marseille_temp_24h; ?>°C</div>
                            </div>
                            <div class="day-3 day">
                                <h4 class="day-name">In 48h</h4>
                                <div class="sky"><?= $marseille_sky_48h; ?></div>
                                <div class="temperature"><?= $marseille_temp_48h; ?>°C</div>
                            </div>
                            <div class="day-4 day">
                                <h4 class="day-name">In 72h</h4>
                                <div class="sky"><?= $marseille_sky_72h; ?></div>
                                <div class="temperature"><?= $marseille_temp_72h; ?>°C</div>
                            </div>
                            <div class="day-5 day">
                                <h4 class="day-name">In 96h</h4>
                                <div class="sky"><?= $marseille_sky_96h; ?></div>
                                <div class="temperature"><?= $marseille_temp_96h; ?>°C</div>
                            </div>
                        </div>
                    </div>
                    <div class="city-forecast-3">
                        <div class="left">
                            <a href=""><h3 class="city-name-forecast"><?= $primary_city['c']; ?></h3></a>
                            <img class="map-forecast" src="https://maps.googleapis.com/maps/api/staticmap?center=<?= $lyon_forecast->{'city'}->{'coord'}->{'lat'} ?>,<?= $lyon_forecast->{'city'}->{'coord'}->{'lon'} ?>&markers=<?= $lyon_forecast->{'city'}->{'coord'}->{'lat'} ?>,<?= $lyon_forecast->{'city'}->{'coord'}->{'lon'} ?>&zoom=11&size=400x300&key=AIzaSyAlXR7vVCbfzv0XHHHLO2ecZzY59-6P_mc">
                        </div>
                        <div class="right">
                            <div class="day-1 day">
                                <h4 class="day-name">Now</h4>
                                <div class="sky"><?= $lyon_sky; ?></div>
                                <div class="temperature"><?= $lyon_temp; ?>°C</div>
                            </div>
                            <div class="day-2 day">
                                <h4 class="day-name">In 24h</h4>
                                <div class="sky"><?= $lyon_sky_24h; ?></div>
                                <div class="temperature"><?= $lyon_temp_24h; ?>°C</div>
                            </div>
                            <div class="day-3 day">
                                <h4 class="day-name">In 48h</h4>
                                <div class="sky"><?= $lyon_sky_48h; ?></div>
                                <div class="temperature"><?= $lyon_temp_48h; ?>°C</div>
                            </div>
                            <div class="day-4 day">
                                <h4 class="day-name">In 72h</h4>
                                <div class="sky"><?= $lyon_sky_72h; ?></div>
                                <div class="temperature"><?= $lyon_temp_72h; ?>°C</div>
                            </div>
                            <div class="day-5 day">
                                <h4 class="day-name">In 96h</h4>
                                <div class="sky"><?= $lyon_sky_96h; ?></div>
                                <div class="temperature"><?= $lyon_temp_96h; ?>°C</div>
                            </div>
                        </div>
                        <div class="city-forecast-4">
                            <div class="left">
                                <a href=""><h3 class="city-name-forecast"><?= $primary_city['d']; ?></h3></a>
                                <img class="map-forecast" src="https://maps.googleapis.com/maps/api/staticmap?center=<?= $nantes_forecast->{'city'}->{'coord'}->{'lat'} ?>,<?= $nantes_forecast->{'city'}->{'coord'}->{'lon'} ?>&markers=<?= $nantes_forecast->{'city'}->{'coord'}->{'lat'} ?>,<?= $nantes_forecast->{'city'}->{'coord'}->{'lon'} ?>&zoom=11&size=400x300&key=AIzaSyAlXR7vVCbfzv0XHHHLO2ecZzY59-6P_mc">
                            </div>
                            <div class="right">
                                <div class="day-1 day">
                                    <h4 class="day-name">Now</h4>
                                    <div class="sky"><?= $nantes_sky; ?></div>
                                    <div class="temperature"><?= $nantes_temp; ?>°C</div>
                                </div>
                                <div class="day-2 day">
                                    <h4 class="day-name">In 24h</h4>
                                    <div class="sky"><?= $nantes_sky_24h; ?></div>
                                    <div class="temperature"><?= $nantes_temp_24h; ?>°C</div>
                                </div>
                                <div class="day-3 day">
                                    <h4 class="day-name">In 48h</h4>
                                    <div class="sky"><?= $nantes_sky_48h; ?></div>
                                    <div class="temperature"><?= $nantes_temp_48h; ?>°C</div>
                                </div>
                                <div class="day-4 day">
                                    <h4 class="day-name">In 72h</h4>
                                    <div class="sky"><?= $nantes_sky_72h; ?></div>
                                    <div class="temperature"><?= $nantes_temp_72h; ?>°C</div>
                                </div>
                                <div class="day-5 day">
                                    <h4 class="day-name">In 96h</h4>
                                    <div class="sky"><?= $nantes_sky_96h; ?></div>
                                    <div class="temperature"><?= $nantes_temp_96h; ?>°C</div>
                                </div>
                            </div>
                        </div>
                        <div class="city-forecast-5">
                            <div class="left">
                                <a href=""><h3 class="city-name-forecast"><?= $primary_city['e']; ?></h3></a>
                                <img class="map-forecast" src="https://maps.googleapis.com/maps/api/staticmap?center=<?= $toulouse_forecast->{'city'}->{'coord'}->{'lat'} ?>,<?= $toulouse_forecast->{'city'}->{'coord'}->{'lon'} ?>&markers=<?= $toulouse_forecast->{'city'}->{'coord'}->{'lat'} ?>,<?= $toulouse_forecast->{'city'}->{'coord'}->{'lon'} ?>&zoom=11&size=400x300&key=AIzaSyAlXR7vVCbfzv0XHHHLO2ecZzY59-6P_mc">>
                            </div>
                            <div class="right">
                                <div class="day-1 day">
                                    <h4 class="day-name">Now</h4>
                                    <div class="sky"><?= $toulouse_sky; ?></div>
                                    <div class="temperature"><?= $toulouse_temp; ?>°C</div>
                                </div>
                                <div class="day-2 day">
                                    <h4 class="day-name">In 24h</h4>
                                    <div class="sky"><?= $toulouse_sky_24h; ?></div>
                                    <div class="temperature"><?= $toulouse_temp_24h; ?>°C</div>
                                </div>
                                <div class="day-3 day">
                                    <h4 class="day-name">In 48h</h4>
                                    <div class="sky"><?= $toulouse_sky_48h; ?></div>
                                    <div class="temperature"><?= $toulouse_temp_48h; ?>°C</div>
                                </div>
                                <div class="day-4 day">
                                    <h4 class="day-name">In 72h</h4>
                                    <div class="sky"><?= $toulouse_sky_72h; ?></div>
                                    <div class="temperature"><?= $toulouse_temp_72h; ?>°C</div>
                                </div>
                                <div class="day-5 day">
                                    <h4 class="day-name">In 96h</h4>
                                    <div class="sky"><?= $toulouse_sky_96h; ?></div>
                                    <div class="temperature"><?= $toulouse_temp_96h; ?>°C</div>
                                </div>
                            </div>
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