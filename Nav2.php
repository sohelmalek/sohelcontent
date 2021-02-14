

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <style>
        /* General */
        @import 'https://fonts.googleapis.com/css?family=Comfortaa:400,700';

      

        body {
            background: #f5f5f5;
            position: relative;
        }

        /* Navbar */
        .better-nav {
            word-wrap: break-word;
            background: #fff;
            height: 100px;
            margin-bottom: 30px;
        }

        /* Set the height of the navbar */
        .better-nav a {
            color: #000;
            opacity: 0.6;
        }

        .better-nav a:hover,
        .better-nav a:focus {
            opacity: 1;
        }

        .better-nav .container {
            height: 100%;
        }

        .container .better-nav .container {
            max-width: 100%;
        }

        /* Fixed */
        .better-nav.fixed-top {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 90;
        }

        .better-nav.fixed-bottom {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 90;
        }

        /* Head */
        .better-nav .head {
            float: left;
            height: 100%;
        }

        .better-nav .head .brand {
            display: block;
            opacity: 1;
            padding: 15px 0;
            height: 100%;
            text-decoration: none;
        }

        .better-nav .head .brand .logo {
            float: left;
            margin-right: 15px;
            height: 100%;
        }

        .better-nav .head .brand .logo .image {
            height: 100%;
            width: auto;
            width: auto;
        }

        .better-nav .head .brand .title {
            float: left;
            display: table;
            height: 100%;
        }

        .better-nav .head .brand .title h3 {
            opacity: 0.7;
            display: table-cell;
            vertical-align: middle;
            font-size: 24px;
            font-weight: bold;
            font-family: 'Comfortaa', cursive;
        }

        .better-nav .head .brand .title h3:hover,
        .better-nav .head .brand .title h3:focus {
            opacity: 1;
        }

        /* Body */
        .better-nav .body {
            float: right;
            height: 100%;
        }

        .better-nav .body li:hover,
        .better-nav .body li:focus {
            background: #ffe082;
        }

        .better-nav .body li:hover>a,
        .better-nav .body li:focus>a {
            opacity: 1;
        }

        .better-nav .body ul {
            list-style: none;
            margin: 0;
            padding: 0;
            height: 100%;
        }

        .better-nav .body ul li.active {
            background: #ffe082;
        }

        .better-nav .body>ul>li {
            display: table;
            float: left;
            height: 100%;
        }

        .better-nav .body>ul>li>a {
            display: table-cell;
            vertical-align: middle;
            text-decoration: none;
            padding: 0 15px;
        }

        /* Dropdown */
        .better-nav .body ul li.dropdown {
            position: relative;
        }

        .better-nav .body ul li.dropdown>a::after {
            content: "\f0d7";
            font: normal normal normal 14px/1 FontAwesome;
            margin-left: 5px;
            text-decoration: none;
            opacity: 0.2;
        }

        .better-nav .body ul li.dropdown:hover a:after {
            opacity: 1;
        }

        .better-nav .body ul li.dropdown:hover>ul {
            transform: scale(1);
            max-height: 500px;
        }

        .better-nav .body ul li.dropdown ul {
            min-width: 160px;
            max-width: 240px;
            transform: scale(0);
            transition: all 300ms ease;
            background: #fff;
            max-height: 0;
            position: absolute;
            top: 100%;
            right: 0;
            z-index: 10;
            height: initial;
        }

        .better-nav .body ul li.dropdown ul li {
            height: initial;
        }

        .better-nav .body ul li.dropdown ul li a {
            display: block;
            padding: 15px;
            text-decoration: none;
        }

        .better-nav .body ul li.dropdown ul .dropdown ul {
            right: 100%;
            top: 0;
        }

        /* Fixed Bottom */
        .better-nav.fixed-bottom .body ul li.dropdown ul {
            bottom: 100%;
            top: initial;
        }

        .better-nav.fixed-bottom .body ul li.dropdown ul .dropdown ul {
            bottom: 0;
            top: initial;
        }

        /* Search */
        .better-nav .body .more a::after {
            display: none;
        }

        .better-nav .body .search {
            padding: 15px;
        }

        .better-nav .body .search form {
            position: relative;
            min-width: 160px;
            width: 100%;
        }

        .better-nav .body .search form input {
            width: 100%;
            height: 40px;
            padding: 10px 50px 10px 10px;
        }

        .better-nav .body .search form button {
            width: 40px;
            height: 40px;
            padding: 0;
            position: absolute;
            right: 0;
            top: 0;
        }

        /* Toggle */
        .better-nav .toggle {
            display: none;
            float: right;
            height: 100%;
        }

        .better-nav .toggle a {
            display: table;
            height: 100%;
            text-decoration: none;
        }

        .better-nav .toggle a i {
            display: table-cell;
            vertical-align: middle;
            padding: 0 15px;
            font-size: 24px;
        }

        /* Navbar Slide */
        #navbar-slide {
            position: fixed;
            top: 0;
            bottom: 0;
            left: -80%;
            width: 80%;
            z-index: 94;
            background: #fff;
            overflow: auto;
            padding: 0;
            margin: 0;
        }

        /* Navbar Pills */
        .container .better-nav-pills .container {
            max-width: 100%;
        }

        .better-nav-pills {
            padding: 0 15px;
            background: #fff;
            margin-bottom: 30px;
        }

        .better-nav-pills a {
            color: #000;
            opacity: 0.6;
        }

        .better-nav-pills a:hover,
        .better-nav-pills a:focus {
            opacity: 1.0;
        }

        .better-nav-pills .head {
            height: 100%;
        }

        .better-nav-pills .head .brand {
            display: block;
            opacity: 1;
            padding: 15px 0;
            height: 100%;
            text-decoration: none;
        }

        .better-nav-pills .head .brand .logo {
            margin: 30px;
            text-align: center;
            height: 100%;
        }

        .better-nav-pills .head .brand .logo .image {
            height: 100%;
            width: auto;
            width: auto;
        }

        .better-nav-pills .head .brand .title {
            margin: 30px 0;
            display: table;
            text-align: center;
            width: 100%;
            height: 100%;
        }

        .better-nav-pills .head .brand .title h3 {
            opacity: 0.7;
            display: table-cell;
            vertical-align: middle;
            font-size: 24px;
            font-weight: bold;
            font-family: 'Comfortaa', cursive;
        }

        .better-nav-pills .head .brand .title h3:hover,
        .better-nav-pills .head .brand .title h3:focus {
            opacity: 1;
        }

        .better-nav-pills .body {
            margin: 0 0 30px;
        }

        .better-nav-pills .body a {
            opacity: 0.6;
            background-color: #e3e3e3;
        }

        .better-nav-pills .body a:hover,
        .better-nav-pills .body a:focus {
            opacity: 1.0;
        }

        .better-nav-pills .body ul {
            transition: all 300ms ease;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .better-nav-pills .body ul li {
            margin: 1px 0 1px;
        }

        .better-nav-pills .body ul li a {
            position: relative;
            display: block;
            padding: 15px;
            text-decoration: none;
        }

        .better-nav-pills .body ul li.active>a::before {
            content: "\f0da";
            font: normal normal normal 14px/1 FontAwesome;
            position: absolute;
            left: 5px;
            top: 50%;
            margin-top: -7px;
            opacity: 0.5;
        }

        /* Dropdowns */
        .better-nav-pills .body ul li.dropdown ul {
            max-height: 0;
            overflow: hidden;
            margin: 0 0 0 30px;
        }

        .better-nav-pills .body ul li.dropdown.opened>ul {
            max-height: 1000px;
            margin: 0 0 -1px 30px;
        }

        .better-nav-pills .body ul li.dropdown ul li a {
            position: relative;
        }

        .better-nav-pills .body ul li.dropdown>a {
            margin-right: 51px;
        }

        .better-nav-pills .body ul li.dropdown>.selector {
            position: absolute;
            cursor: pointer;
            z-index: 30;
            top: 0;
            right: 0;
            width: 50px;
            height: 50px;
            background: rgba(0, 0, 0, 0.1);
            text-align: center;
            opacity: 0.6;
        }

        .better-nav-pills .body ul li.dropdown>.selector:hover {
            opacity: 1;
        }

        .better-nav-pills .body ul li.dropdown>.selector::before {
            transition: all 300ms ease;
            content: "\f0d7";
            font: normal normal normal 24px/1 FontAwesome;
            margin-top: 12px;
            display: block;
            opacity: 0.5;
        }

        .better-nav-pills .body ul li.dropdown.opened>.selector::before {
            content: "\f00d";
        }

        /* Search */
        .better-nav-pills .body .search {
            padding: 15px;
        }

        .better-nav-pills .body .search form {
            position: relative;
            min-width: 160px;
            width: 100%;
        }

        .better-nav-pills .body .search form input {
            width: 100%;
            height: 40px;
            padding: 10px 50px 10px 10px;
        }

        .better-nav-pills .body .search form button {
            width: 40px;
            height: 40px;
            padding: 0;
            position: absolute;
            right: 0;
            top: 0;
        }

        /* Underlay */
        .better-nav-mobile-underlay {
            transition: all 300ms ease;
            position: absolute;
            left: 100%;
            right: 0;
            top: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.8);
            z-index: 92;
        }

        .better-nav-mobile-underlay.active {
            left: 0;
        }

        /* Media Queries */
        @media (min-width: 768px) {}

        @media (min-width: 992px) {}

        @media (min-width: 1200px) {}

        @media (max-width: 1199px) {}

        @media (max-width: 991px) {}

        @media (max-width: 767px) {
            .better-nav .body {
                display: none;
            }

            .better-nav .toggle {
                display: block;
            }
        }

        /* Dummy Content */
        dummy {
            display: block;
            margin: 30px 0 0;
        }

        dummy article {
            display: block;
            text-align: center;
            margin-bottom: 30px;
        }

        dummy article content {
            text-align: center;
            background: rgba(0, 0, 0, 0.1);
            display: block;
            padding: 50px;
        }

        dummy article content::before {
            content: "\f03e";
            font: normal normal normal 50px/1 FontAwesome;
            opacity: 0.2;
        }

        dummy article:first-of-type content::before {
            display: none;
        }

        dummy article content h3 {
            font-size: 24px;
            font-weight: bold;
            opacity: 0.2;
            font-family: 'Comfortaa', cursive;
        }

        dummy article content ul {
            list-style: none;
            padding: 0;
            margin: 0;
            font-weight: bold;
            opacity: 0.5;
            font-family: 'Comfortaa', cursive;
        }

        dummy article content ul li {
            background: rgba(255, 255, 255, 1);
            margin: 15px 0;
            padding: 10px;
            border-radius: 10px;
        }

        dummy {
            max-width: 970px;
        }
    </style>
    <title>Navbar1</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav id="navbar" class="push better-nav fixed-top">
                    <div class="container">
                        <div class="head">
                            <a href="#" class="brand">
                                <div class="logo">
                                    <img class="image" src="https://66.media.tumblr.com/avatar_2dcdc7cf5b47_64.png" data2x="https://66.media.tumblr.com/avatar_2dcdc7cf5b47_128.png" alt="Branding" />
                                </div>
                                <div class="title">
                                    <h3>Fixed</h3>
                                </div>
                            </a>
                        </div>
                        <div class="body">
                            <ul>
                                <li class="home"><a href="#">Home</a></li>
                                <li class="page"><a href="#">Portfolio</a></li>
                                <li class="blog active dropdown"><a href="#">Blog</a>
                                    <span class="selector"></span>
                                    <ul>
                                        <li><a href="#">Latest</a></li>
                                        <li><a href="#">Popular</a></li>
                                        <li class="dropdown"><a href="#">Categories</a>
                                            <span class="selector"></span>
                                            <ul>
                                                <li><a href="#">HTML</a></li>
                                                <li class="dropdown"><a href="#">CSS</a>
                                                    <span class="selector"></span>
                                                    <ul>
                                                        <li><a href="#">Something really long like a sentence or something!?</a></li>
                                                        <li><a href="#">CSS3</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">JavaScript</a></li>
                                                <li class="dropdown"><a href="#">Others</a>
                                                    <span class="selector"></span>
                                                    <ul>
                                                        <li><a href="#">Bootstrap</a></li>
                                                        <li><a href="#">JQuery</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="page"><a href="#">Contacts</a></li>
                                <li class="more dropdown"><a href="#"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
                                    <span class="selector"></span>
                                    <ul>
                                        <li><a href="#">RSS</a></li>
                                        <li class="search clearfix">
                                            <form>
                                                <input type="text" placeholder="Search" />
                                                <button><i class="fa fa-search" aria-hidden="true"></i></button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="toggle">
                            <a href="#navbar-slide">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </nav>
                <div id="underlay" class="better-nav-mobile-underlay"></div>
                <nav id="navbar-slide" class="better-nav-pills"></nav>
                <dummy class="container">
                    <article>
                        <content>
                            <h3>Features</h3>
                            <ul>
                                <li>CSS3 dropdown menus</li>
                                <li>bigSlide menu for mobile with custom dropdowns</li>
                                <li>Mobile menu is flexible and gets the content from the navbar which toggle was clicked</li>
                                <li>Fixed (top, bottom), Inline or Pills style</li>
                                <li>Set navbar height</li>
                            </ul>
                        </content>
                    </article>
                    <nav id="navbar-inline" class="push better-nav">
                        <div class="container">
                            <div class="head">
                                <a href="#" class="brand">
                                    <div class="logo">
                                        <img class="image" src="https://66.media.tumblr.com/avatar_2dcdc7cf5b47_64.png" data2x="https://66.media.tumblr.com/avatar_2dcdc7cf5b47_128.png" alt="Branding" />
                                    </div>
                                    <div class="title">
                                        <h3>Inline</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="body">
                                <ul>
                                    <li class="home"><a href="#">Home</a></li>
                                    <li class="page"><a href="#">Portfolio</a></li>
                                    <li class="page"><a href="#">Contacts</a></li>
                                </ul>
                            </div>
                            <div class="toggle">
                                <a href="#navbar-slide">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </nav>
                    <nav id="navbar-pills" class="push better-nav-pills">
                        <div class="container">
                            <div class="head">
                                <a href="#" class="brand">
                                    <div class="logo">
                                        <img class="image" src="https://66.media.tumblr.com/avatar_2dcdc7cf5b47_64.png" data2x="https://66.media.tumblr.com/avatar_2dcdc7cf5b47_128.png" alt="Branding" />
                                    </div>
                                    <div class="title">
                                        <h3>Pills</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="body">
                                <ul>
                                    <li class="home"><a href="#">Home</a></li>
                                    <li class="page dropdown"><a href="#">Languages</a>
                                        <span class="selector"></span>
                                        <ul>
                                            <li><a href="#">HTML5</a></li>
                                            <li><a href="#">CSS3</a></li>
                                            <li><a href="#">JavaScript</a></li>
                                        </ul>
                                    </li>
                                    <li class="page"><a href="#">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </dummy>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bigslide.js/0.12.0/bigSlide.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
    <script>
        /*
         * BetterNav - Bootstrap Navbar + bigSlide (for mobile)
         * ATTENTION: CSS does not use browser prefixes, modify if you decide to use in production!
         */
        $(document).ready(function() {
            /* Navbar specifics */
            $('.better-nav').each(function() {
                /* Set max width of fixed navbar equal to parent element (ignore this it's project specific) */
                $parentMaxWidth = $('dummy').css('max-width');
                $('.container', this).css('max-width', $parentMaxWidth);
                /* Add body padding if navbar is fixed on top or bottom */
                if ($('.better-nav').hasClass('fixed-top')) {
                    var $navHeight = $(this).height();
                    $('body').css('padding-top', $navHeight + 'px');
                } else if ($('.better-nav').hasClass('fixed-bottom')) {
                    var $navHeight = $(this).height();
                    $('body').css('padding-bottom', $navHeight + 'px');
                }
            });
            /* Clone main navbar for mobile */
            $('.better-nav .toggle').on('click touchstart', function() {
                $('#navbar-slide').empty();
                $(this).siblings('.body').clone().appendTo("#navbar-slide");
                betterNavPillsInit('#navbar-slide li.dropdown .selector');
            });
            /* Navbar pills dropdown trigger */
            function betterNavPillsInit($action) {
                $($action).on('click tap', function() {
                    if ($(this).parent('li.dropdown').hasClass('opened')) {
                        $(this).parent('li.dropdown').removeClass('opened');
                    } else {
                        $(this).parent('li.dropdown').addClass('opened');
                    }
                });
            }
            betterNavPillsInit('li.dropdown .selector');
            /* Initialize bigSlide */
            $('.better-nav .toggle').bigSlide({
                'menu': '#navbar-slide',
                'push': 'body',
                'side': 'left',
                'menuWidth': '80%',
                'speed': 300,
                'easyClose': true,
                afterOpen: function() {
                    $('body').css('overflow', 'hidden');
                    $('#underlay').addClass('active');
                },
                afterClose: function() {
                    setTimeout(function() {
                        $('body').css('overflow', 'visible');
                    }, 300);
                    $('#underlay').removeClass('active');
                }
            });
            /* Dummy Content */
            var $dummyCount = 0;
            while ($dummyCount < 5) {
                $('<article><content><h3>DUMMY ARTICLE</h3></content></article>').appendTo('dummy');
                $dummyCount++;
            }
        });
    </script>
</body>

</html>