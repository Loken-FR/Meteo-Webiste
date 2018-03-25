<?php

// CACHES FILES

    // SEARCH CITY
    $path = './caches/'.md5($url);

    // WEATHER PRIMARY FRENCH CITY
    $path_paris = './caches/'.md5($primary_city_weather['Paris']);
    $path_marseille = './caches/'.md5($primary_city_weather['Marseille']);
    $path_lyon = './caches/'.md5($primary_city_weather['Lyon']);
    $path_nantes = './caches/'.md5($primary_city_weather['Nantes']);
    $path_toulouse = './caches/'.md5($primary_city_weather['Toulouse']);

    // FORECAST PRIMARY FRENCH CITY
    $path_paris_forecast = './caches/'.md5($primary_city_forecast['Paris']);
    $path_marseille_forecast = './caches/'.md5($primary_city_forecast['Marseille']);
    $path_lyon_forecast = './caches/'.md5($primary_city_forecast['Lyon']);
    $path_nantes_forecast = './caches/'.md5($primary_city_forecast['Nantes']);
    $path_toulouse_forecast = './caches/'.md5($primary_city_forecast['Toulouse']);



// CACHES FUNCTIONS

    // CACHE FUNCTION FOR SEARCH CITY
    if(file_exists($path) &&  time() - filemtime($path) < 10) { // 10seconds MAX and actualize the file of the cache
        echo 'from cache'; // for verify
        $forecast = json_decode(file_get_contents($path));
    }else {
        echo 'from API'; // for verify
        $forecast = json_decode(file_get_contents($url));
        file_put_contents($path, json_encode($forecast));
    }

    // CACHE FUNCTIONS FOR ACTUAL METEO PRIMARY FRENCH CITY

        // PARIS
        if(file_exists($path_paris) &&  time() - filemtime($path_paris) < 10) { // 10seconds MAX and actualize the file of the cache
            echo 'from cache'; // for verify
            $paris = json_decode(file_get_contents($path_paris));
        }else {
            echo 'from API'; // for verify
            $paris = json_decode(file_get_contents($primary_city_weather['Paris']));
            file_put_contents($path_paris, json_encode($paris));
        }

        // MARSEILLE
        if(file_exists($path_marseille) &&  time() - filemtime($path_marseille) < 10) { // 10seconds MAX and actualize the file of the cache
            echo 'from cache'; // for verify
            $marseille = json_decode(file_get_contents($path_marseille));
        }else {
            echo 'from API'; // for verify
            $marseille = json_decode(file_get_contents($primary_city_weather['Marseille']));
            file_put_contents($path_marseille, json_encode($marseille));
        }

        // LYON
        if(file_exists($path_lyon) &&  time() - filemtime($path_lyon) < 10) { // 10seconds MAX and actualize the file of the cache
            echo 'from cache'; // for verify
            $lyon = json_decode(file_get_contents($path_lyon));
        }else {
            echo 'from API'; // for verify
            $lyon = json_decode(file_get_contents($primary_city_weather['Lyon']));
            file_put_contents($path_lyon, json_encode($lyon));
        }

        // NANTES
        if(file_exists($path_nantes) &&  time() - filemtime($path_nantes) < 10) { // 10seconds MAX and actualize the file of the cache
            echo 'from cache'; // for verify
            $nantes = json_decode(file_get_contents($path_nantes));
        }else {
            echo 'from API'; // for verify
            $nantes = json_decode(file_get_contents($primary_city_weather['Nantes']));
            file_put_contents($path_nantes, json_encode($nantes));
        }

        // TOULOUSE
        if(file_exists($path_toulouse) &&  time() - filemtime($path_toulouse) < 10) { // 10seconds MAX and actualize the file of the cache
            echo 'from cache'; // for verify
            $toulouse= json_decode(file_get_contents($path_toulouse));
        }else {
            echo 'from API'; // for verify
            $toulouse = json_decode(file_get_contents($primary_city_weather['Toulouse']));
            file_put_contents($path_toulouse, json_encode($toulouse));
        }



    // CACHE FUNCTIONS FOR FORECAST METEO IN PRIMARY FRENCH CITY

        // PARIS
        if(file_exists($path_paris_forecast) &&  time() - filemtime($path_paris_forecast) < 10) { // 10seconds MAX and actualize the file of the cache
            echo 'from cache'; // for verify
            $paris_forecast = json_decode(file_get_contents($path_paris_forecast));
        }else {
            echo 'from API'; // for verify
            $paris_forecast = json_decode(file_get_contents($primary_city_forecast['Paris']));
            file_put_contents($path_paris_forecast, json_encode($paris_forecast));
        }


        // MARSEILLE
        if(file_exists($path_marseille_forecast) &&  time() - filemtime($path_marseille_forecast) < 10) { // 10seconds MAX and actualize the file of the cache
            echo 'from cache'; // for verify
            $marseille_forecast = json_decode(file_get_contents($path_marseille_forecast));
        }else {
            echo 'from API'; // for verify
            $marseille_forecast = json_decode(file_get_contents($primary_city_forecast['Marseille']));
            file_put_contents($path_marseille_forecast, json_encode($marseille_forecast));
        }

        // LYON
        if(file_exists($path_lyon_forecast) &&  time() - filemtime($path_lyon_forecast) < 10) { // 10seconds MAX and actualize the file of the cache
            echo 'from cache'; // for verify
            $lyon_forecast = json_decode(file_get_contents($path_lyon_forecast));
        }else {
            echo 'from API'; // for verify
            $lyon_forecast = json_decode(file_get_contents($primary_city_forecast['Lyon']));
            file_put_contents($path_lyon_forecast, json_encode($lyon_forecast));
        }

        // NANTES
        if(file_exists($path_nantes_forecast) &&  time() - filemtime($path_nantes_forecast) < 10) { // 10seconds MAX and actualize the file of the cache
            echo 'from cache'; // for verify
            $nantes_forecast = json_decode(file_get_contents($path_nantes_forecast));
        }else {
            echo 'from API'; // for verify
            $nantes_forecast = json_decode(file_get_contents($primary_city_forecast['Nantes']));
            file_put_contents($path_nantes_forecast, json_encode($nantes_forecast));
        }

        // TOULOUSE
        if(file_exists($path_toulouse_forecast) &&  time() - filemtime($path_toulouse_forecast) < 10) { // 10seconds MAX and actualize the file of the cache
            echo 'from cache'; // for verify
            $toulouse_forecast= json_decode(file_get_contents($path_toulouse_forecast));
        }else {
            echo 'from API'; // for verify
            $toulouse_forecast = json_decode(file_get_contents($primary_city_forecast['Toulouse']));
            file_put_contents($path_toulouse_forecast, json_encode($toulouse_forecast));
        }


?>