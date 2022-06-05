@extends('layouts.app')

@section('estilos')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
@endsection

@section('content')

<div class="p-5">

<h1 class="text-2xl text-center font-bold">Editar proyecto</h1>

<form class="max-w-lg mx-auto p-0 m-0 my-10" action="{{ route('portafolio.update', ['portafolio'=> $portafolio->id]) }}" method="POST" enctype="multipart/form-data" novalidate>
    
    @csrf
    @method('PUT')

<div class="mb-5">

    <label for="titulo" class="block text-black font-bold text-lg mb-2">Titulo</label>

    <input id="titulo" 
    type="text"
    class="p-3 bg-white rounded form-input w-full @error('titulo') border-blue-500 border @enderror"
    name="titulo"
    placeholder="Titulo"
    value="{{ $portafolio->titulo }}"
    >
    @error('titulo')
        <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
            <strong class="font-bold">Error!!</strong>
            <span class="block">{{$message}}</span>
        </div>
    @enderror
</div>

<div class="mb-5">
    <label for="categoria" class="block text-gray-700 text-sm mb-2">
        Categoria;
    </label>
    <select class="block appearance-none border border-gray-200 
              text-gray-700 rounded leading-tight focus:outline-none 
              focus:bg-white focus:border-gray-500 p-3 bg-gray-100 
              w-full" name="categoria_id" id="categoria">
        <option disabled selected> Selecciona </option>
        @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}" {{ $portafolio->categoria_id == $categoria->id ? 'selected' : '' }}>{{ $categoria->nombre }}
            </option>
        @endforeach
    </select>
    @error('categoria_id')
            <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
                <strong class="font-bold">Error!!</strong>
                <span class="block">{{$message}}</span>
            </div>
    @enderror()
</div>   

<div class="mb-5">
        
    <label for="descripcion" class="block text-black font-bold text-lg mb-2">Descripcion para el proyecto</label>

    <input type="hidden" name="descripcion" id="descripcion" value="{{ $portafolio->descripcion }}">

    <trix-editor class="form-control @error('descripcion') is-invalid @enderror " input="descripcion">
    </trix-editor>

</div>   



<div class="form-group mt-3">
    <label for="imagen_portafolio">Elige una imagen_portafolio</label>
    <input type="file" name="imagen_portafolio" id="imagen_portafolio"
        class="form-control @error('imagen_portafolio') is-invalid @enderror ">

        <div class="mt-4">
            <p>Imagen Actual</p>
            <img class="mt-3 mb-3" src="/storage/{{$portafolio->imagen_portafolio}}" style="width:200px;">
        </div>

    @error('imagen_portafolio')
    <span class=" invalid-feedback d-block" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror()
</div>

<button class="bg-teal-500 w-full hover:bg-teal-600 text-gray-100 font-bold p-3 focus:outline focus:shadow-outline uppercase ">Editar Portafolio</button>

</form>
    

</div>
@endsection


@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection