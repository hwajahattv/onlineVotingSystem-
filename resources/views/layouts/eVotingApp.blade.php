<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--    <meta name="csrf-token" content="{{ csrf_token() }}"/>--}}
    <title>Voting App</title>
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
{{--    @vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}
    {{-- ********************************************************** --}}
    {{-- ********************************************************** --}}
    {{-- ********************************************************** --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    {{--    <link href="{{ asset('css/style.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    @yield('links')
    <script src="https://kit.fontawesome.com/246bdfaca3.js" crossorigin="anonymous"></script>
    <style>
        .header {
            padding-left: 0rem;
        }
    </style>
</head>

<body>

<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->
<header>
    <!-- header inner -->
    <div class="header">

        <div class="header_bo">
{{--            <div class="container">--}}
                <div class="row">
                    <div class="col-md-9 col-sm-7 navbar-default">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarsExample04" aria-controls="navbarsExample04"
                                    aria-expanded="false"
                                    aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ url('/') }}"> Home </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Information Center</a>
                                        <ul class="dropdown-menu fade-down" style="background-color: #003610">
                                            <li class="dropDown-li"><a class="dropdown-item" href="">ABOUT PNGEC</a></li>
                                            <li class="dropDown-li"><a class="dropdown-item" href="">PNGEC FACT SHEET</a></li>
                                            <li class="dropDown-li"><a class="dropdown-item" href="">VOTER INFORMATION</a></li>
                                            <li class="dropDown-li"><a class="dropdown-item" href="">OBSERVER INFORMATION</a></li>
                                            <li class="dropDown-li"><a class="dropdown-item" href="">POLTITICAL PARTIES AND<br>CANDIDATES INFORMATION</a></li>
                                            <li class="dropDown-li"><a class="dropdown-item" href="">MEDIA</a></li>
                                            <li class="dropDown-li"><a class="dropdown-item" href="">GALLERY</a></li>
                                            <li class="dropDown-li"><a class="dropdown-item" href="">ARCHIVE</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/voterLookUp') }}">Voter Lookup</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/pollingSchedule') }}">Polling Schedule</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/faq') }}">FAQ</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="{{ url('/contact') }}">Contact us </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Social Media</a>
                                        <ul class="dropdown-menu fade-down" style="background-color: #003610">
                                            <li class="dropDown-li"><a class="dropdown-item" href="https://www.youtube.com/channel/UCblxoe_dGP8hvlv4p-qnoqg"> YouTube</a></li>
                                            <li class="dropDown-li"><a class="dropdown-item" href="https://www.facebook.com/pngelectoralcommission"> Facebook</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-3 col-sm-5 d_none">
                        <ul class="sign">
                            <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            @if (Route::has('login'))
                                @auth
                                    <li><a class="sign_btn" href="{{ url('/home') }}">home</a></li>
                                @else
                                    <li><a class="sign_btn" href="{{ url('/login') }}">sign in</a></li>
                                @endauth
                            @endif
                            <li><a class="sign_btn" href="{{ url('/register') }}">sign up</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
{{--    </div>--}}
</header>
<!--**********************************
    Header end ti-comment-alt
***********************************-->

<!--**********************************
    Sidebar start
***********************************-->

<!--**********************************
    Content body start
***********************************-->
<section class="banner_main">
    <div class="container">
@yield('content')
    </div>
</section>

<!--**********************************
            Footer start
        ***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Designed <span class="heart"></span> <a href="#">AC</a> 2022</p>
    </div>
</div>
<!--**********************************
    Footer end
***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->


{{-- jQuery CDN --}}
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="{{ asset('vendor/global/global.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('vendor/chart.js/Chart.bundle.min.js') }}"></script>

<!-- Chart piety plugin files -->
<script src="{{ asset('vendor/peity/jquery.peity.min.js') }}"></script>

<!-- Apex Chart -->
<script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script>

<!-- Dashboard 1 -->
<script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>

<script src="{{ asset('js/custom.min.js') }}"></script>
<script src="{{ asset('js/deznav-init.js') }}"></script>
<script src="{{ asset('js/demo.js') }}"></script>
<script src="{{ asset('js/electionFormSubmit.js') }}"></script>
<script src="{{ asset('js/collapse.js') }}"></script>
<script src="{{ asset('js/styleSwitcher.js') }}"></script>
{{--<script src="{{asset('js/welcome/jquery.min.js')}}"></script>--}}
{{--<script src="{{asset('js/welcome/popper.min.js')}}"></script>--}}
<script src="{{asset('js/welcome/bootstrap.bundle.min.js')}}"></script>
{{--<script src="{{asset('js/welcome/jquery-3.0.0.min.js')}}"></script>--}}
{{--<script src="{{asset('js/welcome/owl.carousel.min.js')}}"></script>--}}
<!-- sidebar -->
{{--<script src="{{asset('js/welcome/jquery.mCustomScrollbar.concat.min.js')}}"></script>--}}
@yield('script')
</body>

</html>
