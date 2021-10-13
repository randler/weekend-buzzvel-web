@extends('layouts.app')

@section('content')
    <div class="cover"></div>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                <img src="https://buzzvel.com/images/buzzvel.png" width="600" alt="buzzvel">
            </div>
            <div>
                <h4 class="title-challenge">Weekend Challenge - Laravel</h4>
            </div>
            <div class="text-white" id="geo-position"></div>
            <div id="is-auto-geo" class="hide">
                <div class="text-white">
                    <h4>Auto Geolocation</h4>
                </div>
                <div class="text-white">
                    <h4>Latitude: <span id="auto-lat"></span></h4>
                </div>
                <div class="text-white">
                    <h4>Longitude: <span id="auto-lng"></span></h4>
                </div>

                <!-- link to show hotels -->
                <div class="text-white">
                    <h4>
                        <button onclick="showAutoHotels()" class="btn btn-primary ">Show Hotels <i class="far fa-search"></i></button>
                    </h4>
                </div>

            </div>
            <div id="form-geo" class="mb-5 mt-5 hide">
                <div class="form-group">
                    <label class="text-white" for="latitude">Latitude</label>
                    <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Latitude">
                </div>
                <div class="form-group">
                    <label class="text-white" for="longitude">Longitude</label>
                    <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Longitude">
                </div>
                <button onclick="showHotels()" class="btn btn-primary ">Search <i class="far fa-paper-plane"></i></button>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var x = document.getElementById("geo-position");
        var isGeo = document.getElementById("is-auto-geo");
        var form = document.getElementById("form-geo");
        var lat = document.getElementById("auto-lat");
        var lng = document.getElementById("auto-lng");

        function toogleGeoDisplay(isGeolocation) {
            if (isGeolocation) {
                form.classList.add('hide');
                form.classList.remove('show');

                isGeo.classList.add('show');
                isGeo.classList.remove('hide');
            } else {
                form.classList.add('show');
                form.classList.remove('hide');

                isGeo.classList.add('hide');
                isGeo.classList.remove('show');
            }
        }

        function getLocation() {
            if (location.protocol === 'https:') {
                if (navigator.geolocation) {
                    try {
                        navigator.geolocation.getCurrentPosition(showPosition);
                        toogleGeoDisplay(true);

                    } catch (e) {
                        x.innerHTML = "Geolocation is not supported by this browser.";
                        toogleGeoDisplay(false);
                    }
                } else {
                    x.innerHTML = "Geolocation is not supported by this browser.";
                    toogleGeoDisplay(false);
                }
            } else {
                x.innerHTML = "Geolocation is not supported in protocol HTTP, only HTTPS.";
                toogleGeoDisplay(false);
            }
        }

        function showPosition(position) {
            lat.innerHTML = "" + position.coords.latitude;
            lng.innerHTML = "" +  position.coords.longitude;
        }

        function showHotels() {
            var latitude = document.getElementById("latitude");
            var longitude = document.getElementById("longitude");

            var url = "{{ route('hotels.index') }}";
            url += "?";
            url += "lat=" + latitude.value;
            url += "&lng=" + longitude.value;

            window.location.href = url;
        }

        function showAutoHotels() {
            var url = "{{ route('hotels.index') }}";
            url += "?";
            url += "lat=" + lat.innerHTML;
            url += "&lng=" + lng.innerHTML;

            window.location.href = url;

        }

        window.onload = getLocation;
    </script>
@endpush


@push('styles')
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        body {
            background-image: url(https://cdn.wallpapersafari.com/97/85/WwvmEY.jpg);
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .hide {
            display: none;
        }

        .show {
            display: block;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .cover {
            position: fixed;
            opacity: 1;
            background-color: rgba(0, 0, 0, .6);
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
        }

        .title-challenge {
            font-size: 40px;
            color: #fff;
            font-weight: bold;
        }
        .text-white {
            color: #fff;
        }

    </style>
@endpush
