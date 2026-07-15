<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        @endif
    </head>
    <body>
        <div class="overlay"></div>
        <header>
            <div class="">
                <div class="wrapper-nav">
                    <div class="item-first">
                        <div class="left-tab">
                            <div class="logo">
                                <a href="/"><img src="{{ asset('storage/'.$setting->logo) }}"></a>
                                <img class="rectangle-logo" src="{{ asset('images/rectanglelogo.png') }}" alt="Hero kép">
                            </div>
                        </div>
                    </div>
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="item-second">
                        <div class="right-tab">
                            <div class="top-bar">
                                <a class="top-bar-svg"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M128 252.6C128 148.4 214 64 320 64C426 64 512 148.4 512 252.6C512 371.9 391.8 514.9 341.6 569.4C329.8 582.2 310.1 582.2 298.3 569.4C248.1 514.9 127.9 371.9 127.9 252.6zM320 320C355.3 320 384 291.3 384 256C384 220.7 355.3 192 320 192C284.7 192 256 220.7 256 256C256 291.3 284.7 320 320 320z"/></svg></span> <span class="text-span">{{ $setting->address_hu }}</span></a>
                                <a class="top-bar-svg"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z"/></svg></span> <span class="text-span">{{ $setting->phone }}</span></a>
                                <a class="top-bar-svg top-bar-svg-last"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M112 128C85.5 128 64 149.5 64 176C64 191.1 71.1 205.3 83.2 214.4L291.2 370.4C308.3 383.2 331.7 383.2 348.8 370.4L556.8 214.4C568.9 205.3 576 191.1 576 176C576 149.5 554.5 128 528 128L112 128zM64 260L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 260L377.6 408.8C343.5 434.4 296.5 434.4 262.4 408.8L64 260z"/></svg></span> <span class="text-span">{{ $setting->email }}</span></a>
                                <img class="rectangle-logo" src="{{ asset('images/top-bar-rectangle.png') }}" alt="Hero kép">
                            </div>
                            <div class="social-bar">
                                <a class="top-bar-svg lang-svg"  style="font-size:14px !important; height: 18px;" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/></svg></a>
                                @if(app()->getLocale() == 'hu')
                                    <a class="top-bar-svg lang" href="{{ url('/language/en') }}">EN</a>
                                @else
                                    <a class="top-bar-svg lang" href="{{ url('/language/hu') }}">HU</a>
                                @endif
                            </div>
                        </div>


                        <div class="navbar">
                            <ul>
                                <li><a href="/#about">Rólunk</a></li>
                                <li><a href="/#division">Iparági divíziók</a></li>
                                <li><a href="/#competencies">Kompetenciák</a></li>
                                <li><a href="/#value">Hozzáadott értékünk</a></li>
                                <li><a href="#contact">Kapcsolat</a></li>
                            </ul>
                        </div>
                        <div class="mobile-menu">
                            <a href="/"><img class="logo-img" src="{{ asset('images/logo.png') }}" alt="Hero kép"></a>
                            <div class="mobile-top">
                                <a>2890 Tata, Bacsó Béla út 37.</a>
                                <a>+36 70 908 1858</a>
                                <a>info@femproterv.hu</a>
                            </div>

                            <ul>
                                <li><a href="#about">Rólunk</a></li>
                                <li><a href="#division">Iparági divíziók</a></li>
                                <li><a href="#competencies">Kompetenciák</a></li>
                                <li><a href="#value">Hozzáadott értékünk</a></li>
                                <li>
                                    <a href="{{ route('contact') }}">
                                        Kapcsolat
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="hero">
            <div class="background">
                <img style="height: 466px" src="{{ asset('images/contacthero.png') }}" alt="Hero kép">
                <div class="caption">
                    <p class="caption-title">ELÉRHETŐSÉGEINK</p>
                </div>
            </div>
        </section>

        <section class="google-maps">
            <div class="wrapper">
                <div class="image-map">
                    <img src="{{ asset('images/googlemap.png') }}" alt="Google">
                </div>
                <div class="text-wrapper">
                    <p class="google-text">Az alábbi elérhetőségeinken tud kapcsaolatba lépni velünk személyesen telefonon, email-ben, vagy céges közösségi oldalunkon.</p>
                    <div class="contact-information-wrapper">
                        <div class="contact-information">
                            <div class="contact-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M128 252.6C128 148.4 214 64 320 64C426 64 512 148.4 512 252.6C512 371.9 391.8 514.9 341.6 569.4C329.8 582.2 310.1 582.2 298.3 569.4C248.1 514.9 127.9 371.9 127.9 252.6zM320 320C355.3 320 384 291.3 384 256C384 220.7 355.3 192 320 192C284.7 192 256 220.7 256 256C256 291.3 284.7 320 320 320z"/></svg></div>
                            <div class="contact-map"><b>Székhely:</b><br> 2890 Tata, Bacsó Béla út 37.</div>
                        </div>
                        <div class="contact-information">
                            <div class="contact-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M112 128C85.5 128 64 149.5 64 176C64 191.1 71.1 205.3 83.2 214.4L291.2 370.4C308.3 383.2 331.7 383.2 348.8 370.4L556.8 214.4C568.9 205.3 576 191.1 576 176C576 149.5 554.5 128 528 128L112 128zM64 260L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 260L377.6 408.8C343.5 434.4 296.5 434.4 262.4 408.8L64 260z"/></svg></div>
                            <div class="contact-map"><b>E-mail:</b><br> info@femproterv.hu</div>
                        </div>
                        <div class="contact-information">
                            <div class="contact-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z"/></svg></div>
                            <div class="contact-map"><b>Telefon:</b><br> +36 70 908 1858.</div>
                        </div>
                        <div class="contact-information">
                            <div class="contact-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/></svg></div>
                            <div class="contact-map">Linkedin</div>
                        </div>
                        <div class="car-map-wrapper">
                            <a 
                                href="https://www.google.com/maps/dir/?api=1&destination=2890+Tata,+Bacsó+Béla+út+37."
                                class="car-map"
                                target="_blank"
                            >
                                Vigyél oda 
                                <img src="{{ asset('images/carmap.png') }}" alt="Google">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="footer-background">
            <footer>
                <div class="logo-wrapper">
                    <img src="{{ asset('storage/'.$setting->footer_logo) }}" alt="FEM-PRO TERV">
                </div>
                <div class="footer-item-wrapper">
                    <div class="footer-item">
                        <span class="footer-name">Hasznos</span>
                        <div class="ul-item">
                            <ul class="footer-ul">
                                <li><a href="{{ asset('images/FPT-ASZF_20241001.pdf') }}">ÁSZF</a></li>
                                <li>Adatkezelési tájékoztató</li>
                                <li>Impresszum</li>
                            </ul>
                            <ul class="footer-ul">
                                <li>Adatvédelem</li>
                                <li>Cookie irányelvek</li>
                                <li>Süti beállítások</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <div class="footer-text">© 2026 /  FEM-PRO TERV Kft.  /  www.femproterv.hu</div>
        </div>
        <section class="copyright">
            <div class="copyright-text">A FEM-PRO TERV Kft. <img src="{{ asset('images/mini-logo.png') }}" alt="Hero kép"> a tagja.</div>
        </section>
    </body>
</html>
