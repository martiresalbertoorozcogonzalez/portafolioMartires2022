@extends('layouts.master')



@section('content')


    <!--====== ABOUT PART START ======-->

    <section id="about" class="about_area pt-120 relative">
        @foreach ($acercademi as $item)
        <div class="about_image flex items-center justify-center">
            <div class="image lg:pr-13 mt-44">
                <img class="rounded-full" src="/storage/{{ $item->imagen_acercademi }}" alt="about">
            </div>
        </div> <!-- about image -->
        <div class="container">
            <div class="row justify-end">
                    
                <div class="w-full lg:w-1/2">
                    <div class="about_content mx-4 pt-11 lg:pt-15 lg:pb-15">
                        <div class="section_title pb-9">
                            <h5 class="sub_title">Acerca de mi</h5>
                            <h4 class="main_title">{{ $item->nombre }}</h4>
                        </div> <!-- section title -->
                        <ul class="about_list pt-3">
                            <li class="flex mt-5">
                                <div class="about_check">
                                    <i class="lni lni-checkmark-circle"></i>
                                </div>
                                <div class="about_list_content pl-5 pr-2">
                                    <p>
                                        {{ $item->descripcion }}
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- about content -->
                </div>

            </div> <!-- row -->
        </div> <!-- container -->
        @endforeach
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->
    
    <section id="services" class="services_area pt-120 pb-120">
            
        <div class="container">
            <div class="row justify-center">
                <div class="w-full lg:w-1/2">
                    <div class="section_title text-center pb-6">
                        <h5 class="sub_title">Servicios</h5>
                        <h4 class="main_title">Mis Servicios</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-center">
                <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                    <div class="single_services text-center mt-8 mx-3">
                        <div class="services_icon">
                            <i class="lni lni-laptop-phone"></i>
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
    
    <section id="certificaciones" class="certificaciones_area pt-120 pb-120">
        <div class="container">
            <div class="row justify-center">
                <div class="w-full lg:w-1/2">
                    <div class="section_title text-center pb-6">
                        <h5 class="sub_title">Certificaciones</h5>
                        <h4 class="main_title">Mis Certificaciones</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
           
            <div class="row justify-center">
                @foreach ($certificaciones as $item)
                    
                <a href="{{ route('frontcertificaiones-show',['certificaciones' => $item->id]) }}" class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                    <div class="single_services text-center mt-8 mx-3">
                        <img src="/storage/{{ $item->imagen_certificado }}" alt="web designe">
                        <div class="services_content mt-5 xl:mt-10">
                            <h3 class="services_title text-black font-semibold text-xl md:text-2xl lg:text-xl xl:text-3xl">{{ $item->titulo }}</h3>
                            <p class="mt-4">{{ $item->descripcion }}</p>
                        </div>
                    </div> <!-- single services -->
                </a>

                @endforeach

            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== SERTIFICACIONES PART ENDS ======-->

    <!--====== WORK PART START ======-->

    <section id="work" class="proyectos_area pt-120 pb-120">
        <div class="container">
            <div class="row justify-center">
                <div class="w-full lg:w-1/2">
                    <div class="section_title text-center pb-6">
                        <h5 class="sub_title">Proyectos</h5>
                        <h4 class="main_title">Mis Recientes proyectos</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
           
            
            
            <div class="row justify-center">
                @foreach ($portafolio as $item)
                <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                    <div class="single_services text-center mt-8 mx-3">
                        <img src="/storage/{{ $item->imagen_portafolio }}" alt="web designe">
                        <div class="services_content mt-5 xl:mt-10">
                            <h3 class="services_title text-black font-semibold text-xl md:text-2xl lg:text-xl xl:text-3xl">
                                {{ $item->titulo}}
                            </h3>
                            <p class="mt-4">{{ $item->descripcion }}</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                @endforeach
            </div> <!-- row -->

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
                            <form  action="{{ url('contacto') }}" method="Post" novalidate>
                                
                                @csrf
                               

                                <div class="row">
                                    <div class="w-full md:w-1/2">
                                        <div class="mx-3">
                                            <div class="single_form mt-8">
                                                <input name="name" id="name" type="text" placeholder="Nombre" value="{{ old('name') }}" class="w-full rounded-md py-4 px-6 border border-solid border-body-color">
                                            </div> <!-- single form -->
                                        </div>
                                    </div>
                                    <div class="w-full md:w-1/2">
                                        <div class="mx-3">
                                            <div class="single_form mt-8">
                                                <input name="email" id="email" type="email" placeholder="Email" value="{{ old('email') }}" class="w-full rounded-md py-4 px-6 border border-solid border-body-color">
                                            </div> <!-- single form -->
                                        </div>
                                    </div>
                                    <div class="w-full md:w-1/2">
                                        <div class="mx-3">
                                            <div class="single_form mt-8">
                                                <input name="subject" id="subject" type="text" placeholder="Asunto" value="{{ old('subject') }}" class="w-full rounded-md py-4 px-6 border border-solid border-body-color">
                                            </div> <!-- single form -->
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <div class="mx-3">
                                            <div class="single_form mt-8">
                                                <textarea name="body" id="body" placeholder="Mensaje" value="{{ old('body') }}" rows="5" class="w-full rounded-md py-4 px-6 border border-solid border-body-color resize-none"></textarea>
                                            </div> <!-- single form -->
                                        </div>
                                    </div>
                                    <p class="form-message mx-3"></p>
                                    <div class="w-full">
                                        <div class="mx-3">
                                            <div class="single_form mt-8">
                                                <button type="submit" class="main-btn contact-btn bg-red-500">Enviar</button>
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

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="scroll-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->    

    <script src="{{ asset('/js/app.js') }}" defer></script>


    @endsection


    @section('scripts')
        
    @endsection