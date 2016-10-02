<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Tuva - A smart and connected local community</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <meta name="viewport" content="width=device-width" />
    <link href="css/demo.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/gsdk.css" rel="stylesheet"/>
    <link href="css/examples.css" rel="stylesheet"/>
    <link href="css/heroimage.css" rel="stylesheet" />
    <link href="css/hero.css" rel="stylesheet" />



    <link href="css/line.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />





    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Grand+Hotel|Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>

<body class="home">

<nav
<div class='GlobalNav-spacer'></div>
<div class='GlobalNav js-globalNav'>
<div data-react-class="GlobalNavMobileSearch" data-react-props="{}"></div>
<div class='GlobalNav-layout wrapper'>
<div class='GlobalNav-tabs'>
<a class="GlobalNavTab GlobalNavTab--home active " href="/"><span class='GlobalNavTab-icon'></span>
<span class='GlobalNavTab-text'>Home</span>
</a><a class="GlobalNavTab GlobalNavTab--explore " href="shop"><span class='GlobalNavTab-icon'></span>
<span class='GlobalNavTab-text'>Shop</span>
</a><a class="GlobalNavTab GlobalNavTab--featured " href="explore"><span class='GlobalNavTab-icon'></span>
<span class='GlobalNavTab-text'>Explore</span>
</a></div>
<div class='GlobalNav-logo'>
<a href='/' id='lockup'>
<div id='logo'></div>
<div class='back-to-top js-back-to-top'></div>
</a>
</div>
<div data-react-class="GlobalNavUserSection" data-react-props="{}"></div>
</div>
</div>
</nav>

@yield('content')

<footer class="footer footer-big">
        <!-- .footer-black is another class for the footer, for the transparent version, we recommend you to change the url of the image with your favourite image.          -->

        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <h5 class="title">Company</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="/" >
                                    Home
                                </a>
                            </li>
                        <!--    <li>
                                <a href="projekt.html">
                                    Projekt
                                </a>
                            </li>
                        -->
                        </ul>
                    </nav>
                </div>
             <div class="col-md-3 col-md-offset-1">
                    <h5 class="title">Libary</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#">
                                   Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-md-3">
                    <h5 class="title"></h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#">

                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>

                 <div class="col-md-3">
                    <h5 class="title">Contact</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="tel:++46703726965" >
                                   <i class="fa fa-phone"></i> <b>Ring oss på +46703726965</b>
                                   Så pratar vi appar och annat spännande
                                   <hr class="hr-small">
                                </a>
                            </li>
                            <li>
                                  <a href="mailto:emil@coptercaps.se?Subject=ahoy" >
                                   <i class="fa fa-envelope"></i>
                                   Maila oss gärna <b> emil@coptercaps.se</b>! Vi ser fram emot att höra från dig
                                </a>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>
            <hr />
            <div class="social-area text-center">
                <h5>Social</h5>
                <a href="#" class="btn btn-social btn-round btn-facebook">
                    <i class="fa fa-facebook"></i>
                </a>
<!--                <a href="#"  class="btn btn-social btn-round btn-twitter">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="#" class="btn btn-social btn-round">
                    <i class="fa fa-medium"></i>
                </a>
                <a href="#" class="btn btn-social btn-round btn-pinterest">
                    <i class="fa fa-pinterest"></i>
                </a>
-->

            </div>
            <div class="copyright">
                &copy; 2016 Tuva Sweden AB
            </div>
        </div>
    </footer>


    <!-- #### JAVASCRIPT FILES ### -->

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


  <script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery-ui.custom.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Plugins -->
	<script src="js/gsdk-checkbox.js"></script>
	<script src="js/gsdk-morphing.js"></script>
	<script src="js/gsdk-radio.js"></script>
	<script src="js/gsdk-bootstrapswitch.js"></script>
	<script src="js/bootstrap-select.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/chartist.min.js"></script>
  <script src="js/jquery.tagsinput.js"></script>
  <script src="js/jquery.flexisel.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

	<!--  Get Shit Done Kit PRO Core javascript 	 -->
	<script src="js/get-shit-done.js"></script>


  <script src='https://rawgit.com/JulianLaval/canvas-particle-network/master/particle-network.min.js'></script>
  <script src="js/hero.js"></script>



  @yield('script')


</body>

</html>
