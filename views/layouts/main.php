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
      <!-- banner start -->
      <!-- ================ -->
      <div class="banner clearfix">

        <!-- slideshow start -->
        <!-- ================ -->
        <div class="slideshow">

          <!-- slider revolution start -->
          <!-- ================ -->
          <div class="slider-revolution-5-container">
            <div id="slider-banner-fullwidth" class="slider-banner-fullwidth rev_slider" data-version="5.0">
              <ul class="slides">
                <!-- slide 1 start -->
                <!-- ================ -->
                <li data-transition="random" data-slotamount="default" data-masterspeed="default" data-title="Next Generation Template">

                <!-- main image -->
                <img src="template/images/corporate-1-slider-slide-1.jpg" alt="slidebg1" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover"  class="rev-slidebg">

                <!-- Transparent Background -->
                <div class="tp-caption dark-translucent-bg"
                  data-x="center"
                  data-y="center"
                  data-start="0"
                  data-transform_idle="o:1;"
                  data-transform_in="o:0;s:600;e:Power2.easeInOut;"
                  data-transform_out="o:0;s:600;"
                  data-width="5000"
                  data-height="5000">
                </div>

                <!-- LAYER NR. 1 -->
                <div class="tp-caption large_white"
                  data-x="left"
                  data-y="110"
                  data-start="500"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];sX:1;sY:1;o:0;s:900;e:Power4.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Premium Bootstrap Template
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption large_white tp-resizeme"
                  data-x="left"
                  data-y="170"
                  data-start="650"
                  data-transform_idle="o:1;"
                  data-transform_in="o:0;s:2000;e:Power4.easeInOut;">
                    <div class="separator-2 light"></div>
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption medium_white"
                  data-x="left"
                  data-y="180"
                  data-start="650"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];sX:1;sY:1;s:900;e:Power4.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Nesciunt, maiores, aliquid.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption small_white"
                  data-x="left"
                  data-y="260"
                  data-start="900"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];sX:1;sY:1;o:0;s:900;e:Power4.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><a href="#" class="btn radius-50 btn-dark btn-animated">Read More <i class="fa fa-arrow-right"></i></a> <span class="pl-1 pr-1">or</span> <a href="page-contact.html" class="btn radius-50 btn-default btn-animated margin-clear">Contact Us <i class="fa fa-envelope"></i></a>
                </div>

                </li>
                <!-- slide 1 end -->

                <!-- slide 2 start -->
                <!-- ================ -->
                <li class="text-center" data-transition="fade" data-slotamount="default" data-masterspeed="default" data-title="Premium Bootstrap Template">

                <!-- main image -->
                <img src="template/images/corporate-1-slider-slide-2.jpg" alt="slidebg2" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover" class="rev-slidebg">

                <!-- Transparent Background -->
                <div class="tp-caption dark-translucent-bg"
                  data-x="center"
                  data-y="center"
                  data-start="0"
                  data-transform_idle="o:1;"
                  data-transform_in="o:0;s:600;e:Power2.easeInOut;"
                  data-transform_out="o:0;s:600;"
                  data-width="5000"
                  data-height="5000">
                </div>

                <!-- LAYER NR. 1 -->
                <div class="tp-caption large_white"
                  data-x="center"
                  data-y="110"
                  data-start="500"
                  data-width="650"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];sX:1;sY:1;o:0;s:900;e:Power4.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Next Generation Template
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption large_white tp-resizeme hidden-sm-down"
                  data-x="center"
                  data-y="150"
                  data-start="650"
                  data-width="500"
                  data-transform_idle="o:1;"
                  data-transform_in="o:0;s:2000;e:Power4.easeInOut;">
                    <div class="separator light"></div>
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption medium_white hidden-sm-down"
                  data-x="center"
                  data-y="180"
                  data-start="650"
                  data-width="750"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];sX:1;sY:1;s:900;e:Power4.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Nesciunt, maiores, aliquid.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption small_white text-center"
                  data-x="center"
                  data-y="260"
                  data-start="900"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];sX:1;sY:1;s:900;e:Power4.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><a href="#" class="btn radius-50 btn-dark btn-animated">Read More <i class="fa fa-arrow-right"></i></a> <span class="pl-1 pr-1">or</span> <a href="page-contact.html" class="btn radius-50 btn-default btn-animated margin-clear">Contact Us <i class="fa fa-envelope"></i></a>
                </div>

                </li>
                <!-- slide 2 end -->
              </ul>
              <div class="tp-bannertimer"></div>
            </div>
          </div>
          <!-- slider revolution end -->

        </div>
        <!-- slideshow end -->

      </div>
      <!-- banner end -->

      <div id="page-start"></div>

      <!-- section start -->
      <!-- ================ -->
      <section id="about" class="light-gray-bg pv-20">
        <div class="container">
          <div class="row justify-content-lg-center">
            <div class="col-lg-9 text-center pv-20">
              <br>
              <h1 class="title large"><span class="text-default">Wellcome</span> To The Project</h1>
              <div class="separator"></div>
              <p class="large">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi perferendis magnam ea necessitatibus, officiis voluptas odit! Aperiam omnis, cupiditate laudantium velit nostrum, exercitationem accusamus, possimus soluta illo deserunt tempora qui.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- section end -->

      <!-- main-container start -->
      <!-- ================ -->
      <section id="about-2" class="main-container">
        <div class="container">
          <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-12">

              <!-- page-title start -->
              <!-- ================ -->
              <h1 class="page-title">Who We Are</h1>
              <div class="separator-2 mb-20"></div>
              <!-- page-title end -->

              <div class="row">
                <div class="col-lg-6">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex. Suspendisse aliquet imperdiet commodo. Aenean vel lacinia elit. Class aptent taciti sociosqu ad litora torquent per.</p>
                  <p>Sed eget pulvinar quam, vel feugiat enim. Aliquam erat volutpat. Phasellus eu porta ipsum. Suspendisse aliquet imperdiet commodo. Aenean vel lacinia elit. Class aptent taciti sociosqu ad litora torquent per. Vestibulum velmo.</p>
                  <ul class="list-icons">
                    <li class="object-non-visible animated object-visible fadeInUpSmall" data-animation-effect="fadeInUpSmall"><i class="fa fa-check"></i> Etiam sed dolor ac diam volutpat</li>
                    <li class="object-non-visible animated object-visible fadeInUpSmall" data-animation-effect="fadeInUpSmall" data-effect-delay="100"><i class="fa fa-check"></i> Sed eget pulvinar quam, vel feugiat enim aliquam </li>
                    <li class="object-non-visible animated object-visible fadeInUpSmall" data-animation-effect="fadeInUpSmall" data-effect-delay="150"><i class="fa fa-check"></i> Erat volutpat. Phasellus eu porta ipsum suspendisse aliquet imperdiet</li>
                    <li class="object-non-visible animated object-visible fadeInUpSmall" data-animation-effect="fadeInUpSmall" data-effect-delay="200"><i class="fa fa-check"></i> Phasellus eu porta ipsum. Suspendisse aliquet imperdiet commodo</li>
                  </ul>
                </div>

                <!-- sidebar start -->
                <!-- ================ -->
                <aside class="sidebar col-lg-6">
                  <div class="block clearfix">
                    <div class="overlay-container">
                      <img src="template/images/page-about-2.jpg" alt="">
                      <a class="overlay-link" href="#"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                </aside>
                <!-- sidebar end -->
              </div>
            </div>
            <!-- main end -->

          </div>
        </div>
      </section>
      <!-- main-container end -->

      <!-- section start -->
      <!-- ================ -->
      <section class="light-gray-bg pv-30 clearfix">
        <div class="container">
          <div class="row justify-content-lg-center">
            <div class="col-lg-8">
              <h2 class="text-center mt-4">We <i class="fa fa-heart text-default"></i> What We Do</h2>
              <div class="separator"></div>
              <p class="large text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptas facere vero ex tempora saepe perspiciatis ducimus sequi animi.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="pv-30 feature-box margin-clear text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                <span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
                <h3>We Love Details</h3>
                <div class="separator clearfix"></div>
                <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>
                <a href="page-services.html">Read More <i class="pl-1 fa fa-angle-double-right"></i></a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="pv-30 feature-box margin-clear text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
                <span class="icon default-bg circle"><i class="fa fa-connectdevelop"></i></span>
                <h3>We Are Porro ullam volu</h3>
                <div class="separator clearfix"></div>
                <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                <a href="page-services.html">Read More <i class="pl-1 fa fa-angle-double-right"></i></a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="pv-30 feature-box margin-clear text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                <span class="icon default-bg circle"><i class="fa fa fa-snowflake-o"></i></span>
                <h3>We Use Latest Technologies</h3>
                <div class="separator clearfix"></div>
                <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                <a href="page-services.html">Read More <i class="pl-1 fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- section end -->

      <!-- section start -->
      <!-- ================ -->
      <section class="pv-40 stats padding-bottom-clear dark-translucent-bg hovered background-img-6">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-6 text-center">
              <div class="feature-box">
                <span class="icon without-bg"><i class="fa fa-diamond"></i></span>
                <h3><strong>Projects</strong></h3>
                <span class="counter" data-to="1525" data-speed="5000">0</span>
              </div>
            </div>
            <div class="col-lg-3 col-6 text-center">
              <div class="feature-box">
                <span class="icon without-bg"><i class="fa fa-users"></i></span>
                <h3><strong>Clients</strong></h3>
                <span class="counter" data-to="1225" data-speed="5000">0</span>
              </div>
            </div>
            <div class="col-lg-3 col-6 text-center">
              <div class="feature-box">
                <span class="icon without-bg"><i class="fa fa-cloud-download"></i></span>
                <h3><strong>Downloads</strong></h3>
                <span class="counter" data-to="6532" data-speed="5000">0</span>
              </div>
            </div>
            <div class="col-lg-3 col-6 text-center">
              <div class="feature-box">
                <span class="icon without-bg"><i class="fa fa-share"></i></span>
                <h3><strong>Sherot</strong></h3>
                <span class="counter" data-to="15002" data-speed="5000">0</span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- section end -->

      <!-- section -->
      <!-- ================ -->
      <section class="pv-30">
        <div class="container">
          <div class="row justify-content-lg-center">
            <div class="col-lg-8">
              <h2 class="text-center">More <strong>Services</strong></h2>
              <div class="separator"></div>
              <p class="large text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptas facere vero ex tempora saepe perspiciatis ducimus sequi animi.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                <span class="icon large default-bg circle"><i class="fa fa-diamond"></i></span>
                <h3>Great &amp; elegant</h3>
                <div class="separator clearfix"></div>
                <p class="text-muted">Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>
                <a href="page-services.html">Read More</a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                <span class="icon large dark-bg circle"><i class="fa fa-connectdevelop"></i></span>
                <h3>Porro ullam volu</h3>
                <div class="separator clearfix"></div>
                <p class="text-muted">Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                <a class="link-dark" href="page-services.html">Read More</a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
                <span class="icon large default-bg circle"><i class="fa fa-snowflake-o"></i></span>
                <h3>Latest Technologies</h3>
                <div class="separator clearfix"></div>
                <p class="text-muted">Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                <a href="page-services.html">Read More</a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                <span class="icon large dark-bg circle"><i class="fa fa-check"></i></span>
                <h3>Elegant Design</h3>
                <div class="separator clearfix"></div>
                <p class="text-muted">Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>
                <a class="link-dark" href="page-services.html">Read More</a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                <span class="icon large default-bg circle"><i class="fa fa-life-ring"></i></span>
                <h3>Unt loremcu</h3>
                <div class="separator clearfix"></div>
                <p class="text-muted">Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                <a href="page-services.html">Read More</a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
                <span class="icon large dark-bg circle"><i class="fa fa-gift"></i></span>
                <h3>Packed Full Of Features</h3>
                <div class="separator clearfix"></div>
                <p class="text-muted">Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                <a class="link-dark" href="page-services.html">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- section end -->

      <!-- section -->
      <!-- ================ -->
      <section class="pv-30 light-gray-bg padding-bottom-clear">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-lg-8">
              <h2 class="text-center mt-4">Our <strong>Portfolio</strong></h2>
              <div class="separator"></div>
              <p class="large text-center">Atque ducimus velit, earum quidem, iusto dolorem. Ex ipsam totam quas blanditiis, pariatur maxime ipsa iste, doloremque neque doloribus, error. Corrupti, tenetur.</p>
              <br>
            </div>
          </div>
        </div>
        <div class="space-bottom">
          <div class="slick-carousel carousel">
            <div class="image-box shadow text-center">
              <div class="overlay-container">
                <img src="template/images/portfolio-1.jpg" alt="">
                <div class="overlay-top">
                  <div class="text">
                    <h3><a href="portfolio-item.html">Project Title</a></h3>
                    <p class="small">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="overlay-bottom">
                  <div class="links">
                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated">View Details <i class="pl-2 fa fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="image-box shadow text-center">
              <div class="overlay-container">
                <img src="template/images/portfolio-2.jpg" alt="">
                <div class="overlay-top">
                  <div class="text">
                    <h3><a href="portfolio-item.html">Project Title</a></h3>
                    <p class="small">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="overlay-bottom">
                  <div class="links">
                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated">View Details <i class="pl-2 fa fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="image-box shadow text-center">
              <div class="overlay-container">
                <img src="template/images/portfolio-3.jpg" alt="">
                <div class="overlay-top">
                  <div class="text">
                    <h3><a href="portfolio-item.html">Project Title</a></h3>
                    <p class="small">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="overlay-bottom">
                  <div class="links">
                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated">View Details <i class="pl-2 fa fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="image-box shadow text-center">
              <div class="overlay-container">
                <img src="template/images/portfolio-4.jpg" alt="">
                <div class="overlay-top">
                  <div class="text">
                    <h3><a href="portfolio-item.html">Project Title</a></h3>
                    <p class="small">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="overlay-bottom">
                  <div class="links">
                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated">View Details <i class="pl-2 fa fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="image-box shadow text-center">
              <div class="overlay-container">
                <img src="template/images/portfolio-5.jpg" alt="">
                <div class="overlay-top">
                  <div class="text">
                    <h3><a href="portfolio-item.html">Project Title</a></h3>
                    <p class="small">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="overlay-bottom">
                  <div class="links">
                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated">View Details <i class="pl-2 fa fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="image-box shadow text-center">
              <div class="overlay-container">
                <img src="template/images/portfolio-6.jpg" alt="">
                <div class="overlay-top">
                  <div class="text">
                    <h3><a href="portfolio-item.html">Project Title</a></h3>
                    <p class="small">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="overlay-bottom">
                  <div class="links">
                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated">View Details <i class="pl-2 fa fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="slick-carousel content-slider-with-controls-autoplay dark-controls space-bottom">
            <div>
              <div class="container">
                <div class="row justify-content-md-center">
                  <div class="col-lg-8">
                    <div class="testimonial text-center">
                      <div class="testimonial-image">
                        <img src="template/images/testimonial-1.jpg" alt="Jane Doe" title="Jane Doe" class="rounded-circle">
                      </div>
                      <h3 class="mt-3">Just Perfect!</h3>
                      <div class="separator"></div>
                      <div class="testimonial-body">
                        <blockquote>
                          <p>Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan tium dolore laud antium, totam rem dolor sit amet tristique pulvinar, turpis arcu rutrum nunc, ac laoreet turpis augue a justo.</p>
                        </blockquote>
                        <div class="testimonial-info-1">- Jane Doe</div>
                        <div class="testimonial-info-2">By Company</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="container">
                <div class="row justify-content-md-center">
                  <div class="col-lg-8">
                    <div class="testimonial text-center">
                      <div class="testimonial-image">
                        <img src="template/images/testimonial-2.jpg" alt="Jane Doe" title="Jane Doe" class="rounded-circle">
                      </div>
                      <h3 class="mt-3">Amazing!</h3>
                      <div class="separator"></div>
                      <div class="testimonial-body">
                        <blockquote>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et cupiditate deleniti ratione in. Expedita nemo, quisquam, fuga adipisci omnis ad mollitia libero culpa nostrum est quia eos esse vel!</p>
                        </blockquote>
                        <div class="testimonial-info-1">- Jane Doe</div>
                        <div class="testimonial-info-2">By Company</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- section end -->

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
