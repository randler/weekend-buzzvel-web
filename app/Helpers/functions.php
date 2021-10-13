<?php

function getDistance(
    $lat1,
    $lon1,
    $lat2,
    $lon2,
    $unit = "km"
)
{

    $lat1 = floatval($lat1);
    $lon1 = floatval($lon1);
    $lat2 = floatval($lat2);
    $lon2 = floatval($lon2);

    $theta = $lon1 - $lon2;
    $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
    $dist = acos($dist);
    $dist = rad2deg($dist);
    $miles = $dist * 60 * 1.1515;
    $unit = strtoupper($unit);

    if ($unit == "KM") {
        return number_format(($miles * 1.609344), 2, '.', '') . " KM";
    } else if ($unit == "M") {
        return number_format(($miles * 0.8684), 2) . " M";
    } else {
        return number_format($miles, 2);
    }

}

function formatPrice($price)
{
    //format euro price
    $price = number_format($price, 2, '.', ',');
    return $price . " EUR";
}
