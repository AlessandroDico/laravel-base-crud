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
                            {{-- {{ $item->model }} --}}
                            {{ $item->model ? $item->model : 'N.D'}}
                        </h6>
                        <h6 class="card-subtitle mb-2 text-muted">
                            Fabric :
                            {{ $item->fabric ? $item->fabric : 'N.D'}}
                        </h6>
                        <h6 class="card-subtitle mb-2 text-muted">
                            Color :
                            {{-- {{ $item->color}} --}}
                            {{ $item->color ? $item->color : 'N.D'}}
                        </h6>
                        <h6 class="card-subtitle mb-2 text-muted">
                            Size :
                            {{-- {{ $item->size }} --}}
                            {{ $item->size ? $item->size : 'N.D' }}
                        </h6>
                        <h6 class="card-subtitle mb-2 text-muted">
                            Length :
                            {{-- {{ $item->length ? $item->length : 'N.D' }} --}}

                             {{-- null coalescing operator --}}
                            {{ $item->length ?? 'N.D' }}
                        </h6>
                        <h6 class="card-subtitle mb-2 text-muted">
                            Price :
                            {{-- {{ $item->price}} € --}}
                            {{ $item->price ? $item->price : 'N.D' }} €
                        </h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos accusantium porro ratione repellat reprehenderit natus a dignissimos fugit mollitia culpa? Accusantium earum error facilis tempore nisi, quidem animi incidunt at aut. Omnis laudantium rerum velit, praesentium possimus! Laboriosam, ratione, quaerat!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
