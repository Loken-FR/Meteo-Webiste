<?php

// VARIABLES

    // INPUT SEARCH CITY
    $city = !empty($_GET['city']) ? $_GET['city'] : 'Paris';
    $url = 'http://api.openweathermap.org/data/2.5/forecast?q='.$city.'&units=metric&appid=515e5cf11aebbe79b6a12ed0ede7f344';

    // PRIMARY FRENCH CITY
    $primary_city = [
        'a' => 'Paris',
        'b' => 'Marseille',
        'c' => 'Lyon',
        'd' => 'Nantes',
        'e' => 'Toulouse'
    ];

    $primary_city_url = [
        'Paris' => 'http://api.openweathermap.org/data/2.5/weather?q=Paris&units=metric&APPID=515e5cf11aebbe79b6a12ed0ede7f344',
        'Marseille' => 'http://api.openweathermap.org/data/2.5/weather?q=Marseille&units=metric&APPID=515e5cf11aebbe79b6a12ed0ede7f344',
        'Lyon' => 'http://api.openweathermap.org/data/2.5/weather?q=Lyon&units=metric&APPID=515e5cf11aebbe79b6a12ed0ede7f344',
        'Nantes' => 'http://api.openweathermap.org/data/2.5/weather?q=Nantes&units=metric&APPID=515e5cf11aebbe79b6a12ed0ede7f344',
        'Toulouse' => 'http://api.openweathermap.org/data/2.5/weather?q=Toulouse&units=metric&APPID=515e5cf11aebbe79b6a12ed0ede7f344'
    ];

?>