<?php

// CACHES FILES
$path = './caches/'.md5($url);
$path_paris = './caches/'.md5($primary_city_url['Paris']);
$path_marseille = './caches/'.md5($primary_city_url['Marseille']);
$path_lyon = './caches/'.md5($primary_city_url['Lyon']);
$path_nantes = './caches/'.md5($primary_city_url['Nantes']);
$path_toulouse = './caches/'.md5($primary_city_url['Toulouse']);


// CACHE FUNCTION FOR SEARCH CITY
if(file_exists($path) &&  time() - filemtime($path) < 10) { // 10seconds MAX and actualize the file of the cache
    echo 'from cache'; // for verify
    $forecast = json_decode(file_get_contents($path));
}else {
    echo 'from API'; // for verify
    $forecast = json_decode(file_get_contents($url));
    file_put_contents($path, json_encode($forecast));
}

// CACHE FUNCTIONS FOR PRIMARY FRENCH CITY

    // PARIS
    if(file_exists($path_paris) &&  time() - filemtime($path_paris) < 10) { // 10seconds MAX and actualize the file of the cache
        echo 'from cache'; // for verify
        $paris = json_decode(file_get_contents($path_paris));
    }else {
        echo 'from API'; // for verify
        $paris = json_decode(file_get_contents($primary_city_url['Paris']));
        file_put_contents($path_paris, json_encode($paris));
    }

    echo '<pre>';
    var_dump($paris);
    echo '</pre>';

    // MARSEILLE
    if(file_exists($path_marseille) &&  time() - filemtime($path_marseille) < 10) { // 10seconds MAX and actualize the file of the cache
        echo 'from cache'; // for verify
        $marseille = json_decode(file_get_contents($path_marseille));
    }else {
        echo 'from API'; // for verify
        $marseille = json_decode(file_get_contents($primary_city_url['Marseille']));
        file_put_contents($path_marseille, json_encode($marseille));
    }

    // LYON
    if(file_exists($path_lyon) &&  time() - filemtime($path_lyon) < 10) { // 10seconds MAX and actualize the file of the cache
        echo 'from cache'; // for verify
        $lyon = json_decode(file_get_contents($path_lyon));
    }else {
        echo 'from API'; // for verify
        $lyon = json_decode(file_get_contents($primary_city_url['Lyon']));
        file_put_contents($path_lyon, json_encode($lyon));
    }

    // NANTES
    if(file_exists($path_nantes) &&  time() - filemtime($path_nantes) < 10) { // 10seconds MAX and actualize the file of the cache
        echo 'from cache'; // for verify
        $nantes = json_decode(file_get_contents($path_nantes));
    }else {
        echo 'from API'; // for verify
        $nantes = json_decode(file_get_contents($primary_city_url['Nantes']));
        file_put_contents($path_nantes, json_encode($nantes));
    }

    // TOULOUSE
    if(file_exists($path_toulouse) &&  time() - filemtime($path_toulouse) < 10) { // 10seconds MAX and actualize the file of the cache
        echo 'from cache'; // for verify
        $toulouse= json_decode(file_get_contents($path_toulouse));
    }else {
        echo 'from API'; // for verify
        $toulouse = json_decode(file_get_contents($primary_city_url['Toulouse']));
        file_put_contents($path_toulouse, json_encode($toulouse));
    }

    ?>