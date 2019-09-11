@extends('layouts.app')

@section('main')
    <div class="container">
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">MIS PRODUCTOS</h1>
                <br>
                <a href="/productos/agregar" style="color: white;">
                    <div class="btn btn-primary">Agregar producto</div>
                </a>
            </div>
        </section>
        <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Marca</th>
                <th scope="col">Categoría</th>
                <th scope="col">Precio</th>
                <th scope="col">Descuento</th>
                <th scope="col">Stock</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                            <td>{{$product->name}}</td>
                            <td>{{$product->brand->name}}</td>
                            <td>{{$product->category->name}}</td>
                            <td>${{$product->price}}</td>
                            <td>{{$product->discount}}%</td>
                            <td>{{$product->stock}}</td>
                            <td>
                                <a href="/productos/editar/{{$product->id}}">Editar</a>
                                <span>|</span>
                                <a href="/productos/eliminar/{{$product->id}}">Eliminar</a>
                            </td>
                    </tr>   
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
