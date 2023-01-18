<nav class="navbar navbar-expand-lg custom_nav-container ">
    <a class="navbar-brand" href="{{ url('/') }}">
        <span>Bengkel Azkoy</span>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""> </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-primary mr-2 rounded-2" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-success rounded-2" href="{{ route('register') }}">Sign Up</a>
            </li>
        </ul>
        <div class="quote_btn-container">
            <form class="form-inline">
                <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
            <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>Call : +62 85156735641</span>
            </a>
        </div>
    </div>
</nav>
