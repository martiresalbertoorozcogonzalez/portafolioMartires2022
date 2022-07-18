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
