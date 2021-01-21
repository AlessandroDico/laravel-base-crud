@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $product->brand}}
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                Model :
                                {{ $product->model}}
                            </h6>
                            <h6 class="card-subtitle mb-2 text-muted">
                                Fabric :
                                {{ $product->fabric}}
                            </h6>
                            <h6 class="card-subtitle mb-2 text-muted">
                                Color :
                                {{ $product->color}}
                            </h6>
                            <h6 class="card-subtitle mb-2 text-muted">
                                Price :
                                {{ $product->price}} €
                            </h6>
                            <a href="{{ route('product.show', ['product' => $product->id]) }}" class="card-link">Show more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a href="{{ route('product.create') }}" class="link-add-product">
            <button type="button" name="button" class="btn btn-lg btn-primary">Add new product</button>
        </a>
    </div>
@endsection

@section('javascript')
    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
@endsection
