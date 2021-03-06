<?php

namespace App\Http\Controllers\Hotels;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use WeekBuzz\Search;

class HotelsController extends Controller
{

    public function index(
        $lat = "-18.242962801334816",
        $lng = "-43.599337060160344",
        $orderBy =  "proximity"
    )
    {
        $my_lat = $lat;
        $my_lng = $lng;
        $orderBy = $orderBy;

        //dd($my_lat, $my_lng, $orderBy);

        $my_loc = array(
            'lat' => $my_lat,
            'lng' => $my_lng
        );

        $hotels  = Search::getNearbyHotelsArray($my_loc['lat'], $my_loc['lng'], $orderBy);

        return view('hotels.index', compact('hotels', 'my_loc'));
    }

    public function search(Request $request)
    {
        $my_lat = $request->latitude ? $request->latitude : "-18.242962801334816";
        $my_lng = $request->longitude ? $request->longitude : "-43.599337060160344";
        $orderBy = "proximity";

        $my_loc = array(
            'lat' => $my_lat,
            'lng' => $my_lng
        );

        $hotels  = Search::getNearbyHotelsArray($my_loc['lat'], $my_loc['lng'], $orderBy);

        return view('hotels.index', compact('hotels', 'my_loc'));
    }

}
