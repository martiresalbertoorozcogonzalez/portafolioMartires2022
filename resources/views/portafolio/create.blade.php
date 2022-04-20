@extends('layouts.app')


@section('content')

<h1 class="text-2xl text-center mt-10 font-bold">Nuevo Portafolio</h1>


<form class="max-w-lg mx-auto my-10">
    
<div class="mb-5">

    <label for="titulo" class="block text-black font-bold text-lg mb-2">Titulo Portafolio</label>

    <input id="titulo" type="titulo" class="p-3 bg-gray-200 rounded form-input w-full @error('titulo') is-invalid @enderror" name="titulo">

    <div class="form-group mt-5 mb-5">
        
        <label  for="imagen_portafolio" class="block text-gray-700 text-lg mb-2">Elige una imagen de portada para portafolio</label>
        
        <input type="file" name="imagen_portafolio" id="imagen_portafolio" class="form-control @error('imagen_portafolio') is-invalid @enderror ">

        @error('imagen_portafolio')
        <span class=" invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror()
    </div>

</div>   

<div class="mb-5">
        
    <label for="categoria" class="block text-black font-bold text-lg mb-2">Categoria</label>

    <select id="categoria" class="block appearance-none border border-gray-200text-gray-700 rounded leading-tight focus:outline-nonefocus:bg-white focus:border-gray-500 p-3 bg-gray-100 w-full" name="categoria">
        <option disabled selected>Selecciona una categoria</option>
        @foreach ($categorias as $categoria)
            <option
                {{old('categoria') == $categoria->id ? 'selected' : ''}} 
                value="{{ $categoria->id }}">
                {{ $categoria->nombre }}
            </option>
        @endforeach
    </select>

</div>    

<button class="bg-teal-500 w-full hover:bg-teal-600 text-gray-100 font-bold p-3 focus:outline focus:shadow-outline uppercase ">Publicar Portafolio</button>

</form>
    
@endsection