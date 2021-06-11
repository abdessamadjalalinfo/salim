<!doctype html>
<html>

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Dream On Screen</title>
    <link rel="icon" href="images/logo.png" />
    <meta name="description" content="Dream On Screen is a platfrom that allows users to choose the convinient cinema and movie of their choice and lets him co">
    <meta name="keywords" content="HTML, CSS, JavaScript">


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
    <link href="css/style.css?v=1" rel="stylesheet" />


    <!-- Modernizr -->
    <script src="js/external/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]> 
        <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script> 
        <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>       
    <![endif]-->



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
    <!--          <script src="js/external/form-element.js"></script>.     -->
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

</head>

<body>
    <header class="header-wrapper header-wrapper--home">
        <div class="container">
            <!-- Logo link-->
            <a href='index.html' class="logo" style="    position: absolute;
                top: -17%;
                left: 545px;
                z-index: 2;">
                <img alt='logo' src="images/logo.png">
            </a>

            <!-- Main website navigation-->
            <nav id="navigation-box">
                <!-- Toggle for mobile menu mode -->
                <a href="#" id="navigation-toggle">
                </a>


            </nav>


        </div>
    </header>

    <!-- open/close -->
    <div>

        <section class="container">

            <div class="col-sm-4 col-sm-offset-4">
                <form method="POST" class="login-form" action="{{ route('login') }}">
                        @csrf    <p class="login__title">Authentification <br><span class="login-edition">Bienvenue à Dream On Screen</span></p>

                    <div class="social social--colored">
                        <a href='#' class="social__variant fa fa-facebook"></a>
                        <a href='#' class="social__variant fa fa-twitter"></a>
                        <a href='#' class="social__variant fa fa-google-plus"></a>
                    </div>

                    <p class="login__tracker">ou</p>

                    <div class="field-wrap">
                        <input id="email" type="email" class="login__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                          @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror        
                        <input id="password" type="password"class="login__input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <input type='checkbox' id='#informed' class='login__check styled'>
                        <label for='#informed' class='login__check-info'> Se souvenir de moi </label>

                    </div>

                    <div class="login__control">
                        <!-- <button type='submit' class="btn btn-md btn--warning btn--wider" onclick=" location.ref="http://127.0.0.1:5502/index.html"; alt="Redirection">sign in</button> -->
                        <button type='submit' class="btn btn-md btn--warning btn--wider">
                            s'identifier
                        </button>
                        <a href="#" class="login__tracker form__tracker">Mot de passe oublié ?</a>
                    </div>

                </form>
            </div>
            <div class="clearfix "></div>

            <footer class="footer-wrapper ">
                <section class="container ">
                    <div class="col-xs-4 col-md-2 footer-nav ">
                        <ul class="nav-link ">
                            <li><a href="contact.html " class="nav-link__item ">Contactez-nous</a></li>
                            <li><a href=" " class="nav-link__item ">A propos de nous</a></li>
                            <li><a href="# " class="nav-link__item ">Termes d'utilisation</a></li>



                        </ul>
                    </div>
                    <div class="col-xs-12 col-md-6 ">
                        <div class="footer-info ">
                            <p class="heading-special--small ">Dream On Screen<br><span class="title-edition "> Dans les réseaux Sociaux</span></p>

                            <div class="social ">
                                <a href='#' class="social__variant fa fa-facebook "></a>
                                <a href='#' class="social__variant fa fa-twitter "></a>
                                <a href='#' class="social__variant fa fa-instagram "></a>
                            </div>

                            <div class="clearfix "></div>
                            <p class="copy ">&copy;Dream On Screen, 2021. Tous les droits sont réservés.</p>
                        </div>
                    </div>
                </section>
            </footer>
    </div>

    </section>
    </div>




</body>

</html>
