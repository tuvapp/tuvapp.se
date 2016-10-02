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
<div class='GlobalNav-layout wrapper'>
<div class='GlobalNav-tabs'>
<a class="GlobalNavTab GlobalNavTab--home active " href="/"><span class='GlobalNavTab-icon'></span>
<span class='GlobalNavTab-text'>Home</span>
</a><a class="GlobalNavTab GlobalNavTab--explore " href="shop"><span class='GlobalNavTab-icon'></span>
<span class='GlobalNavTab-text'>Shop</span>
</a>
<a class="GlobalNavTab GlobalNavTab--featured " href="explore"><span class='GlobalNavTab-icon'></span>
<span class='GlobalNavTab-text'>Explore</span>
</a>
</div>
<div class='GlobalNav-logo'>
<a href='/' id='lockup'>
<div id='logo'></div>
<div class='back-to-top js-back-to-top'></div>
</a>
</div>
<div data-react-class="GlobalNavUserSection" data-react-props="{}"><div class="GlobalNav-userSection"></div><a href=""><span class='GlobalNavTab-text'><u>Start a local community</u></span></a></div></div>
</div>
</div>
</nav>

@yield('content')

<footer class="footer footer-big footer-default">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                     <div class="form-group">
                        <select name="huge" class="selectpicker" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                          <option value="en" selected="">English</option>
                        </select>
                    </div>
              <!--      <div class="form-group">
                        <select name="huge" class="selectpicker" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                          <option value="ARS">ARS</option>
                          <option value="AUD">AUD</option>
                          <option value="BRL">BRL</option>
                          <option value="CAD">CAD</option>
                          <option value="CHF">CHF</option>
                          <option value="CNY">CNY</option>
                          <option value="CZK">CZK</option>
                          <option value="DKK">DKK</option>
                          <option value="EUR">EUR</option>
                          <option value="GBP">GBP</option>
                          <option value="HKD">HKD</option>
                          <option value="HUF">HUF</option>
                          <option value="IDR">IDR</option>
                          <option value="ILS">ILS</option>
                          <option value="INR">INR</option>
                          <option value="JPY">JPY</option>
                          <option value="KRW">KRW</option>
                          <option value="MYR">MYR</option>
                          <option value="MXN">MXN</option>
                          <option value="NOK">NOK</option>
                          <option value="NZD">NZD</option>
                          <option value="PHP">PHP</option>
                          <option value="PLN">PLN</option>
                          <option value="RUB">RUB</option>
                          <option value="SEK">SEK</option>
                          <option value="SGD">SGD</option>
                          <option value="TWD">TWD</option>
                          <option value="USD" selected="">USD</option>
                          <option value="VND">VND</option>
                          <option value="ZAR">ZAR</option>

                        </select>
                    </div>
                  -->

                </div>
                <div class="col-md-2 col-md-offset-1">
                    <h5 class="title"><b>Company</b></h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="/" >
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="shop">
                                   Shop
                                </a>
                            </li>
                            <li>
                                <a href="explore">
                                    Explore
                                </a>
                            </li>
                            <li>
                                <a href="about">
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="about">
                                    Jobs
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Press Kit
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3 col-md-offset-1">
                    <h5 class="title"><b>Help and Support</b></h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#">
                                   Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                   How it works
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Terms & Conditions
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-md-3">
                  <h5 class="title"><b>Handy links</b></h5>
                  <nav>
                      <ul>
                          <li>
                              <a href="app">
                                 Download apps
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                 Developer
                              </a>
                          </li>
                      </ul>
                  </nav>
                </div>

            </div>
            <hr />
             <div class="social-area text-center">
                <h5>Join us on</h5>
                <a href="#" class="btn btn-social btn-round">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="#"  class="btn btn-social btn-round">
                    <i class="fa fa-twitter"></i>
                </a>

            </div>
            <div class="copyright">
                &copy; 2016 Creative Tim, made with love
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
