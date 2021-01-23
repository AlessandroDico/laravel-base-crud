@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $product->brand }}
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                Model :
                                {{ $product->model }}
                            </h6>
                            <h6 class="card-subtitle mb-2 text-muted">
                                Fabric :
                                {{ $product->fabric }}
                            </h6>
                            <h6 class="card-subtitle mb-2 text-muted">
                                Color :
                                {{ $product->color }}
                            </h6>
                            <h6 class="card-subtitle mb-2 text-muted">
                                Price :
                                {{ $product->price }} €
                            </h6>
                            <a href="{{ route('product.show', ['product' => $product->id]) }}" class="card-link">Show more</a>
                            <a href="{{ route('product.edit', ['product' => $product->id ]) }}" class="link-update">
                                <button type="button" class="text-uppercase btn btn-success">
                                    Update
                                </button>
                            </a>
                            <form method="post" class="d-inline"
                                action="{{ route('product.destroy', ['product' => $product->id]) }}">
                                @csrf
                                @method ('DELETE')
                                <button type="submit" class="text-uppercase btn btn-danger">Delete</button>
                            </form>
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
