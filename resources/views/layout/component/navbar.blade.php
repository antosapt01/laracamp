<nav class="navbar navbar-expand-lg navbar-light pt-2 pb-2">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="assets/images/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mentor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pricings">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Business</a>
                </li>
            </ul>
            <div class="d-flex">
                @auth
                <div class="d-flex user-logged nav-item dropdown no-arrow">
                    <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }} 
                        @if(Auth::user()->avatar != null)
                        <img src=" {{ Auth::user()->avatar }}" class="user-photo rounded-pill img-thumbnail" alt="">
                        @else
                        <img src=" {{ Auth::user()->initial }}" class="user-photo rounded-pill img-thumbnail" alt="">
                        @endif
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li>
                                <a href="#" class="dropdown-item">My Dashboard</a>
                            </li>
                            <li>
                                <a href=" " class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign Out</a>
                                <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none;">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                            </li>

                        </ul>
                    </a>
                </div>

                @else
                <a href="/login" class="btn btn-master btn-secondary me-3">
                    Sign In
                </a>
                <a href="/register" class="btn btn-master btn-primary">
                    Sign Up
                </a>
                @endauth

            </div>
        </div>
    </div>
</nav>