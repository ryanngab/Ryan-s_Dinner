<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/images/logo wikrama.png') }}" style="width:50px" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link text-center" aria-current="page" href="#Hero">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#Menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#About">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#Contact">Reservation</a>
                </li>
            </ul>
            <div class="user_option d-flex justify-content-center">
                <a href="/cart" style="text-decoration:none; color:#ffff;">
                    <i class="fa fa-shopping-cart" style="color:#ffff" aria-hidden="true"></i> Cart <span
                        class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                </a>
                <a href="/user-profile" class="user_link">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </a>
\                <form class="form-inline">
                    <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                        <i class="fa fa-search" style="color:#ffff" aria-hidden="true"></i>
                    </button>
                </form>
                <a href="" class="btn btn-outline-warning"> Order Online</a>
            </div>
        </div>
    </div>
</nav>
