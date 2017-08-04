<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laracon demo</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>

<body>

    <div id="app">
    <ais-index index-name="{{ config('scout.prefix') }}homes"
               app-id="{{ config('scout.algolia.id') }}"
               api-key="{{ config('scout.algolia.key') }}"
    >

        <div class="container-fluid" style="padding-left: 0; padding-right: 0;">
            <header class="navbar navbar-static-top aisdemo-navbar">
                <a href="https://community.algolia.com/vue-instantsearch/" class="logo"><img src="/img/instantsearch-Vue-medal.svg" width=40 ></a>
                <i class="fa fa-search"></i>

                <ais-input></ais-input>

            </header>
        </div>

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
                        </div>
                        <!-- Room types -->
                        <div class="row aisdemo-filter">
                            <div class="col-sm-2 aisdemo-filter-title">Room Type</div>
                            <div id="room_types">
                                <ais-refinement-list attribute-name="room_type"></ais-refinement-list>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="stats">
                            <ais-stats></ais-stats>
                        </div>
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

        <div class="container-fluid" id="results">
            <div class="row" id="hits">
                <ais-no-results></ais-no-results>
                <ais-results>
                    <template scope="{ result }">
                        <home-item :home="result"></home-item>
                    </template>
                </ais-results>
            </div>
            <div class="row">
                <div id="pagination">
                    <ais-pagination :class-names="{ 'ais-pagination': 'pagination' }"></ais-pagination>
                </div>
                <div class="thank-you">Data from <a href="https://www.airbnb.com/">airbnb.com</a>, user pics from <a href="https://randomuser.me/">randomuser.me</a></div>
            </div>
        </div>

    </ais-index>
    </div>


    <script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>
</body>
</html>
