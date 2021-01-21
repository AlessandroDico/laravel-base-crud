@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Add new dress</h1>
                <h2>fill in all fields for better storage</h2>
                <form>
                    <div class="form-group">
                        <label for="column-name">Brand</label>
                        <input type="text" class="form-control" placeholder="Enter brand">
                    </div>
                    <div class="form-group">
                        <label for="column-name">Fabric</label>
                        <input type="text" class="form-control" placeholder="Enter fabric">
                    </div>
                    <div class="form-group">
                        <label for="column-name">Color</label>
                        <input type="text" class="form-control" placeholder="Enter color">
                    </div>
                    <div class="form-group">
                        <label for="column-name">Size</label>
                        <input type="text" class="form-control" placeholder="Enter size">
                    </div>
                    <div class="form-group">
                        <label for="column-name">Length</label>
                        <input type="text" class="form-control" placeholder="Enter length">
                    </div>
                    <div class="form-group">
                        <label for="column-name">Model</label>
                        <input type="text" class="form-control" placeholder="Enter model">
                    </div>
                    <div class="form-group">
                        <label for="column-name">Price</label>
                        <input type="number" class="form-control" placeholder="Enter price">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
