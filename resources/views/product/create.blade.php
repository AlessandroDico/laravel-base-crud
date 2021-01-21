@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Add new dress</h1>
                <h2>fill in all fields for better storage</h2>
                <form method="POST" action="{{ route('product.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="column-name">Brand</label>
                        <input type="text" class="form-control" placeholder="Enter brand" name="brand">
                    </div>
                    <div class="form-group">
                        <label for="column-name">Fabric</label>
                        <input type="text" class="form-control" placeholder="Enter fabric" name="fabric">
                    </div>
                    <div class="form-group">
                        <label for="column-name">Color</label>
                        <input type="text" class="form-control" placeholder="Enter color" name="color">
                    </div>
                    <div class="form-group">
                        <label for="column-name">Size</label>
                        <input type="text" class="form-control" placeholder="Enter size" name="size">
                    </div>
                    <div class="form-group">
                        <label for="column-name">Length</label>
                        <input type="text" class="form-control" placeholder="Enter length" name="length">
                    </div>
                    <div class="form-group">
                        <label for="column-name">Model</label>
                        <input type="text" class="form-control" placeholder="Enter model" name="model">
                    </div>
                    <div class="form-group">
                        <label for="column-name">Price</label>
                        <input type="number" class="form-control" placeholder="Enter price" name="price">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
