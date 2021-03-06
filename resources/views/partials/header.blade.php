<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">DRESSYOURSELF</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::route()->getName() == 'homePage' ? 'active' : '' }}" href="{{ route('homePage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link
                    {{ Request::route()->getName() == 'product.index' ? 'active' : '' }}
                    {{ Request::route()->getName() == 'product.show' ? 'active' : '' }}"
                    href="{{ route('product.index') }}">Products</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-md-0">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </div>
</nav>
