<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <title>Karam Awwad A Software Engineer</title>
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/aos.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">


<div class="dropdown" style="float:right;">
    <button class="dropbtn">{{trans('home.Language')}}</button>
    <div class="dropdown-content">
        <a href="{{url('en')}}">English</a>
        <a href="{{url('de')}}">deutsch</a>
        <a href="{{url('ar')}}">عربي</a>
        <a href="{{url('fa')}}">فارسی</a>
    </div>
</div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container flex-lg-column">
        <a class="navbar-brand mx-lg-auto mb-lg-4" href="#">
            <span class="h3 fw-bold d-block d-lg-none">{{trans('home.Karam Awwad')}}</span>
            <img id="img" src="./assets/images/person1.jpeg" class="d-none d-lg-block rounded-circle" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>



        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto flex-lg-column text-lg-center">

                <li class="nav-item">
                    <a class="nav-link" href="#home">{{trans('home.Home')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">{{trans('home.About')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills">{{trans('home.Skills')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">{{trans('home.Contact')}}</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- //NAVBAR -->

<!-- CONTENT WRAPPER -->
<div id="content-wrapper">

    <!-- HOME -->
    <section id="home" class="full-height px-lg-5">

        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <img id="Mobile-v-img" src="./assets/images/person1.jpeg" class="img-fluid rounded-circle " alt="">
                    <h1 class="display-4 fw-bold" data-aos="fade-up">{{trans('home.I AM A')}} <span class="text-brand">{{trans('home.Software Engineer')}}</span></h1>
                    <p class="lead mt-2 mb-4" data-aos="fade-up" data-aos-delay="300">{{trans('home.Bio')}}</p>
                    <div data-aos="fade-up" data-aos-delay="600">

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- //HOME -->

    <!-- ABOUT -->
    <section id="about" class="full-height px-lg-5">
        <div class="container">

            <div class="row pb-4" data-aos="fade-up">
                <div class="col-lg-8">
                    <h6 class="text-brand">{{trans('home.About')}}</h6>
                    <h1>{{trans('home.My Education')}}</h1>
                </div>
            </div>

            <div class="row gy-5">
                <div class="col-lg-6">

                    <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">{{trans('home.Education')}}</h3>
                    <div class="row gy-4">


                        <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                            <div class="bg-base p-4 rounded-4 shadow-effect">
                                <h4>{{trans('home.Bachelor Software Engineering')}}</h4>
                                <p class="text-brand mb-2">{{trans('home.UNI')}}</p>
{{--                                <p class="mb-0">All we are more and design lorem ipsum dolor creativity sit amet consectetur adipisicing elit</p>--}}
                            </div>
                        </div>

                    </div>
                </div>



            </div>

        </div>
    </section>
    <!-- //ABOUT -->

{{--    <!-- Skills -->--}}
    <section id="skills" class="full-height px-lg-5">
        <div class="container">

            <div class="row pb-4" data-aos="fade-up">
                <div class="col-lg-8">
                    <h1 class="text-brand">{{trans('home.Skills')}} :</h1>
                </div>

                <div class="resume-section-content">
                    <div class="subheading mb-3"><h3>{{trans('home.Programming Languages & Tools')}}</h3></div>
                    <ul id="iconlist" class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="dev-icon-html5-plain-wordmark"></i></li>
                        <li class="list-inline-item"><i class="devicon-css3-plain-wordmark"></i></li>
                        <li class="list-inline-item"><i class="devicon-sass-original"></i></li>
                        <li class="list-inline-item"><i class="devicon-bootstrap-plain-wordmark"></i></li>
                        <li class="list-inline-item"><i class="devicon-laravel-plain-wordmark"></i></li>
                    </ul>
                    <div class="subheading mb-3">{{trans('home.Workflow')}}</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            {{trans('home.Mobile-First, Responsive Design')}}
                        </li>
                    </ul>
                </div>

        </div>
    </div>
    </section>


    <!-- CONTACT -->
    <section id="contact" class="full-height px-lg-5">
        <div class="container">

            <div class="row justify-content-center text-center">
                <div class="col-lg-8 pb-4" data-aos="fade-up">
                    <h6 class="text-brand">{{trans('home.Contact')}}</h6>
                    <h1>{{trans('home.Interested in working together? Contact me')}}
                    </h1>
                </div>

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
                    <form action="#" class="row g-lg-3 gy-3">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="{{trans('home.Enter your name')}}">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" placeholder="{{trans('home.Enter your email')}}">
                        </div>
                        <div class="form-group col-12">
                            <input type="text" class="form-control" placeholder="{{trans('home.Enter subject')}}">
                        </div>
                        <div class="form-group col-12">
                            <textarea name="" rows="4" class="form-control" placeholder="{{trans('home.Enter your message')}}"></textarea>
                        </div>
                        <div class="form-group col-12 d-grid">
                            <button type="submit" class="btn btn-brand">{{trans('home.Contact me')}}</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </section>
    <!-- //CONTACT -->

    <!-- FOOTER -->
    <footer class="py-5 px-lg-5">
        <div class="container">
            <div class="row gy-4 justify-content-between">
                <div class="col-auto">
                    <p class="mb-0">{{trans('home.Designed by')}} <a href="#" class="fw-bold">{{trans('home.Karam Awwad')}}</a></p>
                </div>
                <div class="col-auto">
                    <div id="social-icons" class="social-icons">
                        <a href="#"><i class="lab la-linkedin"></i></a>
                        <a href="#"><i class="lab la-facebook"></i></a>
{{--                        <a href="#"><i class="lab la-dribbble"></i></a>--}}
                        <a href="#"><i class="lab la-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //FOOTER -->

</div>
<!-- //CONTENT WRAPPER -->



<script src="{{URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('assets/js/aos.js')}}"></script>
<script src="{{URL::asset('assets/js/main.js')}}"></script>
</body>

</html>
