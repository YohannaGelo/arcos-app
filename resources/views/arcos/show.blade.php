@extends('layouts.app')

@section('content')
<div class="container mb-5">
    <h1 class="my-4 display-5">{{ $arco->nombre }}</h1>
    <div class="row">
        <div class="col-lg-6">
            @if ($arco->imagen)
                <img src="{{ $arco->imagen }}" class="img-fluid" alt="{{ $arco->nombre }}" style="height: 400px;">
            @else
                <div class="bg-secondary text-white text-center py-5">Sin imagen</div>
            @endif
        </div>
        <div class="col-lg-6 mt-4">
            <p class="fs-5"><strong>Tipo:</strong> {{ $arco->tipo }}</p>
            <p class="fs-5"><strong>Descripción:</strong> {{ $arco->descripcion }}</p>

            <!-- Card de curiosidad -->
            @if ($arco->curiosidad && $arco->imagen_curiosidad)
                <div class="card col-8 col-sm-12 mb-4 shadow-sm mt-4 bg-light-subtle">
                    <div class="row g-0">
                        <div class="col-sm-4">
                            <img src="{{ $arco->imagen_curiosidad }}" class="img-fluid rounded-start" alt="Curiosidad sobre {{ $arco->nombre }}" style="height: 100%;">
                        </div>
                        <div class="col-sm-8 d-flex align-items-center">
                            <div class="card-body">
                                <h5 class="card-title fs-5 fw-medium">Curiosidad sobre {{ $arco->nombre }}</h5>
                                <p class="card-text">{{ $arco->curiosidad }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <a href="{{ route('arcos.edit', $arco->id) }}" class="btn btn-secondary">Editar</a>
            <form action="{{ route('arcos.destroy', $arco->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-dark" onclick="return confirm('¿Estás seguro de eliminar este arco?')">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection