<?php

// CACHES FILES

    // SEARCH CITY - city.php
    $path = './caches/'.md5($url);
    $path_2 = './caches/'.md5($url_2);

    // WEATHER PRIMARY FRENCH CITY - index.php
    $path_paris = './caches/'.md5($primary_city_weather['Paris']);
    $path_marseille = './caches/'.md5($primary_city_weather['Marseille']);
    $path_lyon = './caches/'.md5($primary_city_weather['Lyon']);
    $path_nantes = './caches/'.md5($primary_city_weather['Nantes']);
    $path_toulouse = './caches/'.md5($primary_city_weather['Toulouse']);

    // FORECAST PRIMARY FRENCH CITY - forecasts.php
    $path_paris_forecast = './caches/'.md5($primary_city_forecast['Paris']);
    $path_marseille_forecast = './caches/'.md5($primary_city_forecast['Marseille']);
    $path_lyon_forecast = './caches/'.md5($primary_city_forecast['Lyon']);
    $path_nantes_forecast = './caches/'.md5($primary_city_forecast['Nantes']);
    $path_toulouse_forecast = './caches/'.md5($primary_city_forecast['Toulouse']);



// CACHES FUNCTIONS

    // CACHE FUNCTIONS FOR SEARCH CITY - city.php

    // FORECAST
        if(file_exists($path) &&  time() - filemtime($path) < 10) { // 10seconds MAX and actualize the file of the cache
            $city = json_decode(file_get_contents($path));
        }else {
            $city = json_decode(file_get_contents($url));
            file_put_contents($path, json_encode($city));
        }

        // WEATHER NOW
        if(file_exists($path_2) &&  time() - filemtime($path_2) < 10) { // 10seconds MAX and actualize the file of the cache
            $city_2 = json_decode(file_get_contents($path_2));
        }else {
            $city_2 = json_decode(file_get_contents($url_2));
            file_put_contents($path_2, json_encode($city_2));
        }

    // CACHE FUNCTIONS FOR ACTUAL METEO PRIMARY FRENCH CITY - index.php

        // PARIS
        if(file_exists($path_paris) &&  time() - filemtime($path_paris) < 10) { // 10seconds MAX and actualize the file of the cache
            $paris = json_decode(file_get_contents($path_paris));
        }else {
            $paris = json_decode(file_get_contents($primary_city_weather['Paris']));
            file_put_contents($path_paris, json_encode($paris));
        }

        // MARSEILLE
        if(file_exists($path_marseille) &&  time() - filemtime($path_marseille) < 10) { // 10seconds MAX and actualize the file of the cache
            $marseille = json_decode(file_get_contents($path_marseille));
        }else {
            $marseille = json_decode(file_get_contents($primary_city_weather['Marseille']));
            file_put_contents($path_marseille, json_encode($marseille));
        }

        // LYON
        if(file_exists($path_lyon) &&  time() - filemtime($path_lyon) < 10) { // 10seconds MAX and actualize the file of the cache
            $lyon = json_decode(file_get_contents($path_lyon));
        }else {
            $lyon = json_decode(file_get_contents($primary_city_weather['Lyon']));
            file_put_contents($path_lyon, json_encode($lyon));
        }

        // NANTES
        if(file_exists($path_nantes) &&  time() - filemtime($path_nantes) < 10) { // 10seconds MAX and actualize the file of the cache
            $nantes = json_decode(file_get_contents($path_nantes));
        }else {
            $nantes = json_decode(file_get_contents($primary_city_weather['Nantes']));
            file_put_contents($path_nantes, json_encode($nantes));
        }

        // TOULOUSE
        if(file_exists($path_toulouse) &&  time() - filemtime($path_toulouse) < 10) { // 10seconds MAX and actualize the file of the cache
            $toulouse= json_decode(file_get_contents($path_toulouse));
        }else {
            $toulouse = json_decode(file_get_contents($primary_city_weather['Toulouse']));
            file_put_contents($path_toulouse, json_encode($toulouse));
        }



    // CACHE FUNCTIONS FOR FORECAST METEO IN PRIMARY FRENCH CITY - forecasts.php

        // PARIS
        if(file_exists($path_paris_forecast) &&  time() - filemtime($path_paris_forecast) < 10) { // 10seconds MAX and actualize the file of the cache
            $paris_forecast = json_decode(file_get_contents($path_paris_forecast));
        }else {
            $paris_forecast = json_decode(file_get_contents($primary_city_forecast['Paris']));
            file_put_contents($path_paris_forecast, json_encode($paris_forecast));
        }


        // MARSEILLE
        if(file_exists($path_marseille_forecast) &&  time() - filemtime($path_marseille_forecast) < 10) { // 10seconds MAX and actualize the file of the cache
            $marseille_forecast = json_decode(file_get_contents($path_marseille_forecast));
        }else {
            $marseille_forecast = json_decode(file_get_contents($primary_city_forecast['Marseille']));
            file_put_contents($path_marseille_forecast, json_encode($marseille_forecast));
        }

        // LYON
        if(file_exists($path_lyon_forecast) &&  time() - filemtime($path_lyon_forecast) < 10) { // 10seconds MAX and actualize the file of the cache
            $lyon_forecast = json_decode(file_get_contents($path_lyon_forecast));
        }else {
            $lyon_forecast = json_decode(file_get_contents($primary_city_forecast['Lyon']));
            file_put_contents($path_lyon_forecast, json_encode($lyon_forecast));
        }

        // NANTES
        if(file_exists($path_nantes_forecast) &&  time() - filemtime($path_nantes_forecast) < 10) { // 10seconds MAX and actualize the file of the cache
            $nantes_forecast = json_decode(file_get_contents($path_nantes_forecast));
        }else {
            $nantes_forecast = json_decode(file_get_contents($primary_city_forecast['Nantes']));
            file_put_contents($path_nantes_forecast, json_encode($nantes_forecast));
        }

        // TOULOUSE
        if(file_exists($path_toulouse_forecast) &&  time() - filemtime($path_toulouse_forecast) < 10) { // 10seconds MAX and actualize the file of the cache
            $toulouse_forecast= json_decode(file_get_contents($path_toulouse_forecast));
        }else {
            $toulouse_forecast = json_decode(file_get_contents($primary_city_forecast['Toulouse']));
            file_put_contents($path_toulouse_forecast, json_encode($toulouse_forecast));
        }


?>