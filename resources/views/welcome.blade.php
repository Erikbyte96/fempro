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
                                <a href="/"><img class="logo-img" src="{{ asset('images/logo.png') }}" alt="Hero kép"></a>
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
                                <a>2890 Tata, Bacsó Béla út 37.</a>
                                <a>+36 70 908 1858</a>
                                <a>info@femproterv.hu</a>
                                <img class="rectangle-logo" src="{{ asset('images/top-bar-rectangle.png') }}" alt="Hero kép">
                            </div>
                            <div class="social-bar">
                                <a>.</a>
                                <a>.</a>
                            </div>  
                        </div>

                    
                        <div class="navbar">
                            <ul>
                                <li><a href="#about">Rólunk</a></li>
                                <li><a href="#division">Iparági divíziók</a></li>
                                <li><a href="#competencies">Kompetenciák</a></li>
                                <li><a href="#value">Hozzáadott értékünk</a></li>
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
                                <li><a href="#">Rólunk</a></li>
                                <li><a href="#">Iparági diviziók</a></li>
                                <li><a href="#">Kompetenciák</a></li>
                                <li><a href="#">Hozzáadott értékünk</a></li>
                                <li><a href="#">Kapcsolat</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="hero">
            <div class="background">
                <img src="{{ asset('images/hero.png') }}" alt="Hero kép">
                <div class="caption">
                    <p class="caption-title">Integrált fémipari megoldások  minden léptékű projekthez.</p>
                    <p class="caption-text">Erőforrás optimalizált működés Skálázható, strukturált projektkontroll. Jövőbeni technológiák jelenben.</p>
                </div>
            </div>
        </section>
        <section id="about" class="introduction">
            <div class="introduction-image">
                <img src="{{ asset('images/introduction.png') }}" alt="Hero kép">
                <div class="absolute-label">
                    <img class="absolute-label-image" src="{{ asset('images/introductionicon5.png') }}" alt="Hero kép">
                    <span><span class="number" data-target="20">0 +</span><span class="plus">+</span> <br> év tapasztalat <br> a fémipari megmunkálásban</span>
                </div>
            </div>
            <div class="introdution-text">
                <div class="text-item">
                    <p class="title">Kik vagyunk?</p>
                    <p class="text">A FEM-PRO TERV Kft. nem csupán fémipari szállító-kivitelező, hanem számos iparágban több piaci szereplő részére is integrált rendszerben működő hatékony partner. 
                    <br><br> Mi nem pusztán összekötjük a piaci szereplőket, hanem szakértői kontrollal, ellátási lánc integrátor szerepben szerződéses felelősséget vállalva auditáljuk és irányítjuk a teljes folyamatot. A műszaki döntéseken, kockázatkezelésen és lebonyolításon túl szükség szerint mi végezzük el házon belül a tervezési munkákat. 
                    </p>
                </div>
                <div class="introduction-work">
                    <p>Működésünk alapja:</p>
                    <div class="introduction-wrapper">
                        <div class="item">
                            <img src="{{ asset('images/introductionicon1.png') }}" alt="Hero kép">
                            <span>Tudatosan egyszerű, hatékonyra tervezett szervezeti modell</span>
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/introductionicon2.png') }}" alt="Hero kép">
                            <span>Optimalizált erőforrás-elosztás és erős partnerhálózat</span>
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/introductionicon3.png') }}" alt="Hero kép">
                            <span>Strukturált, mérnöki alapú projektirányítás</span>
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/introductionicon4.png') }}" alt="Hero kép">
                            <span>Teljes projektátlátás és hosszú távú rendszerkontroll</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="division" class="division">
            <div class="division-title">Iparági divíziók</div>
            <div class="division-wrapper">
                <div class="card">
                    <div class="card-title">Védelmi ipari projektek</div>
                    <img src="{{ asset('images/division1.png') }}" alt="Hero kép">
                    <ul class="card-list">
                        <li class="list">alapanyagbeszállítás</li>
                        <li class="list">alkatrész gyártás</li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-title">Légi és űripari projektek</div>
                    <img src="{{ asset('images/division2.png') }}" alt="Hero kép">
                    <ul class="card-list">
                        <li class="list">kritikus alapanyag ellátás</li>
                        <li class="list">alkatrész gyártás</li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-title">Energetikai és infrastruktúra fejlesztés</div>
                    <img src="{{ asset('images/division3.png') }}" alt="Hero kép">
                    <ul class="card-list">
                        <li class="list">erőművek és hálózatok fémszerkezetei</li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-title">Ipari acélszerkezetek</div>
                    <img src="{{ asset('images/division4.png') }}" alt="Hero kép">
                    <ul class="card-list">
                        <li class="list">ipari gyártósorok egyedi szerkezeti elemeinek gyártásai</li>
                        <li class="list">célgép gyártás</li>
                        <li class="list">telepítés és beüzemelés</li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-title">Szerszámgyártás</div>
                    <img src="{{ asset('images/division5.png') }}" alt="Hero kép">
                    <ul class="card-list">
                        <li class="list">egyedi célszerszámkészítés</li>
                        <li class="list">prototípus és akár sorozatgyártási kapacitás 3D fémnyomtatással</li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="competencies" class="competencies">
            <div class="competencies-title">Pillérek-Kompetenciáink</div>
            <div class="competencies-text">A FEM-PRO TERV különálló, mégis egymásra épülő divíziók mentén működik.</div>
            <div class="competencies-wrapper">
                <div class="competencies-card">
                    <div class="competencies-images">
                        <img src="{{ asset('images/piller1.png') }}" alt="Hero kép">
                    </div>
                    <div class="competencies-text">
                        <div class="label">Alapanyag-kereskedelem</div>
                        <div class="text">Ipari acél és fém alapanyagok szállítása standard és félkész formában.</div>
                        <div class="list-item">
                            <ul>
                                <li>Alumínium, bronz</li>
                                <li>Rozsdamentes acélok	</li>
                                <li>Szerszámacélok</li>
                            </ul>
                            <ul>
                                <li>Titán</li>
                                <li>Hőálló és kopásálló acélok</li>
                                <li>Nikkelötvözetek</li>
                                <li>Szénacélok</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="competencies-card order">
                    <div class="competencies-images">
                        <img src="{{ asset('images/piller2.png') }}" alt="Hero kép">
                    </div>
                    <div class="competencies-text">
                        <div class="label">Műszaki tervezés</div>
                        <div class="text">Tervezési üzletágunk hatékonyan biztosítja az 1fő tervezőtől az akár több fős tervező vállalatok közreműködését igénylő tervezési 
                            projektek lebonyolítását. Széles skálán használjuk az adott gyártás technológiához a legmegfelelőbb tervező eszközöket: az egyszerűbb AutoCAD modellektől kezdve a végeselem analízisen át a mester-
                            séges intelligencia támogatott generatív tervezésig.
                        </div>
                    </div>
                </div>
                <div class="competencies-card">
                    <div class="competencies-images">
                        <img src="{{ asset('images/piller3.png') }}" alt="Hero kép">
                    </div>
                    <div class="competencies-text">
                        <div class="label">Gyártás és Kivitelezés</div>
                        <div class="text">Portfóliónk kiterjed, az egyszerűbb alkatrészek gyártásától a speciális gyártástechnológiát 
                            igénylő szerkezetek előállításán át a 3D fémnyomtatást igénylő hagyományos fémipari technológiával elő 
                            nem állítható alkatrészek, gépelemek, szerkezetek gyártásáig és beépítéséig. 
                            A piac összes gyártástechnológiája nálunk elérhető. Továbbá hagyományos fémszerkezetek, épület- és építmény
                             szerkezeteket is előállítunk.
                        </div>
                    </div>
                </div>
                <div class="competencies-card order">
                    <div class="competencies-images">
                        <img src="{{ asset('images/piller4.png') }}" alt="Hero kép">
                    </div>
                    <div class="competencies-text">
                        <div class="label">Üzemeltetés és Karbantartás</div>
                        <div class="text">Vállaljuk az általunk gyártott rendszer elemekhez kapcsolódó gép, berendezések hosszú távú 
                            műszaki támogatását és fenntartható működtetését. Igény szerint nem csak produktumot adunk el, hanem az 
                            ahhoz kapcsolódó élethosszig tartó támogatást.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="paralax">
            <div class="image-holder">
                <img class="" src="{{ asset('images/paralax.png') }}" alt="Hero kép">
            </div>
            <div class="text"><span>MIÉRT VELÜNK - HOZZÁADOTT ÉRTÉKÜNK</span> <br></br>A FEM-PRO TERV működését tudatosan úgy alakítottuk ki, hogy a hatékonyságot lassító, felesleges belső folyamatokat 
                                eleve nem építettük be a rendszereinkbe. </div>
        </section>
        <section id="value" class="info">
            <div class="box">
                <img src="{{ asset('images/icon1.png') }}" alt="Hero kép"> 
                <div class="text">Az alapanyag kereskedelemben célzottan nem tartunk fenn raktárkészletet, az alapanyag hazai vagy nemzetközi forrásból közvetlenül a felhasználás helyére érkezik, ezzel időt és költséget optimalizálva. További ide sorolható előnyünk, hogy 
csomagban, projektalapon szállítunk. Ennek köszönhetően megrendelőink számára olyan ár- és határidő-konstrukciókat tudunk biztosítani, amelyek önálló beszerzéssel nem minden esetben elérhetőek.</div>
            </div>
            <div class="box">
                <img src="{{ asset('images/icon2.png') }}" alt="Hero kép"> 
                <div class="text">A tervezés és gyártás területén nem párhuzamos kapacitásokat halmozunk fel, hanem a piacon meglévő erőforrásokat szervezzük össze egy átlátható, hatékony struktúrában. Széles partnerhálózatunk révén a kisebb kkv-któl a nagyvállalati szereplőkig képesek vagyunk a megfelelő erőforrásokat projektalapon, optimalizált portfólióban biztosítani. Szükség 
szerint a jelen piacon elérhető legmodernebb gyártástechnológiákkal dolgozunk, mint például 3D fémnyomtatás. </div>
            </div>
            <div class="box">
                <img src="{{ asset('images/icon3.png') }}" alt="Hero kép"> 
                <div class="text">Rendszerszemléletünk lehetővé teszi, hogy a teljes projektet átlássuk, és az adott feladathoz leginkább illeszkedő 
erőforrás-struktúrát állítsuk össze. Mérnöki alapú döntéshozatalunk, AI-támogatott optimalizálási eszközeink és 
strukturált projektkontrollunk lehetővé teszik a kiszámítható, skálázható és hosszú távon stabil megvalósítást. Nem pustán kivitelezünk. Hatékony rendszereket építünk és kontrollálunk.</div>
            </div>
            <div class="box">
                <img src="{{ asset('images/icon4.png') }}" alt="Hero kép"> 
                <div class="text">
Azért mondják rólunk mások, hogy a legjobbak közé tartozunk, mert egy olyan 7-10 főből álló erőforrás aggregátor 
cégcsoport vagyunk, a szakterületeinkhez kapcsolódó széles körű alvállalkozói kapcsolatrendszerrel, ahol maximálisan kihasználjuk ennek a felépítésnek minden előnyét.
</div>
            </div>
        </section>
        <div class="footer-background">
            <footer>
                <div class="logo-wrapper">
                    <img src="{{ asset('images/footer-logo.png') }}" alt="Hero kép">
                </div>
                <div class="footer-item-wrapper">
                    <div class="footer-item">
                        <span class="footer-name">Kapcsolat</span>
                        <ul>
                            <li><span class="svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M128 252.6C128 148.4 214 64 320 64C426 64 512 148.4 512 252.6C512 371.9 391.8 514.9 341.6 569.4C329.8 582.2 310.1 582.2 298.3 569.4C248.1 514.9 127.9 371.9 127.9 252.6zM320 320C355.3 320 384 291.3 384 256C384 220.7 355.3 192 320 192C284.7 192 256 220.7 256 256C256 291.3 284.7 320 320 320z"/></svg></span><b>Székhely:</b> <br><span>2890 Tata, Bacsó Béla út 37.</span></li>
                            <li><span class="svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z"/></svg></span><b>Telefon:</b> <br><span>+36 70 908 1858</span></li>
                            <li><span class="svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M112 128C85.5 128 64 149.5 64 176C64 191.1 71.1 205.3 83.2 214.4L291.2 370.4C308.3 383.2 331.7 383.2 348.8 370.4L556.8 214.4C568.9 205.3 576 191.1 576 176C576 149.5 554.5 128 528 128L112 128zM64 260L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 260L377.6 408.8C343.5 434.4 296.5 434.4 262.4 408.8L64 260z"/></svg></span><b>E-mail:</b> <br><span>info@femproterv.hu</span></li>
                        </ul>
                    </div>
                    <div class="footer-item">
                        <span class="footer-name">Kövess minket!</span>
                        <ul>
                            <li><span class="svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/></svg></span></li>
                        </ul>
                    </div>
                    <div class="footer-item">
                        <span class="footer-name">Hasznos</span>
                        <div class="ul-item">
                            <ul class="footer-ul">
                                <li>ÁSZF</li>
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
