<!DOCTYPE html>
<html>

<head>
    <title>NewsFeed</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/li-scroller.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.fancybox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

    <div class="container">

        <header id="header">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="header_top">


                        <div class="header_top_left">
                            <ul class="top_nav">
                                <li><a href="{{ route('homepage') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>


                            </ul>
                        </div>


                        <div class="header_top_right ">
                            {{-- <p>Friday, December 05, 2045</p> --}}
                            {{-- {{session('user')}} --}}
                            {{-- @if (session()->has('user'))
                                <a href="{{route('logout')}}" class="btn btn-info header_right">   Logout </a>

                            @else
                                    <a href="{{route('login')}}" class="btn btn-info header_right">login</a>
                                    <a href="{{route('register')}}"class="btn btn-success header_right">Register</a>
                            @endif --}}


                            @if (Route::has('login'))
                                <div class=" fixed top-0 right-0 px-6 py-4 ">
                                    @auth

                                    <div>
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>


                                    @else


                                    <a href="{{ route('login') }}" class="btn btn-info header_right">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}"
                                                class="btn btn-success header_right">Register</a>
                                        @endif


                                    @endauth

                                </div>
                            @endif




                        </div>
                    </div>
                </div>

            </div>


        </header>
        <section id="navArea">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav main_nav">
                        <li class="active"><a href="{{ route('homepage') }}"><span
                                    class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a>
                        </li>
                        <li><a href="#">Technology</a></li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false">Mobile</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Android</a></li>
                                <li><a href="#">Samsung</a></li>
                                <li><a href="#">Nokia</a></li>
                                <li><a href="#">Walton Mobile</a></li>
                                <li><a href="#">Sympony</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Laptops</a></li>
                        <li><a href="#">Tablets</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li>
                            <p>{{ $date }}</p>
                        </li>

                    </ul>

                </div>
            </nav>
        </section>


        @yield('content')
        <footer id="footer">
            <div class="footer_top">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="footer_widget wow fadeInLeftBig">
                            <h2>Flickr Images</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="footer_widget wow fadeInDown">
                            <h2>Tag</h2>
                            <ul class="tag_nav">
                                <li><a href="#">Games</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Life &amp; Style</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Photo</a></li>
                                <li><a href="#">Slider</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="footer_widget wow fadeInRightBig">
                            <h2>Contact</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit.</p>
                            <address>
                                Perfect News,1238 S . 123 St.Suite 25 Town City 3333,USA Phone: 123-326-789 Fax:
                                123-546-567
                            </address>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <p class="copyright">Copyright &copy; 2045 <a href="index.html">NewsFeed</a></p>
                <p class="developer">Developed By Wpfreeware</p>
            </div>
        </footer>
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.li-scroller.1.0.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.newsTicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
