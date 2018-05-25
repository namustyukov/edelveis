<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

$controllerID = Yii::$app->controller->id;
$actionID = Yii::$app->controller->action->id;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html dir="ltr" lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="front-page ">
<?php $this->beginBody() ?>

    <!-- scrollToTop -->
    <!-- ================ -->
    <div class="scrollToTop circle"><i class="fa fa-angle-up"></i></div>

    <!-- page wrapper start -->
    <!-- ================ -->
    <div class="page-wrapper">
      <!-- header-container start -->
      <div class="header-container">
        <!-- header start -->
        <!-- classes:  -->
        <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
        <!-- "fixed-desktop": enables fixed navigation only for desktop devices e.g. class="header fixed fixed-desktop clearfix" -->
        <!-- "fixed-all": enables fixed navigation only for all devices desktop and mobile e.g. class="header fixed fixed-desktop clearfix" -->
        <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
        <!-- "centered": mandatory class for the centered logo layout -->
        <!-- ================ -->
        <header class="header fixed fixed-desktop clearfix">
          <div class="container">
            <div class="row">
              <div class="col-md-auto hidden-md-down">
                <!-- header-first start -->
                <!-- ================ -->
                <div class="header-first clearfix">

                  <!-- logo -->
                  <div id="logo" class="logo">
                    <a href="/"><img id="logo_img" src="template/images/logo_light_blue.png" alt="The Project"></a>
                  </div>

                  <!-- name-and-slogan -->
                  <div class="site-slogan">
                    АНО ДТМ "Эдельвейс"
                  </div>

                </div>
                <!-- header-first end -->

              </div>
              <div class="col-lg-8 ml-auto">

                <!-- header-second start -->
                <!-- ================ -->
                <div class="header-second clearfix">
                  
                <!-- main-navigation start -->
                <!-- classes: -->
                <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                <!-- ================ -->
                <div class="main-navigation main-navigation--mega-menu  animated">
                  <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="navbar-brand clearfix hidden-lg-up">

                      <!-- logo -->
                      <div id="logo-mobile" class="logo">
                        <a href="index.html"><img id="logo-img-mobile" src="template/images/logo_light_blue.png" alt="The Project"></a>
                      </div>

                      <!-- name-and-slogan -->
                      <div class="site-slogan">
                        Multipurpose HTML5 Template
                      </div>

                    </div>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                      <!-- main-menu -->
                      <ul class="navbar-nav ml-xl-auto">
                        <li class="nav-item mega-menu mega-menu--wide">
                          <a href="index.html" class="nav-link">Главная</a>
                        </li>
                        <li class="nav-item mega-menu mega-menu--wide">
                          <a href="index.html" class="nav-link">О нас</a>
                        </li>
                        <li class="nav-item mega-menu mega-menu--wide">
                          <a href="index.html" class="nav-link">Награды и достижения</a>
                        </li>
                        <li class="nav-item mega-menu mega-menu--wide">
                          <a href="index.html" class="nav-link">Галерея</a>
                        </li>
                        <li class="nav-item mega-menu mega-menu--wide">
                          <a href="index.html" class="nav-link">Блог</a>
                        </li>
                        <li class="nav-item mega-menu mega-menu--wide">
                          <a href="index.html" class="nav-link">Контакты</a>
                        </li>
                      </ul>
                      <!-- main-menu end -->
                    </div>
                  </nav>
                </div>
                <!-- main-navigation end -->
                </div>
                <!-- header-second end -->

              </div>
            </div>
          </div>
        </header>
        <!-- header end -->
      </div>
      <!-- header-container end -->

      <?php
        if ($controllerID == 'site' && $actionID == 'index') {
          echo $content;
        } else {
      ?>
        <section class="main-container">

          <div class="container">
            <div class="row">

              <!-- main start -->
              <!-- ================ -->
              <div class="main col-12 space-bottom">
                <?= $content ?>
              </div>
              <!-- main end -->
            </div>
          </div>
        </section>
      <?php } ?>

      <!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
      <!-- ================ -->
      <footer id="footer" class="clearfix dark">

        <!-- .footer start -->
        <!-- ================ -->
        <div class="footer">
          <div class="container">
            <div class="footer-inner">
              <div class="row justify-content-xl-center">
                <div class="col-xl-10 col-12">
                  <div class="row">
                    <div class="col-md-6 col-lg-3 col-xl-6">
                      <div class="footer-content">
                        <h2 class="title">Find Me</h2>
                        <ul class="list-icons">
                          <li><i class="fa fa-map-marker pr-10 text-default"></i> One infinity loop, 54100</li>
                          <li><i class="fa fa-phone pr-10 text-default"></i> +00 1234567890</li>
                          <li><a href="mailto:email@domain.com"><i class="fa fa-envelope-o pr-10"></i>email@domain.com</a></li>
                        </ul>
                        <a class="collapsed map-show btn-lg-link padding-hor-clear" data-toggle="collapse" href="#collapseContact" aria-expanded="false" aria-controls="collapseContact"><i class="fa fa-envelope pr-20"></i>Contact Me</a>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-9 col-xl-6">
                      <div class="footer-content">
                        <h2 class="title">Follow Me</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro fugiat accusantium similique modi alias consectetur nesciunt.</p>
                        <ul class="social-links large circle animated-effect-1">
                          <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                          <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                          <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          <li class="xing"><a href="#"><i class="fa fa-xing"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="clearfix hidden-sm-up"></div>
                  <section id="collapseContact" class="collapse">
                    <div class="row justify-content-xl-center">
                      <div class="col-xl-10">
                        <div class="footer-content">
                          <h2 class="title">Contact Me</h2>
                          <form class="margin-clear">
                            <div class="row">
                              <div class="col-md-6 form-group has-feedback mb-10">
                                <label class="sr-only" for="name2">Name</label>
                                <input type="text" class="form-control" id="name2" placeholder="Name" required>
                                <i class="fa fa-user form-control-feedback pr-4"></i>
                              </div>
                              <div class="col-md-6 form-group has-feedback mb-10">
                                <label class="sr-only" for="email2">Email address</label>
                                <input type="email" class="form-control" id="email2" placeholder="Enter email" required>
                                <i class="fa fa-envelope form-control-feedback pr-4"></i>
                              </div>
                            </div>
                            <div class="form-group has-feedback mb-10">
                              <label class="sr-only" for="message2">Message</label>
                              <textarea class="form-control" rows="4" id="message2" placeholder="Message" required></textarea>
                              <i class="fa fa-pencil form-control-feedback"></i>
                            </div>
                            <input type="submit" value="Send" class="margin-clear submit-button radius-50 btn btn-default">
                          </form>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>  
            </div>
          </div>
        </div>
        <!-- .footer end -->

        <!-- .subfooter start -->
        <!-- ================ -->
        <div class="subfooter">
          <div class="container">
            <div class="subfooter-inner">
              <div class="row">
                <div class="col-md-12">
                  <p class="text-center">Copyright © 2018 The Project. All rights reserved.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .subfooter end -->

      </footer>
      <!-- footer end -->
    </div>
    <!-- page-wrapper end -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
