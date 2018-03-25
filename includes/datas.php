<?php

///////////////////////
/// JSON DATAS ///
////////////////////

// CITY SEARCH - city.php

    // CITY NAME OF THE RESEARCH
    $city_name = $city->{'city'}->{'name'};

        // WEATHER NOW
        $city_temp_now = $city_2->{'main'}->{'temp'};
        $city_sky_now = $city_2->{'weather'}[0]->{'description'};

        // FORECASTS
        $city_temp_24h = $city->{'list'}[7]->{'main'}->{'temp'}; // [7] => 3h x 8 = 24h
        $city_sky_24h = $city->{'list'}[7]->{'weather'}[0]->{'description'};
        $city_temp_48h = $city->{'list'}[15]->{'main'}->{'temp'}; // [7] => 3h x 16 = 48h
        $city_sky_48h = $city->{'list'}[15]->{'weather'}[0]->{'description'};
        $city_temp_72h = $city->{'list'}[23]->{'main'}->{'temp'}; // [7] => 3h x 24 = 72h
        $city_sky_72h = $city->{'list'}[23]->{'weather'}[0]->{'description'};
        $city_temp_96h = $city->{'list'}[31]->{'main'}->{'temp'}; // [7] => 3h x 32 = 96h
        $city_sky_96h = $city->{'list'}[31]->{'weather'}[0]->{'description'};





//ACTUAL METEO IN PRIMARY FRENCH CITY - index.php

    // PARIS
    $paris_temp=$paris->{'main'}->{'temp'};
    $paris_sky=$paris->{'weather'}[0]->{'description'};

    // MARSEILLE
    $marseille_temp=$marseille->{'main'}->{'temp'}; 
    $marseille_sky=$marseille->{'weather'}[0]->{'description'};

    // LYON
    $lyon_temp=$lyon->{'main'}->{'temp'};
    $lyon_sky=$lyon->{'weather'}[0]->{'description'};

    // NANTES
    $nantes_temp=$nantes->{'main'}->{'temp'};
    $nantes_sky=$nantes->{'weather'}[0]->{'description'};

    // TOULOUSE
    $toulouse_temp=$toulouse->{'main'}->{'temp'};
    $toulouse_sky=$toulouse->{'weather'}[0]->{'description'};


// FORECAST METEO IN PRIMARY FRENCH CITY - forecasts.php

    // PARIS
    $paris_temp_24h = $paris_forecast->{'list'}[7]->{'main'}->{'temp'};   // [7] => 3h x 8 = 24h
    $paris_temp_48h = $paris_forecast->{'list'}[15]->{'main'}->{'temp'};   // [15] => 3h x 16 = 48h
    $paris_temp_72h = $paris_forecast->{'list'}[23]->{'main'}->{'temp'};   // [23] => 3h x 24 = 72h
    $paris_temp_96h = $paris_forecast->{'list'}[31]->{'main'}->{'temp'};   // [31] => 3h x 32 = 96h
    $paris_sky_24h = $paris_forecast->{'list'}[7]->{'weather'}[0]->{'description'};
    $paris_sky_48h = $paris_forecast->{'list'}[15]->{'weather'}[0]->{'description'};
    $paris_sky_72h = $paris_forecast->{'list'}[23]->{'weather'}[0]->{'description'};
    $paris_sky_96h = $paris_forecast->{'list'}[31]->{'weather'}[0]->{'description'};

    // MARSEILLE
    $marseille_temp_24h = $marseille_forecast->{'list'}[7]->{'main'}->{'temp'};   // [7] => 3h x 8 = 24h
    $marseille_temp_48h = $marseille_forecast->{'list'}[15]->{'main'}->{'temp'};   // [15] => 3h x 16 = 48h
    $marseille_temp_72h = $marseille_forecast->{'list'}[23]->{'main'}->{'temp'};   // [23] => 3h x 24 = 72h
    $marseille_temp_96h = $marseille_forecast->{'list'}[31]->{'main'}->{'temp'};   // [31] => 3h x 32 = 96h
    $marseille_sky_24h = $marseille_forecast->{'list'}[7]->{'weather'}[0]->{'description'};
    $marseille_sky_48h = $marseille_forecast->{'list'}[15]->{'weather'}[0]->{'description'};
    $marseille_sky_72h = $marseille_forecast->{'list'}[23]->{'weather'}[0]->{'description'};
    $marseille_sky_96h = $marseille_forecast->{'list'}[31]->{'weather'}[0]->{'description'};
    
    // LYON
    $lyon_temp_24h = $lyon_forecast->{'list'}[7]->{'main'}->{'temp'};   // [7] => 3h x 8 = 24h
    $lyon_temp_48h = $lyon_forecast->{'list'}[15]->{'main'}->{'temp'};   // [15] => 3h x 16 = 48h
    $lyon_temp_72h = $lyon_forecast->{'list'}[23]->{'main'}->{'temp'};   // [23] => 3h x 24 = 72h
    $lyon_temp_96h = $lyon_forecast->{'list'}[31]->{'main'}->{'temp'};   // [31] => 3h x 32 = 96h
    $lyon_sky_24h = $lyon_forecast->{'list'}[7]->{'weather'}[0]->{'description'};
    $lyon_sky_48h = $lyon_forecast->{'list'}[15]->{'weather'}[0]->{'description'};
    $lyon_sky_72h = $lyon_forecast->{'list'}[23]->{'weather'}[0]->{'description'};
    $lyon_sky_96h = $lyon_forecast->{'list'}[31]->{'weather'}[0]->{'description'};

    // NANTES
    $nantes_temp_24h = $nantes_forecast->{'list'}[7]->{'main'}->{'temp'};   // [7] => 3h x 8 = 24h
    $nantes_temp_48h = $nantes_forecast->{'list'}[15]->{'main'}->{'temp'};   // [15] => 3h x 16 = 48h
    $nantes_temp_72h = $nantes_forecast->{'list'}[23]->{'main'}->{'temp'};   // [23] => 3h x 24 = 72h
    $nantes_temp_96h = $nantes_forecast->{'list'}[31]->{'main'}->{'temp'};   // [31] => 3h x 32 = 96h
    $nantes_sky_24h = $nantes_forecast->{'list'}[7]->{'weather'}[0]->{'description'};
    $nantes_sky_48h = $nantes_forecast->{'list'}[15]->{'weather'}[0]->{'description'};
    $nantes_sky_72h = $nantes_forecast->{'list'}[23]->{'weather'}[0]->{'description'};
    $nantes_sky_96h = $nantes_forecast->{'list'}[31]->{'weather'}[0]->{'description'};

    // TOULOUSE
    $toulouse_temp_24h = $toulouse_forecast->{'list'}[7]->{'main'}->{'temp'};   // [7] => 3h x 8 = 24h
    $toulouse_temp_48h = $toulouse_forecast->{'list'}[15]->{'main'}->{'temp'};   // [15] => 3h x 16 = 48h
    $toulouse_temp_72h = $toulouse_forecast->{'list'}[23]->{'main'}->{'temp'};   // [23] => 3h x 24 = 72h
    $toulouse_temp_96h = $toulouse_forecast->{'list'}[31]->{'main'}->{'temp'};   // [31] => 3h x 32 = 96h
    $toulouse_sky_24h = $toulouse_forecast->{'list'}[7]->{'weather'}[0]->{'description'};
    $toulouse_sky_48h = $toulouse_forecast->{'list'}[15]->{'weather'}[0]->{'description'};
    $toulouse_sky_72h = $toulouse_forecast->{'list'}[23]->{'weather'}[0]->{'description'};
    $toulouse_sky_96h = $toulouse_forecast->{'list'}[31]->{'weather'}[0]->{'description'};

?>