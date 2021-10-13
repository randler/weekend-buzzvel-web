@include('components.menu.menu')
@extends('layouts.app')

@section('content')
    <h2 class="text-center m-5">Hotels</h2>
    <ul class="list-group mb-5">
        @forelse ($hotels as $hotel)
            <li class="list-group-item list-group-item-action">
                {{$hotel[0]}},
                {{getDistance($my_loc['lat'], $my_loc['lng'], $hotel[1], $hotel[2]) }},
                {{formatPrice($hotel[3])}}
            </li>
        @empty

        @endforelse
    </ul>
@endsection
