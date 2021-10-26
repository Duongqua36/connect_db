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
                <li><a class="nav-link scrollto active" href="#hero">{{__('Trang Chủ')}}</a></li>
                <li><a class="nav-link scrollto" href="{{route('view.page')}}">{{__('Tin Tức')}}</a></li>
                <li><a class="nav-link scrollto" href="#services">{{__('Dự Án')}}</a></li>
                <li><a class="nav-link scrollto" href="#portfolio">{{__('Tuyển Dụng')}}</a></li>
                <li><a class="nav-link scrollto" href="#team">{{__('Về Chúng Tôi')}}</a></li>
                <li class="dropdown"><a href="#" class="logo flag" ><img src="{{asset('fontend/img/co_vn.png')}}" height="30px" width="25px"></a>
                    <ul>
                        <li><a href="{!! route('user.changeLanguage',['vi']) !!}" class="logo" style="width: 0"><img src="{{asset('fontend/img/co_vn.png')}}" height="30px" width="25px">Việt nam</a></li>
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
                <h1 data-aos="fade-up">Chúng tôi cung cấp các giải pháp hiện đại để phát triển doanh nghiệp của bạn</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Chúng tôi là đội ngũ các nhà thiết kế tài năng tạo ra các trang web bằng Bootstrap</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Bắt đầu</span>
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
                        <h2>Giới thiệu chung.</h2>
                        <p>
                            Công ty cổ phần thương mại điện tử DKT (DKT E-COMMERCE ,.JSC ) là công ty hoạt động trên lĩnh vực thương mại điện tử B2C hàng đầu Việt Nam với quy mô trải rộng ở các quốc gia ở Châu Á và Châu âu.
                            Hiện tại, quy mô của DKT đã lên tới gần 200 nhân sự ở Việt Nam và một số nước như : Thái Lan, Philippines, Indonesia, Malaysia, US-UK….….
                            DKT là một doanh nghiệp trẻ tiên phong trong việc phát triển và ứng dụng khoa học công nghệ 4.0 vào trong kinh doanh thay thế hình thức kinh doanh truyền thống phù hợp với định hướng phát triển kinh tế chung của thị trường quốc tế.
                            Công ty được thành lập từ 3/2019 và chính thức đổi tên thành Công ty Cổ phần Thương mại điện tử DKT (tên tiếng Anh: DKT E-commerce,. JSC) vào tháng 9/2021.
                        <div class="text-center text-lg-start">
                            <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Đọc thêm</span>
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
                <p>{{__('Lí do chọn chúng tôi')}}</p>
            </header>

            <div class="row">

                <div class="col-lg-4">
                    <div class="box" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{asset('fontend/img/values-1.png')}}" class="img-fluid" alt="">
                        <h3>Khát vọng</h3>
                        <p>Khát vọng cải thiện cuộc sống và biến thế giới trở thành một cộng đồng kết nối hơn nữa thông qua các sản phẩm và dịch vụ sáng tạo.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="fade-up" data-aos-delay="400">
                        <img src="{{asset('fontend/img/values-2.png')}}" class="img-fluid" alt="">
                        <h3>Phát triển</h3>
                        <p>Suy nghĩ đi kèm với hành động, nhờ đó mạng lưới hoạt động ngày càng phát triển và mở rộng.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="fade-up" data-aos-delay="600">
                        <img src="{{asset('fontend/img/values-3.png')}}" class="img-fluid" alt="">
                        <h3>Thành công</h3>
                        <p>Tin tưởng vào giá trị và sức mạnh của chính mình, biến những điều không thể trở thành những giá trị đẳng cấp thế giới.</p>
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
                            <p> Idol hiện tại</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="250" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Group trực thuộc</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-headset" style="color: #15be56;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Fanpage trực thuộc</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-people" style="color: #bb0852;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Video sản xuất </p>
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
                <p>{{__('Môi trường DKT')}}</p>
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
                                <h3>Trẻ trung, năng động</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>nhiệt huyết với công việc</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Luôn biến đổi không ngừng để thích nghi</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Luôn cải thiện và sáng tạo</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Tư tưởng đi kèm với hành động</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Đoàn kết</h3>
                            </div>
                        </div>

                    </div>
                </div>

            </div> <!-- / row -->

            <!-- Feature Tabs -->
            <div class="row feture-tabs" data-aos="fade-up">
                <div class="col-lg-6">
                    <h3>{{__('Tầm nhìn của chúng tôi')}}</h3>

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab1">
                            <p>Chúng tôi đang nỗ lực không ngừng từng ngày để trở thành công ty hàng đầu trong lĩnh vực Thương mại điện tử tại thị trường Đông Nam Á, khẳng định vị thế của bản thân trên thị trường quốc tế, hướng tới mục tiêu thúc đẩy sự phát triển của lĩnh vực thương mại điện tử tại Việt Nam nói chung, và lĩnh vực thương mại điện tử xuyên biên giới nói riêng.
                                Với tiềm lực về dịch vụ thuê kho và nhân sự , DKT đang phấn đấu trở thành doanh nghiệp Fulfillment hàng đầu tại khu vực Châu Á , là cầu nối giữa nhà bán hàng và khách hàng trong và ngoài nước . Giúp cho Doanh nghiệp thương mại điện tử  trong nước dễ dàng tiếp cận với với thị trường quốc tế , đơn giản hoá mở rộng kinh doanh, tối ưu hoá lợi nhuận cho doanh nghiệp.
                            </p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4>Sứ mệnh</h4>
                            </div>
                            <p>Sứ mệnh của chúng tôi là không ngừng nâng cao mọi chất lượng dịch vụ và sản phẩm để phục vụ khách hàng và đối tác, luôn luôn đặt ra những tiêu chuẩn mới hơn, cao hơn để hoàn thiện mọi hoạt động kinh doanh và các sản phẩm, dịch vụ đưa ra thị trường.</p>
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
                <h3>{{__('Những lợi ích chúng tôi mang lại')}}</h3>

                <div class="row">

                    <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{asset('fontend/img/anh_lv3.jpg')}}" class="img-fluid p-4" >
                    </div>

                    <div class="col-xl-8 d-flex content">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <i class="ri-line-chart-line"></i>
                                <div>
                                    <h4>Giúp mọi người tiếp cận với nhiều sản phẩm hơn</h4>
{{--                                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>--}}
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="ri-stack-line"></i>
                                <div>
                                    <h4>Mọi người có thể tìm thấy những sản phẩm ưng ý</h4>
{{--                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>--}}
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="ri-brush-4-line"></i>
                                <div>
                                    <h4>Giúp mọi người tiết kiệm thời gian</h4>
{{--                                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>--}}
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="ri-magic-line"></i>
                                <div>
                                    <h4>Luôn có một đội ngũ chăm sóc các bạn</h4>
{{--                                    <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>--}}
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <i class="ri-command-line"></i>
                                <div>
                                        <h4>Giúp mọi người có thể tương tác tốt hơn</h4>
{{--                                    <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>--}}
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                <i class="ri-radar-line"></i>
                                <div>
                                    <h4>Luôn thay đổi vì các bạn</h4>
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
                <p>{{__('Dịch vụ của chúng tôi')}}</p>
            </header>
            <div class="testimonials-slider swiper ">
                <div class="swiper-wrapper " >
                <div class=" swiper-slide " data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box blue">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Dịch vụ quảng cáo</h3>
                        <p>Quảng cáo là hình thức tuyên truyền được trả phí hoặc không để thực hiện việc giới thiệu thông tin về sản phẩm, dịch vụ.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class=" swiper-slide "  data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box orange">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Dịch vụ bán lẻ</h3>
                        <p>Bán lẻ là quá trình bán hàng hóa hoặc dịch vụ tiêu dùng cho khách hàng thông qua nhiều kênh phân phối để kiếm lợi nhuận.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="swiper-slide " data-aos="fade-up" data-aos-delay="400">
                    <div class="service-box green">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Dịch vụ chăm sóc khách hàng</h3>
                        <p> Chăm sóc khách hàng (Customer Care) hay dịch vụ khách hàng là tất cả những gì cần thiết mà doanh nghiệp phải làm để thỏa mãn nhu cầu của khách hàng .</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class=" swiper-slide " data-aos="fade-up" data-aos-delay="500">
                    <div class="service-box red">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Dịch vụ chuyển hàng</h3>
                        <p>Dịch vụ vận chuyển là việc chuyển hàng hóa từ địa điểm này đến địa điểm khác với nhiều hình thức, nhiều phương tiện.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class=" swiper-slide " data-aos="fade-up" data-aos-delay="600">
                    <div class="service-box purple">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Dịch vụ ăn uống</h3>
                        <p>dịch vụ ăn uống là cơ sở chế biến thức ăn, đồ uống mang đi hoặc dùng tại chỗ.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class=" swiper-slide " data-aos="fade-up" data-aos-delay="700">
                    <div class="service-box pink">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Dịch vụ Fulfilment</h3>
                        <p>Dịch vụ fulfillment là quá trình bắt đầu từ lúc hàng hóa được nhập vào kho đến lúc người mua hàng nhận được sản phẩm.</p>
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

                <p>{{__('Lĩnh vực kinh doanh')}}</p>
            </header>
            <div class="row gy-4" data-aos="fade-left">
@foreach($services as $service)
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <img src="{{$service->image}}" class="img-fluid" alt="" width="80%" height="80%">
                        <p class="title mt-2">{{$service->title}}</p>
                        <p>B2C thực hiện trực tiếp quá trình bán sản phẩm/ dịch vụ đến người tiêu dùng cá nhân.</p>
{{--                        <a href="{{route('page.list',$service->slug)}}" class="btn-buy mt-2">Đọc Thêm</a>--}}
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
                <p>{{__('Đội ngũ làm việc của chúng tôi')}}</p>
            </header>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Chúng tôi luôn làm việc chăm chỉ
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{asset('fontend/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                                <h3>Nguyễn Văn A</h3>
                                <h4>Người sáng lập</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Chúng tôi luôn làm việc chăm chỉ
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{asset('fontend/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                                <h3>Nguyễn văn B</h3>
                                <h4>Nhà thiết kế</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Chúng tôi luôn làm việc chăm chỉ
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{asset('fontend/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                                <h3>Nguyễn Văn A</h3>
                                <h4>Chủ sở hữu cửa tiệm</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Chúng tôi luôn làm việc chăm chỉ
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{asset('fontend/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                                <h3>Nguyễn Văn B</h3>
                                <h4>Doanh nhân</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Chúng tôi luôn làm việc chăm chỉ
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{asset('fontend/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                                <h3>Nguyễn Văn A</h3>
                                <h4>Doanh nhân</h4>
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
                <p>{{__('Ban lãnh đạo công ty')}}</p>
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
                            <h4>Nguyễn văn A</h4>
                            <span>Chủ tịch hội đồng quản trị</span>
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
                            <h4>Nguyễn Văn B</h4>
                            <span>Tổng giám đốc</span>
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
                            <h4>Nguyễn Văn C</h4>
                            <span>Giám đốc điều hành</span>
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
                            <h4>Nguyễn Văn D</h4>
                            <span>Giám đốc nhân sự</span>
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
                    <span>{{__('Đối tác của chúng tôi')}}</span>
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
                <p>{{__('Tin tức')}}</p>
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
                <p>{{__('Liên hệ chúng tôi')}}</p>
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
                                <h3>Gọi cho chúng tôi</h3>
                                <p>{{($phone)}}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Gửi email cho chúng tôi</h3>
                                <p>{{($email)}}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                <h3>Giờ mở cửa</h3>
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
                                <div class="loading">Đang tải</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Tin nhắn của bạn đã được gửi. Cảm ơn bạn!</div>

                                <button type="submit">Gửi tin nhắn</button>
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
                    <p>Công ty cổ phần thương mại điện tử DKT .</p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-6 footer-links">
                    <h4>LĨNH VỰC KINH DOANH</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Bán lẻ B2C</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">POD</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing online</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Dịch vụ Fulfilment</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>DỊCH VỤ CỦA CHÚNG TÔI</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Dịch vụ quảng cáo</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Dịch vụ bán lẻ</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Dịch vụ chăm sóc khách hàng</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Dịch vụ chuyển hàng</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Dịch vụ ăn uống</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Dịch vụ Fulfilment</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>{{__('LIÊN HỆ CHÚNG TÔI')}}</h4>
                    <p>
                        37 NGUYỄN VĂN HUYÊN<br>
                        P.QUAN HOA - CẦU GIẤY - HÀ NỘI<br>
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
