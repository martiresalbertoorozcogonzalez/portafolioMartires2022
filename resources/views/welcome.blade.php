<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portafolio-Martires-Alberto-OG</title>

    
      <!--====== Favicon Icon ======-->
      <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

      <!--====== Animate CSS ======-->
      <link rel="stylesheet" href="assets/css/animate.css">
  
      <!--====== Slick CSS ======-->
      <link rel="stylesheet" href="assets/css/tiny-slider.css">
  
      <!--====== Line Icons CSS ======-->
      <link rel="stylesheet" href="assets/fonts/lineicons/font-css/LineIcons.css">
  
      <!--====== Tailwind CSS ======-->
      <link rel="stylesheet" href="assets/css/tailwindcss.css">
    
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="{{ asset('/js/app.js') }}" defer></script>
</head>


<body>

    <!--====== HEADER PART START ======-->

    <section class="header_area" id="app">
        <div class="navbar-area bg-white">
            <div class="container relative">
                <div class="row items-center">
                    <div class="w-full">
                        <nav class="flex items-center justify-between py-4 navbar navbar-expand-lg">
                            <a class="navbar-brand mr-5" href="#">
                                <img src="assets/images/logo.png" alt="Logo" width="60" height="60">
                            </a>
                            <button class="block navbar-toggler focus:outline-none lg:hidden" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="absolute left-0 z-20 hidden w-full px-5 py-3 duration-300 bg-white lg:w-auto collapse navbar-collapse lg:block top-full mt-full lg:static lg:bg-transparent shadow lg:shadow-none" id="navbarOne">
                                <ul id="nav" class="items-center content-start mr-auto lg:justify-end navbar-nav lg:flex">
                                    <li class="nav-item ml-5 lg:ml-11">
                                        <a class="page-scroll active" href="#home">Inicio</a>
                                    </li>
                                    <li class="nav-item ml-5 lg:ml-11">
                                        <a class="page-scroll" href="#about">Acerca de mi</a>
                                    </li>
                                    <li class="nav-item ml-5 lg:ml-11">
                                        <a class="page-scroll" href="#services">Servicios</a>
                                    </li>
                                    <li class="nav-item ml-5 lg:ml-11">
                                        <a class="page-scroll" href="#sertificaciones">Certificaciones</a>
                                    </li>
                                    <li class="nav-item ml-5 lg:ml-11">
                                        <a class="page-scroll" href="#work">Proyectos</a>
                                    </li>
                                    <li class="nav-item ml-5 lg:ml-11">
                                        <a class="page-scroll" href="#contact">Contacto</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->

        <div id="home" class="header_hero bg-gray relative z-10 overflow-hidden lg:flex items-center">
           
            <div class="container">
                <div class="row">
                    <div class="w-full lg:w-1/2">
                        <div class="header_hero_content pt-150 lg:pt-0">
                            <h2 class="hero_title text-2xl sm:text-4xl md:text-5xl lg:text-4xl xl:text-5xl font-extrabold">Bienvenido a mi <br> portafolio  personal</h2>
                            <p class="mt-8 lg:mr-8">Encontraras toda la informacion acerca de mis conocimientos y proyectos en desarrollo Web.</p>
                            <div class="hero_btn mt-10">
                                <a class="main-btn" href="#contact">Enviar mensaje</a>
                            </div>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header_shape hidden lg:block"></div>

            <div class="header_image flex items-center">
                <div class="image 2xl:pl-25">
                    <img src="assets/images/header-image.svg" alt="Header Image" style="width:500px;">
                </div>
            </div> <!-- header image -->
        </div> <!-- header hero -->
   
   
    </section>

    <!--====== HEADER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about_area pt-120 relative">
        <div class="about_image flex items-end justify-end">
            <div class="image lg:pr-13">
                <img src="assets/images/about.svg" alt="about" style="width:450px;">
            </div>
        </div> <!-- about image -->
        <div class="container">
            <div class="row justify-end">
                <div class="w-full lg:w-1/2">
                    <div class="about_content mx-4 pt-11 lg:pt-15 lg:pb-15">
                        <div class="section_title pb-9">
                            <h5 class="sub_title">Acerca de mi</h5>
                            <h4 class="main_title">Martires Alberto Orozco</h4>
                        </div> <!-- section title -->
                        <ul class="about_list pt-3">
                            <li class="flex mt-5">
                                <div class="about_check">
                                    <i class="lni lni-checkmark-circle"></i>
                                </div>
                                <div class="about_list_content pl-5 pr-2">
                                    <p>Vero eos et accusam et justo duo dolores et rebum. Stet clita kasd gubergrenv</p>
                                </div>
                            </li>
                            <li class="flex mt-5">
                                <div class="about_check">
                                    <i class="lni lni-checkmark-circle"></i>
                                </div>
                                <div class="about_list_content pl-5 pr-2">
                                    <p>At vero eos et accusam et justo duo dolores et rebum. Stet clita kasd gubergrenv</p>
                                </div>
                            </li>
                            <li class="flex mt-5">
                                <div class="about_check">
                                    <i class="lni lni-checkmark-circle"></i>
                                </div>
                                <div class="about_list_content pl-5 pr-2">
                                    <p>Dvero eos et accusam et justo duo dolores et rebum. Stet clita kasd gubergrenv</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="services" class="services_area pt-120 pb-120">
        <div class="container">
            <div class="row justify-center">
                <div class="w-full lg:w-1/2">
                    <div class="section_title text-center pb-6">
                        <h5 class="sub_title">Que te ofresco</h5>
                        <h4 class="main_title">Mis Servicios</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-center">
                <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                    <div class="single_services text-center mt-8 mx-3">
                        <div class="services_icon">
                            <i class="lni lni-layout"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                            </svg>
                        </div>
                        <div class="services_content mt-5 xl:mt-10">
                            <h3 class="services_title text-black font-semibold text-xl md:text-2xl lg:text-xl xl:text-3xl">Web Developer</h3>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consetetur sadi aliquyam erat, sed diam voluptua. At vero eos accusam et justo duo dolores </p>
                        </div>
                    </div> <!-- single services -->
                </div>

                <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                    <div class="single_services text-center mt-8 mx-3">
                        <div class="services_icon">
                            <i class="lni lni-bullhorn"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                            </svg>
                        </div>
                        <div class="services_content mt-5 xl:mt-10">
                            <h3 class="services_title text-black font-semibold text-xl md:text-2xl lg:text-xl xl:text-3xl">Digital Marketing</h3>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consetetur sadi aliquyam erat, sed diam voluptua. At vero eos accusam et justo duo dolores </p>
                        </div>
                    </div> <!-- single services -->
                </div>

                <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                    <div class="single_services text-center mt-8 mx-3">
                        <div class="services_icon">
                            <i class="lni lni-mobile"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                            </svg>
                        </div>
                        <div class="services_content mt-5 xl:mt-10">
                            <h3 class="services_title text-black font-semibold text-xl md:text-2xl lg:text-xl xl:text-3xl">Mobile Apps</h3>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consetetur sadi aliquyam erat, sed diam voluptua. At vero eos accusam et justo duo dolores </p>
                        </div>
                    </div> <!-- single services -->
                </div>

            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== SERTIFICACIONES PART START ======-->
    
    <section id="sertificaciones" class="services_area pt-120 pb-120">
        <div class="container">
            <div class="row justify-center">
                <div class="w-full lg:w-1/2">
                    <div class="section_title text-center pb-6">
                        <h5 class="sub_title">Lo que he aprendido durante años de aprendizaje</h5>
                        <h4 class="main_title">Mis Certificaciones</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-center">
                <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                    <div class="single_services text-center mt-8 mx-3">
                        <img src="assets/images/cert-1.jpg" alt="web designe" width="250" height="150">
                        <div class="services_content mt-5 xl:mt-10">
                            <h3 class="services_title text-black font-semibold text-xl md:text-2xl lg:text-xl xl:text-3xl">Responsive Web Design</h3>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consetetur sadi aliquyam erat, sed diam voluptua. At vero eos accusam et justo duo dolores </p>
                        </div>
                    </div> <!-- single services -->
                </div>

                <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                    <div class="single_services text-center mt-8 mx-3">
                        <img src="assets/images/cert-1.jpg" alt="web designe" width="250" height="150">
                        <div class="services_content mt-5 xl:mt-10">
                            <h3 class="services_title text-black font-semibold text-xl md:text-2xl lg:text-xl xl:text-3xl">Responsive Web Design</h3>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consetetur sadi aliquyam erat, sed diam voluptua. At vero eos accusam et justo duo dolores </p>
                        </div>
                    </div> <!-- single services -->
                </div>

                <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                    <div class="single_services text-center mt-8 mx-3">
                        <img src="assets/images/cert-1.jpg" alt="web designe" width="250" height="150">
                        <div class="services_content mt-5 xl:mt-10">
                            <h3 class="services_title text-black font-semibold text-xl md:text-2xl lg:text-xl xl:text-3xl">Responsive Web Design</h3>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consetetur sadi aliquyam erat, sed diam voluptua. At vero eos accusam et justo duo dolores </p>
                        </div>
                    </div> <!-- single services -->
                </div>

            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== SERTIFICACIONES PART ENDS ======-->

    <!--====== WORK PART START ======-->

    <section id="work" class="work_area bg-gray pt-120 pb-120">
        <div class="container">
            <div class="row justify-center">
                <div class="w-ull lg:w-1/2">
                    <div class="section_title text-center pb-6">
                        <h5 class="sub_title">Proyectos</h5>
                        <h4 class="main_title">Mis recientes trabajos</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="container-fluid">
            <div class="work_wrapper relative">
                <div class="row work_active">
                    <div class="w-full lg:w-3/12">
                        <div class="single_item mx-auto">
                            <div class="single_work mx-3">
                                <div class="work_image">
                                    <img src="assets/images/work-1.jpg" alt="work" class="w-full">
                                </div>
                                <div class="work_content">
                                    <a href="#" class="arrow"><i class="lni lni-chevron-right"></i></a>
                                    <h4 class="work_title text-xl md:text-2xl"><a href="#">Marketing</a></h4>
                                    <p class="mt-2">NoCodeAPI</p>
                                </div>
                            </div>
                        </div> <!-- single work -->
                    </div>
                    <div class="w-full lg:w-3/12">
                        <div class="single_item mx-auto">
                            <div class="single_work mx-3">
                                <div class="work_image">
                                    <img src="assets/images/work-2.jpg" alt="work" class="w-full">
                                </div>
                                <div class="work_content">
                                    <a href="#" class="arrow"><i class="lni lni-chevron-right"></i></a>
                                    <h4 class="work_title text-xl md:text-2xl"><a href="#">Creative Design</a></h4>
                                    <p class="mt-2">UIdeck</p>
                                </div>
                            </div>
                        </div> <!-- single work -->
                    </div>
                    <div class="w-full lg:w-3/12">
                        <div class="single_item mx-auto">
                            <div class="single_work mx-3">
                                <div class="work_image">
                                    <img src="assets/images/work-3.jpg" alt="work" class="w-full">
                                </div>
                                <div class="work_content">
                                    <a href="#" class="arrow"><i class="lni lni-chevron-right"></i></a>
                                    <h4 class="work_title text-xl md:text-2xl"><a href="#">Web Design</a></h4>
                                    <p class="mt-2">GrayGrids</p>
                                </div>
                            </div>
                        </div> <!-- single work -->
                    </div>
                    <div class="w-full lg:w-3/12">
                        <div class="single_item mx-auto">
                            <div class="single_work mx-3">
                                <div class="work_image">
                                    <img src="assets/images/work-4.jpg" alt="work" class="w-full">
                                </div>
                                <div class="work_content">
                                    <a href="#" class="arrow"><i class="lni lni-chevron-right"></i></a>
                                    <h4 class="work_title text-xl md:text-2xl"><a href="#">Analysis</a></h4>
                                    <p class="mt-2">Ayro UI</p>
                                </div>
                            </div>
                        </div> <!-- single work -->
                    </div>
                    <div class="w-full lg:w-3/12">
                        <div class="single_item mx-auto">
                            <div class="single_work mx-3">
                                <div class="work_image">
                                    <img src="assets/images/work-5.jpg" alt="work" class="w-full">
                                </div>
                                <div class="work_content">
                                    <a href="#" class="arrow"><i class="lni lni-chevron-right"></i></a>
                                    <h4 class="work_title text-xl md:text-2xl"><a href="#">SMM</a></h4>
                                    <p class="mt-2">LineIcons</p>
                                </div>
                            </div>
                        </div> <!-- single work -->
                    </div>
                    <div class="w-full lg:w-3/12">
                        <div class="single_item mx-auto">
                            <div class="single_work mx-3">
                                <div class="work_image">
                                    <img src="assets/images/work-2.jpg" alt="work" class="w-full">
                                </div>
                                <div class="work_content">
                                    <a href="#" class="arrow"><i class="lni lni-chevron-right"></i></a>
                                    <h4 class="work_title text-xl md:text-2xl"><a href="#">SEO</a></h4>
                                    <p class="mt-2">PageBulb</p>
                                </div>
                            </div>
                        </div> <!-- single work -->
                    </div>
                    <div class="w-full lg:w-3/12">
                        <div class="single_item mx-auto">
                            <div class="single_work mx-3">
                                <div class="work_image">
                                    <img src="assets/images/work-4.jpg" alt="work" class="w-full">
                                </div>
                                <div class="work_content">
                                    <a href="#" class="arrow"><i class="lni lni-chevron-right"></i></a>
                                    <h4 class="work_title text-xl md:text-2xl"><a href="#">Mobile App</a></h4>
                                    <p class="mt-2">Rocket Internet LTD</p>
                                </div>
                            </div>
                        </div> <!-- single work -->
                    </div>
                </div> <!-- row -->
            </div>
        </div> <!-- container -->
    </section>

    <!--====== WORK PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact_area relative pt-18 pb-120">
        <div class="contact_image flex items-center justify-end">
            <div class="image lg:pr-13">
                <img src="assets/images/contact.svg" alt="about" style="width:500px">
            </div>
        </div> <!-- about image -->
        
        <div class="container">
            <div class="row justify-end">
                <div class="w-full lg:w-1/2">
                    <div class="contact_wrapper mt-11">
                        <div class="section_title pb-4">
                            <h5 class="sub_title">Contactame</h5>
                            <h4 class="main_title">Ponte en contacto</h4>
                            <p>Aca puedes enviarme tuys mensajes con respecto a informacion y dudas que tengas</p>
                        </div> <!-- section title -->
                        
                        <div class="contact_form">
                            <form id="contact-form" action="assets/php/contact.php" method="POST">
                                <div class="row">
                                    <div class="w-full md:w-1/2">
                                        <div class="mx-3">
                                            <div class="single_form mt-8">
                                                <input name="name" id="name" type="text" placeholder="Name" class="w-full rounded-md py-4 px-6 border border-solid border-body-color">
                                            </div> <!-- single form -->
                                        </div>
                                    </div>
                                    <div class="w-full md:w-1/2">
                                        <div class="mx-3">
                                            <div class="single_form mt-8">
                                                <input name="email" id="email" type="email" placeholder="Email" class="w-full rounded-md py-4 px-6 border border-solid border-body-color">
                                            </div> <!-- single form -->
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <div class="mx-3">
                                            <div class="single_form mt-8">
                                                <textarea name="message" id="message" placeholder="Message" rows="5" class="w-full rounded-md py-4 px-6 border border-solid border-body-color resize-none"></textarea>
                                            </div> <!-- single form -->
                                        </div>
                                    </div>
                                    <p class="form-message mx-3"></p>
                                    <div class="w-full">
                                        <div class="mx-3">
                                            <div class="single_form mt-8">
                                                <button type="submit" class="main-btn contact-btn">Submit</button>
                                            </div> <!-- single form -->
                                        </div>
                                    </div>
                                </div> <!-- row -->
                            </form>
                        </div> <!-- contact form -->
                    </div> <!-- contact wrapper -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer_area bg-black relative z-10">
        <div class="shape absolute left-0 top-0 opacity-5 h-full overflow-hidden w-1/3">
            <img src="assets/images/footer-shape-left.png" alt="">
        </div>
        <div class="shape absolute right-0 top-0 opacity-5 h-full overflow-hidden w-1/3">
            <img src="assets/images/footer-shape-right.png" alt="">
        </div>
        <div class="container">
            <div class="footer_widget pt-18 pb-120">
                <div class="row justify-center">
                    <div class="w-full md:w-1/2 lg:w-3/12">
                        <div class="footer_about mt-13 mx-3">
                            <div class="footer_logo">
                                <a href="#"><img src="assets/images/logoNuevoPerfuventas.png" alt="" width="70px"></a>
                            </div>
                            <div class="footer_content mt-8">
                                <p class="text-white">Lorem ipsum dolor sitco nsetetu nonumy eirmod tempor invidunt ut labore et dolore magna uyam erat, sed diam.</p>
                            </div>
                        </div> <!-- footer about -->
                    </div>
                    <div class="w-full md:w-1/2 lg:w-5/12">
                        <div class="footer_link_wrapper flex flex-wrap mx-3">
                            <div class="footer_link w-1/2 md:pl-13 mt-13">
                                <h2 class="footer_title text-xl font-semibold text-white">Quick Links</h2>
                                <ul class="link pt-4">
                                    <li><a href="#" class="text-white mt-4 hover:text-theme-color">Company</a></li>
                                    <li><a href="#" class="text-white mt-4 hover:text-theme-color">Privacy Policy</a></li>
                                    <li><a href="#" class="text-white mt-4 hover:text-theme-color">About</a></li>
                                </ul>
                            </div> <!-- footer link -->
                            <div class="footer_link w-1/2 md:pl-13 mt-13">
                                <h2 class="footer_title text-xl font-semibold text-white">Resources</h2>
                                <ul class="link pt-4">
                                    <li><a href="#" class="text-white mt-4 hover:text-theme-color">Support</a></li>
                                    <li><a href="#" class="text-white mt-4 hover:text-theme-color">Contact</a></li>
                                    <li><a href="#" class="text-white mt-4 hover:text-theme-color">Terms</a></li>
                                </ul>
                            </div> <!-- footer link -->
                        </div> <!-- footer link wrapper -->
                    </div>
                    <div class="w-full md:w-2/3 lg:w-4/12">
                        <div class="footer_subscribe mt-13 mx-3">
                            <h2 class="footer_title text-xl font-semibold text-white">Newsletter</h2>
                            <div class="subscribe_form text-right mt-9 relative">
                                <form action="#">
                                    <input type="text" placeholder="Enter email" class="w-full py-5 px-6 bg-white text-black rounded-full border-none">
                                    <button class="main-btn subscribe-btn">Subscribe</button>
                                </form>
                            </div>
                        </div> <!-- footer subscribe -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
            <div class="footer_copyright pt-3 pb-6 border-t-2 border-solid border-white border-opacity-10 sm:flex justify-between">
                <div class="footer_social pt-4 mx-3 text-center">
                    <ul class="social flex justify-center sm:justify-start">
                        <li class="mr-3"><a href="https://facebook.com/uideckHQ"><i class="lni lni-facebook-filled"></i></a></li>
                        <li class="mr-3"><a href="https://twitter.com/uideckHQ"><i class="lni lni-twitter-filled"></i></a></li>
                        <li class="mr-3"><a href="https://instagram.com/uideckHQ"><i class="lni lni-instagram-original"></i></a></li>
                        <li class="mr-3"><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul>
                </div> <!-- footer social -->
                <div class="footer_copyright_content pt-4 text-center">
                    <p class="text-white">Designed and Developed by <a href="https://uideck.com" rel="nofollow" class="text-white hover:text-theme-color">UIdeck</a> and <a href="https://tailwindtemplates.co" rel="nofollow" class="text-white hover:text-theme-color">Tailwind Templates</a></p>
                </div> <!-- footer copyright content -->
            </div> <!-- footer copyright -->
        </div> <!-- container -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="scroll-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->    


    <!--====== Tiny Slider js ======-->
    <script src="assets/js/tiny-slider.js"></script>

    <!--====== Wow js ======-->
    <script src="assets/js/wow.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

</body>

</html>