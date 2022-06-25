@extends('layouts.app')

@section('estilos')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
@endsection

@section('content')

<div class="p-5">

<h1 class="text-2xl text-center font-bold">Editar acerca de mi</h1>

<form class="max-w-lg mx-auto p-0 m-0 my-10" action="{{ route('acercademi.update', ['acercademi'=> $acercademi->id]) }}" method="POST" enctype="multipart/form-data" novalidate>
    
    @csrf
    @method('PUT')

<div class="mb-5">

    <label for="nombre" class="block text-black font-bold text-lg mb-2">Nombre</label>

    <input id="nombre" 
    type="text"
    class="p-3 bg-white rounded form-input w-full @error('nombre') border-blue-500 border @enderror"
    name="nombre"
    placeholder="nombre"
    value="{{ $acercademi->nombre }}"
    >
    @error('nombre')
        <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
            <strong class="font-bold">Error!!</strong>
            <span class="block">{{$message}}</span>
        </div>
    @enderror
</div>

<div class="mb-5">
        
    <label for="descripcion" class="block text-black font-bold text-lg mb-2">Descripcion de acerca de mi</label>

    <input type="hidden" name="descripcion" id="descripcion" value="{{ $acercademi->descripcion }}">

    <trix-editor class="form-control @error('descripcion') is-invalid @enderror " input="descripcion">
    </trix-editor>

</div>   



<div class="form-group mt-3">
    <label for="imagen_acercademi">Elige una imagen nueva</label>
    <input type="file" name="imagen_acercademi" id="imagen_acercademi"
        class="form-control @error('imagen_acercademi') is-invalid @enderror ">

        <div class="mt-4">
            <p>Imagen Actual</p>
            <img class="mt-3 mb-3" src="/storage/{{$acercademi->imagen_acercademi}}" style="width:200px;">
        </div>

    @error('imagen_acercademi')
    <span class=" invalid-feedback d-block" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror()
</div>

<button class="bg-teal-500 w-full hover:bg-teal-600 text-gray-100 font-bold p-3 focus:outline focus:shadow-outline uppercase ">Editar Acercademi</button>

</form>
    

</div>
@endsection


@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection