<!doctype html>
<html>

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>{{$film->title}}</title>
    <link rel="icon" href="{{asset('images/logo.png')}}" />
    <meta name="description" content="Dream Os Screen is a platfrom that allows users to choose the convinient cinema and movie of their choice and lets him co">
    <meta name="keywords" content="HTML, CSS, JavaScript">

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="telephone=no" name="format-detection">

    <!-- Fonts -->
    <!-- Font awesome - icon font -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- Roboto -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>

    <!-- Stylesheets -->
    <!-- jQuery UI -->
    <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="stylesheet">

    <!-- Mobile menu -->
    <link href="{{asset('css/gozha-nav.css')}}" rel="stylesheet" />
    <!-- Select -->
    <link href="{{asset('css/external/jquery.selectbox.css')}}" rel="stylesheet" />
    <!-- Swiper slider -->
    <link href="{{asset('css/external/idangerous.swiper.css')}}" rel="stylesheet" />
    <!-- Magnific-popup -->
    <link href="{{asset('css/external/magnific-popup.css')}}" rel="stylesheet" />


    <!-- Custom -->
    <link href="{{asset('style2.css')}}" rel="stylesheet" />

    <!-- Modernizr -->
    <script src="{{asset('js/external/modernizr.custom.js')}}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]> 
    	<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script> 
		<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>		
    <![endif]-->
</head>

<body>
    <div class="wrapper"></div>
    <!-- Header section -->
    <header class="header-wrapper">
        <div class="container">
            <!-- Logo link-->
            <a href='index.html' class="logo">
                <img alt='logo' src="{{asset('images/logo.png')}}">
            </a>

            <!-- Main website navigation-->
            <nav id="navigation-box">

                <!-- Additional header buttons / Auth and direct link to booking-->
                <div class="control-panel">
                    <div class="auth auth--home">
                        <div class="auth__show">
                            <span class="auth__image">
                          <img alt="" src="{{asset('images/321.png')}}">
                        </span>
                          <a class="auth__function-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </div>
                     
                        

                    </div>
                    <!--<a href="#" class="btn btn-md btn--warning btn--book btn-control--home book1">R??server ticket !</a>-->
                    <a onclick="window.location.href = 'booking1.html';" class="btn btn-md btn--warning btn--book btn-control--home login-window">R??server ticket !</a> </div>

    </header>

    <!-- Search bar -->
    <div class="search-wrapper">
        <div class="container container--add">
            <form id='search-form' method='get' class="search">
                <input type="text" class="search__field" placeholder="Chercher..">
                <select name="sorting_item" id="search-sort" class="search__sort" tabindex="0">
                        <option value="1" selected='selected'>Par titre</option>
                        <option value="2">Par ann??e</option>
                        <option value="3">Par producteur</option>
                    </select>
                <button type='submit' class="btn btn-md btn--danger search__button">chercher </button>
            </form>
        </div>
    </div>


    <!-- Main content -->
    <section class="container">
        <div class="col-sm-8 col-md-9">
            <div class="movie">
                <h2 class="page-heading">{{$film->title}} </h2>

                <div class="movie__info">
                    <div class="col-sm-6 col-md-4 movie-mobile">
                        <div class="movie__images">
                            <span class="movie__rating">4.9</span>
                            <img alt='' src="{{$film->image}} ">
                        </div>
                        <div class="movie__rate">Noter:
                            <div id='score' class="score"></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-8">
                        <p class="movie__time">{{$film->duree}}</p>

                        <p class="movie__option"><strong>Pays d???origine: </strong><a href="#">??tats-Unis</a>
                            <p class="movie__option"><strong>Date de sortie : </strong><a href="#">19 mai 2021</a></p>
                            <p class="movie__option"><strong>Genre: </strong><a href="#">Animation</a>,<a href="#">Comedie</a>, <a href="#">Famille</a></p>
                            <p class="movie__option"><strong>R??alisation: </strong>{{$film->realisation}}</p>
                            <p class="movie__option"><strong>Producteur: </strong><a href="#">Christopher DeFaria</a></p>
                            <p class="movie__option"><strong>Acteurs principaux: </strong><a href="#">Chlo?? Grace Moretz</a>, <a href="#">Michael Pe??a</a>, <a href="#">Ken Jeong</a>, <a href="#">Rob Delaney</a>


                                <a href="#" class="comment-link">Commentaires:  6</a>

                                <div class="movie__btns">
                                    <a href="booking1.html" class="btn btn-md btn--warning">R??server un ticket</a>
                                    <a href="#" class="watchlist">Ajouter ?? mes favoris</a>
                                </div>

                                <div class="share">
                                    <span class="share__marker">Partager: </span>
                                    <div class="addthis_toolbox addthis_default_style ">
                                        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                        <a class="addthis_button_tweet"></a>
                                        <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                                    </div>
                                </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <h2 class="page-heading">Synopsis</h2>

                <p class="movie__describe">{{$film->description}}</p>

                <h2 class="page-heading">photos &amp; videos</h2>
                              <iframe width="420" height="315"
                            src="{{$film->trailer}}?autoplay=1">
                            </iframe>

                <div class="movie__media">
                    <div class="movie__media-switch">
                        <a href="#" class="watchlist list--photo" data-filter='media-photo'>7 photos</a>
                        <a href="#" class="watchlist list--video" data-filter='media-video'>3 videos</a>
                        
                    </div>

                                
                </div>

            </div>

            <h2 class="page-heading">Horaires &amp; tickets</h2>
            <div class="choose-container">
                <form id='select' class="select" method='get'>
                    <select name="select_item" id="select-sort" class="select__sort" tabindex="0">
                            <option value="1" selected='selected'>Rabat</option>
                            <option value="2">Casablanca</option>
                            <option value="3">Marrakesh</option>
                            <option value="4">Tanger</option>
                            <option value="5">Fes</option>
                            <option value="3">Meknes</option>
                            <option value="4">Agadir</option>
                        </select>
                </form>

                <div class="datepicker">
                    <span class="datepicker__marker"><i class="fa fa-calendar"></i>Date</span>
                    <input type="text" id="datepicker" value='21/05/2021' class="datepicker__input">
                </div>

                <a href="#" id="map-switch" class="watchlist watchlist--map"><span class="show-map">Montrer les cin??mas sur la carte</span><span  class="show-time">Montrer la table des horaires</span></a>

                <div class="clearfix"></div>

                <div class="time-select">
                    <div class="time-select__group group--first">
                        <div class="col-sm-4">
                            <p class="time-select__place">Megarama</p>
                        </div>
                        <ul class="col-sm-8 items-wrap">
                            <li class="time-select__item" data-time='09:40'>09:40</li>
                            <li class="time-select__item" data-time='13:45'>13:45</li>
                            <li class="time-select__item active" data-time='15:45'>15:45</li>
                            <li class="time-select__item" data-time='19:50'>19:50</li>
                            <li class="time-select__item" data-time='21:50'>21:50</li>
                        </ul>
                    </div>

                    <div class="time-select__group">
                        <div class="col-sm-4">
                            <p class="time-select__place">CineAtlas</p>
                        </div>
                        <ul class="col-sm-8 items-wrap">
                            <li class="time-select__item" data-time='10:45'>10:45</li>
                            <li class="time-select__item" data-time='16:00'>16:00</li>
                            <li class="time-select__item" data-time='19:00'>19:00</li>
                            <li class="time-select__item" data-time='21:15'>21:15</li>
                            <li class="time-select__item" data-time='23:00'>23:00</li>
                        </ul>
                    </div>

                    <div class="time-select__group">
                        <div class="col-sm-4">
                            <p class="time-select__place">Renaissance</p>
                        </div>
                        <ul class="col-sm-8 items-wrap">
                            <li class="time-select__item" data-time='09:00'>09:00</li>
                            <li class="time-select__item" data-time='11:00'>11:00</li>
                            <li class="time-select__item" data-time='13:00'>13:00</li>
                            <li class="time-select__item" data-time='15:00'>15:00</li>
                            <li class="time-select__item" data-time='17:00'>17:00</li>
                            <li class="time-select__item" data-time='19:0'>19:00</li>
                            <li class="time-select__item" data-time='21:0'>21:00</li>
                            <li class="time-select__item" data-time='23:0'>23:00</li>
                            <li class="time-select__item" data-time='01:0'>01:00</li>
                        </ul>
                    </div>

                    <div class="time-select__group">
                        <div class="col-sm-4">
                            <p class="time-select__place">Cin??ma Royal</p>
                        </div>
                        <ul class="col-sm-8 items-wrap">
                            <li class="time-select__item" data-time='10:45'>10:45</li>
                            <li class="time-select__item" data-time='16:00'>16:00</li>
                            <li class="time-select__item" data-time='19:00'>19:00</li>
                            <li class="time-select__item" data-time='21:15'>21:15</li>
                            <li class="time-select__item" data-time='23:00'>23:00</li>
                        </ul>
                    </div>

                    <div class="time-select__group group--last">
                        <div class="col-sm-4">
                            <p class="time-select__place">ARMCDH</p>
                        </div>
                        <ul class="col-sm-8 items-wrap">
                            <li class="time-select__item" data-time='17:45'>17:45</li>
                            <li class="time-select__item" data-time='21:30'>21:30</li>
                            <li class="time-select__item" data-time='02:20'>02:20</li>
                        </ul>
                    </div>
                </div>

                <!-- hiden maps with multiple locator-->
                <div class="map">
                    <div id='cimenas-map'><iframe class="googlemap" src="https://www.google.com/maps/d/u/0/embed?mid=1iXnWhGeNG6-wB95QnrbHTGkz86FTBB1U" width="640" height="480"></iframe></div>
                </div>

                <h2 class="page-heading">Commentaires (6)</h2>

                <div class="comment-wrapper">
                    <form id="comment-form" class="comment-form" method='post'>
                        <textarea class="comment-form__text" placeholder='Ajouter votre commentaire ici'></textarea>
                        <label class="comment-form__info">250 caract??res restants</label>
                        <button type='submit' class="btn btn-md btn--danger comment-form__btn">Ajouter un commentaire</button>
                    </form>

                    <div class="comment-sets">

                        <div class="comment">
                            <div class="comment__images">
                                <img alt='' src="images/oumnia (1).png">
                            </div>

                            <a href='#' class="comment__author"><span class="social-used fa fa-facebook"></span>Oumnia ANOUK</a>
                            <p class="comment__date">Aujourd'hui | 03:04</p>
                            <p class="comment__message">Une bonne petite com??die sans pr??tention divertissante. Sans etre une r??volution, ??a fait du bien de rire aux gags classiques de Tom & Jerry.</p>
                            <a href='#' class="comment__reply">R??pondre</a>
                        </div>

                        <div class="comment">
                            <div class="comment__images">
                                <img alt='' src="images/safae.png">
                            </div>

                            <a href='#' class="comment__author"><span class="social-used fa fa-facebook"></span>Safae EL HAJJI</a>
                            <p class="comment__date">19.05.2021 | 14:40</p>
                            <p class="comment__message">Pass?? les premi??res minutes dans lesquelles l'aspect graphique de tom et Jerry me d??plaisait (j'en suis rest?? ?? la version des anciens cartoons) mais aussi le m??lange du cartoon avec du film live que je trouvais moyen (on est
                                loin d'un Roger Rabbit) en y ajoutant l'absurde et l'incoh??rence de ce m??lange d'univers, j'ai malgr?? tout pass?? un tr??s bon moment devant ce film. Film cartoonesque donc bien jou?? (les acteurs et les monteurs s'en sortent
                                pas trop mal pour les interactions avec des ??l??ments non r??els) Chlo?? Grace Moretz porte bien le film et peut plaire autant aux enfants qu'aux grands, avec des clins d'oeil qui peuvent parler aux plus anciens (Droopy ??
                                la fourri??re) un film amusant.</p>
                            <a href='#' class="comment__reply">R??pondre</a>
                        </div>

                        <div class="comment comment--answer">
                            <div class="comment__images">
                                <img alt='' src="images/salim.png">
                            </div>

                            <a href='#' class="comment__author"><span class="social-used fa fa-facebook"></span>Salim REZZOUK</a>
                            <p class="comment__date">20.05.2021 | 10:19</p>
                            <p class="comment__message">Peux mieux faire l histoire et tros banal j???aurais aim?? voir du changement et voir un peu plus de dialogue qu???entre Tom et Jerry</p>
                            <a href='#' class="comment__reply">R??pondre</a>
                        </div>

                        <div class="comment comment--last">
                            <div class="comment__images">
                                <img alt='' src="images/houssam.png">
                            </div>

                            <a href='#' class="comment__author"><span class="social-used fa fa-facebook"></span>Houssam ILLAOUI</a>
                            <p class="comment__date"> 20.05.2021 | 12:31 </p>
                            <p class="comment__message">Pour un retour au cin??ma apr??s des mois de fermeture et bien ce film ??tait parfait pour moi. C'est divertissant, j'ai rit, c'est parfois touchant. Alors oui il y a pleins d'incoh??rences, l'impression que Tom et Jerry ne sont
                                pas assez mis en avant...au profit des personnages "humains" mais en fin de compte tout ca se m??lange plut??t pas mal et il ressort un divertissement qui m'a plut??t plu. Et mon fils de 7 ans a ador?? alors quoi demand?? de
                                plus ?</p>
                            <a href='#' class="comment__reply">R??pondre</a>
                        </div>

                        <div id='hide-comments' class="hide-comments">
                            <div class="comment">
                                <div class="comment__images">
                                    <img alt='' src="images/Abir.png">
                                </div>

                                <a href='#' class="comment__author"><span class="social-used fa fa-facebook"></span>Abir AFFEJAY</a>
                                <p class="comment__date">Aujourd'hui | 03:04</p>
                                <p class="comment__message">Cette nouvelle production "Tom & Jerry" ne vole pas bien haut, d??j?? sc??naristiquement. Aucune originalit?? et du clich?? sans arr??t. La pr??station de Chlo?? Grace Moretz sauve, et porte bien le r??le. Au d??but du film, j'ai
                                    pas tellement appr??ci?? l'aspect graphique dessin anim?? m??lang?? avec celle du monde r??el. Mais ?? force on s'y fait mais j'aurais pr??f??r?? des effets sp??ciaux un peu plus de nos jours. Mais je pense que c'??tait volontaire,
                                    le r??alisateur voulait garder le chat et la souris tels qu'ils sont dans le dessin anim??. Je me renseignerais. Il y a quelques rebondissements sympathiques. Des personnages secondaires pas forc??ment int??ressants, dommage.
                                    En revanche, un rythme satisfaisant. Les enfants riront, je ne me fait pas de soucis la dessus. Je m'en fait par contre pour Tim Story...</p>
                                <a href='#' class="comment__reply">R??pondre</a>
                            </div>

                            <div class="comment">
                                <div class="comment__images">
                                    <img alt='' src="images/youssef.png">
                                </div>

                                <a href='#' class="comment__author"><span class="social-used fa fa-facebook"></span>Youssef HARGAL</a>
                                <p class="comment__date">19.05.2021 | 14:40</p>
                                <p class="comment__message">????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                                <a href='#' class="comment__reply">R??pondre</a>
                            </div>
                        </div>

                        <div class="comment-more">
                            <a href="#" class="watchlist">Voir plus</a>
                        </div>

                    </div>
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
                    <p class="heading-special--small">Dream On Screen<br><span class="title-edition"> Dans les r??seaux Sociaux</span></p>

                    <div class="social">
                        <a href='#' class="social__variant fa fa-facebook"></a>
                        <a href='#' class="social__variant fa fa-twitter"></a>
                        <a href='#' class="social__variant fa fa-instagram"></a>
                    </div>

                    <div class="clearfix"></div>
                    <p class="copy">&copy;Dream On Screen, 2021. Tous les droits sont r??serv??s.</p>
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
    <script src="{{asset('js/external/jquery-migrate-1.2.1.min.js')}}"></script>
    <!-- jQuery UI -->
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <!-- Bootstrap 3-->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

    <!-- Mobile menu -->
    <script src="{{asset('js/jquery.mobile.menu.js')}}"></script>
    <!-- Select -->
    <script src="{{asset('js/external/jquery.selectbox-0.2.min.js')}}"></script>

    <!-- Stars rate -->
    <script src="{{asset('js/external/jquery.raty.js')}}"></script>
    <!-- Swiper slider -->
    <script src="{{asset('js/external/idangerous.swiper.min.js')}}"></script>
    <!-- Magnific-popup -->
    <script src="{{asset('js/external/jquery.magnific-popup.min.js')}}"></script>

    <!--*** Google map  ***-->

    <!--*** Google map infobox  ***-->
    <script src="{{asset('js/external/infobox.js')}}"></script>

    <!-- Share buttons -->
    <script type="text/javascript">
        var addthis_config = {
            "data_track_addressbar": true
        };
    </script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-525fd5e9061e7ef0"></script>

    <!-- Form element -->
    <script src="{{asset('js/external/form-element.js')}}"></script>
    <!-- Form validation -->
    <script src="{{asset('js/form.js')}}"></script>

    <!-- Custom -->
    <script src="{{asset('js/custom.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            init_MoviePage();
        });
    </script>

</body>

</html>