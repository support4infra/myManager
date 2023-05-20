
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>SGU</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="#">
        <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
        <meta name="author" content="#">
        <link rel="icon" href="..\assets\images\favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="..\assets\bower_components\bootstrap\css\bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="..\assets\icon\themify-icons\themify-icons.css">
        <link rel="stylesheet" type="text/css" href="..\assets\icon\icofont\css\icofont.css">
        <link rel="stylesheet" type="text/css" href="..\assets\css\style.css">
    </head>
    <body class="fix-menu">
        <section class="login-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <form method="POST">
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20 text-center">
                                        <div class="col-md-12">
                                            <img src="..\assets\images\logo-blue.png" alt="logo.png">
                                        </div>
                                    </div>
                                    <p class="text-muted text-center p-b-5">SGU - Sistema de Gestão Unificado</p>
                                    <?php if(isset($alerta) && !empty($alerta)):?>
                                        <div class="alert alert-danger text-center">
                                            <strong><?php echo $alerta;?></strong>
                                        </div>
                                    <?php endif; ?>
                                    <div class="form-group form-primary">
                                        <input type="email" name="email" class="form-control" placeholder="login">
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="password" name="password" class="form-control" placeholder="senha">
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <input type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="Acessar">                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript" src="..\assets\bower_components\jquery\js\jquery.min.js"></script>
        <script type="text/javascript" src="..\assets\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
        <script type="text/javascript" src="..\assets\bower_components\popper.js\js\popper.min.js"></script>
        <script type="text/javascript" src="..\assets\bower_components\bootstrap\js\bootstrap.min.js"></script>
        <script type="text/javascript" src="..\assets\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
        <script type="text/javascript" src="..\assets\bower_components\modernizr\js\modernizr.js"></script>
        <script type="text/javascript" src="..\assets\bower_components\modernizr\js\css-scrollbars.js"></script>
        <script type="text/javascript" src="..\assets\bower_components\i18next\js\i18next.min.js"></script>
        <script type="text/javascript" src="..\assets\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
        <script type="text/javascript" src="..\assets\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
        <script type="text/javascript" src="..\assets\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
        <script type="text/javascript" src="..\assets\js\common-pages.js"></script>
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-23581568-13');
        </script>
    </body>
</html>
