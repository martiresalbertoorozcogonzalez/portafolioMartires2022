@extends('layouts.master')

@section('content')
    
<section class="text-gray-600 body-font overflow-hidden mt-10">
    <div class="container mt-20 mx-auto">

      <a href="{{ route('front-end') }}">
       <button class="flex mb-3 text-white bg-pink-500 border-0 py-2 px-6 focus:outline-none hover:bg-pink-600 rounded">Regresar</button>
      </a>
      
      <div class="lg:w-4/5 mx-auto flex flex-wrap mt-10 mb-10">
        <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="/storage/{{ $certificaciones->imagen_certificado }}">
        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
          
          <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $certificaciones->titulo}}</h1>
          
          <p class="leading-relaxed mt-10">{!! $certificaciones->descripcion !!}</p>
          
          <div class="flex mt-10">
            <span class="title-font font-medium text-2xl text-gray-900">Github del proyecto</span>
            <button class="flex ml-auto text-white bg-pink-500 border-0 py-2 px-6 focus:outline-none hover:bg-pink-600 rounded">Button</button>
            
          </div>

          <div class="flex mt-10">
            <span class="title-font font-medium text-2xl text-gray-900">Pagina del proyecto</span>
            <button class="flex ml-auto text-white bg-pink-500 border-0 py-2 px-6 focus:outline-none hover:bg-pink-600 rounded">Button</button>
          </div>

        </div>
      </div>
    </div>
</section>

@endsection