@extends("layouts.master")
<!DOCTYPE html>
<html lang="en">
<!--<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
    <script src="jquery.js"></script>
    <script src="bs/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/header.css">

    <link rel="stylesheet" href="../flickity.css">
    <script sr="../flickity.min.js"></script>
    <style>
        *{
            padding: 0;
            margin: 0;
        }

        .gallery{
            width: 98%;
            height: auto;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            background-color: transparent;
            margin-bottom: 30px;
            border-radius: 8px;
        }
        .gallery-cell{
            height: 300px;
            width: 100%;
            font-size: 2em;
            display: flex;
            align-items: flex-end;
            border-radius: 5px;
            justify-content: flex-end;
            font-weight: 900;
            color: #fff;
        }

        .categories{
            background-size: auto 100%;
            background-repeat: no-repeat;
            background-blend-mode: overlay;
            background-position-x: center;
            background-color: rgba(0, 0, 0, 0.623323);
        }
        .Games{
            background-image: url("../5.png");
        }
        .Roasting{
            background-image: url("../test1.jpeg");
        }
        .Stand-ups{
            background-image: url("../test2.jpg");
        }
        .Comedy{
            background-image: url("../test3.png");
        }

        @media screen and (max-width: 570px){
            .gallery{
                width: 90%;
                margin-bottom: 100px;
            }
        }

        @media screen and (max-width: 320px){
            .gallery{
                width: 100%;
                margin-bottom: 50px;
            }
        }

        @media screen and (max-width: 480px){
            .gallery{
                width: 98%;
                margin-bottom: 60px;
            }
        }
    </style>
</head>
    <body>
        <div class="header">
          <div class="menu col-md-3 col-sm-3 col-xs-3"><img src="home-back-ui.png" alt="" srcset=""></div>
          <div class="menu col-md-3 col-sm-3 col-xs-3"><img src="trending-black-ui.png" alt="" srcset=""></div>
          <div class="menu col-md-3 col-sm-3 col-xs-3"><img src="search-black-ui.png" alt="" srcset=""></div>
          <div class="menu col-md-3 col-sm-3 col-xs-3"><img src="si.png" alt="" srcset=""></div>
        </div>


<div class="main-content">
    <div class="gallery">
        <div class="gallery-cell categories Games">Games</div>
        <div class="gallery-cell categories Roasting">Roasting</div>
        <div class="gallery-cell categories Stand-ups">Stand-ups</div>
        <div class="gallery-cell categories Comedy">Comedy</div>
        <div class="gallery-cell categories Entertainment">Entertainment</div>
        <div class="gallery-cell categories Music">Rap &amp; Music</div>
    </div>
<div class="cont-cards">
    

    <div class="cards">
        <div class="head"><div class="profile-photo pp"></div><span>Identity dev and gaming</span></div>
        <div class="img"><img src="t.jpg" alt="" srcset=""></div>
        <div class="info"><div class="options">
            <div class="like fl fl-c" title="Views on post"><img src="bar-black-ui.png" alt="" srcset=""><small class="view-count">&nbsp;12334-7</small></div>
            <div class="dislike fl fl-c"><img src="logout.png" alt="" srcset=""></div>
            <div class="fl fl-c toggle-bar" ><div class="burger"><div class="ham"></div><div class="ham"></div><div class="ham"></div></div></div>
        </div><span>
            <label class="title">Brown fox jumps over the dark site</label>
            <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, voluptatum eligendi nemo cum, sit nequ<a href="#">Read More..</a></small></span></div>
    </div>
</div>
</div>

        <div class="nav nav__active">
            <div class="nav__container">
                
                <div class="nav__menu">
                    <span class="nav__menu__item">&copy;H.A.V.E.R.S</span>
                    <div class="dropdown">
                        <span class="page__header__menu__item--more">
                            <svg viewBox="0 0 512 512" fill="505050" class="options_bottom_page">
                                <path d="M255.8 218c-21 0-38 17-38 38s17 38 38 38 38-17 38-38-17-38-38-38zM102 218c-21 0-38 17-38 38s17 38 38 38 38-17 38-38-17-38-38-38zm308 0c-21 0-38 17-38 38s17 38 38 38 38-17 38-38-17-38-38-38z"></path></svg>
                            </span>
                            
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <script>
            var $isClicked = 0;
            $(document).ready(function(){

                function open_page_footer_menu_more(el, status) {
                if ($isClicked == 0) {
                    $('.page__header__menu__item--more').append('<div class="dropdown__content">  <div class="dropdown__content__item"><span>Thankful</span></div> <div class="dropdown__content__item"><a href="https://xd.undraw.co" target="_blank" rel="noopener noreferrer">For designers</a></div> <div class="dropdown__content__item"><a href="https://twitter.com/undraw_co" target="_blank" rel="noopener noreferrer">Twitter</a></div> <div class="dropdown__content__item"><a href="https://www.facebook.com/undraw.co/" target="_blank" rel="noopener noreferrer">Facebook</a></div> <div class="dropdown__content__item"><a href="https://blog.undraw.co" target="_blank" rel="noopener noreferrer">Blog</a></div> <div class="dropdown__content__item"><span>License</span></div></div>');
                    return 1;
                }else{
                    $('.page__header__menu__item--more').html('<svg viewBox="0 0 512 512" fill="505050"><path d="M255.8 218c-21 0-38 17-38 38s17 38 38 38 38-17 38-38-17-38-38-38zM102 218c-21 0-38 17-38 38s17 38 38 38 38-17 38-38-17-38-38-38zm308 0c-21 0-38 17-38 38s17 38 38 38 38-17 38-38-17-38-38-38z"></path></svg>');
                    return 0;
                }
            }

            $('.options_bottom_page').on("click",function(){ 
                // alert("inside");
              $isClicked = open_page_footer_menu_more(this) });
            });

            $('.gallery').flickity({
                contain: true
            });
        </script>
</body>
</html>-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{ asset('styles/common/app.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/common/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/welcome.css') }}">
</head>
<style>
    
</style>

<!---->

<body>
    @section('content')

    <div class="wrapper">
  <input checked type=radio name="slider" id="slide1" />
  <input type=radio name="slider" id="slide2" />
  <input type=radio name="slider" id="slide3" />
  <input type=radio name="slider" id="slide4" />
  <input type=radio name="slider" id="slide5" />

  <div class="slider-wrapper">
    <div class=inner>
      <article>
        <div class="info top-left">
          <h3>Malacca</h3></div>
        <img src="https://farm9.staticflickr.com/8059/28286750501_dcc27b1332_h_d.jpg" />
      </article>

      <article>
        <div class="info bottom-right">
          <h3>Cameron Highland</h3></div>
        <img src="https://farm6.staticflickr.com/5812/23394215774_b76cd33a87_h_d.jpg" />
      </article>

      <article>
        <div class="info bottom-left">
          <h3>New Delhi</h3></div>
        <img src="https://farm8.staticflickr.com/7455/27879053992_ef3f41c4a0_h_d.jpg" />
      </article>

      <article>
        <div class="info top-right">
          <h3>Ladakh</h3></div>
        <img src="https://farm8.staticflickr.com/7367/27980898905_72d106e501_h_d.jpg" />
      </article>

      <article>
        <div class="info bottom-left">
          <h3>Nubra Valley</h3></div>
        <img src="https://farm8.staticflickr.com/7356/27980899895_9b6c394fec_h_d.jpg" />
      </article>
    </div>
    <!-- .inner -->
  </div>
  <!-- .slider-wrapper -->

  <div class="slider-prev-next-control">
    <label for=slide1></label>
    <label for=slide2></label>
    <label for=slide3></label>
    <label for=slide4></label>
    <label for=slide5></label>
  </div>
  <!-- .slider-prev-next-control -->

  <div class="slider-dot-control">
    <label for=slide1></label>
    <label for=slide2></label>
    <label for=slide3></label>
    <label for=slide4></label>
    <label for=slide5></label>
  </div>
  <!-- .slider-dot-control -->
</div>
    <div style="margin-top: 2rem;margin-bottom: 1rem;" class="col-md-12 col-sm-12 col-xs-12">
        <div class="container-content">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="subtitle">Services</p>
                    <h2 class="section-title">Our Service Area</h2>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 mb-4">
                    <div class="card border-0 shadow rounded-xs pt-5">
                        <div class="card-body"> <i class="fa fa-object-ungroup icon-lg icon-primary icon-bg-primary icon-bg-circle mb-3"></i>
                            <h4 class="mt-4 mb-3">Networking</h4>
                            <p>For what reason would it be advisable for me to think about business content?</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 mb-4">
                    <div class="card border-0 shadow rounded-xs pt-5">
                        <div class="card-body"> <i class="fa fa-users icon-lg icon-yellow icon-bg-yellow icon-bg-circle mb-3"></i>
                            <h4 class="mt-4 mb-3">Social Activity</h4>
                            <p>For what reason would it be advisable for me to think about business content?</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 mb-4">
                    <div class="card border-0 shadow rounded-xs pt-5">
                        <div class="card-body"> <i class="fa fa-desktop icon-lg icon-purple icon-bg-purple icon-bg-circle mb-3"></i>
                            <h4 class="mt-4 mb-3">Web Design</h4>
                            <p>For what reason would it be advisable for me to think about business content?</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 mb-4">
                    <div class="card border-0 shadow rounded-xs pt-5">
                        <div class="card-body"> <i class="fa fa-cloud icon-lg icon-cyan icon-bg-cyan icon-bg-circle mb-3"></i>
                            <h4 class="mt-4 mb-3">Cloud Service</h4>
                            <p>For what reason would it be advisable for me to think about business content?</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-8 col-md-6 mb-4">
                    <div class="card border-0 shadow rounded-xs pt-5">
                        <div class="card-body"> <i class="fa fa-comments icon-lg icon-red icon-bg-red icon-bg-circle mb-3"></i>
                            <h4 class="mt-4 mb-3">Consulting</h4>
                            <p>For what reason would it be advisable for me to think about business content?</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-8 col-md-6 mb-4">
                    <div class="card border-0 shadow rounded-xs pt-5">
                        <div class="card-body"> <i class="fa fa-user icon-lg icon-orange icon-bg-orange icon-bg-circle mb-3"></i>
                            <h4 class="mt-4 mb-3">Usability Testing</h4>
                            <p>For what reason would it be advisable for me to think about business content?</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container-content mt-5 mb-5">
            <div class="col-lg-12 text-center">
                <p class="subtitle">Team</p>
                <h2 class="section-title">Our Team Members</h2>
            </div>
            <div class="row g-2">
                <div class="col-md-4 col-sm-6 col-xs-12 mb-2">
                    <div class="card p-2 py-3 text-center">
                        <div class="img mb-2"> <img src="{{ asset('images/image.png') }}" width="70" class="rounded-circle"> </div>
                        <h5 class="mb-0">Patey Cruiser</h5> <small>@dreamplayer11</small>
                        <div class="ratings mt-2"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <div class="mt-4 apointment"> <button class="btn btn-success text-uppercase">Visit</button> </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12 mb-2">
                    <div class="card p-2 py-3 text-center">
                        <div class="img mb-2"> <img src="{{ asset('images/image.png') }}" width="70" class="rounded-circle"> </div>
                        <h5 class="mb-0">Patey Cruiser</h5> <small>@dreamplayer11</small>
                        <div class="ratings mt-2"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <div class="mt-4 apointment"> <button class="btn btn-success text-uppercase">Visit</button> </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
    <script src="{{ asset('script/common/app.js') }}"></script>
    @stop
</body>