<html>

<head>
    <title>AMP - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('build/app.css') }}">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    @livewireStyles
</head>

<body>
    @section('sidebar')
        <style scoped>
            @media (min-width: 992px) {
                .navbar-expand-lg .navbar-toggler {
                    display: block;
                }

                .navbar-expand-lg .navbar-collapse {
                    /* display: flex!important; */
                    flex-basis: auto;
                }

                .navbar-expand-lg {
                    flex-wrap: nowrap;
                    justify-content: space-between;
                    display: flex !important;
                }


                .navbar-expand-lg .navbar-collapse {
                    display: none !important;
                    flex-basis: auto;
                }

                .collapse:not(.show) {
                    display: none;
                }
            }
        </style>
        <nav class="navbar navbar-expand-lg navbar-light bg-prcolor nav-text ">
            <a class="navbar-brand " href="#">
                <img src="{{ asset('images/favicon.png') }}" class="left_nav_logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                {{-- <span class="navbar-toggler-icon"></span> --}}
                <img src="{{ asset('images/menu.png') }}" class="right_nav_logo">
            </button>
            {{-- <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div> --}}
        </nav>
    @show

    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('build/app2.js') }}"></script>
    <style scoped>
        @media (min-width: 992px) {
            .navbar-expand-lg .navbar-toggler {
                display: block;
            }

            .navbar-expand-lg .navbar-collapse {
                /* display: flex!important; */
                flex-basis: auto;
            }

            .navbar-expand-lg {
                flex-wrap: nowrap;
                justify-content: space-between;
                display: flex !important;
            }


            .navbar-expand-lg .navbar-collapse {
                display: none !important;
                flex-basis: auto;
            }

            .collapse:not(.show) {
                display: none;
            }
        }
    </style>
    @livewireScripts
</body>

</html>
