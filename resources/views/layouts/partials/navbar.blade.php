<style>
    .navbarDigital {
        background-color: #0391CF !important;
        padding: 0 20px;
    }
    .navbar-brand {
        font-family: 'Sansita Swashed', cursive;
        font-size: 2em;
        font-weight: bold;
        color: white !important;
    }
    .navbar-nav .nav-link {
        color: white;
        font-size: 1.2em;
        padding-right: 20px !important;
        padding-left: 20px !important;
    }
    #navbarNav {
        margin-left: 50px;
        font-size: 0.8em;
    }
    .navbar-nav .nav-item.active {
        border-bottom: 5px solid white;
    }
    .logInName {
        background-color: white;
        border-radius: 10px;
    }
    .logInName span {
        color: #0391CF !important;
    }
</style>
<nav class="navbar navbar-expand-lg navbarDigital">
    <a class="navbar-brand" href="{{ route('home') }}">Digital Shared Reading</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active navHome">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item navContactUs">
                <a class="nav-link" href="{{ route('contact_us') }}">Contact Us</a>
            </li>
            @if(\Illuminate\Support\Facades\Session::get('type-login'))
                <li class="nav-item navLogout">
                    <a class="nav-link" href="{{ route('logout') }}">Log out</a>
                </li>

                <li class="nav-item navLogin logInName">
                    <span class="nav-link">Log-in {{ \Illuminate\Support\Facades\Session::get('type-login') }}'s name</span>
                </li>
            @else
                <li class="nav-item navLogin">
                    <a class="nav-link" href="{{ route('login') }}">Log In</a>
                </li>
            @endif
        </ul>
    </div>
</nav>
