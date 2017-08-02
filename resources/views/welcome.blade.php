<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laracon demo</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>

<body>

    <div id="app"></div>


    <div class="container-fluid" style="padding-left: 0; padding-right: 0;">
        <header class="navbar navbar-static-top aisdemo-navbar">
            <a href="https://community.algolia.com/instantsearch.js/" class="is-logo"><img src="logo-is.png" width=40 ></a>
            <a href="./" class="logo">A</a>
            <i class="fa fa-search"></i>
            <input type="text" class="form-control" id="q" />
        </header>
    </div>
    <!-- /Header -->

    <!-- Filters and map -->
    <div class="container-fluid">
        <div class="row">

            <!-- Left col -->
            <div class="col-sm-7 aisdemo--left-column">

                <div class="aisdemo-filters">
                    <!-- Dates & Guests -->
                    <div class="row aisdemo-filter">
                        <div class="col-sm-2 aisdemo-filter-title">Dates</div>
                        <div class="col-sm-3"><input class="date form-control" value="10/30/3015" disabled /></div>
                        <div class="col-sm-3"><input class="date form-control" value="10/30/3015" disabled /></div>
                        <div class="col-sm-3"><div id="guests"></div></div>
                    </div>
                    <!-- Room types -->
                    <div class="row aisdemo-filter">
                        <div class="col-sm-2 aisdemo-filter-title">Room Type</div>
                        <div id="room_types"></div>
                    </div>
                    <!-- Price -->
                    <div class="row aisdemo-filter">
                        <div class="col-sm-2 aisdemo-filter-title">Price Range</div>
                        <div class="col-sm-9" id="price"></div>
                    </div>
                </div>

                <div class="row">
                    <div id="stats"></div>
                </div>

            </div>
            <!-- /Left col -->

            <!-- Right col -->
            <div class="col-sm-5 aisdemo--right-column">
                <div id="map"></div>
            </div>
            <!-- /Right col -->

        </div>
    </div>
    <!-- /Filters and Map -->

    <!-- Results -->
    <div class="container-fluid" id="results">
        <div class="row">
            <div id="hits"></div>
        </div>
        <div class="row">
            <div id="pagination"></div>
            <div class="thank-you">Data from <a href="https://www.airbnb.com/">airbnb.com</a>, user pics from <a href="https://randomuser.me/">randomuser.me</a></div>
        </div>
    </div>
    <!-- /Results -->


    <script src="/js/instantsearch.min.js" type="text/javascript"></script>

    <script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>
</body>
</html>
