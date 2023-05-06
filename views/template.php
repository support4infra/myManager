<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>SGU - <?php echo $viewDados['nomeEntidade'];?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="#">
        <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
        <meta name="author" content="#">
        <link rel="icon" href="..\assets\images\favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="..\assets\bower_components\bootstrap\css\bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="..\assets\icon\feather\css\feather.css">
        <link rel="stylesheet" type="text/css" href="..\assets\icon\font-awesome\css\font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="..\assets\css\style.css">
        <link rel="stylesheet" type="text/css" href="..\assets\css\jquery.mCustomScrollbar.css">
        <link rel="stylesheet" type="text/css" href="..\assets\icon\themify-icons\themify-icons.css">
        <link rel="stylesheet" type="text/css" href="..\assets\icon\icofont\css\icofont.css">
        <link rel="stylesheet" type="text/css" href="..\assets\icon\feather\css\feather.css">
        <link rel="stylesheet" type="text/css" href="..\assets\css\style.css">
        <link rel="stylesheet" type="text/css" href="..\assets\css\jquery.mCustomScrollbar.css">
    </head>
    <body>
        <div class="theme-loader">
            <div class="ball-scale">
                <div class='contain'>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                </div>
            </div>
        </div>    
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                <?php include 'templates/topo.php' ;?>              
                <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="feather icon-chevron-left"></i> Josephin Doe
                    </a>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="..\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media-right photo-table">
                        <a href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="..\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                        </a>
                    </div>
                </div>
                <div class="chat-reply-box p-b-20">
                    <div class="right-icon-control">
                        <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                        <div class="form-icon">
                            <i class="feather icon-navigation"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php include 'templates/menu.php' ;?>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <?php $this->loadViewInTemplate($viewName, $viewDados);?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="..\assets\pages\form-validation\form-validation.js"></script>
        <script type="text/javascript" src="..\assets\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
        <script type="text/javascript" src="..\assets\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
        <script type="text/javascript" src="..\assets\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
        <script type="text/javascript" src="..\assets\bower_components\i18next\js\i18next.min.js"></script>
        <script type="text/javascript" src="..\assets\pages\form-validation\validate.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
        <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
        <script type="text/javascript" src="..\assets\bower_components\jquery\js\jquery.min.js"></script>
        <script type="text/javascript" src="..\assets\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
        <script type="text/javascript" src="..\assets\bower_components\popper.js\js\popper.min.js"></script>
        <script type="text/javascript" src="..\assets\bower_components\bootstrap\js\bootstrap.min.js"></script>
        <script type="text/javascript" src="..\assets\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
        <script type="text/javascript" src="..\assets\bower_components\modernizr\js\modernizr.js"></script>
        <script type="text/javascript" src="..\assets\bower_components\modernizr\js\css-scrollbars.js"></script>
        <script type="text/javascript" src="..\assets\bower_components\chart.js\js\Chart.js"></script>
        <script src="..\assets\pages\widget\amchart\amcharts.js"></script>
        <script src="..\assets\pages\widget\amchart\serial.js"></script>
        <script src="..\assets\pages\widget\amchart\light.js"></script>
        <script type="text/javascript" src="..\assets\js\SmoothScroll.js"></script>
        <script src="..\assets\js\pcoded.min.js"></script>
        <script src="..\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="..\assets\js\vartical-layout.min.js"></script>
        <script type="text/javascript" src="..\assets\pages\dashboard\analytic-dashboard.min.js"></script>
        <script type="text/javascript" src="..\assets\js\script.js"></script>
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-23581568-13');
        </script>
    </body>
</html>
