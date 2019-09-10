@extends('layouts.app')

@section('main')
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">{{$category->name}}</h1>
            <p class="lead text-muted mb-0">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte...</p>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="category.html">Category</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sub-category</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-3">
                <div class="card bg-light mb-3">
                    <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categorías</div>
                    <ul class="list-group category_block">
                        <li class="list-group-item"><a href="/category/1">Smart Phones</a></li>
                        <li class="list-group-item"><a href="/category/2">Tablets</a></li>
                        <li class="list-group-item"><a href="/category/3">Laptops</a></li>
                    </ul>
                </div>
                
            </div>
            <div class="col">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card">
                                <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title"><a href="/producto/{{$product['id']}}" title="View Product">{{$product->name}}</a></h4>
                                    <p class="card-text">{{$product->brand}}</p>
                                    <div class="row">
                                        <div class="col">
                                            <p class="btn btn-danger btn-block">${{$product->price}}</p>
                                        </div>
                                        <div class="col">
                                            <a href="#" class="btn btn-success btn-block">Agregar al carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-12">
                    <br>
                    <br>
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Anterior</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Siguiente</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{$products->links()}}

@endsection
