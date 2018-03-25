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
            <div class="header-contents">
                <h2 class="title">METEO FRANCE</h2>
                <div class="separator-forecast">-</div>
                <div class="text-forecast">Forecasts for the 5 nexts days</div>
            </div>
            <!-- main contents -->
            <div class="main-contents">
                <div class="city-forecast">
                    <div class="city-forecast-1">
                        <div class="left">
                            <a href=""><h3 class="city-name-forecast"><?= $primary_city['a']; ?></h3></a>
                            <div class="map-forecast"></div>
                        </div>
                        <div class="right">
                            <div class="day-1 day">
                                <h4 class="day-name">Now</h4>
                                <div class="sky"><?= $paris_sky_now; ?></div>
                                <div class="temperature"><?= $paris_temp_now; ?>°C</div>
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
                            <div class="map-forecast"></div>
                        </div>
                        <div class="right">
                            <div class="day-1 day">
                                <h4 class="day-name">Now</h4>
                                <div class="sky"><?= $marseille_sky_now; ?></div>
                                <div class="temperature"><?= $marseille_temp_now; ?>°C</div>
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
                            <div class="map-forecast"></div>
                        </div>
                        <div class="right">
                            <div class="day-1 day">
                                <h4 class="day-name">Now</h4>
                                <div class="sky"><?= $lyon_sky_now; ?></div>
                                <div class="temperature"><?= $lyon_temp_now; ?>°C</div>
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
                                <div class="map-forecast"></div>
                            </div>
                            <div class="right">
                                <div class="day-1 day">
                                    <h4 class="day-name">Now</h4>
                                    <div class="sky"><?= $nantes_sky_now; ?></div>
                                    <div class="temperature"><?= $nantes_temp_now; ?>°C</div>
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
                                <div class="map-forecast"></div>
                            </div>
                            <div class="right">
                                <div class="day-1 day">
                                    <h4 class="day-name">Now</h4>
                                    <div class="sky"><?= $toulouse_sky_now; ?></div>
                                    <div class="temperature"><?= $toulouse_temp_now; ?>°C</div>
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