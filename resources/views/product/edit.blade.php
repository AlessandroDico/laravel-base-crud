@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Update dress</h1>
                <form method="POST" action="{{ route('product.update', ['product'=>$item->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="column-name">Brand</label>
                        <input type="text" class="form-control" placeholder="Enter brand" name="brand" value="{{ $item->brand }}">
                    </div>
                    <div class="form-group">
                        <label for="column-name">Fabric</label>
                        <input type="text" class="form-control" placeholder="Enter fabric" name="fabric" value="{{ $item->fabric }}">
                    </div>
                    <div class="form-group">
                        <label for="column-name">Color</label>
                        <input type="text" class="form-control" placeholder="Enter color" name="color" value="{{ $item->color }}">
                    </div>
                    <div class="form-group">
                        <label for="column-name">Size</label>
                        <input type="text" class="form-control" placeholder="Enter size" name="size" value="{{ $item->size }}">
                    </div>
                    <div class="form-group">
                        <label for="column-name">Length</label>
                        <input type="text" class="form-control" placeholder="Enter length" name="length" value="{{ $item->length }}">
                    </div>
                    <div class="form-group">
                        <label for="column-name">Model</label>
                        <input type="text" class="form-control" placeholder="Enter model" name="model" value="{{ $item->model }}">
                    </div>
                    <div class="form-group">
                        <label for="column-name">Price</label>
                        <input type="number" class="form-control" placeholder="Enter price" name="price" step="0.01" value="{{ $item->price }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

            </div>
        </div>
    </div>
@endsection
