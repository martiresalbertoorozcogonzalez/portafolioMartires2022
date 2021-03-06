@extends('layouts.app')


@section('content')

   <div class="container mx-auto px-4">
       
    <div class="flex flex-col md:flex-row gap-3">
        <a href="{{ route('portafolio.index') }}" class="bg-yellow-400 hover:bg-yellow-300 rounded">
            <h2 class="text-2xl text-center font-bold m-3 p-2">Portafolio</h2>
            <img src="/img/fondo2.jpg" alt="">
        </a>
        <a href="{{ route('acercademi.index') }}" class="bg-red-400 hover:bg-red-300 rounded">
            <h2 class="text-2xl text-center font-bold m-3 p-2">Acerca de mi</h2>
            <img src="/img/fondo2.jpg" alt="">
        </a>
        <a href="{{ route('certificaciones.index') }}" class="bg-blue-400 hover:bg-blue-300 rounded">
            <h2 class="text-2xl text-center font-bold m-3 p-2">Certificados</h2>
            <img src="/img/fondo2.jpg" alt="">
        </a>
        {{-- <a href="{{ route('servicios.index') }}" class="bg-green-400 hover:bg-green-300 rounded">
            <h2 class="text-2xl text-center font-bold m-3 p-2">Servicios</h2>
            <img src="/img/fondo2.jpg" alt="">
        </a> --}}
    </div>

   </div>
    
@endsection