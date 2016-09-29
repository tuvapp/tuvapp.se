<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Coptercaps - Valiga frågor</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/gsdk.css" rel="stylesheet"/>

    <link href="css/demo.css" rel="stylesheet" />
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Grand+Hotel|Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>


<style>
pre.prettyprint{
    background-color: #eee;
    border: 0px;
    margin-bottom: 0;
    margin-top: 20px;
    padding: 20px;
    text-align: left;
}
.atv, .str{
    color: #05AE0E;
}
.tag, .pln, .kwd{
    color: #3472F7;
}
.atn{
    color: #2C93FF;
}
.pln{
    color: #333;
}
.com{
    color: #999;
}
.space-top{
    margin-top: 50px;
}
.btn-primary .caret{
    border-top-color: #3472F7;
    color: #3472F7;
}
.area-line{
    border: 1px solid #999;
    border-left: 0;
    border-right: 0;
    color: #666;
    display: block;
    margin-top: 20px;
    padding: 8px 0;
    text-align: center;
}
.area-line a{
    color: #666;
}
.container-fluid{
    padding-right: 15px;
    padding-left: 15px;
}
.table-shopping .td-name{
	min-width: 130px;
}
</style>
<body>

<nav class="navbar navbar-default navbar-transparent navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button id="menu-toggle" type="button" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar bar1"></span>
        <span class="icon-bar bar2"></span>
        <span class="icon-bar bar3"></span>
      </button>
      <a href="http://www.creative-tim.com">
           <div class="logo-container">
                <div class="logo">
                    <img src="img/new_logo.png" alt="Creative Tim Logo">
                </div>
                <div class="brand">
                    Creative Tim
                </div>
            </div>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" data-nav-image="img/thumb.jpg">
      <ul  class="nav navbar-nav navbar-right">
            <li>
                <a target="_blank" href="mailto:emil@coptercaps.se?Subject=Hello%20again" id="issueButton" class="btn btn-simple btn-neutral">Kontakta oss?</a>
            </li>
       </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="wrapper">
    <div class="parallax">
        <div class="parallax-image">
            <img src="img/header.jpg">
        </div>
        <div class="motto">
            <div>Coptercaps Bilblotek</div>
        </div>
        <h3 class="text-white">Components Description</h3>
    </div>

    <div class="main">
        <div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="fixed-section">
                    <ul>
												<li><a href="#buttons-row">Buttons</a></li>
                        <li><a href="#buttons-row">Buttons</a></li>
                        <li><a href="#checkbox-row">Checkbox/Radio/Switch</a></li>
                        <li><a href="#dropdown-row">Dropdown</a></li>
                        <li><a href="#inputs-row">Inputs</a></li>
                        <li><a href="#select-row">Customizable Select</a></li>
                        <li><a href="#tags-row">Tags</a></li>
                        <li><a href="#textarea-row">Textarea</a></li>
                        <li><a href="#navbar-row">Navigation</a></li>
                        <li><a href="#subscription-row">Footers</a></li>
                        <li><a href="#pagination-row">Pagination</a></li>
                        <li><a href="#progressbar-row">Progress Bars</a></li>
                        <li><a href="#sliders-row">Sliders</a></li>
                        <li><a href="#labels-row">Labels</a></li>
                        <li><a href="#description-row">Description Area</a></li>
                        <li><a href="#info-row">Info Area</a></li>
                        <li><a href="#tables-row">Tables</a></li>
                        <li><a href="#comments-row">Comments Area</a></li>
                        <li><a href="#cards-row">Cards</a></li>
                        <li><a href="#datepicker-row">Datepicker</a></li>
                        <li><a href="#modal-row">Modals</a></li>
                        <li><a href="#tooltip-row">Tooltips/Popovers</a></li>
                        <li><a href="#collapsable-row">Collapsable Groups</a></li>
                        <li><a href="#charts-row">Charts</a></li>
                        <li><a href="#notification-row">Notification</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-1">
                <div class="tim-container" style="min-height: 2000px;">

    <!-- buttons row -->
        <div class="tim-row" id="buttons-row">

                <h2>Buttons </h2>
                <legend></legend>
                <h4>Colors</h4>
                    <p>
                    We worked over the original Bootstrap classes, choosing a different, slightly intenser color pallete:
                    </p>
                    <p>
                       <button class="btn btn-default">Default</button>
                       <button class="btn btn-primary">Primary</button>
                       <button class="btn btn-info">Info</button>
                       <button class="btn btn-success">Success</button>
                       <button class="btn btn-warning">Warning</button>
                       <button class="btn btn-danger">Danger</button>
                       <button class="btn btn-neutral">Neutral</button>

                    </p>
                    <br />
                    <div class="area-line">
                    <a data-target="#buttonColor" href="javascript: void(0);" data-toggle="collapse">
                          See Full Implementation
                    </a>
    <div id="buttonColor" class="collapse">
    <pre class="prettyprint">
    &lt;button class=&quot;btn btn-default&quot;&gt;Default&lt;/button&gt;

    &lt;button class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;

    &lt;button class=&quot;btn btn-info&quot;&gt;Info&lt;/button&gt;

    &lt;button class=&quot;btn btn-success&quot;&gt;Success&lt;/button&gt;

    &lt;button class=&quot;btn btn-warning&quot;&gt;Warning&lt;/button&gt;

    &lt;button class=&quot;btn btn-danger&quot;&gt;Danger&lt;/button&gt;

    </pre>
    </div>
                    </div>
                <h4>Sizes</h4>
                    <p class="space-top">
                        Buttons come in all needed sizes:
                    </p>
                    <p>
                        <button class="btn btn-primary btn-lg">Large</button>
                        <button class="btn btn-primary">Normal</button>
                        <button class="btn btn-primary btn-sm">Small</button>
                        <button class="btn btn-primary btn-xs">Extra Small</button>
                    </p>
                    <div class="area-line">
                    <a data-target="#buttonSize" href="javascript: void(0);" data-toggle="collapse">
                          See Full Implementation
                    </a>
    <div id="buttonSize" class="collapse">
    <pre class="prettyprint">
    &lt;button class=&quot;btn btn-primary btn-lg&quot;&gt;Large&lt;/button&gt;

    &lt;button class=&quot;btn btn-primary&quot;&gt;Normal&lt;/button&gt;

    &lt;button class=&quot;btn btn-primary btn-sm&quot;&gt;Small&lt;/button&gt;

    &lt;button class=&quot;btn btn-primary btn-xs&quot;&gt;Extra Small&lt;/button&gt;
    </pre>
    </div>
                    </div>
                <h4>Styles</h4>
                    <p class="space-top">
                        We added extra classes that can help you better customise the look. You can use regular buttons, filled buttons, rounded corners buttons or plain link buttons. Let's see some examples:
                    </p>
                    <p>
                        <button class="btn btn-primary">Default</button>
                        <button class="btn btn-primary btn-fill">Filled</button>
                        <button class="btn btn-primary btn-round">Round</button>
                        <button class="btn btn-primary btn-simple">Simple</button>
                    </p>
                    <div class="area-line">
                    <a data-target="#buttonStyle" href="javascript: void(0);" data-toggle="collapse">
                          See Full Implementation
                    </a>
    <div id="buttonStyle" class="collapse">
    <pre class="prettyprint">
    &lt;button class=&quot;btn btn-primary&quot;&gt;Default&lt;/button&gt;

    &lt;button class=&quot;btn btn-primary btn-fill&quot;&gt;Filled&lt;/button&gt;

    &lt;button class=&quot;btn btn-primary btn-round&quot;&gt;Round&lt;/button&gt;

    &lt;button class=&quot;btn btn-primary btn-simple&quot;&gt;Simple&lt;/button&gt;
    </pre>
    </div>
                    </div>
                    <p class="space-top">
                        Button groups, toolbars, and disabled state all work like they are supposed to.
                    </p>

                <h4>Social Buttons</h4>
                    <p>
                        An extra category of buttons that are necessary for any project is the social buttons. We have added classes that provide the default color for every social network. <br />
                        To use them, you have to add to your button the general class 'btn-social' and the specific network, for example 'btn-twitter'. All styles described above can be applied to social buttons, ranging from filled to round to simple. <br />
                       We used the Font Awesome social icons that you can find <a href="http://fortawesome.github.io/Font-Awesome/icons/">here</a>.
                    <br />
                    Here is the example for all the social buttons with the filled style:
                    </p>
                    <div class="social-buttons">
                        <button class="btn btn-social btn-fill btn-twitter">
                            <i class="fa fa-twitter"></i>
                        </button>
                        <button class="btn btn-social btn-fill btn-facebook">
                            <i class="fa fa-facebook"> </i>
                        </button>
                        <button class="btn btn-social btn-fill btn-google">
                            <i class="fa fa-google-plus"> </i>
                        </button>
                        <button class="btn btn-social btn-fill btn-linkedin">
                            <i class="fa fa-linkedin"></i>
                        </button>
                        <button class="btn btn-social btn-fill btn-pinterest">
                            <i class="fa fa-pinterest"></i>
                        </button>
                        <button class="btn btn-social btn-fill btn-youtube">
                            <i class="fa fa-youtube-play"> </i>
                        </button>
                        <button class="btn btn-social btn-fill btn-tumblr">
                            <i class="fa fa-tumblr"> </i>
                        </button>
                        <button class="btn btn-social btn-fill btn-github">
                            <i class="fa fa-github"></i>
                        </button>
                        <button class="btn btn-social btn-fill btn-behance">
                            <i class="fa fa-behance"></i>
                        </button>
                        <button class="btn btn-social btn-fill btn-dribbble">
                            <i class="fa fa-dribbble"></i>
                        </button>
                        <button class="btn btn-social btn-fill btn-reddit">
                            <i class="fa fa-reddit"></i>
                        </button>
                        <button class="btn btn-social btn-fill btn-stumbleupon">
                            <i class="fa fa-stumbleupon"></i>
                        </button>
                    </div>
                    <div class="area-line">
                    <a data-target="#buttonSocial" href="javascript: void(0);" data-toggle="collapse">
                          See Full Implementation
                    </a>
                    <div id="buttonSocial" class="collapse">
    <pre class="prettyprint">
    &lt;button class=&quot;btn btn-social btn-fill btn-twitter&quot;&gt;

        &lt;i class=&quot;fa fa-twitter&quot;&gt;&lt;/i&gt;

    &lt;/button&gt;

    &lt;button class=&quot;btn btn-social btn-fill btn-facebook&quot;&gt;

        &lt;i class=&quot;fa fa-facebook&quot;&gt; &lt;/i&gt;

    &lt;/button&gt;

    &lt;button class=&quot;btn btn-social btn-fill btn-google&quot;&gt;

        &lt;i class=&quot;fa fa-google-plus&quot;&gt; &lt;/i&gt;

    &lt;/button&gt;

    &lt;button class=&quot;btn btn-social btn-fill btn-linkedin&quot;&gt;

        &lt;i class=&quot;fa fa-linkedin&quot;&gt;&lt;/i&gt;

    &lt;/button&gt;

    &lt;button class=&quot;btn btn-social btn-fill btn-pinterest&quot;&gt;

        &lt;i class=&quot;fa fa-pinterest&quot;&gt;&lt;/i&gt;

    &lt;/button&gt;

    &lt;button class=&quot;btn btn-social btn-fill btn-youtube&quot;&gt;

        &lt;i class=&quot;fa fa-youtube-play&quot;&gt; &lt;/i&gt;

    &lt;/button&gt;

    &lt;button class=&quot;btn btn-social btn-fill btn-tumblr&quot;&gt;

        &lt;i class=&quot;fa fa-tumblr&quot;&gt; &lt;/i&gt;

    &lt;/button&gt;

    &lt;button class=&quot;btn btn-social btn-fill btn-github&quot;&gt;

        &lt;i class=&quot;fa fa-github&quot;&gt;&lt;/i&gt;

    &lt;/button&gt;

    &lt;button class=&quot;btn btn-social btn-fill btn-behance&quot;&gt;

        &lt;i class=&quot;fa fa-behance&quot;&gt;&lt;/i&gt;

    &lt;/button&gt;

    &lt;button class=&quot;btn btn-social btn-fill btn-dribbble&quot;&gt;

        &lt;i class=&quot;fa fa-dribbble&quot;&gt;&lt;/i&gt;

    &lt;/button&gt;

    &lt;button class=&quot;btn btn-social btn-fill btn-reddit&quot;&gt;

        &lt;i class=&quot;fa fa-reddit&quot;&gt;&lt;/i&gt;

    &lt;/button&gt;

    &lt;button class=&quot;btn btn-social btn-fill btn-stumbleupon&quot;&gt;

        &lt;i class=&quot;fa fa-stumbleupon&quot;&gt;&lt;/i&gt;

    &lt;/button&gt;
    </pre>
                    </div>
                    </div>
                <h4>Morphing Buttons</h4>
                    <p>If you want a special effect for the buttons in your forms, we have created a special class of buttons called morphing buttons. <br />
                    The buttons have 2 states: loading and result. The loading state starts after the click action: the buttons transforms itself into a loading circle (presumably while the call to the server is being made). The button remains in the loading state until the second state is invoked. To call the result state, you should call "morphingButton()" by Javascript with the following parameters: icon (which will be displayed in the result) and state (that can take the values: {info | success | warning | error}). <br />
                    You can set the color for the loading circle with the following classes “data-rotation-color=”{ azure | green | orange | red}”.
                    </p>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                        <button class="btn btn-round btn-info btn-lg" id="successBtn" data-toggle="morphing" data-rotation-color="azure">Submit Success</button>
                        </div>
                    </div>
                    <div class="area-line">
                    <a data-target="#buttonMorphing" href="javascript: void(0);" data-toggle="collapse">
                          See Full Implementation
                    </a>
    <div id="buttonMorphing" class="collapse">
    <pre class="prettyprint">
    &lt;!-- HMTL --&gt;

    &lt;button class=&quot;btn btn-round btn-info btn-lg&quot; data-toggle=&quot;morphing&quot; data-rotation-color=&quot;azure&quot;&gt;Success Submit&lt;/button&gt;



    &lt;!-- OR --&gt;

    &lt;button class=&quot;btn btn-round btn-info btn-lg&quot; id=&quot;idButton&quot; data-rotation-color=&quot;azure&quot;&gt;Success Submit&lt;/button&gt;

    $(&apos;#idButton&apos;).morphingButton();



    $(&apos;#successBtn&apos;).morphingButton({

            action: &apos;setState&apos;,

            icon: &apos;fa-check&apos;,

            state: &apos;success&apos;

        });
    </pre>
    </div>
                    </div>
        </div>
    <!--     end row -->

    <!-- checkbox row -->
        <div class="tim-row" id="checkbox-row">
                <h2> Checkboxes </h2>
                <legend></legend>
                <p>
                    To use the custom checkboxes, you need to import a separate Javascript file called 'checkbox.js'.
                </p>
                <p>
                      <label class="checkbox" for="checkbox1">
                        <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
                        Unchecked
                      </label>
                      <label class="checkbox" for="checkbox2">
                        <input type="checkbox" value="" id="checkbox2" data-toggle="checkbox" checked>
                        Checked
                      </label>
                      <label class="checkbox" for="checkbox3">
                        <input type="checkbox" value="" id="checkbox3" data-toggle="checkbox" disabled>
                        Disabled unchecked
                      </label>
                      <label class="checkbox" for="checkbox4">
                        <input type="checkbox" value="" id="checkbox4" data-toggle="checkbox" disabled checked>
                        Disabled checked
                      </label>
                </p>
                <p>Usage can be done via Data Attributes:
                <a data-target="#checkboxDataAttribute" href="javascript: void(0);" data-toggle="collapse">
                          See example.
                </a>
                </p>
    <div id="checkboxDataAttribute" class="collapse">
    <pre class="prettyprint">
    &lt;label class=&quot;checkbox&quot; for=&quot;checkbox1&quot;&gt;

        &lt;input type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;checkbox1&quot; data-toggle=&quot;checkbox&quot;&gt;

        Unchecked

    &lt;/label&gt;

    &lt;label class=&quot;checkbox&quot; for=&quot;checkbox2&quot;&gt;

        &lt;input type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;checkbox2&quot; data-toggle=&quot;checkbox&quot; checked&gt;

        Checked

    &lt;/label&gt;

    &lt;label class=&quot;checkbox&quot; for=&quot;checkbox3&quot;&gt;

        &lt;input type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;checkbox3&quot; data-toggle=&quot;checkbox&quot; disabled&gt;

        Disabled unchecked

    &lt;/label&gt;

    &lt;label class=&quot;checkbox&quot; for=&quot;checkbox4&quot;&gt;

        &lt;input type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;checkbox4&quot; data-toggle=&quot;checkbox&quot; disabled checked&gt;

        Disabled checked

    &lt;/label&gt;

    </pre>
    </div>
                <p>Or can be called via Javascript:
                <a data-target="#checkboxJavascript" href="javascript: void(0);" data-toggle="collapse">
                          See example.
                </a>
                </p>
    <div id="checkboxJavascript" class="collapse">
    <pre class="prettyprint">
    $(':checkbox').checkbox();
    </pre>
    </div>
                <p>
                    We added more classes to provide you with choices
                </p>

                         <label class="checkbox checkbox-blue" for="checkbox1">
                            <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox" checked>
                            Blue
                         </label>
                         <label class="checkbox checkbox-azure" for="checkbox2">
                            <input type="checkbox" value="" id="checkbox2" data-toggle="checkbox" checked>
                            Azure
                         </label>
                         <label class="checkbox checkbox-green" for="checkbox3">
                            <input type="checkbox" value="" id="checkbox3" data-toggle="checkbox" checked>
                            Green
                         </label>
                         <label class="checkbox checkbox-orange" for="checkbox4">
                            <input type="checkbox" value="" id="checkbox4" data-toggle="checkbox" checked>
                            Orange
                         </label>
                         <label class="checkbox checkbox-red" for="checkbox5">
                            <input type="checkbox" value="" id="checkbox5" data-toggle="checkbox" checked>
                            Red
                         </label>
                         <div class="area-line">
                         <a data-target="#checkboxColor" href="javascript: void(0);" data-toggle="collapse">
                          See Full Implementation
                         </a>
    <div id="checkboxColor" class="collapse">
    <pre class="prettyprint">
    &lt;label class=&quot;checkbox checkbox-blue&quot; for=&quot;checkbox1&quot;&gt;

        &lt;input type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;checkbox1&quot; data-toggle=&quot;checkbox&quot; checked&gt;

        Blue

    &lt;/label&gt;

    &lt;label class=&quot;checkbox checkbox-azure&quot; for=&quot;checkbox2&quot;&gt;

        &lt;input type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;checkbox2&quot; data-toggle=&quot;checkbox&quot; checked&gt;

        Azure

    &lt;/label&gt;

    &lt;label class=&quot;checkbox checkbox-green&quot; for=&quot;checkbox3&quot;&gt;

        &lt;input type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;checkbox3&quot; data-toggle=&quot;checkbox&quot; checked&gt;

        Green

    &lt;/label&gt;

    &lt;label class=&quot;checkbox checkbox-orange&quot; for=&quot;checkbox4&quot;&gt;

        &lt;input type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;checkbox4&quot; data-toggle=&quot;checkbox&quot; checked&gt;

        Orange

    &lt;/label&gt;

    &lt;label class=&quot;checkbox checkbox-red&quot; for=&quot;checkbox5&quot;&gt;

        &lt;input type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;checkbox5&quot; data-toggle=&quot;checkbox&quot; checked&gt;

        Red

    &lt;/label&gt;
    </pre>
    </div>
                         </div>
                <p>
                    <h4>Methods</h4>
                    <ul class="list-unstyled">
                        <li>
                            <b>.checkbox('toggle')</b>
                            is used to toggle the states between checked and unchecked.
                        </li>
                        <li>
                            <b>.checkbox('check') </b>
                            sets the checkbox state to checked.
                        </li>
                        <li>
                            <b>.checkbox('uncheck') </b>
                            sets the state to unchecked.
                        </li>
                    </ul>
                    <div class="area-line">
                    <a data-target="#checkboxMethod" href="javascript: void(0);" data-toggle="collapse">
                          See coded example
                    </a>
    <div id="checkboxMethod" class="collapse">
    <pre class="prettyprint">
    $(':checkbox').checkbox('check');
    </pre>
    </div>
                    </div>
                    <h4>Events</h4>
                    <ul class="list-unstyled">
                        <li>
                            <b>.on('toggle') </b>
                            gets activated when the checkbox state changes between checked and unchecked.
                        </li>
                        <li>
                            <b>.on('change') </b>
                            the same as toggle.
                        </li>
                    </ul>
                </p>
                <div class="area-line">
                <a data-target="#checkboxEvent" href="javascript: void(0);" data-toggle="collapse">
                      See coded example
                </a>
    <div id="checkboxEvent" class="collapse">
    <pre class="prettyprint">
    $(':checkbox').on('toggle', function() {
      // Do something
    });
    </pre>
    </div>
                </div>

        </div>
    <!-- end row -->

    <!-- radio row -->
        <div class="tim-row" id="radio-row">
            <h2> Radio Buttons </h2>
            <legend></legend>
                <p>
                    To use the custom radio buttons, you need to import a separate Javascript file called 'radio.js'.
                </p>
                <p>
                   <label class="radio">
                    <input type="radio" name="optionsRadios" data-toggle="radio" id="optionsRadios1" value="option1">
                    <i></i>Radio is off
                  </label>
                  <label class="radio">
                    <input type="radio" name="optionsRadios" data-toggle="radio" id="optionsRadios2" value="option1" checked>
                    <i></i>Radio is on
                  </label>

                  <label class="radio">
                    <input type="radio" name="optionsRadiosDisabled" data-toggle="radio" id="optionsRadios3" value="option2" disabled>
                    <i></i>Disabled radio is off
                  </label>
                  <label class="radio">
                    <input type="radio" name="optionsRadiosDisabled" data-toggle="radio" id="optionsRadios4" value="option2" checked disabled>
                    <i></i>Disabled radio is on
                  </label>
                </p>
                <p>Usage can be done via Data Attributes: <a data-target="#radioDataAttribute" href="javascript: void(0);" data-toggle="collapse">See example.</a></p>
    <div id="radioDataAttribute" class="collapse">
    <pre class="prettyprint">
    &lt;label class=&quot;radio&quot;&gt;

        &lt;input type=&quot;radio&quot; name=&quot;optionsRadios&quot; data-toggle=&quot;radio&quot; id=&quot;optionsRadios1&quot; value=&quot;option1&quot;&gt;

        &lt;i&gt;&lt;/i&gt;Radio is off

    &lt;/label&gt;

    &lt;label class=&quot;radio&quot;&gt;

        &lt;input type=&quot;radio&quot; name=&quot;optionsRadios&quot; data-toggle=&quot;radio&quot; id=&quot;optionsRadios2&quot; value=&quot;option1&quot; checked&gt;

        &lt;i&gt;&lt;/i&gt;Radio is on

    &lt;/label&gt;

    &lt;label class=&quot;radio&quot;&gt;

        &lt;input type=&quot;radio&quot; name=&quot;optionsRadiosDisabled&quot; data-toggle=&quot;radio&quot; id=&quot;optionsRadios3&quot; value=&quot;option2&quot; disabled&gt;

        &lt;i&gt;&lt;/i&gt;Disabled radio is off

    &lt;/label&gt;

    &lt;label class=&quot;radio&quot;&gt;

        &lt;input type=&quot;radio&quot; name=&quot;optionsRadiosDisabled&quot; data-toggle=&quot;radio&quot; id=&quot;optionsRadios4&quot; value=&quot;option2&quot; checked disabled&gt;

        &lt;i&gt;&lt;/i&gt;Disabled radio is on

    &lt;/label&gt;
    </pre>
    </div>
                <p>Or can be called via Javascript: <a data-target="#radioJavascript" href="javascript: void(0);" data-toggle="collapse">See example.</a> </p>
    <div id="radioJavascript" class="collapse">
    <pre class="prettyprint">
    $(':radio').radio();
    </pre>
    </div>
                <p>
                    You can choose between different colors:
                </p>
                          <label class="radio radio-blue">
                            <input type="radio" name="optionsRadios1" data-toggle="radio" id="optionsRadios1" value="option1" checked>
                            <i></i>Blue
                          </label>
                          <label class="radio radio-azure">
                            <input type="radio" name="optionsRadios2" data-toggle="radio" id="optionsRadios2" value="option1" checked>
                            <i></i>Azure
                          </label>
                          <label class="radio radio-green">
                            <input type="radio" name="optionsRadios3" data-toggle="radio" id="optionsRadios3" value="option1" checked>
                            <i></i>Green
                          </label>
                          <label class="radio radio-orange">
                            <input type="radio" name="optionsRadios4" data-toggle="radio" id="optionsRadios4" value="option1" checked>
                            <i></i>Orange
                          </label>
                          <label class="radio radio-red">
                            <input type="radio" name="optionsRadios5" data-toggle="radio" id="optionsRadios5" value="option1" checked>
                            <i></i>Red
                          </label>
                          <div class="area-line">
                          <a data-target="#radioColor" href="javascript: void(0);" data-toggle="collapse">
                            See Full Implementation
                          </a>
    <div id="radioColor" class="collapse">
    <pre class="prettyprint">
    &lt;label class=&quot;radio radio-blue&quot;&gt;

        &lt;input type=&quot;radio&quot; name=&quot;optionsRadios1&quot; data-toggle=&quot;radio&quot; id=&quot;optionsRadios1&quot; value=&quot;option1&quot; checked&gt;

        &lt;i&gt;&lt;/i&gt;Blue

    &lt;/label&gt;

    &lt;label class=&quot;radio radio-azure&quot;&gt;

        &lt;input type=&quot;radio&quot; name=&quot;optionsRadios2&quot; data-toggle=&quot;radio&quot; id=&quot;optionsRadios2&quot; value=&quot;option1&quot; checked&gt;

        &lt;i&gt;&lt;/i&gt;Azure

    &lt;/label&gt;

    &lt;label class=&quot;radio radio-green&quot;&gt;

        &lt;input type=&quot;radio&quot; name=&quot;optionsRadios3&quot; data-toggle=&quot;radio&quot; id=&quot;optionsRadios3&quot; value=&quot;option1&quot; checked&gt;

        &lt;i&gt;&lt;/i&gt;Green

    &lt;/label&gt;

    &lt;label class=&quot;radio radio-orange&quot;&gt;

        &lt;input type=&quot;radio&quot; name=&quot;optionsRadios4&quot; data-toggle=&quot;radio&quot; id=&quot;optionsRadios4&quot; value=&quot;option1&quot; checked&gt;

        &lt;i&gt;&lt;/i&gt;Orange

    &lt;/label&gt;

    &lt;label class=&quot;radio radio-red&quot;&gt;

        &lt;input type=&quot;radio&quot; name=&quot;optionsRadios5&quot; data-toggle=&quot;radio&quot; id=&quot;optionsRadios5&quot; value=&quot;option1&quot; checked&gt;

        &lt;i&gt;&lt;/i&gt;Red

    &lt;/label&gt;
    </pre>
    </div>
                          </div>

                <p>
                    <h4>Methods</h4>
                    <ul class="list-unstyled">

                        <li>
                            <b>.radio('check') </b>
                            sets the checkbox state to checked.
                        </li>
                        <li>
                            <b>.radio('uncheck') </b>
                            sets the state to unchecked.
                        </li>
                    </ul>
                    <div class="area-line">
                    <a data-target="#radioMethod" href="javascript: void(0);" data-toggle="collapse">
                            See coded example
                    </a>
    <div id="radioMethod" class="collapse">
    <pre class="prettyprint">
    $(':radio').radio('check');
    </pre>
    </div>
                    </div>
                    <h4>Events</h4>
                    <ul class="list-unstyled">
                        <li>
                            <b>.on('toggle') </b>
                            gets activated when the checkbox state changes between checked and unchecked.
                        </li>
                        <li>
                            <b>.on('change') </b>
                            the behaviour as the toggle, with the difference that the event is fired for each radio button that gets a state change.
                        </li>
                    </ul>
                </p>
                <div class="area-line">
                <a data-target="#radioEvent" href="javascript: void(0);" data-toggle="collapse">
                            See coded example
                </a>
    <div id="radioEvent" class="collapse">
    <pre class="prettyprint">
    $(':radio').on('toggle', function() {
      // Do something
    });
    </pre>
    </div>
                </div>
    </div>
    <!-- end row -->

    <!-- switches row -->
        <div class="tim-row" id="switch-row">
            <h2> Switches</h2>
            <legend></legend>
            <p>
            If you want to use something more special than a checkbox, we recomment the switch. You can use it with both text and with icons. For extra customisation we added color classes.
            <br />
            For the original documentation, please go here: <a href="www.larentis.eu/switch">Larentis Switch</a>.
            </p>

            <input type="checkbox" checked data-toggle="switch" class="ct-green"/>
            <input type="checkbox" data-toggle="switch" />

             <div class="switch"
              data-on-label="<i class='fa fa-check'></i>"
              data-off-label="<i class='fa fa-times'></i>">
              <input type="checkbox" checked/>
            </div>
            <div class="switch"
              data-on-label="<i class='fa fa-check'></i>"
              data-off-label="<i class='fa fa-times'></i>">
              <input type="checkbox"/>
            </div>

            <input type="checkbox" checked data-toggle="switch" class="ct-blue"/>
            <input type="checkbox" checked data-toggle="switch" class="ct-orange"/>
            <input type="checkbox" checked data-toggle="switch" class="ct-red"/>
            <br />
            <div class="area-line">
            <a data-target="#switchColor" href="javascript: void(0);" data-toggle="collapse">
                            See Full Implementation
            </a>
    <div id="switchColor" class="collapse">
    <pre class="prettyprint">
    &lt;input type=&quot;checkbox&quot; checked data-toggle=&quot;switch&quot; class=&quot;ct-green&quot;/&gt;

    &lt;input type=&quot;checkbox&quot; data-toggle=&quot;switch&quot; /&gt;


    &lt;div class=&quot;switch&quot;

      data-on-label=&quot;&lt;i class=&apos;fa fa-check&apos;&gt;&lt;/i&gt;&quot;

      data-off-label=&quot;&lt;i class=&apos;fa fa-times&apos;&gt;&lt;/i&gt;&quot;&gt;

      &lt;input type=&quot;checkbox&quot; checked/&gt;

    &lt;/div&gt;

    &lt;div class=&quot;switch&quot;

      data-on-label=&quot;&lt;i class=&apos;fa fa-check&apos;&gt;&lt;/i&gt;&quot;

      data-off-label=&quot;&lt;i class=&apos;fa fa-times&apos;&gt;&lt;/i&gt;&quot;&gt;

      &lt;input type=&quot;checkbox&quot;/&gt;

    &lt;/div&gt;
    </pre>
    </div>
            </div>

    </div>
    <!-- end row -->

    <!-- dropdown row -->
    <div class="tim-row" id="dropdown-row">
            <h2> Dropdown </h2>
            <legend></legend>
            <p>
            We are very proud to present the dropdown, we added a subtle animation for this classic widget. We also thought of another 2 popular use-cases: dropdown with flags ( requires no additional class) and dropdown with icons (requires the “dropdown-with-icons” class). <br />
            You can use both sets of icons: Stroke and Font Awesome; for this particular case, we suggest using the thin-line Stroke ones. <br />
            Here are some examples and the code:
            </p>

            <div class="row">
                <div class="col-md-3 dropdown">
                  <a href="#" class="btn btn-simple dropdown-toggle" data-toggle="dropdown">
                      Regular
                      <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </div>
                 <div class="col-md-3 dropdown">
                      <a href="#" class="btn btn-simple dropdown-toggle " data-toggle="dropdown">
                        <img src="img/flags/US.png"/>
                         Flags
                         <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="#"><img src="img/flags/DE.png"/> Deutsch</a></li>
                        <li><a href="#"><img src="img/flags/GB.png"/> English(UK)</a></li>
                        <li><a href="#"><img src="img/flags/FR.png"/> Français</a></li>
                        <li><a href="#"><img src="img/flags/RO.png"/> Română</a></li>
                        <li><a href="#"><img src="img/flags/IT.png"/> Italiano</a></li>

                        <li class="divider"></li>
                        <li><a href="#"><img src="img/flags/ES.png"/> Español <span class="label label-default">soon</span></a></li>
                        <li><a href="#"><img src="img/flags/BR.png"/> Português <span class="label label-default">soon</span></a></li>
                        <li><a href="#"><img src="img/flags/JP.png"/> 日本語 <span class="label label-default">soon</span></a></li>
                      </ul>
                </div>
                <div class="col-md-3 dropdown">
                      <a href="#" class="btn btn-simple dropdown-toggle" data-toggle="dropdown">
                        With Icons
                        <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu dropdown-with-icons">
                        <li>
                            <a href="#">
                                <i class="pe-7s-user"></i> Account
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="pe-7s-mail"></i> Messages
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="pe-7s-portfolio"></i> Business Area
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="pe-7s-light"></i> Smart Area
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="pe-7s-tools"></i> Settings
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-danger">
                                <i class="pe-7s-close-circle"></i>
                                Log out
                            </a>
                        </li>
                      </ul>
                </div>
              </div>


            <div class="area-line">
            <a data-target="#dropdown" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
    <div id="dropdown" class="collapse">
    <pre class="prettyprint">
    &lt;div class=&quot;dropdown&quot;&gt;

      &lt;button class=&quot;btn dropdown-toggle&quot; type=&quot;button&quot; id=&quot;dropdownMenu1&quot; data-toggle=&quot;dropdown&quot;&gt;

        Dropdown

        &lt;span class=&quot;caret&quot;&gt;&lt;/span&gt;

      &lt;/button&gt;

      &lt;ul class=&quot;dropdown-menu&quot; role=&quot;menu&quot; aria-labelledby=&quot;dropdownMenu1&quot;&gt;

        &lt;li role=&quot;presentation&quot;&gt;&lt;a role=&quot;menuitem&quot; tabindex=&quot;-1&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;

        &lt;li role=&quot;presentation&quot;&gt;&lt;a role=&quot;menuitem&quot; tabindex=&quot;-1&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;

        &lt;li role=&quot;presentation&quot;&gt;&lt;a role=&quot;menuitem&quot; tabindex=&quot;-1&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;

        &lt;li role=&quot;presentation&quot; class=&quot;divider&quot;&gt;&lt;/li&gt;

        &lt;li role=&quot;presentation&quot;&gt;&lt;a role=&quot;menuitem&quot; tabindex=&quot;-1&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;

      &lt;/ul&gt;

    &lt;/div&gt;
    </pre>
    </div>
            </div>

    </div>
    <!-- end row -->

    <!-- inputs row -->
        <div class="tim-row" id="inputs-row">
                <h2>Inputs </h2>
                <legend></legend>

                <p>
                We restyled the Bootstrap input to give it a more flat, minimal look. You can use the classic look, different colors and states or input groups.
                </p>
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    	<input type="text" value="" placeholder="Input" class="form-control" />
                	</div>
            	</div>
            	<div class="col-md-6">
            	    <div class="form-group has-success">
                        <input type="text" value="Success" class="form-control" />
                    </div>
            	</div>
        	</div>
                <div class="row">
                <div class="col-md-6">
                      <div class="form-group has-error has-feedback">
                        <input type="text" value="Error" class="form-control" />
                        <span class="fa fa-remove form-control-feedback"></span>
                      </div>
            	</div>
            	<div class="col-md-6">
                    	<div class="input-group">
                          <input type="text" value="Group Addon" class="form-control">
                          <span class="input-group-addon"><i class="fa fa-group"></i></span>
                        </div>
            	</div>
        	</div>
                <div class="area-line">
                <a data-target="#inputs" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
        <div id="inputs" class="collapse">
    <pre class="prettyprint">
    &lt;div class=&quot;form-group&quot;&gt;
        &lt;input type=&quot;text&quot; value=&quot;&quot; placeholder=&quot;Input&quot; class=&quot;form-control&quot; /&gt;
    &lt;/div&gt;


    &lt;div class=&quot;form-group has-success&quot;&gt;
        &lt;input type=&quot;text&quot; value=&quot;Success&quot; class=&quot;form-control&quot; /&gt;
    &lt;/div&gt;


    &lt;div class=&quot;form-group has-error has-feedback&quot;&gt;
        &lt;input type=&quot;text&quot; value=&quot;Error&quot; class=&quot;form-control&quot; /&gt;
        &lt;span class=&quot;fa fa-remove form-control-feedback&quot;&gt;&lt;/span&gt;
    &lt;/div&gt;


    &lt;div class=&quot;input-group&quot;&gt;
        &lt;input type=&quot;text&quot; value=&quot;Group Addon&quot; class=&quot;form-control&quot;&gt;
        &lt;span class=&quot;input-group-addon&quot;&gt;&lt;i class=&quot;fa fa-group&quot;&gt;&lt;/i&gt;&lt;/span&gt;
    &lt;/div&gt;
    </pre>
    </div>
                </div>
        </div>
    <!-- end row -->

    <!-- select row -->
    <div class="tim-row" id="select-row">
        <h2>Customizable Select</h2>
        <legend></legend>
        <p>
            There are 2 ways to use them: as normal select, in which case you need to specify the style as "form-control", or as button, for which you have to specify the style as "btn-{type}". You can also set the "multiple" attribute if you wan to have multiple selects. Please check the <a href="https://silviomoreto.github.io/bootstrap-select/examples/" target="_blank">original documentation.</a>
        </p>
        <div class="row">
           <div class="col-sm-6">
             <div class="form-group">
                    <select name="huge" class="selectpicker" data-style="form-control">
                        <option disabled selected> Choose city</option>
                        <option value="1">Paris </option>
                        <option value="1">Bucharest</option>
                        <option value="1">Rome</option>
                        <option value="1">New York</option>
                        <option value="1">Miami </option>
                        <option value="1">Piatra Neamt</option>
                        <option value="1">Paris </option>
                        <option value="1">Bucharest</option>
                        <option value="1">Rome</option>
                        <option value="1">New York</option>
                        <option value="1">Miami </option>
                        <option value="1">Piatra Neamt</option>
                        <option value="1">Paris </option>
                        <option value="1">Bucharest</option>
                        <option value="1">Rome</option>
                        <option value="1">New York</option>
                        <option value="1">Miami </option>
                        <option value="1">Piatra Neamt</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
             <div class="form-group">
                    <select name="huge" class="selectpicker" data-style="btn-info btn-fill btn-block">
                        <option disabled selected> Choose city</option>
                        <option value="1">Paris </option>
                        <option value="1">Bucharest</option>
                        <option value="1">Rome</option>
                        <option value="1">New York</option>
                        <option value="1">Miami </option>
                        <option value="1">Piatra Neamt</option>
                        <option value="1">Paris </option>
                        <option value="1">Bucharest</option>
                        <option value="1">Rome</option>
                        <option value="1">New York</option>
                        <option value="1">Miami </option>
                        <option value="1">Piatra Neamt</option>
                        <option value="1">Paris </option>
                        <option value="1">Bucharest</option>
                        <option value="1">Rome</option>
                        <option value="1">New York</option>
                        <option value="1">Miami </option>
                        <option value="1">Piatra Neamt</option>
                    </select>
                </div>
            </div>
          </div> <!-- row interior -->
        <div class="area-line">
         <a data-target="#customizableSelect" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
    <div id="customizableSelect" class="collapse">
    <pre class="prettyprint">
    &lt;select name=&quot;huge&quot; class=&quot;selectpicker&quot; data-style=&quot;form-control&quot;&gt;
        &lt;option disabled selected&gt; Choose city&lt;/option&gt;
        &lt;option value=&quot;1&quot;&gt;Paris &lt;/option&gt;
        &lt;option value=&quot;1&quot;&gt;Bucharest&lt;/option&gt;
    &lt;/select&gt;


    &lt;select name=&quot;huge&quot; class=&quot;selectpicker&quot; data-style=&quot;btn-info btn-fill btn-block&quot;&gt;
        &lt;option disabled selected&gt; Choose city&lt;/option&gt;
        &lt;option value=&quot;1&quot;&gt;Paris &lt;/option&gt;
        &lt;option value=&quot;1&quot;&gt;Bucharest&lt;/option&gt;
    &lt;/select&gt;

    </pre>
    </div>
        </div>
    </div>
    <!-- end row -->

    <!-- tags row    -->
    <div class="tim-row" id="tags-row">
        <h2>Tags</h2>
        <legend></legend>
        <p>
        If you want to use tags, we now offer you 3 possibilities: simple tags, colored tags that you can use by adding the necessary color class and filled tags, resulted by using the "tag-fill" class. You can also add an external URL for autocomplete feature, or you can just add a couple of words inside javascript. More details about tags here: <a href="http://xoxco.com/projects/code/tagsinput/">jQuery Tags Input</a>
        </p>
        <input name="tagsinput" class="tagsinput tag-azure" value="Minimal, Light, New, Friends" />
        <div class="area-line">
            <a data-target="#tags" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
		    <div id="tags" class="collapse">
		    <pre class="prettyprint">
	&lt;!-- Markup Regular Tags --&gt;
	&lt;input name=&quot;tagsinput&quot; class=&quot;tagsinput tag-{blue} tag-fill&quot; value=&quot;Minimal, Nice, Good&quot;/&gt;

	&lt;!-- Markup Autocomplete Tags --&gt;
	&lt;input name=&quot;tagsinputautocomplete&quot; class=&quot;tagsinput-autocomplete tag-{blue} tag-fill&quot; value=&quot;Ale&quot;/&gt;

	&lt;!-- Javascript --&gt;
	$(&quot;.tagsinput-autocomplete&quot;).tagsInput({
        	autocomplete_url: [{&quot;value&quot;:&quot;Alien&quot;,&quot;id&quot;:1},{&quot;value&quot;:&quot;Alex&quot;,&quot;id&quot;:2},{&quot;value&quot;:&quot;Alexander&quot;,&quot;id&quot;:3},{&quot;value&quot;:&quot;Alejandro&quot;,&quot;id&quot;:4}]
        	//autocomplete_url:&#39;test/fake_plaintext_endpoint.html&#39; //jquery.autocomplete
	});
		    </pre>
		    </div>
		        </div>
		    </div>
    <!-- end row -->

    <!-- textarea row -->
    <div class="tim-row" id="textarea-row">
        <h2>Textarea</h2>
        <legend></legend>
        <p>We added custom style for the textarea, so it looks similar to all other inputs.</p>

        <textarea class="form-control" placeholder="Here can be your nice text" rows="3"></textarea>

        <div class="area-line">
            <a data-target="#textarea" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
    <div id="textarea" class="collapse">
    <pre class="prettyprint">
    &lt;textarea class=&quot;form-control&quot; placeholder=&quot;Here can be your nice text&quot; rows=&quot;3&quot;&gt;&lt;/textarea&gt;
    </pre>
    </div>
        </div>
    </div>
    <!-- end row -->

    <!-- navbar row -->
    <div class="tim-row" id="navbar-row">
            <h2>Navbar </h2>
            <legend></legend>
            <p>
                We restyled the classic Bootstrap Navbar:
            </p>

            <div id="navbar">
                <nav class="navbar navbar-default" role="navigation">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">Brand</a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        <li><a href="#">Work in progress...</a></li>
                        <li class="active"><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
            </div><!--  end navbar -->

            <div class="area-line">
            <a data-target="#navbarCode" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
    <div id="navbarCode" class="collapse">
    <pre class="prettyprint">
    &lt;div id=&quot;navbar&quot;&gt;

        &lt;nav class=&quot;navbar navbar-default&quot; role=&quot;navigation&quot;&gt;

          &lt;div class=&quot;container-fluid&quot;&gt;

            &lt;div class=&quot;navbar-header&quot;&gt;

              &lt;button type=&quot;button&quot; class=&quot;navbar-toggle&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#bs-example-navbar-collapse-1&quot;&gt;

                &lt;span class=&quot;sr-only&quot;&gt;Toggle navigation&lt;/span&gt;

                &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;

                &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;

                &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;

              &lt;/button&gt;

              &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;Brand&lt;/a&gt;

            &lt;/div&gt;


            &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;bs-example-navbar-collapse-1&quot;&gt;

              &lt;ul class=&quot;nav navbar-nav&quot;&gt;

                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Work in progress...&lt;/a&gt;&lt;/li&gt;

                &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;Link&lt;/a&gt;&lt;/li&gt;

                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Link&lt;/a&gt;&lt;/li&gt;

                &lt;li class=&quot;dropdown&quot;&gt;

                  &lt;a href=&quot;#&quot; class=&quot;dropdown-toggle&quot; data-toggle=&quot;dropdown&quot;&gt;Dropdown &lt;b class=&quot;caret&quot;&gt;&lt;/b&gt;&lt;/a&gt;

                  &lt;ul class=&quot;dropdown-menu&quot;&gt;

                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;

                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;

                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;

                    &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;

                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;

                    &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;

                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;One more separated link&lt;/a&gt;&lt;/li&gt;

                  &lt;/ul&gt;

                &lt;/li&gt;

              &lt;/ul&gt;

            &lt;/div&gt;&lt;!-- /.navbar-collapse --&gt;

          &lt;/div&gt;&lt;!-- /.container-fluid --&gt;

        &lt;/nav&gt;

    &lt;/div&gt;&lt;!--  end navbar --&gt;
    </pre>
    </div>
            </div>

			<p class="space-top">
                We added an extra class for Navbar containing icons. If you wish to use it, you should add the "navbar-icons" class. Check out the following example for reference:
            </p>
            <nav class="navbar navbar-ct-azure navbar-icons">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="pe-7s-keypad"></i>
                                <p>
                                    Menu
                                    <b class="caret"></b>
                                </p>
                          </a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                    </li>
                     <li>
                       <a href="">
                            <i class="pe-7s-global"></i>
                            <p>Explore</p>
                        </a>
                    </li>
                    <li>
                       <a href="">
                            <i class="pe-7s-config"></i>
                            <p>Settings</p>
                        </a>
                    </li>

                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
            <div class="area-line">
             <a data-target="#navbarIconsCode" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
    <div id="navbarIconsCode" class="collapse">
    <pre class="prettyprint">
    &lt;nav class=&quot;navbar navbar-ct-azure navbar-icons&quot;&gt;

      &lt;div class=&quot;container-fluid&quot;&gt;

        &lt;!-- Brand and toggle get grouped for better mobile display --&gt;

        &lt;div class=&quot;navbar-header&quot;&gt;

          &lt;button type=&quot;button&quot; class=&quot;navbar-toggle&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#bs-example-navbar-collapse-1&quot;&gt;

            &lt;span class=&quot;sr-only&quot;&gt;Toggle navigation&lt;/span&gt;

            &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;

            &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;

            &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;

          &lt;/button&gt;

        &lt;/div&gt;



        &lt;!-- Collect the nav links, forms, and other content for toggling --&gt;

        &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;bs-example-navbar-collapse-1&quot;&gt;

          &lt;ul class=&quot;nav navbar-nav navbar-right&quot;&gt;

            &lt;li class=&quot;dropdown&quot;&gt;

                  &lt;a href=&quot;#&quot; class=&quot;dropdown-toggle&quot; data-toggle=&quot;dropdown&quot;&gt;

                        &lt;i class=&quot;pe-7s-keypad&quot;&gt;&lt;/i&gt;

                        &lt;p&gt;

                            Menu

                            &lt;b class=&quot;caret&quot;&gt;&lt;/b&gt;

                        &lt;/p&gt;

                  &lt;/a&gt;

                  &lt;ul class=&quot;dropdown-menu&quot;&gt;

                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;

                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;

                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Something&lt;/a&gt;&lt;/li&gt;

                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;

                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Something&lt;/a&gt;&lt;/li&gt;

                    &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;

                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;

                  &lt;/ul&gt;

            &lt;/li&gt;

             &lt;li&gt;

               &lt;a href=&quot;&quot;&gt;

                    &lt;i class=&quot;pe-7s-global&quot;&gt;&lt;/i&gt;

                    &lt;p&gt;Explore&lt;/p&gt;

                &lt;/a&gt;

            &lt;/li&gt;

            &lt;li&gt;

               &lt;a href=&quot;&quot;&gt;

                    &lt;i class=&quot;pe-7s-config&quot;&gt;&lt;/i&gt;

                    &lt;p&gt;Settings&lt;/p&gt;

                &lt;/a&gt;

            &lt;/li&gt;



          &lt;/ul&gt;

        &lt;/div&gt;&lt;!-- /.navbar-collapse --&gt;

      &lt;/div&gt;&lt;!-- /.container-fluid --&gt;

    &lt;/nav&gt;
    </pre>
    </div>
            </div>


			<p class="space-top">
                There is also an Off Canvas Menu which can be accese using class "navbar-burger".
<br><br>
				<b>IMPORTANT!</b> Since this kind of menu require some javascript functions which are triggered when the page is loaded please check the live example <a href="examples/sidebar.html" target="_blank">here</a>. So the example that is presented in documentation is just for design purpose of the Navbar Burger Menu.
            </p>
            <nav class="navbar navbar-ct-azure navbar-icons navbar-burger">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="pe-7s-keypad"></i>
                                <p>
                                    Menu
                                    <b class="caret"></b>
                                </p>
                          </a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                    </li>
                     <li>
                       <a href="">
                            <i class="pe-7s-global"></i>
                            <p>Explore</p>
                        </a>
                    </li>
                    <li>
                       <a href="">
                            <i class="pe-7s-config"></i>
                            <p>Settings</p>
                        </a>
                    </li>

                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
            <div class="area-line">
             <a data-target="#navbarBurger" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
    <div id="navbarBurger" class="collapse">
    <pre class="prettyprint">
    &lt;nav class=&quot;navbar navbar-ct-azure navbar-icons navbar-burger&quot;&gt;

      &lt;div class=&quot;container-fluid&quot;&gt;

        &lt;!-- Brand and toggle get grouped for better mobile display --&gt;

        &lt;div class=&quot;navbar-header&quot;&gt;

          &lt;button type=&quot;button&quot; class=&quot;navbar-toggle&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#bs-example-navbar-collapse-1&quot;&gt;

            &lt;span class=&quot;sr-only&quot;&gt;Toggle navigation&lt;/span&gt;

            &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;

            &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;

            &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;

          &lt;/button&gt;

        &lt;/div&gt;



        &lt;!-- Collect the nav links, forms, and other content for toggling --&gt;

        &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;bs-example-navbar-collapse-1&quot;&gt;

          &lt;ul class=&quot;nav navbar-nav navbar-right&quot;&gt;

            &lt;li class=&quot;dropdown&quot;&gt;

                  &lt;a href=&quot;#&quot; class=&quot;dropdown-toggle&quot; data-toggle=&quot;dropdown&quot;&gt;

                        &lt;i class=&quot;pe-7s-keypad&quot;&gt;&lt;/i&gt;

                        &lt;p&gt;

                            Menu

                            &lt;b class=&quot;caret&quot;&gt;&lt;/b&gt;

                        &lt;/p&gt;

                  &lt;/a&gt;

                  &lt;ul class=&quot;dropdown-menu&quot;&gt;

                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;

                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;

                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Something&lt;/a&gt;&lt;/li&gt;

                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;

                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Something&lt;/a&gt;&lt;/li&gt;

                    &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;

                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;

                  &lt;/ul&gt;

            &lt;/li&gt;

             &lt;li&gt;

               &lt;a href=&quot;&quot;&gt;

                    &lt;i class=&quot;pe-7s-global&quot;&gt;&lt;/i&gt;

                    &lt;p&gt;Explore&lt;/p&gt;

                &lt;/a&gt;

            &lt;/li&gt;

            &lt;li&gt;

               &lt;a href=&quot;&quot;&gt;

                    &lt;i class=&quot;pe-7s-config&quot;&gt;&lt;/i&gt;

                    &lt;p&gt;Settings&lt;/p&gt;

                &lt;/a&gt;

            &lt;/li&gt;



          &lt;/ul&gt;

        &lt;/div&gt;&lt;!-- /.navbar-collapse --&gt;

      &lt;/div&gt;&lt;!-- /.container-fluid --&gt;

    &lt;/nav&gt;
    </pre>
    </div>
            </div>



            <p class="space-top">
                Besides the default navbar, we added 5 new colors: blue, azure, green, orange, red. If you want to use one of them, you have to replace the 'navbar-default' with the class for the chosen color 'navbr-ct-#color'.
            </p>

    <!-- navbar blue -->

    <div id="navbar-blue">
        <nav class="navbar navbar-ct-blue" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Brand</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="#">Work in progress...</a></li>
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

    </div><!--  end navbar -->

    <!-- navbar azure -->
    <div id="navbar-azure">
            <nav class="navbar navbar-ct-azure" role="navigation">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li><a href="#">Work in progress...</a></li>
                    <li class="active"><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>

        </div><!--  end navbar -->

    <!-- navbar green -->
    <div id="navbar-green">
        <nav class="navbar navbar-ct-green" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Brand</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="#">Work in progress...</a></li>
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

    </div><!--  end navbar -->

    <!-- navbar orange -->
    <div id="navbar-orange">
        <nav class="navbar navbar-ct-orange" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Brand</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="#">Work in progress...</a></li>
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

    </div><!--  end navbar -->

    <!-- navbar red -->
    <div id="navbar-red">
        <nav class="navbar navbar-ct-red" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Brand</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="#">Work in progress...</a></li>
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

    </div><!--  end navbar -->

            <p class="space-top">
                Besides all this customisation, we have an extra navbar. 'Navbar-transparent' is a special class that you can to use if you want the navbar to be transparent and then turn to color after scrolling for a certain number of pixels. We recommend that the part of your page that has the transparent navbar contains something non-cluttered, like an image. If you want to see a nice example in details, check <a href="navbar-transparent.html">this page</a> out.
            </p>

    </div>
    <!-- end row -->

    <!-- nav pills row -->
    <div class="tim-row" id="navpills-row">
            <h2> Nav Pills</h2>
            <legend></legend>
            <p>
                We changed the design for the Bootstrap nav pills into something a bit more fresh. We also added more color classes for customisation.
            </p>

            <ul class="nav nav-pills nav-pills-blue">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#"> Profile</a></li>
                  <li><a href="#">Messages</a></li>
            </ul>
            <br />
            <ul class="nav nav-pills nav-pills-azure">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#"> Profile</a></li>
                  <li><a href="#">Messages</a></li>
            </ul>
            <br />
            <ul class="nav nav-pills nav-pills-green">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#"> Profile</a></li>
                  <li><a href="#">Messages</a></li>
            </ul>
            <br />
            <ul class="nav nav-pills nav-pills-orange">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#"> Profile</a></li>
                  <li><a href="#">Messages</a></li>
            </ul>
            <br />
            <ul class="nav nav-pills nav-pills-red">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#"> Profile</a></li>
                  <li><a href="#">Messages</a></li>
            </ul>
            <div class="area-line">
            <a data-target="#navPills" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
    <div id="navPills" class="collapse">
    <pre class="prettyprint">
    &lt;ul class=&quot;nav nav-pills nav-pills-blue&quot;&gt;

        &lt;!--  color-classes: &quot;nav-pills-blue&quot;, &quot;nav-pills-azure&quot;, &quot;nav-pills-orange&quot;, &quot;nav-pills-red&quot;, &quot;nav-pills-green&quot; --&gt;

          &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;

          &lt;li&gt;&lt;a href=&quot;#&quot;&gt; Profile&lt;/a&gt;&lt;/li&gt;

          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Messages&lt;/a&gt;&lt;/li&gt;

    &lt;/ul&gt;
    </pre>
    </div>
            </div>

    </div>
    <!-- end row -->

    <!-- subscription row -->
    <div class="tim-row" id="subscription-row">
        <h2>Subscription Area</h2>
        <legend></legend>
        <p>Set up a space on your page to gather subscription by adding this special area. It contains the email input and a call to action ( you can use any variation of button you see fit). The subscription area comes with 3 styles: white (class "subscribe-line"), black (class "subscribe-line-black") and transparent (class "subscribe-line-transparent"), which looks best when you use a background image and a black layer over it. <br />
        See the examples and implementation <a href="index.html#subscription">here</a>.
        </p>
    </div>
    <!-- end row -->

    <!-- sharing row -->
    <div class="tim-row" id="sharing-row">
        <h2>Sharing Area</h2>
        <legend></legend>
        <p>
            Promote sharing in your site by adding the kit's custom social lines. You can add your own text, the buttons are the social ones (you can find them in the Social Buttons section). There are 2 variations for the social line: white (by using the class "social line" ) and black (by using the class "social-line-black").<br />
            See more examples and implementation <a href="index.html#sharing">here</a>.
        </p>
    </div>
    <!-- end row -->

    <!-- footers row -->
    <div class="tim-row" id="footers-row">
        <h2>Footers</h2>
        <legend></legend>
        <p>
            There are 4 types of color you can choose for footers: white (class: "footer"), light grey (class: "footer-default"), black (class: "footer-black") and transparent (class: "footer-transparent"). You can choose between 2 sizes: normal (class: "footer") and big (class: "footer-big").<br />
            See more examples and implementation <a href="index.html#footer">here</a>.
        </p>
        <p>
            Big footers also support social area. For items inside "social-area": if they do not have a special social class, then they will appear grey for footers that are lightly colored and white for footers that are darkly colored. You can also use all variations of "btn-social" for colors and all the styles for buttons.
        </p>
        <div class="area-line">
        <a data-target="#footer-social" href="javascript: void(0);" data-toggle="collapse">See Example of Social Area inside Footer</a>
    <div id="footer-social" class="collapse">
    <pre class="prettyprint">
    &lt;!-- example of social area withouth colors --&gt;

    &lt;div class=&quot;social-area pull-right&quot;&gt;

        &lt;a href=&quot;#&quot;&gt;

            &lt;i class=&quot;fa fa-facebook-square&quot;&gt;&lt;/i&gt;

        &lt;/a&gt;

        &lt;a href=&quot;#&quot;&gt;

            &lt;i class=&quot;fa fa-twitter&quot;&gt;&lt;/i&gt;

        &lt;/a&gt;

        &lt;a href=&quot;#&quot;&gt;

            &lt;i class=&quot;fa fa-pinterest&quot;&gt;&lt;/i&gt;

        &lt;/a&gt;

    &lt;/div&gt;



    &lt;!-- example of social area with colors and buttons styles. All button styles

    fit perfectly --&gt;

    &lt;div class=&quot;social-area pull-right&quot;&gt;

        &lt;a class=&quot;btn btn-social btn-facebook btn-simple&quot;&gt;

            &lt;i class=&quot;fa fa-facebook-square&quot;&gt;&lt;/i&gt;

        &lt;/a&gt;

        &lt;a class=&quot;btn btn-social btn-twitter btn-simple&quot;&gt;

            &lt;i class=&quot;fa fa-twitter&quot;&gt;&lt;/i&gt;

        &lt;/a&gt;

        &lt;a class=&quot;btn btn-social btn-pinterest btn-simple&quot;&gt;

            &lt;i class=&quot;fa fa-pinterest&quot;&gt;&lt;/i&gt;

        &lt;/a&gt;

    &lt;/div&gt;
    </pre>
    </div>
        </div>
    </div>
    <!-- end row -->

    <!-- pagination row -->
    <div class="tim-row" id="pagination-row">
            <h2> Pagination</h2>
            <legend></legend>
            <p>
            We took the Bootstrap pagination elements and customised them to fit the overall theme. We also added a special class called 'no-border', which dies what its name says and improves the overall clean look.
        </p>
            <ul class="pagination pagination-blue pagination-no-border">
         <!--   color-classes: "ct-blue", "ct-azure", "ct-orange", "ct-red", "ct-green"
                special-classes: "no-border"
         -->
          <li><a href="#">&laquo;</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
            <ul class="pagination pagination-blue">
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
          <li class="active"><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>

            <p class="space-top">
            Besides the classic look, we also added the color classes to offer more customisation.
        </p>

            <ul class="pagination pagination-azure">
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li class="active"><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
            <ul class="pagination pagination-green">
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li class="active"><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
            <ul class="pagination pagination-orange">
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li class="active"><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
            <ul class="pagination pagination-red">
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li class="active"><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
            <div class="area-line">
            <a data-target="#pagination" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
    <div id="pagination" class="collapse">
    <pre class="prettyprint">
    &lt;ul class=&quot;pagination pagination-blue&quot;&gt;

      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&amp;laquo;&lt;/a&gt;&lt;/li&gt;

      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;

      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;

      &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;

      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;

      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;

      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&amp;raquo;&lt;/a&gt;&lt;/li&gt;

    &lt;/ul&gt
    </pre>
    </div>
            </div>
    </div>
    <!-- end row -->

    <!-- progressbar row -->
    <div class="tim-row" id="progressbar-row">
            <h2> Progress Bars</h2>
            <legend></legend>

            <p>The progress bars from Bootstrap hold the same classes and functionality. Adding this kit over your existing project will only make it look more clean and minimal.</p>
             <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>
             <div class="progress">
              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>
             <div class="progress">
              <div class="progress-bar progress-bar-success" style="width: 35%">
                <span class="sr-only">35% Complete (success)</span>
              </div>
              <div class="progress-bar progress-bar-warning" style="width: 20%">
                <span class="sr-only">20% Complete (warning)</span>
              </div>
              <div class="progress-bar progress-bar-danger" style="width: 10%">
                <span class="sr-only">10% Complete (danger)</span>
              </div>
            </div>
             <div class="area-line">
             <a data-target="#progressBars" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
    <div id="progressBars" class="collapse">
    <pre class="prettyprint">
    &lt;div class=&quot;progress&quot;&gt;

      &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; aria-valuenow=&quot;60&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;width: 30%;&quot;&gt;

        &lt;span class=&quot;sr-only&quot;&gt;60% Complete&lt;/span&gt;

      &lt;/div&gt;

    &lt;/div&gt;

    &lt;div class=&quot;progress&quot;&gt;

      &lt;div class=&quot;progress-bar progress-bar-info&quot; role=&quot;progressbar&quot; aria-valuenow=&quot;60&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;width: 60%;&quot;&gt;

        &lt;span class=&quot;sr-only&quot;&gt;60% Complete&lt;/span&gt;

      &lt;/div&gt;

    &lt;/div&gt;

    &lt;div class=&quot;progress&quot;&gt;

      &lt;div class=&quot;progress-bar progress-bar-success&quot; style=&quot;width: 35%&quot;&gt;

        &lt;span class=&quot;sr-only&quot;&gt;35% Complete (success)&lt;/span&gt;

      &lt;/div&gt;

      &lt;div class=&quot;progress-bar progress-bar-warning&quot; style=&quot;width: 20%&quot;&gt;

        &lt;span class=&quot;sr-only&quot;&gt;20% Complete (warning)&lt;/span&gt;

      &lt;/div&gt;

      &lt;div class=&quot;progress-bar progress-bar-danger&quot; style=&quot;width: 10%&quot;&gt;

        &lt;span class=&quot;sr-only&quot;&gt;10% Complete (danger)&lt;/span&gt;

      &lt;/div&gt;

    &lt;/div&gt;
    </pre>
    </div>
             </div>
    </div>
    <!-- end row -->

    <!-- sliders row -->
    <div class="tim-row" id="sliders-row">
            <h2> Sliders</h2>
            <legend></legend>
            <p>We restyled jQuery UI slider, while keeping the design consistent.</p>

            <div id="slider-default" class="slider-info"></div>
            <br>
            <div id="slider-range" class="slider-success"></div>
            <div class="area-line">
            <a data-target="#sliderMarkup" href="javascript: void(0);" data-toggle="collapse"> See Markup and Javascript</a>
    <div id="sliderMarkup" class="collapse">
    <pre class="prettyprint">
    &lt;!-- Markup --&gt;
    &lt;div id=&quot;slider-default&quot; class=&quot;slider-info&quot;&gt;&lt;/div&gt;

    &lt;div id=&quot;slider-range&quot; class=&quot;slider-success&quot;&gt;&lt;/div&gt;

    &lt;!-- Javascript --&gt;
    $( &quot;#slider-range&quot; ).slider({

    	range: true,
    	min: 0,
    	max: 500,
    	values: [ 75, 300 ],

    });

    $( &quot;#slider-default&quot; ).slider({

    		value: 70,
    		orientation: &quot;horizontal&quot;,
    		range: &quot;min&quot;,
    		animate: true

    });
    </pre>
    </div>
            </div>
    </div>
    <!-- end row -->

    <!-- labels row -->
    <div class="tim-row" id="labels-row">
        <h2>Labels</h2>
        <legend></legend>
        <p>We restyled the default options for labels and we added the filled class, that can be used in any combination.</p>
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-info">Info</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
        <br /></br />
        <span class="label label-default label-fill">Default</span>
        <span class="label label-primary label-fill">Primary</span>
        <span class="label label-success label-fill">Success</span>
        <span class="label label-info label-fill">Info</span>
        <span class="label label-warning label-fill">Warning</span>
        <span class="label label-danger label-fill">Danger</span>
        <div class="area-line">
            <a data-target="#labels" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
    <div id="labels" class="collapse">
    <pre class="prettyprint">
    &lt;span class=&quot;label label-default&quot;&gt;Default&lt;/span&gt;

    &lt;span class=&quot;label label-primary&quot;&gt;Primary&lt;/span&gt;

    &lt;span class=&quot;label label-success&quot;&gt;Success&lt;/span&gt;

    &lt;span class=&quot;label label-info&quot;&gt;Info&lt;/span&gt;

    &lt;span class=&quot;label label-warning&quot;&gt;Warning&lt;/span&gt;

    &lt;span class=&quot;label label-danger&quot;&gt;Danger&lt;/span&gt;



    &lt;!-- Filled --&gt;



    &lt;span class=&quot;label label-default label-fill&quot;&gt;Default&lt;/span&gt;

    &lt;span class=&quot;label label-primary label-fill&quot;&gt;Primary&lt;/span&gt;

    &lt;span class=&quot;label label-success label-fill&quot;&gt;Success&lt;/span&gt;

    &lt;span class=&quot;label label-info label-fill&quot;&gt;Info&lt;/span&gt;

    &lt;span class=&quot;label label-warning label-fill&quot;&gt;Warning&lt;/span&gt;

    &lt;span class=&quot;label label-danger label-fill&quot;&gt;Danger&lt;/span&gt;
    </pre>
    </div>
        </div>
    </div>
    <!-- end row -->

    <!-- description area row -->
    <div class="tim-row" id="description-row">
        <h2>Description Area</h2>
        <legend></legend>
        <p>
            We restyled the classic description by tabs. We offer 2 possbility to style the navigation part of the description area: with text( using the class "nav-text") and with icons (using the class "nav-icons"). Besides the default order that comes horizontal, we added a vertical alignment possibility, reachable by the use of the class “nav-stacked”. You can style it with any of the colors that come with the kit, by using the class “nav-{color}”.
        </p>
        <p>
            Here is an example of the stacked, text option.
        </p>
        <div class="space-top"></div>
        <div class="row">
            <div class="col-md-3">
                 <ul class="nav nav-text nav-stacked" role="tablist">
                      <li class="active">
                        <a href="#info" role="tab" data-toggle="tab">
                             Info
                        </a>
                      </li>
                      <li>
                        <a href="#description" role="tab" data-toggle="tab">
                             Description
                        </a>
                      </li>
                      <li>
                        <a href="#concept" role="tab" data-toggle="tab">
                             Concept
                        </a>
                      </li>
                      <li>
                       <a href="#support" role="tab" data-toggle="tab">
                            Support
                       </a>
                      </li>
                      <hr>
                      <li>
                       <a href="#extra" role="tab" data-toggle="tab">
                            Extra
                       </a>
                      </li>
                    </ul>
            </div>
            <div class="col-md-9">
                    <!-- Tab panes -->
                    <div class="tab-content">
                          <div class="tab-pane active" id="info">
                             <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display.</p>
                             <p>It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.</p>
                        </div>
                          <div class="tab-pane" id="description">
                            <p>The first thing you notice when you hold the phone is how great it feels in your hand. The cover glass curves down around the sides to meet the anodized aluminum enclosure in a remarkable, simplified design. </p>
                            <p>There are no distinct edges. No gaps. Just a smooth, seamless bond of metal and glass that feels like one continuous surface.</p>
                         </div>
                          <div class="tab-pane" id="concept">
                             <p>It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.</p>
                             <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display. </p>
                          </div>
                          <div class="tab-pane" id="support">
                            <p>From the seamless transition of glass and metal to the streamlined profile, every detail was carefully considered to enhance your experience. So while its display is larger, the phone feels just right.</p>
                             <p>It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.</p>
                          </div>
                          <div class="tab-pane" id="extra">
                             <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display. </p>
                             <p>It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.</p>
                          </div>
                    </div>
            </div>
        </div>
        <div class="area-line">
            <a data-target="#descriptionAreaStacked" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
    <div id="descriptionAreaStacked" class="collapse">
    <pre class="prettyprint">
    &lt;div class=&quot;row&quot;&gt;

        &lt;div class=&quot;col-md-3&quot;&gt;

             &lt;ul class=&quot;nav nav-text nav-stacked&quot; role=&quot;tablist&quot;&gt;

                  &lt;li class=&quot;active&quot;&gt;

                    &lt;a href=&quot;#info&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;

                         Info

                    &lt;/a&gt;

                  &lt;/li&gt;

                  &lt;li&gt;

                    &lt;a href=&quot;#description&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;

                         Description

                    &lt;/a&gt;

                  &lt;/li&gt;

                  &lt;li&gt;

                    &lt;a href=&quot;#concept&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;

                         Concept

                    &lt;/a&gt;

                  &lt;/li&gt;

                  &lt;li&gt;

                   &lt;a href=&quot;#support&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;

                        Support

                   &lt;/a&gt;

                  &lt;/li&gt;

    &lt;!--                                   &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt; --&gt;

                  &lt;hr&gt;

                  &lt;li&gt;

                   &lt;a href=&quot;#extra&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;

                        Extra

                   &lt;/a&gt;

                  &lt;/li&gt;

                &lt;/ul&gt;

        &lt;/div&gt;

        &lt;div class=&quot;col-md-9&quot;&gt;

                &lt;!-- Tab panes --&gt;

                &lt;div class=&quot;tab-content&quot;&gt;

                    &lt;div class=&quot;tab-pane active&quot; id=&quot;info&quot;&gt;

                         &lt;p&gt;Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display.&lt;/p&gt;

                         &lt;p&gt;It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.&lt;/p&gt;

                      &lt;/div&gt;

                      &lt;div class=&quot;tab-pane&quot; id=&quot;description&quot;&gt;

                        &lt;p&gt;The first thing you notice when you hold the phone is how great it feels in your hand. The cover glass curves down around the sides to meet the anodized aluminum enclosure in a remarkable, simplified design. &lt;/p&gt;

                        &lt;p&gt;There are no distinct edges. No gaps. Just a smooth, seamless bond of metal and glass that feels like one continuous surface.&lt;/p&gt;

                     &lt;/div&gt;

                      &lt;div class=&quot;tab-pane&quot; id=&quot;concept&quot;&gt;

                         &lt;p&gt;It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.&lt;/p&gt;

                         &lt;p&gt;Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display. &lt;/p&gt;

                      &lt;/div&gt;

                      &lt;div class=&quot;tab-pane&quot; id=&quot;support&quot;&gt;

                        &lt;p&gt;From the seamless transition of glass and metal to the streamlined profile, every detail was carefully considered to enhance your experience. So while its display is larger, the phone feels just right.&lt;/p&gt;

                         &lt;p&gt;It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.&lt;/p&gt;

                      &lt;/div&gt;

                      &lt;div class=&quot;tab-pane&quot; id=&quot;extra&quot;&gt;

                         &lt;p&gt;Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display. &lt;/p&gt;

                         &lt;p&gt;It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.&lt;/p&gt;

                      &lt;/div&gt;

                 &lt;/div&gt;

        &lt;/div&gt;

    &lt;/div&gt;
    </pre>
    </div>
        </div>
        <p class="space-top">Here is an example with icons, aligned horizontally.</p>
        <div class="row">
            <div class="col-md-3">
                <ul class="nav nav-stacked nav-icons" role="tablist">
                  <li class="active">
                    <a href="#stacked-description-logo" role="tab" data-toggle="tab">
                         <i class="fa fa-info-circle"></i><br>
                         Description
                    </a>
                  </li>
                  <li>
                    <a href="#stacked-legal-logo" role="tab" data-toggle="tab">
                        <i class="fa fa-legal"></i><br>
                        Legal Info
                    </a>
                  </li>
                  <li>
                   <a href="#stacked-help-logo" role="tab" data-toggle="tab">
                        <i class="fa fa-life-ring"></i><br>
                        Help Center
                   </a>
                  </li>
                </ul>
            </div>
            <div class="col-md-9">
                 <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="stacked-description-logo">
                    <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display.</p>
                    <p>The first thing you notice when you hold the phone is how great it feels in your hand. There are no distinct edges. No gaps. Just a smooth, seamless bond of metal and glass that feels like one continuous surface.</p>

                 </div>
                  <div class="tab-pane" id="stacked-legal-logo">
                    <p>The first thing you notice when you hold the phone is how great it feels in your hand. The cover glass curves down around the sides to meet the anodized aluminum enclosure in a remarkable, simplified design.</p>
                    <p>Larger, yet dramatically thinner.It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.</p>
                  </div>
                  <div class="tab-pane" id="stacked-help-logo">
                    <p>From the seamless transition of glass and metal to the streamlined profile, every detail was carefully considered to enhance your experience. So while its display is larger, the phone feels just right.</p>
                    <p>Larger, yet dramatically thinner.
                    </p>
                  </div>
                </div>
            </div>
        </div>
        <div class="area-line">
           <a data-target="#descriptionAreaIcons" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
    <div id="descriptionAreaIcons" class="collapse">
    <pre class="prettyprint">
    &lt;div class=&quot;row&quot;&gt;

    &lt;div class=&quot;col-md-3&quot;&gt;

        &lt;ul class=&quot;nav nav-stacked nav-icons&quot; role=&quot;tablist&quot;&gt;

          &lt;li class=&quot;active&quot;&gt;

            &lt;a href=&quot;#stacked-description-logo&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;

                 &lt;i class=&quot;fa fa-info-circle&quot;&gt;&lt;/i&gt;&lt;br&gt;

                 Description

            &lt;/a&gt;

          &lt;/li&gt;

          &lt;li&gt;

            &lt;a href=&quot;#stacked-legal-logo&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;

                &lt;i class=&quot;fa fa-legal&quot;&gt;&lt;/i&gt;&lt;br&gt;

                Legal Info

            &lt;/a&gt;

          &lt;/li&gt;

          &lt;li&gt;

           &lt;a href=&quot;#stacked-help-logo&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;

                &lt;i class=&quot;fa fa-life-ring&quot;&gt;&lt;/i&gt;&lt;br&gt;

                Help Center

           &lt;/a&gt;

          &lt;/li&gt;

        &lt;/ul&gt;

    &lt;/div&gt;

    &lt;div class=&quot;col-md-9&quot;&gt;

         &lt;!-- Tab panes --&gt;

        &lt;div class=&quot;tab-content&quot;&gt;

          &lt;div class=&quot;tab-pane active&quot; id=&quot;stacked-description-logo&quot;&gt;

            &lt;p&gt;Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display.&lt;/p&gt;

            &lt;p&gt;The first thing you notice when you hold the phone is how great it feels in your hand. There are no distinct edges. No gaps. Just a smooth, seamless bond of metal and glass that feels like one continuous surface.&lt;/p&gt;



         &lt;/div&gt;

          &lt;div class=&quot;tab-pane&quot; id=&quot;stacked-legal-logo&quot;&gt;

            &lt;p&gt;The first thing you notice when you hold the phone is how great it feels in your hand. The cover glass curves down around the sides to meet the anodized aluminum enclosure in a remarkable, simplified design.&lt;/p&gt;

            &lt;p&gt;Larger, yet dramatically thinner.It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.&lt;/p&gt;

          &lt;/div&gt;

          &lt;div class=&quot;tab-pane&quot; id=&quot;stacked-help-logo&quot;&gt;

            &lt;p&gt;From the seamless transition of glass and metal to the streamlined profile, every detail was carefully considered to enhance your experience. So while its display is larger, the phone feels just right.&lt;/p&gt;

            &lt;p&gt;Larger, yet dramatically thinner.

            &lt;/p&gt;

          &lt;/div&gt;

        &lt;/div&gt;

    &lt;/div&gt;

    &lt;/div&gt;
    </pre>
    </div>
        </div>
        <p class="space-top">You can see more examples <a href="index.html#description-area">here</a>.</p>

    </div>
    <!-- end row -->

    <!-- info area row -->
    <div class="tim-row" id="info-row">
        <h2>Info Area</h2>
        <legend></legend>
        <p>
            Our information areas are made of created using rounded corners squares with gradients and using icons (iOS7 Stroke, Font Awesome or custom). The default color for the gradient is grey, and you can all others colors by using the corresponding class “icon-{blue | azure | green| orange | red | purple | pink | black }”. <br />
            The default size for the areas is 64x64px. If you want the smaller version of 32x32px, you can use the “icon-sm” class. <br />
            For an horizontal alignment use the custom class  "icon-horizontal". See more illustrative examples below:
        </p>
        <div class="row">
          <!-- example with regular info -->
             <div class="col-md-4">
                   <div class="info">
                        <div class="icon icon-pink">
                            <i class="pe-7s-like"></i>
                        </div>
                        <div class="description">
                            <h3> Made with Love </h3>
                            <p>Really fast implementation</p>
                        </div>
                   </div>
                </div>
             <!-- example with info horizontal and small icon -->
            <div class="col-md-5">
               <div class="info info-horizontal">
                    <div class="icon icon-blue icon-sm">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="description">
                        <h4> Fast Delivery </h4>
                        <p>Create really awesome projects.</p>
                        <a href="javascript: void(0);">Find more</a>
                    </div>
               </div>
             </div>
        </div>
        <div class="area-line">
            <a data-target="#infoArea" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
    <div id="infoArea" class="collapse">
    <pre class="prettyprint">
    &lt;!-- example with regular info --&gt;

     &lt;div class=&quot;col-md-4&quot;&gt;

           &lt;div class=&quot;info&quot;&gt;

                &lt;div class=&quot;icon icon-pink&quot;&gt;

                    &lt;i class=&quot;pe-7s-like&quot;&gt;&lt;/i&gt;

                &lt;/div&gt;

                &lt;div class=&quot;description&quot;&gt;

                    &lt;h3&gt; Made with Love &lt;/h3&gt;

                    &lt;p&gt;Really fast implementation&lt;/p&gt;

                &lt;/div&gt;

           &lt;/div&gt;

        &lt;/div&gt;

     &lt;!-- example with info horizontal and small icon --&gt;

    &lt;div class=&quot;col-md-5&quot;&gt;

       &lt;div class=&quot;info info-horizontal&quot;&gt;

            &lt;div class=&quot;icon icon-blue icon-sm&quot;&gt;

                &lt;i class=&quot;fa fa-shopping-cart&quot;&gt;&lt;/i&gt;

            &lt;/div&gt;

            &lt;div class=&quot;description&quot;&gt;

                &lt;h4&gt; Fast Delivery &lt;/h4&gt;

                &lt;p&gt;Create really awesome projects.&lt;/p&gt;

                &lt;a href=&quot;javascript: void(0);&quot;&gt;Find more&lt;/a&gt;

            &lt;/div&gt;

       &lt;/div&gt;

     &lt;/div&gt;
    </pre>
    </div>
        </div>
    </div>
    <!-- end row -->

    <!-- tables row -->
    <div class="tim-row" id="tables-row">
        <h2>Tables</h2>
        <legend></legend>
        <p>
       All Boostrap classes for tables are supported and improved. Besides the simple and striped tables, we added a shopping cart table, that gives you more customisation. With the shopping cart table you can use the classes “td-name” for a cell that contains names and “td-number” for numbers. All tables have to possibility to add action cells for every row. If you add the class “td-actions” for the cell that has the actions, when you will hover over its row, it will become more intense.<br />
        If you want to make the most out of the Get Shit Done Pro tables, you should check out the next examples.
        </p>
        <h4>Simple Table with Actions</h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Name</th>
                        <th>Job Position</th>
                        <th>Since</th>
                        <th class="text-right">Salary</th>
                        <th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Andrew Mike</td>
                        <td>Develop</td>
                        <td>2013</td>
                        <td class="text-right">&euro; 99,225</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                                <i class="fa fa-user"></i>
                            </button>
                            <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                                <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                <i class="fa fa-times"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>

                        <td class="text-center">2</td>
                        <td>John Doe</td>
                        <td>Design</td>
                        <td>2012</td>
                        <td class="text-right">&euro; 89,241</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                                <i class="fa fa-user"></i>
                            </button>
                            <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                                <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                <i class="fa fa-times"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>Alex Mike</td>
                        <td>Design</td>
                        <td>2010</td>
                        <td class="text-right">&euro; 92,144</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                                <i class="fa fa-user"></i>
                            </button>
                            <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                                <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                <i class="fa fa-times"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td>Mike Monday</td>
                        <td>Marketing</td>
                        <td>2013</td>
                        <td class="text-right">&euro; 49,990</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                                <i class="fa fa-user"></i>
                            </button>
                            <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                                <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                <i class="fa fa-times"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td>Paul Dickens</td>
                        <td>Communication</td>
                        <td>2014</td>
                        <td class="text-right">&euro; 69,201</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                                <i class="fa fa-user"></i>
                            </button>
                            <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                                <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                <i class="fa fa-times"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        <div class="area-line">
                <a data-target="#simpleTableWithActions" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
    <div id="simpleTableWithActions" class="collapse">
    <pre class="prettyprint">
    &lt;div class=&quot;table-responsive&quot;&gt;

    &lt;table class=&quot;table&quot;&gt;

        &lt;thead&gt;

            &lt;tr&gt;

                &lt;th class=&quot;text-center&quot;&gt;#&lt;/th&gt;

                &lt;th&gt;Name&lt;/th&gt;

                &lt;th&gt;Job Position&lt;/th&gt;

                &lt;th&gt;Since&lt;/th&gt;

                &lt;th class=&quot;text-right&quot;&gt;Salary&lt;/th&gt;

                &lt;th class=&quot;text-right&quot;&gt;Actions&lt;/th&gt;

            &lt;/tr&gt;

        &lt;/thead&gt;

        &lt;tbody&gt;

            &lt;tr&gt;

                &lt;td class=&quot;text-center&quot;&gt;1&lt;/td&gt;

                &lt;td&gt;Andrew Mike&lt;/td&gt;

                &lt;td&gt;Develop&lt;/td&gt;

                &lt;td&gt;2013&lt;/td&gt;

                &lt;td class=&quot;text-right&quot;&gt;&amp;euro; 99,225&lt;/td&gt;

                &lt;td class=&quot;td-actions text-right&quot;&gt;

                    &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;View Profile&quot; class=&quot;btn btn-info btn-simple btn-xs&quot;&gt;

                        &lt;i class=&quot;fa fa-user&quot;&gt;&lt;/i&gt;

                    &lt;/button&gt;

                    &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;Edit Profile&quot; class=&quot;btn btn-success btn-simple btn-xs&quot;&gt;

                        &lt;i class=&quot;fa fa-edit&quot;&gt;&lt;/i&gt;

                    &lt;/button&gt;

                    &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;Remove&quot; class=&quot;btn btn-danger btn-simple btn-xs&quot;&gt;

                        &lt;i class=&quot;fa fa-times&quot;&gt;&lt;/i&gt;

                    &lt;/button&gt;

                &lt;/td&gt;

            &lt;/tr&gt;

            &lt;tr&gt;



                &lt;td class=&quot;text-center&quot;&gt;2&lt;/td&gt;

                &lt;td&gt;John Doe&lt;/td&gt;

                &lt;td&gt;Design&lt;/td&gt;

                &lt;td&gt;2012&lt;/td&gt;

                &lt;td class=&quot;text-right&quot;&gt;&amp;euro; 89,241&lt;/td&gt;

                &lt;td class=&quot;td-actions text-right&quot;&gt;

                    &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;View Profile&quot; class=&quot;btn btn-info btn-simple btn-xs&quot;&gt;

                        &lt;i class=&quot;fa fa-user&quot;&gt;&lt;/i&gt;

                    &lt;/button&gt;

                    &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;Edit Profile&quot; class=&quot;btn btn-success btn-simple btn-xs&quot;&gt;

                        &lt;i class=&quot;fa fa-edit&quot;&gt;&lt;/i&gt;

                    &lt;/button&gt;

                    &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;Remove&quot; class=&quot;btn btn-danger btn-simple btn-xs&quot;&gt;

                        &lt;i class=&quot;fa fa-times&quot;&gt;&lt;/i&gt;

                    &lt;/button&gt;

                &lt;/td&gt;

            &lt;/tr&gt;

            &lt;tr&gt;

                &lt;td class=&quot;text-center&quot;&gt;3&lt;/td&gt;

                &lt;td&gt;Alex Mike&lt;/td&gt;

                &lt;td&gt;Design&lt;/td&gt;

                &lt;td&gt;2010&lt;/td&gt;

                &lt;td class=&quot;text-right&quot;&gt;&amp;euro; 92,144&lt;/td&gt;

                &lt;td class=&quot;td-actions text-right&quot;&gt;

                    &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;View Profile&quot; class=&quot;btn btn-info btn-simple btn-xs&quot;&gt;

                        &lt;i class=&quot;fa fa-user&quot;&gt;&lt;/i&gt;

                    &lt;/button&gt;

                    &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;Edit Profile&quot; class=&quot;btn btn-success btn-simple btn-xs&quot;&gt;

                        &lt;i class=&quot;fa fa-edit&quot;&gt;&lt;/i&gt;

                    &lt;/button&gt;

                    &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;Remove&quot; class=&quot;btn btn-danger btn-simple btn-xs&quot;&gt;

                        &lt;i class=&quot;fa fa-times&quot;&gt;&lt;/i&gt;

                    &lt;/button&gt;

                &lt;/td&gt;

            &lt;/tr&gt;

            &lt;tr&gt;

                &lt;td class=&quot;text-center&quot;&gt;4&lt;/td&gt;

                &lt;td&gt;Mike Monday&lt;/td&gt;

                &lt;td&gt;Marketing&lt;/td&gt;

                &lt;td&gt;2013&lt;/td&gt;

                &lt;td class=&quot;text-right&quot;&gt;&amp;euro; 49,990&lt;/td&gt;

                &lt;td class=&quot;td-actions text-right&quot;&gt;

                    &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;View Profile&quot; class=&quot;btn btn-info btn-simple btn-xs&quot;&gt;

                        &lt;i class=&quot;fa fa-user&quot;&gt;&lt;/i&gt;

                    &lt;/button&gt;

                    &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;Edit Profile&quot; class=&quot;btn btn-success btn-simple btn-xs&quot;&gt;

                        &lt;i class=&quot;fa fa-edit&quot;&gt;&lt;/i&gt;

                    &lt;/button&gt;

                    &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;Remove&quot; class=&quot;btn btn-danger btn-simple btn-xs&quot;&gt;

                        &lt;i class=&quot;fa fa-times&quot;&gt;&lt;/i&gt;

                    &lt;/button&gt;

                &lt;/td&gt;

            &lt;/tr&gt;

            &lt;tr&gt;

                &lt;td class=&quot;text-center&quot;&gt;5&lt;/td&gt;

                &lt;td&gt;Paul Dickens&lt;/td&gt;

                &lt;td&gt;Communication&lt;/td&gt;

                &lt;td&gt;2014&lt;/td&gt;

                &lt;td class=&quot;text-right&quot;&gt;&amp;euro; 69,201&lt;/td&gt;

                &lt;td class=&quot;td-actions text-right&quot;&gt;

                    &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;View Profile&quot; class=&quot;btn btn-info btn-simple btn-xs&quot;&gt;

                        &lt;i class=&quot;fa fa-user&quot;&gt;&lt;/i&gt;

                    &lt;/button&gt;

                    &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;Edit Profile&quot; class=&quot;btn btn-success btn-simple btn-xs&quot;&gt;

                        &lt;i class=&quot;fa fa-edit&quot;&gt;&lt;/i&gt;

                    &lt;/button&gt;

                    &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; title=&quot;Remove&quot; class=&quot;btn btn-danger btn-simple btn-xs&quot;&gt;

                        &lt;i class=&quot;fa fa-times&quot;&gt;&lt;/i&gt;

                    &lt;/button&gt;

                &lt;/td&gt;

            &lt;/tr&gt;

        &lt;/tbody&gt;

    &lt;/table&gt;

    &lt;/div&gt;
    </pre>
    </div>
        </div>
        <h4>Striped Table with Checkboxes</h4>
        <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th></th>
                    <th>Product Name</th>
                    <th>Type</th>
                    <th>Qty</th>
                    <th class="text-right">Price</th>
                    <th class="text-right">Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td>
                        <label class="checkbox">
                            <input type="checkbox" value="" data-toggle="checkbox">
                        </label>
                    </td>
                    <td>Moleskine Agenda</td>
                    <td>Office</td>
                    <td>25</td>
                    <td class="text-right">&euro; 49</td>
                    <td class="text-right">&euro; 1,225</td>
                </tr>
                <tr>

                    <td class="text-center">2</td>
                    <td>
                        <label class="checkbox">
                            <input type="checkbox" value="" data-toggle="checkbox" checked="">
                        </label>
                    </td>
                    <td>Stabilo Pen</td>
                    <td>Office</td>
                    <td>30</td>
                    <td class="text-right">&euro; 10</td>
                    <td class="text-right">&euro; 300</td>
                </tr>
                <tr>

                    <td class="text-center">3</td>
                    <td>
                        <label class="checkbox">
                            <input type="checkbox" value="" data-toggle="checkbox" checked="">
                        </label>
                    </td>
                    <td>A4 Paper Pack</td>
                    <td>Office</td>
                    <td>50</td>
                    <td class="text-right">&euro; 10.99</td>
                    <td class="text-right">&euro; 109</td>
                </tr>
                <tr>

                    <td class="text-center">4</td>
                    <td>
                        <label class="checkbox">
                            <input type="checkbox" value="" data-toggle="checkbox">
                        </label>
                    </td>
                    <td>Apple iPad</td>
                    <td>Meeting</td>
                    <td>10</td>
                    <td class="text-right">&euro; 499.00</td>
                    <td class="text-right">&euro; 4,990</td>
                </tr>
                <tr>

                    <td class="text-center">5</td>
                    <td>
                        <label class="checkbox">
                            <input type="checkbox" value="" data-toggle="checkbox">
                        </label>
                    </td>
                    <td>Apple iPhone</td>
                    <td>Communication</td>
                    <td>10</td>
                    <td class="text-right">&euro; 599.00</td>
                    <td class="text-right">&euro; 5,999</td>
                </tr>
                <tr>
                    <td colspan="5"></td>
                    <td class="td-total">
                        Total
                    </td>
                    <td class="td-price">
                        <small>&euro;</small>12,999
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
        <div class="area-line">
                <a data-target="#stripedTableWithCheckboxes" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
    <div id="stripedTableWithCheckboxes" class="collapse">
    <pre class="prettyprint">
    &lt;div class=&quot;table-responsive&quot;&gt;

    &lt;table class=&quot;table table-striped&quot;&gt;

        &lt;thead&gt;

            &lt;tr&gt;

                &lt;th class=&quot;text-center&quot;&gt;#&lt;/th&gt;

                &lt;th&gt;&lt;/th&gt;

                &lt;th&gt;Product Name&lt;/th&gt;

                &lt;th&gt;Type&lt;/th&gt;

                &lt;th&gt;Qty&lt;/th&gt;

                &lt;th class=&quot;text-right&quot;&gt;Price&lt;/th&gt;

                &lt;th class=&quot;text-right&quot;&gt;Amount&lt;/th&gt;

            &lt;/tr&gt;

        &lt;/thead&gt;

        &lt;tbody&gt;

            &lt;tr&gt;

                &lt;td class=&quot;text-center&quot;&gt;1&lt;/td&gt;

                &lt;td&gt;

                    &lt;label class=&quot;checkbox&quot;&gt;

                        &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                    &lt;/label&gt;

                &lt;/td&gt;

                &lt;td&gt;Moleskine Agenda&lt;/td&gt;

                &lt;td&gt;Office&lt;/td&gt;

                &lt;td&gt;25&lt;/td&gt;

                &lt;td class=&quot;text-right&quot;&gt;&amp;euro; 49&lt;/td&gt;

                &lt;td class=&quot;text-right&quot;&gt;&amp;euro; 1,225&lt;/td&gt;

            &lt;/tr&gt;

            &lt;tr&gt;



                &lt;td class=&quot;text-center&quot;&gt;2&lt;/td&gt;

                &lt;td&gt;

                    &lt;label class=&quot;checkbox&quot;&gt;

                        &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot; checked=&quot;&quot;&gt;

                    &lt;/label&gt;

                &lt;/td&gt;

                &lt;td&gt;Stabilo Pen&lt;/td&gt;

                &lt;td&gt;Office&lt;/td&gt;

                &lt;td&gt;30&lt;/td&gt;

                &lt;td class=&quot;text-right&quot;&gt;&amp;euro; 10&lt;/td&gt;

                &lt;td class=&quot;text-right&quot;&gt;&amp;euro; 300&lt;/td&gt;

            &lt;/tr&gt;

            &lt;tr&gt;



                &lt;td class=&quot;text-center&quot;&gt;3&lt;/td&gt;

                &lt;td&gt;

                    &lt;label class=&quot;checkbox&quot;&gt;

                        &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot; checked=&quot;&quot;&gt;

                    &lt;/label&gt;

                &lt;/td&gt;

                &lt;td&gt;A4 Paper Pack&lt;/td&gt;

                &lt;td&gt;Office&lt;/td&gt;

                &lt;td&gt;50&lt;/td&gt;

                &lt;td class=&quot;text-right&quot;&gt;&amp;euro; 10.99&lt;/td&gt;

                &lt;td class=&quot;text-right&quot;&gt;&amp;euro; 109&lt;/td&gt;

            &lt;/tr&gt;

            &lt;tr&gt;



                &lt;td class=&quot;text-center&quot;&gt;4&lt;/td&gt;

                &lt;td&gt;

                    &lt;label class=&quot;checkbox&quot;&gt;

                        &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                    &lt;/label&gt;

                &lt;/td&gt;

                &lt;td&gt;Apple iPad&lt;/td&gt;

                &lt;td&gt;Meeting&lt;/td&gt;

                &lt;td&gt;10&lt;/td&gt;

                &lt;td class=&quot;text-right&quot;&gt;&amp;euro; 499.00&lt;/td&gt;

                &lt;td class=&quot;text-right&quot;&gt;&amp;euro; 4,990&lt;/td&gt;

            &lt;/tr&gt;

            &lt;tr&gt;



                &lt;td class=&quot;text-center&quot;&gt;5&lt;/td&gt;

                &lt;td&gt;

                    &lt;label class=&quot;checkbox&quot;&gt;

                        &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                    &lt;/label&gt;

                &lt;/td&gt;

                &lt;td&gt;Apple iPhone&lt;/td&gt;

                &lt;td&gt;Communication&lt;/td&gt;

                &lt;td&gt;10&lt;/td&gt;

                &lt;td class=&quot;text-right&quot;&gt;&amp;euro; 599.00&lt;/td&gt;

                &lt;td class=&quot;text-right&quot;&gt;&amp;euro; 5,999&lt;/td&gt;

            &lt;/tr&gt;

            &lt;tr&gt;

                &lt;td colspan=&quot;5&quot;&gt;&lt;/td&gt;

                &lt;td class=&quot;td-total&quot;&gt;

                    Total

                &lt;/td&gt;

                &lt;td class=&quot;td-price&quot;&gt;

                    &lt;small&gt;&amp;euro;&lt;/small&gt;12,999

                &lt;/td&gt;

            &lt;/tr&gt;

        &lt;/tbody&gt;

    &lt;/table&gt;

    &lt;/div&gt;
    </pre>
    </div>
        </div>
        <h4>Shopping Cart Table</h4>
        <div class="table-responsive">
        <table class="table table-shopping">
            <thead>
                <tr>
                    <th class="text-center"></th>
                    <th >Product</th>
                    <th class="th-description">Description</th>
                    <th class="text-right">Price</th>
                    <th class="text-right">Qty</th>
                    <th class="text-right">Amount</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="img-container">
                            <img src="img/shopping.jpg" alt="...">
                        </div>
                    </td>
                    <td class="td-name">
                        Moleskine Agenda
                    </td>
                    <td>
                        <b>Meeting Notes</b>
                        <p>
                        Most beautiful agenda for the office.</p>
                    </td>

                    <td class="td-number">
                        <small>&euro;</small>49
                    </td>
                    <td class="td-number">
                        <small>x</small>25
                    </td>
                    <td class="td-number">
                        <small>&euro;</small>1,225
                    </td>
                    <td class="td-actions">
                        <button type="button" rel="tooltip" data-placement="left" title="Aprove" class="btn btn-info btn-simple btn-icon">
                            <i class="fa fa-check"></i>
                        </button>
                        <button type="button" rel="tooltip" data-placement="left" title="Remove item" class="btn btn-danger btn-simple btn-icon ">
                            <i class="fa fa-times"></i>
                        </button>
                        <button type="button" rel="tooltip" data-placement="left" title="Wishlist" class="btn btn-default btn-simple btn-icon">
                            <i class="fa fa-heart-o"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td></td>
                    <td class="td-total">
                       Total
                    </td>
                    <td class="td-price">
                        <small>&euro;</small>1,225
                    </td>
                    <td> <button type="button" class="btn btn-info btn-fill btn-l">Complete Purchase <i class="fa fa-chevron-right"></i></button></td>

                    <td></td>
                </tr>
            </tbody>
        </table>
        </div>
        <div class="area-line">
            <a data-target="#shoppingCartTable" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
    <div id="shoppingCartTable" class="collapse">
    <pre class="prettyprint">
    &lt;div class=&quot;table-responsive&quot;&gt;

    &lt;table class=&quot;table table-shopping&quot;&gt;

        &lt;thead&gt;

            &lt;tr&gt;

                &lt;th class=&quot;text-center&quot;&gt;&lt;/th&gt;

                &lt;th &gt;Product&lt;/th&gt;

                &lt;th class=&quot;th-description&quot;&gt;Description&lt;/th&gt;

                &lt;th class=&quot;text-right&quot;&gt;Price&lt;/th&gt;

                &lt;th class=&quot;text-right&quot;&gt;Qty&lt;/th&gt;

                &lt;th class=&quot;text-right&quot;&gt;Amount&lt;/th&gt;

                &lt;th&gt;&lt;/th&gt;

            &lt;/tr&gt;

        &lt;/thead&gt;

        &lt;tbody&gt;

            &lt;tr&gt;

                &lt;td&gt;

                    &lt;div class=&quot;img-container&quot;&gt;

                        &lt;img src=&quot;img/shopping.jpg&quot; alt=&quot;...&quot;&gt;

                    &lt;/div&gt;

                &lt;/td&gt;

                &lt;td class=&quot;td-name&quot;&gt;

                    Moleskine Agenda

                &lt;/td&gt;

                &lt;td&gt;

                    &lt;b&gt;Meeting Notes&lt;/b&gt;

                    &lt;p&gt;

                    Most beautiful agenda for the office.&lt;/p&gt;

                &lt;/td&gt;



                &lt;td class=&quot;td-number&quot;&gt;

                    &lt;small&gt;&amp;euro;&lt;/small&gt;49

                &lt;/td&gt;

                &lt;td class=&quot;td-number&quot;&gt;

                    &lt;small&gt;x&lt;/small&gt;25

                &lt;/td&gt;

                &lt;td class=&quot;td-number&quot;&gt;

                    &lt;small&gt;&amp;euro;&lt;/small&gt;1,225

                &lt;/td&gt;

                &lt;td class=&quot;td-actions&quot;&gt;

                    &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; data-placement=&quot;left&quot; title=&quot;Aprove&quot; class=&quot;btn btn-info btn-simple btn-icon&quot;&gt;

                        &lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt;

                    &lt;/button&gt;

                    &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; data-placement=&quot;left&quot; title=&quot;Remove item&quot; class=&quot;btn btn-danger btn-simple btn-icon &quot;&gt;

                        &lt;i class=&quot;fa fa-times&quot;&gt;&lt;/i&gt;

                    &lt;/button&gt;

                    &lt;button type=&quot;button&quot; rel=&quot;tooltip&quot; data-placement=&quot;left&quot; title=&quot;Wishlist&quot; class=&quot;btn btn-default btn-simple btn-icon&quot;&gt;

                        &lt;i class=&quot;fa fa-heart-o&quot;&gt;&lt;/i&gt;

                    &lt;/button&gt;

                &lt;/td&gt;

            &lt;/tr&gt;

            &lt;tr&gt;

                &lt;td colspan=&quot;2&quot;&gt;&lt;/td&gt;

                &lt;td&gt;&lt;/td&gt;

                &lt;td class=&quot;td-total&quot;&gt;

                   Total

                &lt;/td&gt;

                &lt;td class=&quot;td-price&quot;&gt;

                    &lt;small&gt;&amp;euro;&lt;/small&gt;1,225

                &lt;/td&gt;

                &lt;td&gt; &lt;button type=&quot;button&quot; class=&quot;btn btn-info btn-fill btn-l&quot;&gt;Complete Purchase &lt;i class=&quot;fa fa-chevron-right&quot;&gt;&lt;/i&gt;&lt;/button&gt;&lt;/td&gt;



                &lt;td&gt;&lt;/td&gt;

            &lt;/tr&gt;

        &lt;/tbody&gt;

    &lt;/table&gt;

        &lt;/div&gt;
    </pre>
    </div>
        </div>
    </div>
    <!-- end row -->

    <!-- comments row -->
    <div class="tim-row" id="comments-row">
        <h2>Comments Area</h2>
        <legend></legend>
        <p>
        For the comments section, we used the Bootstrap classes for media, to which we added the "media-post" class. You can use the former class for the area in which a user can post a comment.<br />
        All comments should be placed in the class "media-area". There is also a class for smaller comments area called “media-area-small”; use it for a tighter space, it will shrink the text and pictures.<br /><br />
        You can see more examples <a href="index.html#comments">here</a>.</p>
    </div>
    <!-- end row -->

    <!-- cards row -->
    <div class="tim-row" id="cards-row">
        <h2>Cards</h2>
        <legend></legend>
        <p>There are a lot of beautiful cards! They are one of the best way to organise your information. We went over board with possibilities and we recommended finding the right fit for your product. The general class for a card is called "card". All cards have also a plain version, without the background and shadow, and you can reach it by using the "card-plain" class. IF you want them structured horizontally, just add the “card-horizontal” class.</p>

        <h4>Blog Cards</h4>
        <p>Blog cards have 3 areas: the image area defined by the "image" class and the content area with the class "content" on the bottom. <br />
        The image part of the card can take filters, that show on the hover action. We recommend adding specific action for the object the cards defines here. The filters come with 7 options, black being the default one. To choose the color, use of the “filter-{color = black[default], white,blue,azure,green,orange,red}” options. <br />
        If you have multiple cards, with different stories, it is easy to put them into categories and identify them more easily by using the following: <code>&lt;p class= “category”&gt;&lt;/p&gt;</code> (which represents the category). The category part of the content can contain icons, text or both on all color options. <br />
        One way to organize the content area is by having a title , for which you should use the "title" class, and a description, class "description".<br />
        If you want a footer for your card, we recommend placing it inside the content area, with the "footer" class. The footer is made of the stats (using the class "stats") and author (class "author"). Stats can have icons or icons and text. The author part can have icon and name, or picture and name.<br />
        See all possibilities in detail <a href="index.html#blog-cards">here</a>.
        </p>
        <div class="card">
            <div class="image">
                <img src="img/thumb.jpg" alt="..."/>
                <div class="filter filter-white">
                    <button type="button" class="btn btn-default btn-simple">
                        <i class="fa fa-image"></i> Preview
                    </button>
                    <button type="button" class="btn btn-success btn-simple">
                        <i class="fa fa-check"></i> Publish
                    </button>
                    <button type="button" class="btn btn-danger btn-simple">
                        <i class="fa fa-times"></i> Delete
                    </button>
                </div>
            </div>
            <div class="content">
                <p class="category">Latest from <a href="">Best Stories</a></p>
                <a href="#">
                    <h4 class="title">Get Shit Done Kit PRO, the most wanted bootstrap kit is here </h4>
                </a>
                <a href="#">
                    <p class="description">Edgerank completely fails to have the effect it was originally designed for nice product. This will be a really interesting post about Facebook's biggest mistake yet...</p>
                </a>
                 <div class="footer">
                    <div class="author">
                        <a class="card-link" href="#">
                             <img src="img/default-avatar.png" alt="..." class="avatar">
                             <span> Alex Paduraru</span>
                        </a>
                    </div>
                    <div class="stats pull-right">
                         <a href="#">
                            <i class="fa fa-comments"></i> 89
                         </a>
                    </div>
                    <div class="stats pull-right">
                        <a href="#">
                            <i class="fa fa-heart"></i> 341
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="area-line">
            <a data-target="#blogCard" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
    <div id="blogCard" class="collapse">
    <pre class="prettyprint">
    &lt;div class=&quot;card&quot;&gt;

        &lt;div class=&quot;image&quot;&gt;

            &lt;img src=&quot;img/thumb.jpg&amp;fit=max&amp;fm=jpg&amp;auto=format&amp;s=5c4d815f60933514c19eda5655f240eb&quot; alt=&quot;...&quot;/&gt;

            &lt;div class=&quot;filter filter-white&quot;&gt;

                &lt;button type=&quot;button&quot; class=&quot;btn btn-default btn-simple&quot;&gt;

                    &lt;i class=&quot;fa fa-image&quot;&gt;&lt;/i&gt; Preview

                &lt;/button&gt;

                &lt;button type=&quot;button&quot; class=&quot;btn btn-success btn-simple&quot;&gt;

                    &lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Publish

                &lt;/button&gt;

                &lt;button type=&quot;button&quot; class=&quot;btn btn-danger btn-simple&quot;&gt;

                    &lt;i class=&quot;fa fa-times&quot;&gt;&lt;/i&gt; Delete

                &lt;/button&gt;

            &lt;/div&gt;

        &lt;/div&gt;

        &lt;div class=&quot;content&quot;&gt;

            &lt;p class=&quot;category&quot;&gt;Latest from &lt;a href=&quot;&quot;&gt;Best Stories&lt;/a&gt;&lt;/p&gt;

            &lt;a href=&quot;#&quot;&gt;

                &lt;h4 class=&quot;title&quot;&gt;Get Shit Done Kit PRO, the most wanted bootstrap kit is here &lt;/h4&gt;

            &lt;/a&gt;

            &lt;a href=&quot;#&quot;&gt;

                &lt;p class=&quot;description&quot;&gt;Edgerank completely fails to have the effect it was originally designed for nice product. This will be a really interesting post about Facebook&apos;s biggest mistake yet...&lt;/p&gt;

            &lt;/a&gt;

             &lt;div class=&quot;footer&quot;&gt;

                &lt;div class=&quot;author&quot;&gt;

                    &lt;a class=&quot;card-link&quot; href=&quot;#&quot;&gt;

                         &lt;img src=&quot;img/default-avatar.png&quot; alt=&quot;...&quot; class=&quot;avatar&quot;&gt;

                         &lt;span&gt; Alex Paduraru&lt;/span&gt;

                    &lt;/a&gt;

                &lt;/div&gt;

                &lt;div class=&quot;stats pull-right&quot;&gt;

                     &lt;a href=&quot;#&quot;&gt;

                        &lt;i class=&quot;fa fa-comments&quot;&gt;&lt;/i&gt; 89

                     &lt;/a&gt;

                &lt;/div&gt;

                &lt;div class=&quot;stats pull-right&quot;&gt;

                    &lt;a href=&quot;#&quot;&gt;

                        &lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; 341

                    &lt;/a&gt;

                &lt;/div&gt;

            &lt;/div&gt;

        &lt;/div&gt;

    &lt;/div&gt;
    </pre>
    </div>
        </div>

        <h4>Profile Cards</h4>
        <p>
            The profile cards are defined by the "card-profile" class. They have the same image and content structure as the blog card. You can use your own image for the "image" area, or you can go with the default white one. If you do not want your card to be differentiated from the background, you can use the "card-plain" class.<br />
            To see more examples, please go <a href="index.html#profile-cards">here</a>.
        </p>
        <div class="row">
            <div class="col-md-5">
            <div class="card card-user">
            <div class="image">
                 <img src="img/thumb.jpg" alt="..."/>
            </div>
            <div class="content">
                <div class="author">
                    <a href="#">
                    <img class="avatar" src="img/default-avatar.png" alt="..."/>

                      <h4 class="title">Creative Tim <br />
                         <small>Designer</small>
                      </h4>
                    </a>
                </div>
                <p class="description text-center">
                    <i class="fa fa-map-marker text-muted"></i> Bucharest, Romania <br>
                    <i class="fa fa-envelope-o text-muted"></i> hello@creative-tim.com <br>
                    <i class="fa fa-clock-o text-muted"></i> Since 2013
                </p>
            </div>
            <hr>
            <div class="text-center">
                <button href="#" class="btn btn-social btn-simple"><i class="fa fa-facebook-square"></i></button>
                <button href="#" class="btn btn-social btn-simple"><i class="fa fa-twitter"></i></button>
                <button href="#" class="btn btn-social btn-simple"><i class="fa fa-google-plus-square"></i></button>

            </div>
        </div> <!-- end card -->
            </div>
        </div>
        <div class="area-line">
            <a data-target="#profileCard" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
    <div id="profileCard" class="collapse">
    <pre class="prettyprint">
    &lt;div class=&quot;card card-user&quot;&gt;

        &lt;div class=&quot;image&quot;&gt;

             &lt;img src=&quot;img/thumb.jpg&quot; alt=&quot;...&quot;/&gt;

        &lt;/div&gt;

        &lt;div class=&quot;content&quot;&gt;

            &lt;div class=&quot;author&quot;&gt;

            	&lt;a href=&quot;#&quot;&gt;

                &lt;img class=&quot;avatar&quot; src=&quot;img/default-avatar.png&quot; alt=&quot;...&quot;/&gt;


                  &lt;h4 class=&quot;title&quot;&gt;Creative Tim &lt;br /&gt;

                     &lt;small&gt;Designer&lt;/small&gt;

                  &lt;/h4&gt;

                &lt;/a&gt;

            &lt;/div&gt;

            &lt;p class=&quot;description text-center&quot;&gt;

                &lt;i class=&quot;fa fa-map-marker text-muted&quot;&gt;&lt;/i&gt; Bucharest, Romania &lt;br&gt;

                &lt;i class=&quot;fa fa-envelope-o text-muted&quot;&gt;&lt;/i&gt; hello@creative-tim.com &lt;br&gt;

                &lt;i class=&quot;fa fa-clock-o text-muted&quot;&gt;&lt;/i&gt; Since 2013

            &lt;/p&gt;

        &lt;/div&gt;

        &lt;hr&gt;

        &lt;div class=&quot;text-center&quot;&gt;

            &lt;button href=&quot;#&quot; class=&quot;btn btn-social btn-simple&quot;&gt;&lt;i class=&quot;fa fa-facebook-square&quot;&gt;&lt;/i&gt;&lt;/button&gt;

            &lt;button href=&quot;#&quot; class=&quot;btn btn-social btn-simple&quot;&gt;&lt;i class=&quot;fa fa-twitter&quot;&gt;&lt;/i&gt;&lt;/button&gt;

            &lt;button href=&quot;#&quot; class=&quot;btn btn-social btn-simple&quot;&gt;&lt;i class=&quot;fa fa-google-plus-square&quot;&gt;&lt;/i&gt;&lt;/button&gt;



        &lt;/div&gt;

    &lt;/div&gt; &lt;!-- end card --&gt;
    </pre>
    </div>
        </div>

        <h4>Product Cards</h4>
        <p>The class that defines the product cards is called "card-product". It has the same structure of image and content, like the ones described above.<br />
            Inside the "image" class you can also use a carousel for product bundles. <br />
            We added a class for price called "price". If you wish to show a special promotion, you can use the classes "price-old" and "price-new". <br />
            We added a new class of buttons for this cards, called "btn-hover". You should use it if you wish for the button to appear on the hover action for the card. The button that appears on hover can best be used for actions such as “Favourite, Wishlist, View Later”. <br />
             To see more examples, please go <a href="index.html#product-cards">here</a>.
         </p>
         <div class="row">
            <div class="col-md-5">
            <div class="card card-product">
                <div class="image">
                    <div id="card-product-carousel" class="carousel slide" data-ride="carousel">
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="img/product.jpg" alt="">
                        </div>
                        <div class="item">
                          <img src="img/product.jpg" alt="">
                        </div>
                        <div class="item">
                          <img src="img/product.jpg" alt="">
                        </div>
                      </div>

                      <!-- Controls -->
                      <a class="left carousel-control" href="#card-product-carousel" data-slide="prev">
                        <span class="fa fa-angle-left"></span>
                      </a>
                      <a class="right carousel-control" href="#card-product-carousel" data-slide="next">
                        <span class="fa fa-angle-right"></span>
                      </a>
                    </div>
                </div>
                <div class="content">
                    <a href="#">
                        <h4 class="title">Burberry Collection</h4>
                    </a>
                    <p class="description">
                       Leaf-Print Cotton, Silk-Blend Shirt and Cashmere-Blend Blanket
                    </p>
                    <div class="footer">
                        <span class="price price-old">&euro; 549</span>
                        <span class="price price-new">&euro; 449</span>
                        <button class="btn btn-default btn-fill pull-right btn-xs btn-hover">
                            <i class="fa fa-star"></i>
                        </button>
                    </div>
                </div>
            </div> <!-- end card -->
            </div>
         </div>
        <div class="area-line">
            <a data-target="#productCard" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
    <div id="productCard" class="collapse">
    <pre class="prettyprint">
    &lt;div class=&quot;card card-product&quot;&gt;

        &lt;div class=&quot;image&quot;&gt;

            &lt;div id=&quot;card-product-carousel&quot; class=&quot;carousel slide&quot; data-ride=&quot;carousel&quot;&gt;

              &lt;!-- Wrapper for slides --&gt;

              &lt;div class=&quot;carousel-inner&quot;&gt;

                &lt;div class=&quot;item active&quot;&gt;

                  &lt;img src=&quot;img/product.jpg&quot; alt=&quot;&quot;&gt;

                &lt;/div&gt;

                &lt;div class=&quot;item&quot;&gt;

                  &lt;img src=&quot;img/product.jpg&quot; alt=&quot;&quot;&gt;

                &lt;/div&gt;

                &lt;div class=&quot;item&quot;&gt;

                  &lt;img src=&quot;img/product.jpg&quot; alt=&quot;&quot;&gt;

                &lt;/div&gt;

              &lt;/div&gt;



              &lt;!-- Controls --&gt;

              &lt;a class=&quot;left carousel-control&quot; href=&quot;#card-product-carousel&quot; data-slide=&quot;prev&quot;&gt;

                &lt;span class=&quot;fa fa-angle-left&quot;&gt;&lt;/span&gt;

              &lt;/a&gt;

              &lt;a class=&quot;right carousel-control&quot; href=&quot;#card-product-carousel&quot; data-slide=&quot;next&quot;&gt;

                &lt;span class=&quot;fa fa-angle-right&quot;&gt;&lt;/span&gt;

              &lt;/a&gt;

            &lt;/div&gt;

        &lt;/div&gt;

        &lt;div class=&quot;content&quot;&gt;

            &lt;a href=&quot;#&quot;&gt;

                &lt;h4 class=&quot;title&quot;&gt;Burberry Collection&lt;/h4&gt;

            &lt;/a&gt;

            &lt;p class=&quot;description&quot;&gt;

               Leaf-Print Cotton, Silk-Blend Shirt and Cashmere-Blend Blanket

            &lt;/p&gt;

            &lt;div class=&quot;footer&quot;&gt;

                &lt;span class=&quot;price price-old&quot;&gt;&amp;euro; 549&lt;/span&gt;

                &lt;span class=&quot;price price-new&quot;&gt;&amp;euro; 449&lt;/span&gt;

                &lt;button class=&quot;btn btn-default btn-fill pull-right btn-xs btn-hover&quot;&gt;

                    &lt;i class=&quot;fa fa-star&quot;&gt;&lt;/i&gt;

                &lt;/button&gt;

            &lt;/div&gt;

        &lt;/div&gt;

    &lt;/div&gt; &lt;!-- end card --&gt;
    </pre>
    </div>
        </div>

        <h4>Refine Section</h4>
        <p>Information shown on cards is most likely homogenous and you should be able to provide the user an easy way to search and filter. To do this, we provide a refine card. The class for it is called "card-refine". Due to large number of categories, this area can get pretty long, so we also created a class called “panel-scroll” to make areas scrollable. <br />
        </p>

        <div class="row">
            <div class="col-md-5">
             <div class="card card-refine">
                            <div class="header">
                                <h4 class="title">Refine
                                    <button class="btn btn-default btn-xs btn pull-right btn-simple" rel="tooltip" title="Reset Filter">
                                        <i class="fa fa-refresh"></i>
                                    </button>
                                 </h4>
                            </div>
                            <div class="content">
                                  <div class="panel-group" id="accordion">

                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <h6 class="panel-title">
                                        <a data-toggle="collapse" href="#refinePrice">
                                          Price Range
                                          <i class="fa fa-caret-up pull-right"></i>
                                        </a>
                                      </h6>
                                    </div>
                                    <div id="refinePrice" class="panel-collapse collapse in">
                                      <div class="panel-body">
                                         <span class="price price-left">&euro; 100</span>
                                         <span class="price price-right">&euro; 850</span>
                                         <div class="clearfix"></div>
                                         <div id="refine-price-range" class="slider slider-info"></div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <h6 class="panel-title">
                                        <a data-toggle="collapse" href="#refineClothing" class="collapsed">
                                          Clothing
                                          <i class="fa fa-caret-up pull-right"></i>
                                        </a>
                                      </h6>
                                    </div>
                                    <div id="refineClothing" class="panel-collapse collapse">
                                      <div class="panel-body">
                                         <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                            Blazers
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Casual Shirts
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Formal Shirts
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Jeans
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Polos
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Pyjamas
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Shorts
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Trousers
                                          </label>
                                      </div>
                                    </div>
                                  </div>


                                   <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <h6 class="panel-title">
                                        <a data-toggle="collapse" href="#refineDesigner">
                                          Designer
                                          <i class="fa fa-caret-up pull-right"></i>
                                        </a>
                                      </h6>
                                    </div>
                                    <div id="refineDesigner" class="panel-collapse collapse in">
                                      <div class="panel-body panel-scroll">
                                         <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                            All
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Acne Studio
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Alex Mill
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Alexander McQueen
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Alfred Dunhill
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            AMI
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Berena
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Berluti
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Burberry Prorsum
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Calvin Klein
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Canali
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Club Monaco
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Dolce & Gabbana
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Gucci
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Kolor
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Lanvin
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Loro Piana
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Massimo Alba
                                          </label>
                                      </div>
                                    </div>
                                  </div><!-- end panel -->

                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <h6 class="panel-title">
                                        <a data-toggle="collapse" href="#refineColour" class="collapsed">
                                          Colour
                                          <i class="fa fa-caret-up pull-right"></i>
                                        </a>
                                      </h6>
                                    </div>
                                    <div id="refineColour" class="panel-collapse collapse">
                                      <div class="panel-body">
                                         <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                            All
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Black
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Blue
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Brown
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Gray
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Green
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Neutrals
                                          </label>
                                          <label class="checkbox">
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Purple
                                          </label>
                                      </div>
                                    </div>
                                  </div> <!-- end panel -->

                                </div>
                            </div>
                        </div> <!-- end card -->
            </div>
        </div>

        <div class="area-line">
            <a data-target="#refineCard" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
    <div id="refineCard" class="collapse">
    <pre class="prettyprint">

     &lt;div class=&quot;card card-refine&quot;&gt;

            &lt;div class=&quot;header&quot;&gt;

                &lt;h4 class=&quot;title&quot;&gt;Refine

                    &lt;button class=&quot;btn btn-default btn-xs btn pull-right btn-simple&quot; rel=&quot;tooltip&quot; title=&quot;Reset Filter&quot;&gt;

                        &lt;i class=&quot;fa fa-refresh&quot;&gt;&lt;/i&gt;

                    &lt;/button&gt;

                 &lt;/h4&gt;

            &lt;/div&gt;

            &lt;div class=&quot;content&quot;&gt;

                  &lt;div class=&quot;panel-group&quot; id=&quot;accordion&quot;&gt;



                  &lt;div class=&quot;panel panel-default&quot;&gt;

                    &lt;div class=&quot;panel-heading&quot;&gt;

                      &lt;h6 class=&quot;panel-title&quot;&gt;

                        &lt;a data-toggle=&quot;collapse&quot; href=&quot;#refinePrice&quot;&gt;

                          Price Range

                          &lt;i class=&quot;fa fa-caret-up pull-right&quot;&gt;&lt;/i&gt;

                        &lt;/a&gt;

                      &lt;/h6&gt;

                    &lt;/div&gt;

                    &lt;div id=&quot;refinePrice&quot; class=&quot;panel-collapse collapse in&quot;&gt;

                      &lt;div class=&quot;panel-body&quot;&gt;

                         &lt;span class=&quot;price price-left&quot;&gt;&amp;euro; 100&lt;/span&gt;

                         &lt;span class=&quot;price price-right&quot;&gt;&amp;euro; 850&lt;/span&gt;

                         &lt;div class=&quot;clearfix&quot;&gt;&lt;/div&gt;

                         &lt;div id=&quot;refine-price-range&quot; class=&quot;slider slider-info&quot;&gt;&lt;/div&gt;

                      &lt;/div&gt;

                    &lt;/div&gt;

                  &lt;/div&gt;



                  &lt;div class=&quot;panel panel-default&quot;&gt;

                    &lt;div class=&quot;panel-heading&quot;&gt;

                      &lt;h6 class=&quot;panel-title&quot;&gt;

                        &lt;a data-toggle=&quot;collapse&quot; href=&quot;#refineClothing&quot; class=&quot;collapsed&quot;&gt;

                          Clothing

                          &lt;i class=&quot;fa fa-caret-up pull-right&quot;&gt;&lt;/i&gt;

                        &lt;/a&gt;

                      &lt;/h6&gt;

                    &lt;/div&gt;

                    &lt;div id=&quot;refineClothing&quot; class=&quot;panel-collapse collapse&quot;&gt;

                      &lt;div class=&quot;panel-body&quot;&gt;

                         &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot; checked=&quot;&quot;&gt;

                            Blazers

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Casual Shirts

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Formal Shirts

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Jeans

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Polos

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Pyjamas

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Shorts

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Trousers

                          &lt;/label&gt;

                      &lt;/div&gt;

                    &lt;/div&gt;

                  &lt;/div&gt;





                   &lt;div class=&quot;panel panel-default&quot;&gt;

                    &lt;div class=&quot;panel-heading&quot;&gt;

                      &lt;h6 class=&quot;panel-title&quot;&gt;

                        &lt;a data-toggle=&quot;collapse&quot; href=&quot;#refineDesigner&quot;&gt;

                          Designer

                          &lt;i class=&quot;fa fa-caret-up pull-right&quot;&gt;&lt;/i&gt;

                        &lt;/a&gt;

                      &lt;/h6&gt;

                    &lt;/div&gt;

                    &lt;div id=&quot;refineDesigner&quot; class=&quot;panel-collapse collapse in&quot;&gt;

                      &lt;div class=&quot;panel-body panel-scroll&quot;&gt;

                         &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot; checked=&quot;&quot;&gt;

                            All

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Acne Studio

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Alex Mill

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Alexander McQueen

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Alfred Dunhill

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            AMI

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Berena

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Berluti

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Burberry Prorsum

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Calvin Klein

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Canali

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Club Monaco

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Dolce &amp; Gabbana

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Gucci

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Kolor

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Lanvin

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Loro Piana

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Massimo Alba

                          &lt;/label&gt;

                      &lt;/div&gt;

                    &lt;/div&gt;

                  &lt;/div&gt;&lt;!-- end panel --&gt;



                  &lt;div class=&quot;panel panel-default&quot;&gt;

                    &lt;div class=&quot;panel-heading&quot;&gt;

                      &lt;h6 class=&quot;panel-title&quot;&gt;

                        &lt;a data-toggle=&quot;collapse&quot; href=&quot;#refineColour&quot; class=&quot;collapsed&quot;&gt;

                          Colour

                          &lt;i class=&quot;fa fa-caret-up pull-right&quot;&gt;&lt;/i&gt;

                        &lt;/a&gt;

                      &lt;/h6&gt;

                    &lt;/div&gt;

                    &lt;div id=&quot;refineColour&quot; class=&quot;panel-collapse collapse&quot;&gt;

                      &lt;div class=&quot;panel-body&quot;&gt;

                         &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot; checked=&quot;&quot;&gt;

                            All

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Black

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Blue

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Brown

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Gray

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Green

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Neutrals

                          &lt;/label&gt;

                          &lt;label class=&quot;checkbox&quot;&gt;

                            &lt;input type=&quot;checkbox&quot; value=&quot;&quot; data-toggle=&quot;checkbox&quot;&gt;

                            Purple

                          &lt;/label&gt;

                      &lt;/div&gt;

                    &lt;/div&gt;

                  &lt;/div&gt; &lt;!-- end panel --&gt;



                &lt;/div&gt;

            &lt;/div&gt;

        &lt;/div&gt; &lt;!-- end card --&gt;
    </pre>
    </div>
        </div>

        <h4>Price Cards</h4>
        <p>
            We created a special set of classes designed to help you create your price options in your website. If you want to describe the options on every card with a list, please the use the class “list-lines”. <br />
            If you want to see examples, please go <a href="index.html#price-cards">here</a>. Here is a fully coded version of a price card:
        </p>
        <div class="row">
            <div class="col-md-5">
                <div class="card card-price">
                    <div class="content">
                        <h6 class="category">Photoshop Elements</h6>
                        <h1 class="price">
                            <small>&euro;</small>39 <small>/mo</small>
                        </h1>

                        <ul class="list-unstyled list-lines">
                            <li>
                                <i class="fa fa-comments"></i> <b>10,000</b> Messages
                            </li>
                            <li>
                                <i class="fa fa-magic"></i> <b>Unlimited</b> Combinations
                            </li>
                            <li>
                                <i class="fa fa-male"></i> <b>Too much</b> Users
                            </li>
                            <li>
                                <i class="fa fa-level-up"></i> <b>Free</b> Updates
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                       <button type="button" class="btn btn-info btn-fill btn-block">Get this Package</button>
                    </div>
                </div> <!-- end card -->
            </div>
        </div>
        <div class="area-line">
         <a data-target="#priceCard" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
    <div id="priceCard" class="collapse">
    <pre class="prettyprint">
    &lt;div class=&quot;card card-price&quot;&gt;

        &lt;div class=&quot;content&quot;&gt;

            &lt;h6 class=&quot;category&quot;&gt;Photoshop Elements&lt;/h6&gt;

            &lt;h1 class=&quot;price&quot;&gt;

                &lt;small&gt;&amp;euro;&lt;/small&gt;39 &lt;small&gt;/mo&lt;/small&gt;

            &lt;/h1&gt;



            &lt;ul class=&quot;list-unstyled list-lines&quot;&gt;

                &lt;li&gt;

                    &lt;i class=&quot;fa fa-comments&quot;&gt;&lt;/i&gt; &lt;b&gt;10,000&lt;/b&gt; Messages

                &lt;/li&gt;

                &lt;li&gt;

                    &lt;i class=&quot;fa fa-magic&quot;&gt;&lt;/i&gt; &lt;b&gt;Unlimited&lt;/b&gt; Combinations

                &lt;/li&gt;

                &lt;li&gt;

                    &lt;i class=&quot;fa fa-male&quot;&gt;&lt;/i&gt; &lt;b&gt;Too much&lt;/b&gt; Users

                &lt;/li&gt;

                &lt;li&gt;

                    &lt;i class=&quot;fa fa-level-up&quot;&gt;&lt;/i&gt; &lt;b&gt;Free&lt;/b&gt; Updates

                &lt;/li&gt;

            &lt;/ul&gt;

        &lt;/div&gt;

        &lt;div class=&quot;footer&quot;&gt;

           &lt;button type=&quot;button&quot; class=&quot;btn btn-info btn-fill btn-block&quot;&gt;Get this Package&lt;/button&gt;

        &lt;/div&gt;

    &lt;/div&gt; &lt;!-- end card --&gt;
    </pre>
    </div>
        </div>
        <p class="space-top">Like we mentioned before, all cards are usable in the plain version too. If you wish to use the price cards in the plain version, it is best to use the "card-price-separator” class to create a division between them. You can see an example <a href="index.html#plain-price-cards">here</a>. </p>

        <h4>Full Background Cards</h4>
        <p>To use this special kind of cards, you have to add the “card-background” to the card. You can use all filters mentioned above by adding the “filter filter-{color}” class inside the "image" class.<br />
            We created a javascript function that takes the background for every card and fits it perfectly, so that the cards looks nice no matter the size. This is how you can call it: <code>gsdk.fitBackgroundForCards();</code> <br />
            To see more examples of full background cards, please go <a href="index.html#full-background-cards">here</a>.
         </p>
         <h4><small>Apartment Card</small></h4>
         <div class="row" >
            <div class="col-md-7">
                <div class="card card-background">
                    <div class="image">
                        <img src="img/thumb.jpg" alt="..."/>
                        <div class="filter"></div>
                    </div>
                     <div class="content">
                        <h5 class="price">&euro; 129,00
                             <a href="#" class="pull-right">
                                <i class="fa fa-heart"></i>
                             </a>
                         </h5>
                        <a href="#"><br>
                            <h4 class="title">Premium Apartment in Old Town</h4>

                        </a>
                    </div>
                    <div class="footer">
                       <div class="author">
                            <a href="#">
                               <img src="img/default-avatar.png" alt="..." class="avatar">
                               <span>Alex</span>
                            </a>
                        </div>
                       <div class="stats pull-right">
                            <i class="fa fa-comment"></i>  253 Reviews
                       </div>
                    </div>
                </div> <!-- end card -->
            </div>
         </div>
         <div class="area-line">
         <a data-target="#apartmentCard" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
    <div id="apartmentCard" class="collapse">
    <pre class="prettyprint">
    &lt;div class=&quot;card card-background&quot;&gt;

        &lt;div class=&quot;image&quot;&gt;

            &lt;img src=&quot;img/thumb.jpg&quot; alt=&quot;...&quot;/&gt;

            &lt;div class=&quot;filter&quot;&gt;&lt;/div&gt;

        &lt;/div&gt;

         &lt;div class=&quot;content&quot;&gt;

            &lt;h5 class=&quot;price&quot;&gt;&amp;euro; 129,00

                 &lt;a href=&quot;#&quot; class=&quot;pull-right&quot;&gt;

                    &lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;

                 &lt;/a&gt;

             &lt;/h5&gt;

            &lt;a href=&quot;#&quot;&gt;&lt;br&gt;

                &lt;h4 class=&quot;title&quot;&gt;Premium Apartment in Old Town&lt;/h4&gt;



            &lt;/a&gt;

        &lt;/div&gt;

        &lt;div class=&quot;footer&quot;&gt;

           &lt;div class=&quot;author&quot;&gt;

                &lt;a href=&quot;#&quot;&gt;

                   &lt;img src=&quot;img/default-avatar.png&quot; alt=&quot;...&quot; class=&quot;avatar&quot;&gt;

                   &lt;span&gt;Alex&lt;/span&gt;

                &lt;/a&gt;

            &lt;/div&gt;

           &lt;div class=&quot;stats pull-right&quot;&gt;

                &lt;i class=&quot;fa fa-comment&quot;&gt;&lt;/i&gt;  253 Reviews

           &lt;/div&gt;

        &lt;/div&gt;

    &lt;/div&gt; &lt;!-- end card --&gt;
    </pre>
    </div>
         </div>

         <h4>Video Card</h4>
         <p>The video card is an extension to the full background card, having the background made of video. To use, you need to add the "video" tag inside your card. The "video" tag needs an id attribute, since you need to control the "play" and "pause" actions for it. <br />
             Inside the card you need to place the very important play button. If the video is in play mode, the button will be transformed in pause. Having this button is crucial, since he represents the trigger for the video and contains all the needed information in its attributes data-video = “id-video” si data-toggle=”video”.
         </p>
         <div class="row">
            <div class="col-md-7">
                 <div class="card card-background">
                            <div class="video">
                                <video id="video-source" preload="auto" loop="loop" muted="muted" volume="0">
                                    <source src="video/nyc_skyline.webm" type="video/webm">
                                    <source src="video/nyc_skyline.ogv" type="video/ogg">
                                    <source src="video/nyc_skyline.mp4" type="video/mp4">
                                    Video not supported
                                </video>
                                <div class="filter"></div>
                            </div>
                            <div class="content">
                                 <p class="category">
                                    Featured
                                </p>
                                <h4 class="title">Get Shit Done Kit Pro is here...</h4>
                            </div>
                            <div class="footer">
                                 <button type="button" data-video="video-source" data-toggle="video" class="btn btn-neutral btn-round">
                                    <i class="fa fa-play"></i> Play
                                </button>
                                 <div class="stats pull-right">
                                        <i class="fa fa-comment"></i> 68
                                   </div>
                                   <div class="stats pull-right">
                                        <i class="fa fa-heart"></i> 221
                                   </div>
                            </div>
                        </div> <!-- end card -->
            </div>
         </div>
         <div class="area-line">
            <a data-target="#videoCard" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
    <div id="videoCard" class="collapse">
    <pre class="prettyprint">
    &lt;div class=&quot;card card-background&quot;&gt;

        &lt;div class=&quot;video&quot;&gt;

            &lt;video id=&quot;video-source&quot; preload=&quot;auto&quot; loop=&quot;loop&quot; muted=&quot;muted&quot; volume=&quot;0&quot;&gt;

                &lt;source src=&quot;video/nyc_skyline.webm&quot; type=&quot;video/webm&quot;&gt;

                &lt;source src=&quot;video/nyc_skyline.ogv&quot; type=&quot;video/ogg&quot;&gt;

                &lt;source src=&quot;video/nyc_skyline.mp4&quot; type=&quot;video/mp4&quot;&gt;

                Video not supported

            &lt;/video&gt;

            &lt;div class=&quot;filter&quot;&gt;&lt;/div&gt;

        &lt;/div&gt;

        &lt;div class=&quot;content&quot;&gt;

             &lt;p class=&quot;category&quot;&gt;

                Featured

            &lt;/p&gt;

            &lt;h4 class=&quot;title&quot;&gt;Get Shit Done Kit Pro is here...&lt;/h4&gt;

        &lt;/div&gt;

        &lt;div class=&quot;footer&quot;&gt;

             &lt;button type=&quot;button&quot; data-video=&quot;video-source&quot; data-toggle=&quot;video&quot; class=&quot;btn btn-neutral btn-round&quot;&gt;

                &lt;i class=&quot;fa fa-play&quot;&gt;&lt;/i&gt; Play

            &lt;/button&gt;

             &lt;div class=&quot;stats pull-right&quot;&gt;

                    &lt;i class=&quot;fa fa-comment&quot;&gt;&lt;/i&gt; 68

               &lt;/div&gt;

               &lt;div class=&quot;stats pull-right&quot;&gt;

                    &lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; 221

               &lt;/div&gt;

        &lt;/div&gt;

    &lt;/div&gt; &lt;!-- end card --&gt;



    &lt;!-- javascript --&gt;

    gsdk.initVideoCards();
    </pre>
    </div>
        </div>

        <h4>Map Card</h4>
        <p>
            Google Maps Card is an extension of the full background card. To be able to use it, you need a link to Google Maps and Javascript function to initialize it.
        </p>
        <div class="card card-background">
            <div class="map" id="map"></div>
        </div> <!-- end card -->
        <div class="area-line">
            <a data-target="#mapsCard" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
    <div id="mapsCard" class="collapse">
    <pre class="prettyprint">
    &lt;!-- html code --&gt;

     &lt;div class=&quot;card card-background&quot;&gt;

                            &lt;div class=&quot;map&quot; id=&quot;map&quot;&gt;&lt;/div&gt;

                        &lt;/div&gt; &lt;!-- end card --&gt;





    &lt;!-- link to google maps plugin --&gt;

    &lt;script type=&quot;text/javascript&quot; src=&quot;https://maps.googleapis.com/maps/api/js?sensor=false&quot;&gt;&lt;/script&gt;



    &lt;!-- init in page --&gt;

    initGoogleMaps();



    &lt;!-- javascript function --&gt;

    function initGoogleMaps(){

        var myLatlng = new google.maps.LatLng(44.433530, 26.093928);

        var mapOptions = {

          zoom: 14,

          center: myLatlng,

          scrollwheel: false, //we disable de scroll over the map, it is a really annoing when you scroll through page

        }

        var map = new google.maps.Map(document.getElementById(&quot;map&quot;), mapOptions);



        var marker = new google.maps.Marker({

            position: myLatlng,

            title:&quot;Hello World!&quot;

        });



        // To add the marker to the map, call setMap();

        marker.setMap(map);

    }
    </pre>
    </div>
        </div>

    </div>
    <!-- end row -->


    <!-- datepicker row -->
    <div class="tim-row" id="datepicker-row">
        <h2>Datepicker</h2>
        <legend></legend>
        <p>The re-styled the Bootstrap datepicker and we added the Get Shit Done colors, which you can give as parameter to the plugin: color = {blue,azure,green,orange,red}.</p>
        <div class="row">
            <div class="col-md-4">
                <input class="datepicker form-control" type="text"/>
            </div>
        </div>
        <div class="area-line">
            <a data-target="#datepicker" href="javascript: void(0);" data-toggle="collapse"> See Markup and Javascript</a>
    <div id="datepicker" class="collapse">
    <pre class="prettyprint">
    &lt;!-- markup --&gt;

    &lt;input class=&quot;datepicker form-control&quot; type=&quot;text&quot;/&gt;



    &lt;!-- javascript --&gt;

    $(&apos;.datepicker&apos;).datepicker({

             weekStart:1,

             color: &apos;{color}&apos;

    });
    </pre>
    </div>
        </div>
    </div>
    <!-- end row -->

    <!-- modals row -->
    <div class="tim-row" id="modal-row">
        <h2>Modals</h2>
        <legend></legend>
        <p>We restyled the classic Bootstrap Modal and gave it a more simple look.<br />
            You can see more examples or custom modals <a href="index.html#modals">here</a>. <br>
			<br>
			<b>IMPORTANT!</b> Please make sure you place the modal body outside of the "div.wrapper" tag.
        </p>
        <!-- Button trigger modal -->
        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Launch demo modal</button>

        <div class="area-line">
             <a data-target="#modals" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
    <div id="modals" class="collapse">
    <pre class="prettyprint">
    &lt;!-- Button trigger modal --&gt;

    &lt;button class=&quot;btn btn-primary&quot; data-toggle=&quot;modal&quot; data-target=&quot;#myModal&quot;&gt;

      Launch demo modal

    &lt;/button&gt;



    &lt;!-- Modal Core --&gt;

    &lt;div class=&quot;modal fade&quot; id=&quot;myModal&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;myModalLabel&quot; aria-hidden=&quot;true&quot;&gt;

      &lt;div class=&quot;modal-dialog&quot;&gt;

        &lt;div class=&quot;modal-content&quot;&gt;

          &lt;div class=&quot;modal-header&quot;&gt;

            &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/button&gt;

            &lt;h4 class=&quot;modal-title&quot; id=&quot;myModalLabel&quot;&gt;Modal title&lt;/h4&gt;

          &lt;/div&gt;

          &lt;div class=&quot;modal-body&quot;&gt;

            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.

          &lt;/div&gt;

          &lt;div class=&quot;modal-footer&quot;&gt;

            &lt;button type=&quot;button&quot; class=&quot;btn btn-default btn-simple&quot; data-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;

            &lt;button type=&quot;button&quot; class=&quot;btn btn-info btn-simple&quot;&gt;Save&lt;/button&gt;

          &lt;/div&gt;

        &lt;/div&gt;

      &lt;/div&gt;

    &lt;/div&gt;
    </pre>
    </div>
        </div>
    </div>
    <!-- end row -->

    <!-- tooltip row -->
    <div class="tim-row" id="tooltip-row">
            <h2> Tooltips</h2>
            <legend></legend>
            <p style="margin-bottom: 45px;">
            We restyled the Bootstrap tooltip.
            </p>
            <button type="button" class="btn btn-default btn-tooltip" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Button with Tooltip</button>
            <div class="area-line">
            <a data-target="#tooltipMarkup" href="javascript: void(0);" data-toggle="collapse">See Markup and Javascript</a>
    <div id="tooltipMarkup" class="collapse">
    <pre class="prettyprint">
    &lt;!-- Markup --&gt;

    &lt;button type=&quot;button&quot; class=&quot;btn btn-default btn-tooltip&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Tooltip on top&quot; &gt;Button with Tooltip&lt;/button&gt;

    &lt;!-- Javascript --&gt;
    $(&apos;.btn-tooltip&apos;).tooltip();
    </pre>
    </div>
            </div>
    </div>
    <!-- end row -->

    <!-- popover row -->
    <div class="tim-row" id="popover-row">
        <h2>Popovers</h2>
        <legend></legend>
        <p>
            We restyled the Bootstrap popover and we added an extra effect of opening. When the popover is active, the background of the page gets darker, letting you concentrate on the information inside the popover. <br />
            See the following example:
        </p>
        <button type="button" class="btn btn-default" data-toggle="popover" data-placement="top" title="Popover on top" data-content="Here will be some very useful information about his popover.">On top</button>
        <div class="area-line">
                <a data-target="#popover" href="javascript: void(0);" data-toggle="collapse">See Markup and Javascript</a>

    <div id="popover" class="collapse">
    <pre class="prettyprint">
    &lt;!-- markup --&gt;

    &lt;button type=&quot;button&quot; class=&quot;btn btn-default&quot; data-toggle=&quot;popover&quot; data-placement=&quot;top&quot; title=&quot;Popover on top&quot; data-content=&quot;Here will be some very useful information about his popover.&quot;&gt;On top&lt;/button&gt;



    &lt;!-- javascript --&gt;

    gsdk.initPopovers();
    </pre>
    </div>
        </div>
    </div>
    <!-- end row -->

    <!-- collapsable groups row -->
    <div class="tim-row" id="collapsable-row">
            <h2> Collapsable Groups </h2>
            <legend></legend>
                <p>
                The Get Shit Done Kit has new classes for collapsable groups which offer a nice sneak peak into the content of the body of the group.
                <br />
                If you want to stick with the old classes, they remain compatible. If you want to see the new ones, you will have to add data-toggle="gsdk-collapse" instead of "collapse".
                </p>
                <p>
                Here is an example of both the groups. The first two are done using the preview on hover and the third one is classical.
                </p>
                <div id="acordeon">
                    <div class="panel-group" id="accordion">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-target="#collapseOne" href="#collapseOne" data-toggle="gsdk-collapse">
                              Collapsible Group Item #1
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                          <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-target="#collapseTwo" href="#collapseTwo" data-toggle="gsdk-collapse">
                              Collapsible Group Item #2
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                          <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapseThree">
                              Collapsible Group Item #3
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                          <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                    </div>

                </div><!--  end acordeon -->
                <div class="area-line">
                <a data-target="#acordeonCode" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
    <div id="acordeonCode" class="collapse">
    <pre class="prettyprint">
    &lt;div id=&quot;acordeon&quot;&gt;

        &lt;div class=&quot;panel-group&quot; id=&quot;accordion&quot;&gt;

          &lt;div class=&quot;panel panel-default&quot;&gt;

            &lt;div class=&quot;panel-heading&quot;&gt;

              &lt;h4 class=&quot;panel-title&quot;&gt;

                &lt;a data-target=&quot;#collapseOne&quot; href=&quot;#collapseOne&quot; data-toggle=&quot;gsdk-collapse&quot;&gt;

                  Collapsible Group Item #1

                &lt;/a&gt;

              &lt;/h4&gt;

            &lt;/div&gt;

            &lt;div id=&quot;collapseOne&quot; class=&quot;panel-collapse collapse&quot;&gt;

              &lt;div class=&quot;panel-body&quot;&gt;

                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&apos;t heard of them accusamus labore sustainable VHS.

              &lt;/div&gt;

            &lt;/div&gt;

          &lt;/div&gt;

          &lt;div class=&quot;panel panel-default&quot;&gt;

            &lt;div class=&quot;panel-heading&quot;&gt;

              &lt;h4 class=&quot;panel-title&quot;&gt;

                &lt;a data-target=&quot;#collapseTwo&quot; href=&quot;#collapseTwo&quot; data-toggle=&quot;gsdk-collapse&quot;&gt;

                  Collapsible Group Item #2

                &lt;/a&gt;

              &lt;/h4&gt;

            &lt;/div&gt;

            &lt;div id=&quot;collapseTwo&quot; class=&quot;panel-collapse collapse&quot;&gt;

              &lt;div class=&quot;panel-body&quot;&gt;

                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&apos;t heard of them accusamus labore sustainable VHS.

              &lt;/div&gt;

            &lt;/div&gt;

          &lt;/div&gt;

          &lt;div class=&quot;panel panel-default&quot;&gt;

            &lt;div class=&quot;panel-heading&quot;&gt;

              &lt;h4 class=&quot;panel-title&quot;&gt;

                &lt;a data-toggle=&quot;collapse&quot; href=&quot;#collapseThree&quot;&gt;

                  Collapsible Group Item #3

                &lt;/a&gt;

              &lt;/h4&gt;

            &lt;/div&gt;

            &lt;div id=&quot;collapseThree&quot; class=&quot;panel-collapse collapse&quot;&gt;

              &lt;div class=&quot;panel-body&quot;&gt;

                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&apos;t heard of them accusamus labore sustainable VHS.

              &lt;/div&gt;

            &lt;/div&gt;

          &lt;/div&gt;

        &lt;/div&gt;



    &lt;/div&gt;&lt;!--  end acordeon --&gt;
    </pre>
    </div>
                </div>
    </div>
    <!-- end row -->

    <!-- charts row -->
    <div class="tim-row" id="charts-row">
        <h2>Charts</h2>
        <legend></legend>
        <p>For the implementation of graphic charts, we used the Chartist plugin and added our custom styles. The plugin is free to download and use <a href="http://gionkunz.github.io/chartist-js/">here</a>. The guys behind the project did an awesome job and we recommend using it. Besides all the great customisation that you have using it, it is also fully responsive.</p>
        <h4>Line Chart</h4>
        <p>We recommend using this chart when you have easy to understand information, that can be conveyed in a single line throughout a continuous period. </p>
        <div class="row">
            <div class="col-md-8">
            <h4><small>24 Hours Performance</small></h4>
            <div id="chartPerformance" class="ct-chart ct-perfect-fourth"></div>
            </div>
        </div>
        <div class="area-line">
            <a data-target="#lineChart" href="javascript: void(0);" data-toggle="collapse">See Full Implementation</a>
    <div id="lineChart" class="collapse">
    <pre class="prettyprint">
    &lt;!-- graphic area in html --&gt;



    &lt;h4&gt; &lt;br&gt;&lt;small&gt;24 Hours Performance&lt;/small&gt;&lt;/h4&gt;

    &lt;div id=&quot;chartPerformance&quot; class=&quot;ct-chart ct-perfect-fourth&quot;&gt;&lt;/div&gt;



    &lt;!-- javascript --&gt;

    var dataPerformance = {

      labels: [&apos;9pm&apos;, &apos;2am&apos;, &apos;8am&apos;, &apos;2pm&apos;, &apos;8pm&apos;],

      series: [

        [1, 6, 8, 7, 4, 7, 8, 12, 16, 17, 14, 13]

      ]

    };



    var optionsPerformance = {

      showPoint: false,

      lineSmooth: true,

      axisX: {

        showGrid: false,

        showLabel: true

      },

      axisY: {

        offset: 40,

      },

      low: 0,

      high: 20

    };



    Chartist.Line(&apos;#chartPerformance&apos;, dataPerformance, optionsPerformance);
    </pre>
    </div>
        </div>

        <h4>Line Chart with Points</h4>
        <p>This graphic is best used when you have multiple results for different points and you want to show a correlation (growth, down-side, etc).</p>
        <div class="row">
            <div class="col-md-8">
                <h4><small>NASDAQ: AAPL</small></h4>
                <div id="chartStock" class="ct-chart ct-perfect-fourth"></div>
            </div>
        </div>
        <div class="area-line">
                <a data-target="#lineChartPoints" href="javascript: void(0);" data-toggle="collapse">See Full Implementation</a>

    <div id="lineChartPoints" class="collapse">
    <pre class="prettyprint">

    &lt;!-- graphic area in html --&gt;

    &lt;h4&gt;&lt;/small&gt; &lt;br&gt;&lt;small&gt;NASDAQ: AAPL&lt;/small&gt;&lt;/h4&gt;

    &lt;div id=&quot;chartStock&quot; class=&quot;ct-chart ct-perfect-fourth&quot;&gt;&lt;/div&gt;



    &lt;!-- javascript --&gt;

    var dataStock = {

      labels: [&apos;2009&apos;, &apos;2010&apos;, &apos;2011&apos;, &apos;2012&apos;, &apos;2013&apos;, &apos;2014&apos;],

      series: [

        [22.20, 28.16, 34.90, 42.28, 47.26, 48.89, 51.93, 55.32, 59.21, 62.21, 75.50, 80.23, 60.32, 55.03, 62.21, 78.83, 82.12, 89.21, 102.50, 107.23]

      ]

    };



    var optionsStock = {

      lineSmooth: false,

      axisY: {

        offset: 40,

        labelInterpolationFnc: function(value) {

            return &apos;$&apos; + value;

          }



      },

      low: 10,

      high: 110,

       classNames: {

          point: &apos;ct-point ct-green&apos;,

          line: &apos;ct-line ct-green&apos;

      }

    };



    var $chart = $(&apos;#chartStock&apos;);



    Chartist.Line(&apos;#chartStock&apos;, dataStock, optionsStock);
    </pre>
    </div>
            </div>

        <h4>Multiple Lines Chart</h4>
        <p>We recommend you use this graphic when you need to show multiple functions in the same visual element. For example, you can see a correlation between the registered versus active users. Always try to use a legend when you have multiple elements in the graphic.</p>
        <div class="row">
                <div class="col-md-8">
                     <h4><small>Users Behavior</small></h4>
                     <div id="chartSales" class="ct-chart ct-perfect-fourth"></div>
                     <h6>Legend</h6>
                     <i class="fa fa-circle text-info"></i> Visited Site<br>
                     <i class="fa fa-circle text-success"></i> Register<br>
                     <i class="fa fa-circle text-warning"></i> Login 2nd time
                </div>
        </div>
        <div class="area-line">
            <a data-target="#multipleLinesChart" href="javascript: void(0);" data-toggle="collapse">See Full Implementation</a>

    <div id="multipleLinesChart" class="collapse">
    <pre class="prettyprint">
    &lt;!-- graphic area in html --&gt;

    &lt;h4&gt;&lt;small&gt;Users Behavior&lt;/small&gt;&lt;/h4&gt;

    &lt;div id=&quot;chartSales&quot; class=&quot;ct-chart ct-perfect-fourth&quot;&gt;&lt;/div&gt;

    &lt;h6&gt;Legend&lt;/h6&gt;

    &lt;i class=&quot;fa fa-circle text-info&quot;&gt;&lt;/i&gt; Visited Site&lt;br&gt;

    &lt;i class=&quot;fa fa-circle text-success&quot;&gt;&lt;/i&gt; Register&lt;br&gt;

    &lt;i class=&quot;fa fa-circle text-warning&quot;&gt;&lt;/i&gt; Login 2nd time



    &lt;!-- javascript --&gt;

    var dataSales = {

      labels: [&apos;2009&apos;, &apos;2010&apos;, &apos;2011&apos;, &apos;2012&apos;, &apos;2013&apos;, &apos;2014&apos;],

      series: [

        [287, 385, 490, 492, 554, 586, 698, 695, 752, 788, 846, 944],

        [67, 152, 143, 240, 287, 335, 435, 437, 539, 542, 544, 647],

        [23, 113, 67, 108, 190, 239, 307, 308, 439, 410, 410, 509]

      ]

    };



    var optionsSales = {

      lineSmooth: false,

      axisY: {

        offset: 40

      },

      low: 0,

      high: 1000

    };



    Chartist.Line(&apos;#chartSales&apos;, dataSales, optionsSales);
    </pre>
    </div>
        </div>

        <h4>Pie Chart</h4>
        <p>A pie chart is the easiest way to represent an information. Use it whenever you want to show something understandable at once.</p>
        <div class="row">
            <div class="col-md-8">
                <h4><small>Public Preferences</small></h4>
                 <div class="row margin-top">
                     <div class="col-md-10 col-md-offset-1">
                         <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-10 col-md-offset-1">
                         <h6>Legend</h6>
                         <i class="fa fa-circle text-info"></i> Apple
                         <i class="fa fa-circle text-success"></i> Samsung
                         <i class="fa fa-circle text-warning"></i> BlackBerry
                         <i class="fa fa-circle text-danger"></i> Windows Phone
                     </div>
                 </div>
            </div>
        </div>
        <div class="area-line">
                <a data-target="#pieChart" href="javascript: void(0);" data-toggle="collapse">See Full Implementation</a>

    <div id="pieChart" class="collapse">
    <pre class="prettyprint">
    &lt;!-- graphic area in html --&gt;

    &lt;h4&gt;&lt;small&gt;Public Preferences&lt;/small&gt;&lt;/h4&gt;

    &lt;div class=&quot;row margin-top&quot;&gt;

     &lt;div class=&quot;col-md-10 col-md-offset-1&quot;&gt;

         &lt;div id=&quot;chartPreferences&quot; class=&quot;ct-chart ct-perfect-fourth&quot;&gt;&lt;/div&gt;

     &lt;/div&gt;

    &lt;/div&gt;

    &lt;div class=&quot;row&quot;&gt;

     &lt;div class=&quot;col-md-10 col-md-offset-1&quot;&gt;

         &lt;h6&gt;Legend&lt;/h6&gt;

         &lt;i class=&quot;fa fa-circle text-info&quot;&gt;&lt;/i&gt; Apple

         &lt;i class=&quot;fa fa-circle text-success&quot;&gt;&lt;/i&gt; Samsung

         &lt;i class=&quot;fa fa-circle text-warning&quot;&gt;&lt;/i&gt; BlackBerry

         &lt;i class=&quot;fa fa-circle text-danger&quot;&gt;&lt;/i&gt; Windows Phone

     &lt;/div&gt;

    &lt;/div&gt;



    &lt;!-- javascript --&gt;

    Chartist.Pie(&apos;#chartPreferences&apos;, {

      labels: [&apos;46%&apos;,&apos;28%&apos;,&apos;15%&apos;,&apos;11%&apos;],

      series: [46, 28, 15, 11]

    });
    </pre>
    </div>
        </div>

        <h4>Bar Chart</h4>
        <p>We recommend using the bar chart whenever you want to show progress over periods of time. Here is an example.</p>
        <div class="row">
            <div class="col-md-8">
                <h4><small>Views</small></h4>
                <div id="chartViews" class="ct-chart ct-perfect-fourth"></div>
            </div>
        </div>
        <div class="area-line">
                <a data-target="#barChart" href="javascript: void(0);" data-toggle="collapse">See Full Implementation</a>
    <div id="barChart" class="collapse">
    <pre class="prettyprint">
    &lt;!-- graphic area in html --&gt;

    &lt;h4&gt;&lt;small&gt;Views&lt;/small&gt;&lt;/h4&gt;

    &lt;div id=&quot;chartViews&quot; class=&quot;ct-chart ct-perfect-fourth&quot;&gt;&lt;/div&gt;



    &lt;!-- javascript --&gt;

    var dataViews = {

      labels: [&apos;Jan&apos;, &apos;Feb&apos;, &apos;Mar&apos;, &apos;Apr&apos;, &apos;Mai&apos;, &apos;Jun&apos;, &apos;Jul&apos;, &apos;Aug&apos;, &apos;Sep&apos;, &apos;Oct&apos;, &apos;Nov&apos;, &apos;Dec&apos;],

      series: [

        [542, 443, 320, 780, 553, 453, 326, 434, 568, 610, 756, 895]

      ]

    };



    var optionsViews = {

      seriesBarDistance: 10,

      classNames: {

        bar: &apos;ct-bar ct-azure&apos;

      },

      axisX: {

        showGrid: false

      }

    };



    var responsiveOptionsViews = [

      [&apos;screen and (max-width: 640px)&apos;, {

        seriesBarDistance: 5,

        axisX: {

          labelInterpolationFnc: function (value) {

            return value[0];

          }

        }

      }]

    ];



    Chartist.Bar(&apos;#chartViews&apos;, dataViews, optionsViews, responsiveOptionsViews);
    </pre>
    </div>
        </div>

        <h4>Multiple Bars Chart</h4>
        <p>Go for multiple bars charts if you want to show two indicators side by side.</p>
        <div class="row">
            <div class="col-md-8">
                <h4>Activity <br><small>Multiple Bars Chart</small></h4>
                <div id="chartActivity" class="ct-chart ct-perfect-fourth"></div>
                <h6>Legend</h6>
                <span class="label label-info">Views</span>
                <span class="label label-success">Reads</span>
            </div>
        </div>
        <div class="area-line">
                <a data-target="#multipleBarsChart" href="javascript: void(0);" data-toggle="collapse">See Full Implementation</a>

    <div id="multipleBarsChart" class="collapse">
    <pre class="prettyprint">
    &lt;!-- graphic area in html --&gt;

    &lt;h4&gt;Activity &lt;br&gt;&lt;small&gt;Multiple Bars Chart&lt;/small&gt;&lt;/h4&gt;

    &lt;div id=&quot;chartActivity&quot; class=&quot;ct-chart ct-perfect-fourth&quot;&gt;&lt;/div&gt;

    &lt;h6&gt;Legend&lt;/h6&gt;

    &lt;span class=&quot;label label-info&quot;&gt;Views&lt;/span&gt;

    &lt;span class=&quot;label label-success&quot;&gt;Reads&lt;/span&gt;



    &lt;!-- javascript --&gt;

    var data = {

      labels: [&apos;Jan&apos;, &apos;Feb&apos;, &apos;Mar&apos;, &apos;Apr&apos;, &apos;Mai&apos;, &apos;Jun&apos;, &apos;Jul&apos;, &apos;Aug&apos;, &apos;Sep&apos;, &apos;Oct&apos;, &apos;Nov&apos;, &apos;Dec&apos;],

      series: [

        [542, 443, 320, 780, 553, 453, 326, 434, 568, 610, 756, 895],

        [412, 243, 280, 580, 453, 353, 300, 364, 368, 410, 636, 695]

      ]

    };



    var options = {

      seriesBarDistance: 10,

       axisX: {

            showGrid: false

        }

    };



    var responsiveOptions = [

      [&apos;screen and (max-width: 640px)&apos;, {

        seriesBarDistance: 5,

        axisX: {

          labelInterpolationFnc: function (value) {

            return value[0];

          }

        }

      }]

    ];



    Chartist.Bar(&apos;#chartActivity&apos;, data, options, responsiveOptions);
    </pre>
    </div>
        </div>
    </div>
    <!-- end row -->

    <!-- notification row -->
    <div class="tim-row" id="notification-row">
            <h2> Notifications </h2>
            <legend></legend>
            <p>
            The new Get Shit Done notification are looking fresh and clean. They go great with the navbar. If you want to see how we recommend using them, see <a href="notification.html"> this example.</a> <br><br>
		 	You can also use it like "alert <b>alert-auto-close</b>" if you want the notification to be automatically closed in 5 seconds.</p>
    </div>


    <!-- end row -->

    </div>
                <!-- end container -->
            </div>
        </div>
        </div>
    </div>
    </div>
    <footer class="footer footer-transparent">
        <div class="container">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="http://www.creative-tim.com/product/get-shit-done-pro">
                            Get Shit Done Pro
                        </a>
                    </li>
                    <li>
                        <a href="http://www.creative-tim.com">
                            Creative Tim
                        </a>
                    </li>
                    <li>
                        <a href="http://blog.creative-tim.com">
                           Blog
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="social-area pull-right">
                <a class="btn btn-social btn-twitter btn-simple" href="https://twitter.com/CreativeTim">
                    <i class="fa fa-twitter"></i>
                </a>
                <a class="btn btn-social btn-facebook btn-simple" href="https://www.facebook.com/CreativeTim">
                    <i class="fa fa-facebook-square"></i>
                </a>
                <a class="btn btn-social btn-google btn-simple" href="https://plus.google.com/+CreativetimPage">
                    <i class="fa fa-google-plus"></i>
                </a>
            </div>
            <div class="copyright">
                &copy; 2016 Creative Tim, made with love
            </div>
        </div>
    </footer>

</div>

<!-- Modal Core -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title" id="myModalLabel">Modal title</h4>
	  </div>
	  <div class="modal-body">
		Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
		<button type="button" class="btn btn-info btn-simple">Save</button>
	  </div>
	</div>
  </div>
</div>


</body>
    <!--  jQuery and Bootstrap core files    -->
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
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!--  Get Shit Done Kit PRO Core javascript 	 -->
	<script src="js/get-shit-done.js"></script>

    <!--  Get Shit Done Kit PRO methods used for demo purpose      -->
    <script src="js/demo.js"></script>

    <script>
        var transparent = true;
        var header_height;
        var fixed_section;
        var floating = false;

        $().ready(function(){
            suggestions_distance = $("#suggestions").offset();
            header_height = $('.parallax').outerHeight() + 20;
            pay_height = $('.fixed-section').outerHeight();
            fixed_section = $('.fixed-section');

            initMorphingButtons();
            initDemoChartist();
            initGoogleMaps();


            if($(document).width() > 768){
                activateScrollCheck();
            }

        });

        $( "#slider-range" ).slider({
        	range: true,
        	min: 0,
        	max: 500,
        	values: [ 75, 300 ],
        });
        $( "#slider-default" ).slider({
        		value: 70,
        		orientation: "horizontal",
        		range: "min",
        		animate: true
        });

        $('.radio').on('toggle', function() { });

        function activateScrollCheck(){
            $(window).on('scroll',function(){
                checkScrollForPresentationNavbar();
            });
        }

        var checkScrollForPresentationNavbar = debounce(function() {
        	if($(this).scrollTop() > 470 ) {
                if(transparent) {
                    transparent = false;
                    $('nav[role="navigation"]').removeClass('navbar-transparent').addClass('navbar-small');
                    $('#issueButton').addClass('btn-info').removeClass('btn-neutral');

                }
            } else {
                if( !transparent ) {
                    transparent = true;
                    $('nav[role="navigation"]').addClass('navbar-transparent').removeClass('navbar-small');
                    $('#issueButton').addClass('btn-neutral').removeClass('btn-info');
                }
            }

            if($(this).scrollTop() > header_height ) {
                    if(!floating) {
                        floating = true;
                        fixed_section.addClass('float');
                    }
                } else {
                    if( floating ) {
                        floating = false;
                        fixed_section.removeClass('float');
                    }
                }
        }, 4);

    </script>

    <!-- If you are using TypeKit.com uncomment this code otherwise you can delete it -->
    <!--
    <script src="https://use.typekit.net/[your kit code here].js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    -->

    <!-- If you have retina @2x images on your server which can be sent to iPhone/iPad/MacRetina, please uncomment the next line, otherwise you can delete it -->
	<!-- <script src="js/retina.min.js"></script> -->


</html>
