<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>DKT</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('fontend/img/favicon.png')}}" rel="icon">
    <link href="{{asset('fontend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('fontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/vendor/aos/aos.css" rel="stylesheet')}}">
    <link href="{{asset('fontend/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('fontend/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: FlexStart - v1.6.0
    * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">


            <span><img src="{{asset('fontend/img/Logo-DKT.png')}}" alt=""></span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">{{__('Trang Ch???')}}</a></li>
                <li><a class="nav-link scrollto" href="{{route('view.page')}}">{{__('Tin T???c')}}</a></li>
                <li><a class="nav-link scrollto" href="#services">{{__('D??? ??n')}}</a></li>
                <li><a class="nav-link scrollto" href="#portfolio">{{__('Tuy???n D???ng')}}</a></li>
                <li><a class="nav-link scrollto" href="#team">{{__('V??? Ch??ng T??i')}}</a></li>
                <li class="dropdown">
                    <a href="#" class="logo flag">
                        @if(Session::get('website_language')=='vi')
                            <img src="{{asset('fontend/img/co_vn.png')}}" height="30px" width="25px">
                        @elseif(Session::get('website_language')=='en')
                            <img src="{{asset('fontend/img/co_english.png')}}" height="30px" width="25px">
                        @else
                            <img src="{{asset('fontend/img/co_vn.png')}}" height="30px" width="25px">
                        @endif
                    </a>
                        <ul>
                        <li><a href="{!! route('user.changeLanguage',['vi']) !!}" class="logo" style="width: 0"><img src="{{asset('fontend/img/co_vn.png')}}" height="30px" width="25px">Vi???t nam</a></li>
                        <li><a href="{!! route('user.changeLanguage',['en']) !!}" class="logo" style="width: 0"><img src="{{asset('fontend/img/co_english.png')}}" height="30px" width="25px">English</a></li>
                    </ul>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Ch??ng t??i cung c???p c??c gi???i ph??p hi???n ?????i ????? ph??t tri???n doanh nghi???p c???a b???n</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Ch??ng t??i l?? ?????i ng?? c??c nh?? thi???t k??? t??i n??ng t???o ra c??c trang web b???ng Bootstrap</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>B???t ?????u</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{asset('fontend/img/hero-img.png')}}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
{{--                        <h3>Who We Are</h3>--}}
                        <h2>Gi???i thi???u chung.</h2>
                        <p>
                            C??ng ty c??? ph???n th????ng m???i ??i???n t??? DKT (DKT E-COMMERCE ,.JSC ) l?? c??ng ty ho???t ?????ng tr??n l??nh v???c th????ng m???i ??i???n t??? B2C h??ng ?????u Vi???t Nam v???i quy m?? tr???i r???ng ??? c??c qu???c gia ??? Ch??u ?? v?? Ch??u ??u.
                            Hi???n t???i, quy m?? c???a DKT ???? l??n t???i g???n 200 nh??n s??? ??? Vi???t Nam v?? m???t s??? n?????c nh?? : Th??i Lan, Philippines, Indonesia, Malaysia, US-UK???.???.
                            DKT l?? m???t doanh nghi???p tr??? ti??n phong trong vi???c ph??t tri???n v?? ???ng d???ng khoa h???c c??ng ngh??? 4.0 v??o trong kinh doanh thay th??? h??nh th???c kinh doanh truy???n th???ng ph?? h???p v???i ?????nh h?????ng ph??t tri???n kinh t??? chung c???a th??? tr?????ng qu???c t???.
                            C??ng ty ???????c th??nh l???p t??? 3/2019 v?? ch??nh th???c ?????i t??n th??nh C??ng ty C??? ph???n Th????ng m???i ??i???n t??? DKT (t??n ti???ng Anh: DKT E-commerce,. JSC) v??o th??ng 9/2021.
                        <div class="text-center text-lg-start">
                            <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>?????c th??m</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{asset('fontend/img/dkt.jpg')}}" class="img-fluid icon4" alt="">
                </div>

            </div>
        </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>{{__('L?? do ch???n ch??ng t??i')}}</p>
            </header>

            <div class="row">

                <div class="col-lg-4">
                    <div class="box" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{asset('fontend/img/values-1.png')}}" class="img-fluid" alt="">
                        <h3>Kh??t v???ng</h3>
                        <p>Kh??t v???ng c???i thi???n cu???c s???ng v?? bi???n th??? gi???i tr??? th??nh m???t c???ng ?????ng k???t n???i h??n n???a th??ng qua c??c s???n ph???m v?? d???ch v??? s??ng t???o.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="fade-up" data-aos-delay="400">
                        <img src="{{asset('fontend/img/values-2.png')}}" class="img-fluid" alt="">
                        <h3>Ph??t tri???n</h3>
                        <p>Suy ngh?? ??i k??m v???i h??nh ?????ng, nh??? ???? m???ng l?????i ho???t ?????ng ng??y c??ng ph??t tri???n v?? m??? r???ng.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="fade-up" data-aos-delay="600">
                        <img src="{{asset('fontend/img/values-3.png')}}" class="img-fluid" alt="">
                        <h3>Th??nh c??ng</h3>
                        <p>Tin t?????ng v??o gi?? tr??? v?? s???c m???nh c???a ch??nh m??nh, bi???n nh???ng ??i???u kh??ng th??? tr??? th??nh nh???ng gi?? tr??? ?????ng c???p th??? gi???i.</p>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
                            <p> Idol hi???n t???i</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="250" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Group tr???c thu???c</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-headset" style="color: #15be56;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Fanpage tr???c thu???c</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-people" style="color: #bb0852;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Video s???n xu???t </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>{{__('M??i tr?????ng DKT')}}</p>
            </header>

            <div class="row">

                <div class="col-lg-6">
                    <img src="{{asset('fontend/img/anh_lv.png')}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                    <div class="row align-self-center gy-4">

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Tr??? trung, n??ng ?????ng</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>nhi???t huy???t v???i c??ng vi???c</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Lu??n bi???n ?????i kh??ng ng???ng ????? th??ch nghi</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Lu??n c???i thi???n v?? s??ng t???o</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>T?? t?????ng ??i k??m v???i h??nh ?????ng</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>??o??n k???t</h3>
                            </div>
                        </div>

                    </div>
                </div>

            </div> <!-- / row -->

            <!-- Feature Tabs -->
            <div class="row feture-tabs" data-aos="fade-up">
                <div class="col-lg-6">
                    <h3>{{__('T???m nh??n c???a ch??ng t??i')}}</h3>

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab1">
                            <p>Ch??ng t??i ??ang n??? l???c kh??ng ng???ng t???ng ng??y ????? tr??? th??nh c??ng ty h??ng ?????u trong l??nh v???c Th????ng m???i ??i???n t??? t???i th??? tr?????ng ????ng Nam ??, kh???ng ?????nh v??? th??? c???a b???n th??n tr??n th??? tr?????ng qu???c t???, h?????ng t???i m???c ti??u th??c ?????y s??? ph??t tri???n c???a l??nh v???c th????ng m???i ??i???n t??? t???i Vi???t Nam n??i chung, v?? l??nh v???c th????ng m???i ??i???n t??? xuy??n bi??n gi???i n??i ri??ng.
                                V???i ti???m l???c v??? d???ch v??? thu?? kho v?? nh??n s??? , DKT ??ang ph???n ?????u tr??? th??nh doanh nghi???p Fulfillment h??ng ?????u t???i khu v???c Ch??u ?? , l?? c???u n???i gi???a nh?? b??n h??ng v?? kh??ch h??ng trong v?? ngo??i n?????c . Gi??p cho Doanh nghi???p th????ng m???i ??i???n t???  trong n?????c d??? d??ng ti???p c???n v???i v???i th??? tr?????ng qu???c t??? , ????n gi???n ho?? m??? r???ng kinh doanh, t???i ??u ho?? l???i nhu???n cho doanh nghi???p.
                            </p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4>S??? m???nh</h4>
                            </div>
                            <p>S??? m???nh c???a ch??ng t??i l?? kh??ng ng???ng n??ng cao m???i ch???t l?????ng d???ch v??? v?? s???n ph???m ????? ph???c v??? kh??ch h??ng v?? ?????i t??c, lu??n lu??n ?????t ra nh???ng ti??u chu???n m???i h??n, cao h??n ????? ho??n thi???n m???i ho???t ?????ng kinh doanh v?? c??c s???n ph???m, d???ch v??? ????a ra th??? tr?????ng.</p>
                        </div>
                        <!-- End Tab 1 Content -->
                    </div>

                </div>

                <div class="col-lg-6" >
                    <img src="{{asset('fontend/img/anh_lv2.jpg')}}" class="img-fluid" alt=""  >
                </div>

            </div><!-- End Feature Tabs -->

            <!-- Feature Icons -->
            <div class="row feature-icons" data-aos="fade-up">
                <h3>{{__('Nh???ng l???i ??ch ch??ng t??i mang l???i')}}</h3>

                <div class="row">

                    <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{asset('fontend/img/anh_lv3.jpg')}}" class="img-fluid p-4" >
                    </div>

                    <div class="col-xl-8 d-flex content">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <i class="ri-line-chart-line"></i>
                                <div>
                                    <h4>Gi??p m???i ng?????i ti???p c???n v???i nhi???u s???n ph???m h??n</h4>
{{--                                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>--}}
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="ri-stack-line"></i>
                                <div>
                                    <h4>M???i ng?????i c?? th??? t??m th???y nh???ng s???n ph???m ??ng ??</h4>
{{--                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>--}}
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="ri-brush-4-line"></i>
                                <div>
                                    <h4>Gi??p m???i ng?????i ti???t ki???m th???i gian</h4>
{{--                                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>--}}
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="ri-magic-line"></i>
                                <div>
                                    <h4>Lu??n c?? m???t ?????i ng?? ch??m s??c c??c b???n</h4>
{{--                                    <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>--}}
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <i class="ri-command-line"></i>
                                <div>
                                        <h4>Gi??p m???i ng?????i c?? th??? t????ng t??c t???t h??n</h4>
{{--                                    <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>--}}
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                <i class="ri-radar-line"></i>
                                <div>
                                    <h4>Lu??n thay ?????i v?? c??c b???n</h4>
{{--                                    <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>--}}
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div><!-- End Feature Icons -->

        </div>

    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>{{__('D???ch v??? c???a ch??ng t??i')}}</p>
            </header>
            <div class="testimonials-slider swiper ">
                <div class="swiper-wrapper " >
                <div class=" swiper-slide " data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box blue">
                        <i class="ri-discuss-line icon"></i>
                        <h3>D???ch v??? qu???ng c??o</h3>
                        <p>Qu???ng c??o l?? h??nh th???c tuy??n truy???n ???????c tr??? ph?? ho???c kh??ng ????? th???c hi???n vi???c gi???i thi???u th??ng tin v??? s???n ph???m, d???ch v???.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class=" swiper-slide "  data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box orange">
                        <i class="ri-discuss-line icon"></i>
                        <h3>D???ch v??? b??n l???</h3>
                        <p>B??n l??? l?? qu?? tr??nh b??n h??ng h??a ho???c d???ch v??? ti??u d??ng cho kh??ch h??ng th??ng qua nhi???u k??nh ph??n ph???i ????? ki???m l???i nhu???n.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="swiper-slide " data-aos="fade-up" data-aos-delay="400">
                    <div class="service-box green">
                        <i class="ri-discuss-line icon"></i>
                        <h3>D???ch v??? ch??m s??c kh??ch h??ng</h3>
                        <p> Ch??m s??c kh??ch h??ng (Customer Care) hay d???ch v??? kh??ch h??ng l?? t???t c??? nh???ng g?? c???n thi???t m?? doanh nghi???p ph???i l??m ????? th???a m??n nhu c???u c???a kh??ch h??ng .</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class=" swiper-slide " data-aos="fade-up" data-aos-delay="500">
                    <div class="service-box red">
                        <i class="ri-discuss-line icon"></i>
                        <h3>D???ch v??? chuy???n h??ng</h3>
                        <p>D???ch v??? v???n chuy???n l?? vi???c chuy???n h??ng h??a t??? ?????a ??i???m n??y ?????n ?????a ??i???m kh??c v???i nhi???u h??nh th???c, nhi???u ph????ng ti???n.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class=" swiper-slide " data-aos="fade-up" data-aos-delay="600">
                    <div class="service-box purple">
                        <i class="ri-discuss-line icon"></i>
                        <h3>D???ch v??? ??n u???ng</h3>
                        <p>d???ch v??? ??n u???ng l?? c?? s??? ch??? bi???n th???c ??n, ????? u???ng mang ??i ho???c d??ng t???i ch???.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class=" swiper-slide " data-aos="fade-up" data-aos-delay="700">
                    <div class="service-box pink">
                        <i class="ri-discuss-line icon"></i>
                        <h3>D???ch v??? Fulfilment</h3>
                        <p>D???ch v??? fulfillment l?? qu?? tr??nh b???t ?????u t??? l??c h??ng h??a ???????c nh???p v??o kho ?????n l??c ng?????i mua h??ng nh???n ???????c s???n ph???m.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                </div>
            </div>

        </div>

    </section>


    <!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">

        <div class="container" data-aos="fade-up">

            <header class="section-header">

                <p>{{__('L??nh v???c kinh doanh')}}</p>
            </header>
            <div class="row gy-4" data-aos="fade-left">
@foreach($services as $service)
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <img src="{{$service->image}}" class="img-fluid" alt="" width="80%" height="80%">
                        <p class="title mt-2">{{$service->title}}</p>
                        <p>B2C th???c hi???n tr???c ti???p qu?? tr??nh b??n s???n ph???m/ d???ch v??? ?????n ng?????i ti??u d??ng c?? nh??n.</p>
{{--                        <a href="{{route('page.list',$service->slug)}}" class="btn-buy mt-2">?????c Th??m</a>--}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </section>
    <!-- End Pricing Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>{{__('?????i ng?? l??m vi???c c???a ch??ng t??i')}}</p>
            </header>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Ch??ng t??i lu??n l??m vi???c ch??m ch???
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{asset('fontend/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                                <h3>Nguy???n V??n A</h3>
                                <h4>Ng?????i s??ng l???p</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Ch??ng t??i lu??n l??m vi???c ch??m ch???
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{asset('fontend/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                                <h3>Nguy???n v??n B</h3>
                                <h4>Nh?? thi???t k???</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Ch??ng t??i lu??n l??m vi???c ch??m ch???
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{asset('fontend/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                                <h3>Nguy???n V??n A</h3>
                                <h4>Ch??? s??? h???u c???a ti???m</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Ch??ng t??i lu??n l??m vi???c ch??m ch???
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{asset('fontend/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                                <h3>Nguy???n V??n B</h3>
                                <h4>Doanh nh??n</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Ch??ng t??i lu??n l??m vi???c ch??m ch???
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{asset('fontend/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                                <h3>Nguy???n V??n A</h3>
                                <h4>Doanh nh??n</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
{{--                <h2>Team</h2>--}}
                <p>{{__('Ban l??nh ?????o c??ng ty')}}</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{asset('fontend/img/admin2.png')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Nguy???n v??n A</h4>
                            <span>Ch??? t???ch h???i ?????ng qu???n tr???</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{asset('fontend/img/admin2.png')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Nguy???n V??n B</h4>
                            <span>T???ng gi??m ?????c</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{asset('fontend/img/admin2.png')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Nguy???n V??n C</h4>
                            <span>Gi??m ?????c ??i???u h??nh</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{asset('fontend/img/admin2.png')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Nguy???n V??n D</h4>
                            <span>Gi??m ?????c nh??n s???</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    <div id="partner">
        <div class="container">
            <div class="section-title">
                <h2 style="color: #0b198f">
                    <span>{{__('?????i t??c c???a ch??ng t??i')}}</span>
                </h2>
            </div>
            <div class="gap-line">

            </div>

            <div class="section-content">
                <div class="row code code--small code--left aos-init aos-animate justify-content-center" data-aos="fade-up">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="item">
                            <a href="#" target="_blank"><img class="img-thumb" src="{{asset('fontend/img/dt-1.jpg')}}" alt="apota"/></a>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="item">
                            <a href="#" target="_blank"><img class="img-thumb" src="{{asset('fontend/img/dt-2.jpg')}}" alt="2"/></a>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="item">
                            <a href="#" target="_blank"><img class="img-thumb" src="{{asset('fontend/img/dt-3.jpg')}}" alt="3"/></a>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="item">
                            <a href="#" target="_blank"><img class="img-thumb" src="{{asset('fontend/img/dt-4.jpg')}}" alt="5"/></a>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="item">
                            <a href="#" target="_blank"><img class="img-thumb" src="{{asset('fontend/img/dt-5.jpg')}}" alt="8"/></a>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="item">
                            <a href="#" target="_blank"><img class="img-thumb" src="{{asset('fontend/img/dt-6.jpg')}}" alt="8"/></a>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="item">
                            <a href="#" target="_blank"><img class="img-thumb" src="{{asset('fontend/img/dt-7.jpg')}}" alt="VNG"/></a>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="item">
                            <a href="#" target="_blank"><img class="img-thumb" src="{{asset('fontend/img/dt-8.jpg')}}" alt="garena"/></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- End Clients Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <p>{{__('Tin t???c')}}</p>
            </header>
            <div class="row">
                @if(isset($news))
             @foreach($news as $new)
                <div class="col-lg-4">
                    <div class="post-box">
                        <div class="post-img" style="width: 360px;height: 225px;object-fit: cover">
                            <img src="{{$new->image}}" class="img-fluid">
                        </div>
                        <span class="post-date">Tue, September 15</span>
                        <h3 class="post-title">{{$new->title}}</h3>
                            <a href="{{route('blog.list',$new->slug)}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                @endforeach
                @endif()
            </div>
        </div>
    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
{{--                <h2>Contact</h2>--}}
                <p>{{__('Li??n h??? ch??ng t??i')}}</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>{{($address)}}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>G???i cho ch??ng t??i</h3>
                                <p>{{($phone)}}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>G???i email cho ch??ng t??i</h3>
                                <p>{{($email)}}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                <h3>Gi??? m??? c???a</h3>
                                <p>T2 - T7 (08h - 18h)</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" class="php-email-form">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">??ang t???i</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Tin nh???n c???a b???n ???? ???????c g???i. C???m ??n b???n!</div>

                                <button type="submit">G???i tin nh???n</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span><img src="{{asset('fontend/img/Logo-DKT.png')}}" alt=""></span>
                    </a>
                    <p>C??ng ty c??? ph???n th????ng m???i ??i???n t??? DKT .</p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-6 footer-links">
                    <h4>L??NH V???C KINH DOANH</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">B??n l??? B2C</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">POD</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing online</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">D???ch v??? Fulfilment</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>D???CH V??? C???A CH??NG T??I</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">D???ch v??? qu???ng c??o</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">D???ch v??? b??n l???</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">D???ch v??? ch??m s??c kh??ch h??ng</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">D???ch v??? chuy???n h??ng</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">D???ch v??? ??n u???ng</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">D???ch v??? Fulfilment</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>{{__('LI??N H??? CH??NG T??I')}}</h4>
                    <p>
                        37 NGUY???N V??N HUY??N<br>
                        P.QUAN HOA - C???U GI???Y - H?? N???I<br>
                        <br>
                        <strong>Phone:</strong> {{($phone)}}<br>
                        <strong>Email:</strong> {{($email)}}<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('fontend/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('fontend/vendor/aos/aos.js')}}"></script>
<script src="{{asset('fontend/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('fontend/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('fontend/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{asset('fontend/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('fontend/vendor/glightbox/js/glightbox.min.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('fontend/js/main.js')}}"></script>

</body>

</html>
