<!doctype html>
<html>

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Dream On Screen</title>
    <link rel="icon" href="images/logo.png" />
    <meta name="description" content="Dream Os Screen is a platfrom that allows users to choose the convinient cinema and movie of their choice and lets him co">
    <meta name="keywords" content="HTML, CSS, JavaScript">

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="telephone=no" name="format-detection">

    <!-- Fonts -->
    <!-- Font awesome - icon font -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- Roboto -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,700' rel='stylesheet' type='text/css'>
    <!-- Open Sans -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic' rel='stylesheet' type='text/css'>

    <!-- Stylesheets -->

    <!-- Mobile menu -->
    <link href="css/gozha-nav.css" rel="stylesheet" />
    <!-- Select -->
    <link href="css/external/jquery.selectbox.css" rel="stylesheet" />

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

    <!-- Custom -->
    <link href="style3.css" rel="stylesheet" />


    <!-- Modernizr -->
    <script src="js/external/modernizr.custom.js"></script>

</head>

<body>
    <div class="wrapper">
        <!-- Header section -->
        <header class="header-wrapper header-wrapper--home">
            <div class="container">
                <!-- Logo link-->
                <a href='index.html' class="logo">
                    <img alt='logo' src="images/logo.png">
                </a>

                <!-- Main website navigation-->
                <nav id="navigation-box">
                    <!-- Toggle for mobile menu mode -->
                    <a href="#" id="navigation-toggle">
                        <span class="menu-icon">
                            <span class="icon-toggle" role="button" aria-label="Toggle Navigation"> </span>

                        </span>
                    </a>
                    <!-- Additional header buttons / Auth and direct link to booking-->
                    <div class="control-panel">
                        <div class="auth auth--home">
                            <div class="auth__show">
                                <span class="auth__image">
                          <img alt="" src="images/321.png">
                        </span>
                            </div>
                            <a href="#" class="btn btn--sign btn--singin">
                        Moi
                      </a>
                            <ul class="auth__function">
                                <li><a href="#" class="auth__function-item">Favoris</a></li>
                                <li><a href="#" class="auth__function-item">Tickets réservés</a></li>
                                <li><a href="#" class="auth__function-item">Points de fidélité</a></li>
                                <li>     <a class="auth__function-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>
                            </ul>

                        </div>
                        <a onclick="window.location.href = 'booking1.html';" class="btn btn-md btn--warning btn--book btn-control--home login-window">Réserver ticket !</a>
                    </div>

            </div>
        </header>

        <!-- Slider -->
        <div class="bannercontainer">
            <div class="banner">
                <ul>
                    <li data-transition="fade" data-slotamount="7" class="slide fading-slide" data-slide='Plus de passion, Plus d émotion.'>
                        <img alt='' src="images/45.jpg">
                        <div class="captio slide__video" data-x="0" data-y="0" data-autoplay='true'>
                            <video class="media-element" autoplay="autoplay" preload='none' loop="loop" muted="" src="video/video.mp4">
                                                            <source type="video/mp4" src="video/video.mp4">
                                                            <source type="video/ogg" src="video/video.ogg">
                                                        </video>
                            <audio class="media-element" autoplay="autoplay" preload='none' loop="loop" muted="" src="video/video.ogg"></audio>
                        </div>

                        <div class="caption slide__name slide__name--smaller" data-x="left" data-y="160" data-splitin="chars" data-elementdelay="0.1" data-speed="700" data-start="1400" data-easing="easeOutBack" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                            data-frames="{ typ :lines;
                                                                     elementdelay :0.1;
                                                                     start:1650;
                                                                     speed:500;
                                                                     ease:Power3.easeOut;
                                                                     animation:x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                                                     },
                                                                     { typ :lines;
                                                                     elementdelay :0.1;
                                                                     start:2150;
                                                                     speed:500;
                                                                     ease:Power3.easeOut;
                                                                     animation:x:0;y:0;z:0;rotationX:00;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                                                     }
                                                                     " data-splitout="lines" data-endelementdelay="0.1" data-customout="x:-230;y:0;z:0;rotationX:0;rotationY:0;rotationZ:90;scaleX:0.2;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%"
                            data-endspeed="500" data-endeasing="Back.easeIn">
                            Plus de passion, Plus d'émotions.
                        </div>

                    </li>
                    <li data-transition="fade" data-slotamount="7" class="slide" data-slide='Avengers.'>
                        <img alt='' src="images/329583.jpg">
                        <div class="caption slide__name margin-slider" data-x="right" data-y="80" data-splitin="chars" data-elementdelay="0.1" data-speed="700" data-start="1400" data-easing="easeOutBack" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                            data-frames="{ typ :lines;
                                                 elementdelay :0.1;
                                                 start:1650;
                                                 speed:500;
                                                 ease:Power3.easeOut;
                                                 animation:x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                                 },
                                                 { typ :lines;
                                                 elementdelay :0.1;
                                                 start:2150;
                                                 speed:500;
                                                 ease:Power3.easeOut;
                                                 animation:x:0;y:0;z:0;rotationX:00;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                                 }
                                                 " data-splitout="lines" data-endelementdelay="0.1" data-customout="x:-230;y:0;z:0;rotationX:0;rotationY:0;rotationZ:90;scaleX:0.2;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%"
                            data-endspeed="500" data-end="8400" data-endeasing="Back.easeIn">
                            AVENGERS
                        </div>

                        <div class="caption slide__time margin-slider sfr str" data-x="right" data-hoffset='-243' data-y="186" data-speed="300" data-start="2100" data-easing="easeOutBack" data-endspeed="300" data-end="8700" data-endeasing="Back.easeIn">
                            Du
                        </div>
                        <div class="caption slide__date margin-slider lfb ltb" data-x="right" data-hoffset='-149' data-y="186" data-speed="500" data-start="2400" data-easing="Power4.easeOut" data-endspeed="400" data-end="8200" data-endeasing="Back.easeIn">
                            07 Mai
                        </div>
                        <div class="caption slide__time margin-slider sfr str" data-x="right" data-hoffset='-113' data-y="186" data-speed="300" data-start="2100" data-easing="easeOutBack" data-endspeed="300" data-end="8700" data-endeasing="Back.easeIn">
                            - au
                        </div>
                        <div class="caption slide__date margin-slider lfb ltb" data-x="right" data-y="186" data-speed="500" data-start="2800" data-easing="Power4.easeOut" data-endspeed="400" data-end="8200" data-endeasing="Back.easeIn">
                            01 Juin
                        </div>
                        <div class="caption slide__text margin-slider customin customout" data-x="right" data-y="250" data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="400" data-start="3000" data-endspeed="400" data-end="8000"
                            data-endeasing="Back.easeIn">
                            Thanos ayant anéanti la moitié de l’univers, les Avengers restants resserrent les rangs dans ce <br> vingt-deuxième film des Studios Marvel, grande conclusion d’un des chapitres de l’Univers Cinématographique Marvel.
                        </div>
                        <div class="caption margin-slider skewfromright customout " data-x="right" data-y="324" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="400" data-start="3300" data-easing="Power4.easeOut" data-endspeed="300" data-end="7700" data-endeasing="Power4.easeOut">
                            <a href="#" class="slide__link">aller voir les cinémas et les disponibilités</a>
                        </div>
                    </li>

                    <li data-transition="fade" data-slotamount="7" class="slide" data-slide='Hunger Games.'>
                        <img alt='' src="images/799847.jpg">
                        <div class="caption slide__name slide__name--smaller slide__name--specific customin customout" data-x="left" data-y="160" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="700" data-start="1400" data-easing="easeOutBack" data-endspeed="500"
                            data-end="8600" data-endeasing="Back.easeIn">
                            Hunger <span class="highlight">Games :</span> Mockingjay <span class="highlight">Part 1.</span>
                        </div>

                        <div class="caption slide__descript customin customout" data-x="left" data-y="240" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="700" data-start="2000" data-endspeed="500" data-end="8400" data-endeasing="Back.easeIn">
                            Du 21 Mai au Juin 21.
                        </div>

                        <div class="caption lfb customout slider-wrap-btn" data-x="left" data-y="310" data-speed="500" data-start="2800" data-easing="Power4.easeOut" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-endspeed="400" data-end="8000" data-endeasing="Power4.easeOut">
                            <a href="#" class="btn btn-md btn--danger slider--btn">plus</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

        <!--end slider -->


        <!-- Main content -->
        <section class="container">
            <div class="movie-best">
                <div class="col-sm-10 col-sm-offset-1 movie-best__rating">Meilleur Choix du jour</div>
                <div class="col-sm-12 change--col">
                    <div class="movie-beta__item ">
                        <img alt='' src="images/1.png">
                        <span class="best-rate">4.0</span>

                        <ul class="movie-beta__info">
                            <li><span class="best-voted">1247 votes</span></li>
                            <li>
                                <p class="movie__time">120 min</p>
                                <p>Animation | Comédie | Famille</p>
                                <p>38 commentaires</p>
                            </li>
                            <li class="last-block">
                                <a href="movie-page-left.html" class="slide__link">plus</a>
                            </li>
                        </ul>
                    </div>
                    <div class="movie-beta__item second--item">
                        <img alt='' src="images/2.png">
                        <span class="best-rate">4.9</span>

                        <ul class="movie-beta__info">
                            <li><span class="best-voted">800 votes</span></li>
                            <li>
                                <p class="movie__time">101 min</p>
                                <p>Animation | Comédie | Famille </p>
                                <p>69 commentaires</p>
                            </li>
                            <li class="last-block">
                                <a href="movie-page-left.html" class="slide__link">plus</a>
                            </li>
                        </ul>
                    </div>
                    <div class="movie-beta__item third--item">
                        <img alt='' src="images/3.png">
                        <span class="best-rate">4.5</span>

                        <ul class="movie-beta__info">
                            <li><span class="best-voted">6574 votes</span></li>
                            <li>
                                <p class="movie__time">120 min</p>
                                <p>Action | Fantastique </p>
                                <p>65 commentaires</p>
                            </li>
                            <li class="last-block">
                                <a href="movie-page-left.html" class="slide__link">plus</a>
                            </li>
                        </ul>
                    </div>
                    <div class="movie-beta__item hidden-xs">
                        <img alt='' src="images/4.png">
                        <span class="best-rate">4.6 </span>

                        <ul class="movie-beta__info">
                            <li><span class="best-voted"> 150 votes</span></li>
                            <li>
                                <p class="movie__time">120 min</p>
                                <p>Action | Aventure | Fantastique </p>
                                <p>48 commentaires</p>
                            </li>
                            <li class="last-block">
                                <a href="movie-page-left.html" class="slide__link">plus</a>
                            </li>
                        </ul>
                    </div>
                    <div class="movie-beta__item hidden-xs hidden-sm">
                        <img alt='' src="images/5.png">
                        <span class="best-rate">3.9</span>

                        <ul class="movie-beta__info">
                            <li><span class="best-voted">324 votes</span></li>
                            <li>
                                <p class="movie__time">115 min</p>
                                <p>Drame | Comédie </p>
                                <p>59 commentaires</p>
                            </li>
                            <li class="last-block">
                                <a href="movie-page-left.html" class="slide__link">plus</a>
                            </li>
                        </ul>
                    </div>
                    <div class="movie-beta__item hidden-xs hidden-sm">
                        <img alt='' src="images/6.jpg">
                        <span class="best-rate">5.0</span>

                        <ul class="movie-beta__info">
                            <li><span class="best-voted">3257 votes</span></li>
                            <li>
                                <p class="movie__time">145 min</p>
                                <p>Action | Thriller </p>
                                <p>70 commentaires</p>
                            </li>
                            <li class="last-block">
                                <a href="movie-page-left.html" class="slide__link">plus</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-10 col-sm-offset-1 movie-best__check">Voir tous les films en cours de diffusion</div>
            </div>

            <div class="col-sm-12">
                <div class="mega-select-present mega-select-top mega-select--full">
                    <div class="mega-select-marker">
                        <div class="marker-indecator location">
                            <p class="select-marker"><span>Film à regarder dans</span> <br>votre ville</p>
                        </div>

                        <div class="marker-indecator cinema">
                            <p class="select-marker"><span>Trouvez votre </span> <br>cinema</p>
                        </div>

                        <div class="marker-indecator film-category">
                            <p class="select-marker"><span>Trouvez un film selon </span> <br> votre humeur</p>
                        </div>

                        <div class="marker-indecator actors">
                            <p class="select-marker"><span> Trouvez votre </span> <br>acteur préféré</p>
                        </div>

                        <div class="marker-indecator director">
                            <p class="select-marker"><span>Trouvez selon  </span> <br> le directeur </p>
                        </div>


                    </div>

                    <div class="mega-select pull-right">
                        <span class="mega-select__point">Cherchez par : </span>
                        <ul class="mega-select__sort">
                            <li class="filter-wrap"><a href="#" class="mega-select__filter filter--active" data-filter='location'>Localisation</a></li>
                            <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='cinema'>Cinema</a></li>
                            <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='film-category'>Catégorie</a></li>
                            <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='actors'>Acteurs</a></li>
                            <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='director'>Directeur</a></li>
                        </ul>

                        <input name="search-input" type='text' class="select__field">

                        <div class="select__btn">
                            <a href="#" class="btn btn-md btn--danger location">Trouvez <span class="hidden-exrtasm">votre ville</span></a>
                            <a href="single-cinema.html" class="btn btn-md btn--danger cinema">Trouvez <span class="hidden-exrtasm">votre cinema</span></a>
                            <a href="#" class="btn btn-md btn--danger film-category">Trouvez <span class="hidden-exrtasm">votre catégorie</span></a>
                            <a href="#" class="btn btn-md btn--danger actors">trouvez <span class="hidden-exrtasm">votre acteur</span></a>
                            <a href="#" class="btn btn-md btn--danger director">trouvez <span class="hidden-exrtasm">votre directeur</span></a>
                        </div>

                        <div class="select__dropdowns">
                            <ul class="select__group location">
                                <li class="select__variant" data-value='Rabat'>Rabat</li>
                                <li class="select__variant" data-value='Casablanca'>Casablanca</li>
                                <li class="select__variant" data-value='Marrakesh'>Marrakesh</li>
                                <li class="select__variant" data-value='Tanger'>Tanger</li>
                                <li class="select__variant" data-value='Fes'>Fes</li>
                                <li class="select__variant" data-value='Meknes'>Meknes</li>
                                <li class="select__variant" data-value='Tetouan'>Tetouan</li>
                            </ul>

                            <ul class="select__group cinema">
                                <li class="select__variant" data-value='Megarama'>Megarama</li>
                                <li class="select__variant" data-value='CineAtlas'>CineAtlas</li>
                                <li class="select__variant" data-value='Renaissance'>Renaissance</li>
                                <li class="select__variant" data-value='Tanagra'>Tanagra</li>
                                <li class="select__variant" data-value='Cinephilia'>Cinephilia</li>
                            </ul>

                            <ul class="select__group film-category">
                                <li class="select__variant" data-value="Anime">Anime</li>
                                <li class="select__variant" data-value='Comedie'>Comedie</li>
                                <li class="select__variant" data-value='Drama'>Drama</li>
                                <li class="select__variant" data-value='Fantasisie'>Fantaisie</li>
                                <li class="select__variant" data-value='Horreur'>Horreur</li>
                                <li class="select__variant" data-value='Thriller'>Thriller</li>
                            </ul>

                            <ul class="select__group actors">
                                <li class="select__variant" data-value='Leonardo DiCaprio'>Leonardo DiCaprio</li>
                                <li class="select__variant" data-value='Johnny Depp'>Johnny Depp</li>
                                <li class="select__variant" data-value='Jack Nicholson'>Jack Nicholson</li>
                                <li class="select__variant" data-value='Robert De Niro'>Robert De Niro</li>
                                <li class="select__variant" data-value='Morgan Freeman'>Morgan Freeman</li>
                                <li class="select__variant" data-value='Jim Carrey'>Jim Carrey</li>
                                <li class="select__variant" data-value='Adam Sandler'>Adam Sandler</li>
                                <li class="select__variant" data-value='Ben Stiller'>Ben Stiller</li>
                            </ul>

                            <ul class="select__group director">
                                <li class="select__variant" data-value='Steven Spielberg'>Steven Spielberg</li>
                                <li class="select__variant" data-value='Martin Scorsese'>Martin Scorsese</li>
                                <li class="select__variant" data-value='Guy Ritchie'>Guy Ritchie</li>
                                <li class="select__variant" data-value='Christopher Nolan'>Christopher Nolan</li>
                                <li class="select__variant" data-value='Tim Burton'>Tim Burton</li>
                            </ul>


                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <h2 id='target' class="page-heading heading--outcontainer">Actualités</h2>

            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-md-9">
                        <!-- Movie variant with time -->
                        @foreach($films as $film)
                        <div class="movie movie--test movie--test--dark movie--test--left">
                            <div class="movie__images">
                                <a href="movie-page-left.html" class="movie-beta__link">
                                    <img alt='' src="images/7.png">
                                </a>
                            </div>

                            <div class="movie__info">
                                <a href='{{route('film',['id'=>$film->id])}}' class="movie__title">{{$film->title}}  </a>

                                <p class="movie__time">107 min</p>

                                <p class="movie__option"><a href="#"> Aventure </a> | <a href="#">Action</a> | <a href="#">Comédie</a> </p>

                                <div class="movie__rate">
                                    <div class="score"></div>
                                    <span class="movie__rating">4.1</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- Movie variant with time -->

                        <!-- Movie variant with time -->
                        
                        <!-- Movie variant with time -->

                        <!-- Movie variant with time -->
                        
                        <!-- Movie variant with time -->

                        <!-- Movie variant with time -->
                       
                      
                        <!-- Movie variant with time -->

                   
                        <!-- Movie variant with time -->

                        <!-- Movie variant with time -->
                      
                    </div>
                </div>
            </div>
        </section>

        <div class="clearfix"></div>

        <footer class="footer-wrapper">
            <section class="container">
                <div class="col-xs-4 col-md-2 footer-nav">
                    <ul class="nav-link">
                        <li><a href="contact.html" class="nav-link__item">Contactez-nous</a></li>
                        <li><a href=" " class="nav-link__item ">A propos de nous</a></li>
                        <li><a href="#" class="nav-link__item">Termes d'utilisation</a></li>

                    </ul>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="footer-info">
                        <p class="heading-special--small">Dream On Screen<br><span class="title-edition"> Dans les réseaux Sociaux</span></p>

                        <div class="social">
                            <a href='#' class="social__variant fa fa-facebook"></a>
                            <a href='#' class="social__variant fa fa-twitter"></a>
                            <a href='#' class="social__variant fa fa-instagram"></a>
                        </div>

                        <div class="clearfix"></div>
                        <p class="copy">&copy;Dream On Screen, 2021. Tous les droits sont réservés.</p>
                    </div>
                </div>
            </section>
        </footer>
    </div>


    <!-- JavaScript-->
    <!-- jQuery 1.9.1-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/external/jquery-1.10.1.min.js"><\/script>')
    </script>
    <!-- Migrate -->
    <script src="js/external/jquery-migrate-1.2.1.min.js"></script>
    <!-- Bootstrap 3-->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

    <!-- jQuery REVOLUTION Slider -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Mobile menu -->
    <script src="js/jquery.mobile.menu.js"></script>
    <!-- Select -->
    <script src="js/external/jquery.selectbox-0.2.min.js"></script>
    <!-- Stars rate -->
    <script src="js/external/jquery.raty.js"></script>

    <!-- Form element -->
    <script src="js/external/form-element.js"></script>
    <!-- Form validation -->
    <script src="js/form.js"></script>

    <!-- Twitter feed -->
    <script src="js/external/twitterfeed.js"></script>

    <!-- Custom -->
    <script src="js/custom.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            init_Home();
        });
    </script>

</body>

</html>