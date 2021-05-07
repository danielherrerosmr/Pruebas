<!DOCTYPE html>
<html lang="en">

<head>
    <title>Game Warrior</title>
    <meta charset="UTF-8">
    <meta name="description" content="Game Warrior">
    <meta name="keywords" content="warrior, game, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section">
        <div class="container">
            <!-- logo -->
            <a class="site-logo" href="">
                <img src="{{ asset('img/logo.png') }}" alt="">
            </a>
            <div class="user-panel">
                <a href="/login">Iniciar Sesión</a> / <a href="/register">Registro</a>
            </div>
            <!-- responsive -->
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
            <!-- site menu -->
            <nav class="main-menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="{{ action('GameController@index') }}">Store</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Forums</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Header section end -->


    <!-- Hero section -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="{{ asset('img/slider-1.jpg') }}">
                <div class="hs-text">
                    <div class="container">
                        <h2>The Best <span>Games</span> Out There</h2>
                        <p>Good Games Better Prices !!</p>
                        <a href="#" class="site-btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="{{ asset('img/slider-2.jpg') }}">
                <div class="hs-text">
                    <div class="container">
                        <h2>The Best <span>Games</span> Out There</h2>
                        <p>Good Games Better Prices !!</p>
                        <a href="#" class="site-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->


    <!-- Latest news section -->
    <div class="latest-news-section">
        <div class="ln-title">Ultimas Noticias</div>
        <div class="news-ticker">
            <div class="news-ticker-contant">
                <div class="nt-item"><span class="new">Nuevo</span>Se confirma Half Life 3.</div>
                <div class="nt-item"><span class="strategy">Estrategia</span>XCOM 3 sale a la venta la proxima semana.</div>
                <div class="nt-item"><span class="racing">Racing</span>Need for Speed Heat baja su precio hasta los 45.99€.</div>
            </div>
        </div>
    </div>
    <!-- Latest news section end -->


    <!-- Feature section -->
    <section class="feature-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 p-0">
                    <div class="feature-item set-bg" data-setbg="{{ asset('img/features/1.jpg') }}">
                        <span class="cata new">Nuevo</span>
                        <div class="fi-content text-white">
                            <h5><a href="#">Tyrande Susurravientos</a></h5>
                            <p> Es la suma sacerdotisa de la diosa Elune, la líder de las Hermanas de Elune, y la
                                principal responsable del gobierno de los elfos nocturnos.</p>
                            <a href="#" class="fi-comment">3 Comentarios</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 p-0">
                    <div class="feature-item set-bg" data-setbg="{{ asset('img/features/2.jpg') }}">
                        <span class="cata strategy">Estrategia</span>
                        <div class="fi-content text-white">
                            <h5><a href="#">Genji BlackWatch - Heroes - Overwatch</a></h5>
                            <p>Genji arroja precisos y mortales shurikens a sus blancos y utiliza su katana
                                tecnológicamente avanzada para desviar proyectiles o para asestar un Golpe rápido que
                                corta a los enemigos.</p>
                            <a href="#" class="fi-comment">3 Comentarios</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 p-0">
                    <div class="feature-item set-bg" data-setbg="{{ asset('img/features/3.jpg') }}">
                        <span class="cata new">Nuevo</span>
                        <div class="fi-content text-white">
                            <h5><a href="#">El gran exterior</a></h5>
                            <p>Los cazadores y aventureros pueden encontrar grandes retos deportivos en el enorme
                                condado de Blaine.
                                Trae un fusil para cazar piezas peligrosas, camina hasta la cima del majestuoso monte
                                Chiliad o alquila un avión y tírate en paracaídas.</p>
                            <a href="#" class="fi-comment">3 Comentarios</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 p-0">
                    <div class="feature-item set-bg" data-setbg="{{ asset('img/features/4.jpg') }}">
                        <span class="cata racing">Racing</span>
                        <div class="fi-content text-white">
                            <h5><a href="#">Reaper - Cars -GTA V</a></h5>
                            <p>El Reaper es un vehículo, estilo superdeportivo que aparece en el modo Online de Grand
                                Theft Auto V, como parte de la actualización Crímenes y Finanzas. Es fabricado por
                                Pegassi.</p>
                            <a href="#" class="fi-comment">3 Comentarios</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature section end -->


    <!-- Recent game section  -->
    <section class="recent-game-section spad set-bg" data-setbg="{{ asset('img/recent-game-bg.png') }}">
        <div class="container">
            <div class="section-title">
                <div class="cata new">new</div>
                <h2>Ultimos DLC</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="recent-game-item">
                        <div class="rgi-thumb set-bg" data-setbg="{{ asset('img/recent-game/1.jpg') }}">
                            <div class="cata new">New</div>
                        </div>
                        <div class="rgi-content">
                            <h5>Genji - Heroes - Overwatch</h5>
                            <p>Genji arroja precisos y mortales shurikens a sus blancos y utiliza su katana
                                tecnológicamente avanzada para desviar proyectiles o para asestar un Golpe rápido que
                                corta a los enemigos.</p>
                            <a href="#" class="comment">3 Comentarios</a>
                            <div class="rgi-extra">
                                <div class="rgi-star"><img src="{{ asset('img/icons/star.png') }}" alt=""></div>
                                <div class="rgi-heart"><img src="{{ asset('img/icons/heart.png') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="recent-game-item">
                        <div class="rgi-thumb set-bg" data-setbg="{{ asset('img/recent-game/6.jpg') }}">
                            <div class="cata racing">Racing</div>
                        </div>
                        <div class="rgi-content">
                            <h5>Reaper - Cars -GTA V</h5>
                            <p>El Reaper es un vehículo, estilo superdeportivo que aparece en el modo Online de Grand
                                Theft Auto V, como parte de la actualización Crímenes y Finanzas. Es fabricado por
                                Pegassi.</p>
                            <a href="#" class="comment">3 Comentarios</a>
                            <div class="rgi-extra">
                                <div class="rgi-star"><img src="{{ asset('img/icons/star.png') }}" alt=""></div>
                                <div class="rgi-heart"><img src="{{ asset('img/icons/heart.png') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="recent-game-item">
                        <div class="rgi-thumb set-bg" data-setbg="{{ asset('img/recent-game/3.jpg') }}">
                            <div class="cata adventure">Aventura</div>
                        </div>
                        <div class="rgi-content">
                            <h5>E1M1: Hangar - Maps - DOOM</h5>
                            <p>es el primer mapa del primer episodio Knee-Deep in the Dead en Doom. Fue diseñado por
                                John Romero y utiliza la pista de música "At Doom's Gate".
                                Por ser el primer mapa en el juego es pequeño y sencillo de completar, con un tiempo
                                nominal (par) de 30 segundos.</p>
                            <a href="#" class="comment">3 Comentarios</a>
                            <div class="rgi-extra">
                                <div class="rgi-star"><img src="{{ asset('img/icons/star.png') }}" alt=""></div>
                                <div class="rgi-heart"><img src="{{ asset('img/icons/heart.png') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Recent game section end -->


    <!-- Tournaments section -->
    <section class="tournaments-section spad">
        <div class="container">
            <div class="tournament-title">Torneos</div>
            <div class="row">
                <div class="col-md-6">
                    <div class="tournament-item mb-4 mb-lg-0">
                        <div class="ti-notic">Torneo Premium</div>
                        <div class="ti-content">
                            <div class="ti-thumb set-bg" data-setbg="{{ asset('img/tournament/1.jpg') }}"></div>
                            <div class="ti-text">
                                <h4>World Of WarCraft</h4>s
                                <ul>
                                    <li><span>Comienzo: </span> June 20, 2018</li>
                                    <li><span>Finaliza: </span> July 01, 2018</li>
                                    <li><span>Participantes: </span> 10 equipos</li>
                                    <li><span>Creador: </span> Dani</li>
                                </ul>
                                <p><span>Premios: </span> 1er puesto: 2000€, 2do place: 1000€, 3er puesto: 500€</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tournament-item">
                        <div class="ti-notic">Torneo Premium</div>
                        <div class="ti-content">
                            <div class="ti-thumb set-bg" data-setbg="{{ asset('img/tournament/2.jpg') }}"></div>
                            <div class="ti-text">
                                <h4>DOOM</h4>
                                <ul>
                                    <li><span>Comiezo: </span> June 20, 2018</li>
                                    <li><span>Finaliza: </span> July 01, 2018</li>
                                    <li><span>Participantes: </span> 10 equipos</li>
                                    <li><span>Creador: </span> Asier</li>
                                </ul>
                                <p><span>Premios: </span> 1er puesto: 2000€, 2do place: 1000€, 3er puesto: 500€</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tournaments section bg -->


    <!-- Review section -->
    <section class="review-section spad set-bg" data-setbg="img/review-bg.png">
        <div class="container">
            <div class="section-title">
                <div class="cata new">new</div>
                <h2>Ultimas reviews</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="review-item">
                        <div class="review-cover set-bg" data-setbg="{{ asset('img/review/1.jpg') }}">
                            <div class="score yellow">9.3</div>
                        </div>
                        <div class="review-text">
                            <h5>Assasin’s Creed</h5>
                            <p>El esplendor y la intriga del antiguo Egipto de desdibujan en una cruenta lucha por el
                                poder. Desvela secretos y mitos ya olvidados en un momento crucial: El origen de la
                                hermamdad de los assasin's</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="review-item">
                        <div class="review-cover set-bg" data-setbg="{{ asset('img/review/2.jpg') }}">
                            <div class="score purple">9.5</div>
                        </div>
                        <div class="review-text">
                            <h5>Doom</h5>
                            <p>Estás aquí por una razón. La enorme instalación de investigación de la UAC en Marte ha
                                sido arrasada por poderosos y agresivos demonios, y solo una persona se interpone entre
                                su mundo y el nuestro. Eres un marine de DOOM, estás solo y te han movilizado con un
                                único fin: matarlos a todos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="review-item">
                        <div class="review-cover set-bg" data-setbg="{{ asset('img/review/3.jpg') }}">
                            <div class="score green">9.1</div>
                        </div>
                        <div class="review-text">
                            <h5>Overwatch</h5>
                            <p>Ralentiza el tiempo, desata la destrucción desde las alturas con una armadura con
                                propulsores o pilota una bola de hámster superpotenciada: en Overwatch, cada héroe tiene
                                un conjunto único de habilidades devastadoras.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="review-item">
                        <div class="review-cover set-bg" data-setbg="{{ asset('img/review/4.jpg') }}">
                            <div class="score pink">9.7</div>
                        </div>
                        <div class="review-text">
                            <h5>GTA</h5>
                            <p>Los Santos, una extensa y soleada metrópolis llena de gurús de autoayuda, aspirantes a
                                estrellas y famosos en decadencia, en su día la envidia del mundo occidental, lucha
                                ahora por mantenerse a flote en una era de incertidumbre económica y "realities"
                                baratos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Review section end -->


    <!-- Footer top section -->
    <section class="footer-top-section">
        <div class="container">
            <div class="footer-top-bg">
                <img src="{{ asset('img/footer-top-bg.png') }}" alt="">
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-logo text-white">
                        <img src="{{ asset('img/footer-logo.png') }}" alt="">
                        <p>Good Games Better Prices !!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget mb-5 mb-md-0">
                        <h4 class="fw-title">Ultimos Posts</h4>
                        <div class="latest-blog">
                            <div class="lb-item">
                                <div class="lb-thumb set-bg" data-setbg="{{ asset('img/latest-blog/1.jpg') }}"></div>
                                <div class="lb-content">
                                    <div class="lb-date">June 21, 2018</div>
                                    <p>Actualización 6.1 ya en los test servers para PC y liberado en consola.</p>
                                    <a href="#" class="lb-author">By Asier</a>
                                </div>
                            </div>
                            <div class="lb-item">
                                <div class="lb-thumb set-bg" data-setbg="{{ asset('img/latest-blog/2.jpg') }}"></div>
                                <div class="lb-content">
                                    <div class="lb-date">June 24, 2018</div>
                                    <p>Esta semana en Los Santos, los jugadores adictos a la adrenalina podrán ganar el
                                        doble de recompensas en varios modos de carreras de alto riesgo</p>
                                    <a href="#" class="lb-author">By Asier</a>
                                </div>
                            </div>
                            <div class="lb-item">
                                <div class="lb-thumb set-bg" data-setbg="{{ asset('img/latest-blog/3.jpg') }}"></div>
                                <div class="lb-content">
                                    <div class="lb-date">June 27, 2018</div>
                                    <p>COMIENZA LA TEMPORADA 4 DE BATTLE FOR AZEROTH</p>
                                    <a href="#" class="lb-author">By Dani</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <h4 class="fw-title">Opiniones de nuestros clientes</h4>
                        <div class="top-comment">
                            <div class="tc-item">
                                <div class="tc-thumb set-bg" data-setbg="{{ asset('img/authors/1.jpg') }}"></div>
                                <div class="tc-content">
                                    <p><a href="#">Daniel Artigas </a> Todo bien sin problemas y te ahorras dinero.</p>
                                    <div class="tc-date">June 21, 2018</div>
                                </div>
                            </div>
                            <div class="tc-item">
                                <div class="tc-thumb set-bg" data-setbg="{{ asset('img/authors/2.jpg') }}"></div>
                                <div class="tc-content">
                                    <p><a href="#">Oriol Gassull</a> Rápido, barato, y sin problemas. Muy recomendable.
                                    </p>
                                    <div class="tc-date">June 24, 2018</div>
                                </div>
                            </div>
                            <div class="tc-item">
                                <div class="tc-thumb set-bg" data-setbg="{{ asset('img/authors/3.jpg') }}"></div>
                                <div class="tc-content">
                                    <p><a href="#">David Gonzalez </a> Justo lo que buscaba, al mejor precio posible.
                                        Rapido y facil. Un servicio en el que se puede confiar.</p>
                                    <div class="tc-date">July 25, 2018</div>
                                </div>
                            </div>
                            <div class="tc-item">
                                <div class="tc-thumb set-bg" data-setbg="{{ asset('img/authors/4.jpg') }}"></div>
                                <div class="tc-content">
                                    <p><a href="#">Jorge Pascual </a> Gestión perfecta, rápida y eficaz. Pegas 0.
                                        Seguiré comprando! :)</p>
                                    <div class="tc-date">September 02, 2018</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer top section end -->


    <!-- Footer section -->
    <footer class="footer-section">
        <div class="container">
            <ul class="footer-menu">
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href="">| Game Warrior © |</a></li>
            </ul>
            <p class="copyright">
                | Copyright &copy;<script>
                document.write(new Date().getFullYear());
                </script> All rights reserved |
            </p>
        </div>
    </footer>
    <!-- Footer section end -->


    <!--====== Javascripts & Jquery ======-->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>