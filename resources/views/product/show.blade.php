@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $item->brand}}
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            Model :
                            {{ $item->model}}
                        </h6>
                        <h6 class="card-subtitle mb-2 text-muted">
                            Fabric :
                            {{ $item->fabric}}
                        </h6>
                        <h6 class="card-subtitle mb-2 text-muted">
                            Color :
                            {{ $item->color}}
                        </h6>
                        <h6 class="card-subtitle mb-2 text-muted">
                            Size :
                            {{ $item->size}}
                        </h6>
                        <h6 class="card-subtitle mb-2 text-muted">
                            Length :
                            {{ $item->length}}
                        </h6>
                        <h6 class="card-subtitle mb-2 text-muted">
                            Price :
                            {{ $item->price}} €
                        </h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos accusantium porro ratione repellat reprehenderit natus a dignissimos fugit mollitia culpa? Accusantium earum error facilis tempore nisi, quidem animi incidunt at aut. Omnis laudantium rerum velit, praesentium possimus! Laboriosam, ratione, quaerat!
                        </p>
                        <a href="#" class="card-link">Buy now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
