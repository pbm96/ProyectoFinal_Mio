
<!-- include del nav y de los enlaces de estilos-->
@extends('templates.main')

@section('titulo_pagina', 'Mis productos')

@section('estilos')
    <style>
        .card-title{
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }
    </style>
@endsection


@section('contenido')

    @foreach($productos->chunk(4) as $productChunk)

        <div class="row">
            @foreach($productChunk as $producto)
                <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                    <div class="card">
                        <div class="card-header">
                            @if(count($producto->imagen)>0)

                                <img src="{{ asset('imagenes/productos/'.$producto->imagen[0]->nombre) }}" alt="Imagen del producto" style="width:100%" height="160"  class="card-img-top">
                            @else
                                <img src="{{ asset('imagenes/productos/fakeapop_default.png') }}" alt="Imagen del producto" style="width:100%" class="card-img-top">
                            @endif
                        </div>

                        <div class="card-body">
                            <h4 class="card-title"> {{ $producto->nombre }} </h4>
                            <p class="card-text h3"> {{ $producto->precio }} €</p>
                            <a href="{{route('editar_producto',$producto->id)}}" class="btn btn-outline-info"> Editar Producto</a>

                            <p class="card-text h3 text-right"> creado hace {{$producto->diferencia}}</p>


                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
    <div class="">{{ $productos->render() }}</div>
@endsection
<!-- seccion  de los enlaces de scripts-->
@section('scripts')

@endsection