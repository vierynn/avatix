<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
<div class="container-fluid p-2">
    <div class="logo-img">
        <img src="{{asset('img/avatix.png')}}" alt="">
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="{{Illuminate\Support\Facades\Route::currentRouteName() == 'home' ? 'nav-link active fw-bold' : 'nav-link'}}" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="{{Illuminate\Support\Facades\Route::currentRouteName() == 'history' ? 'nav-link active fw-bold' : 'nav-link'}}" aria-current="page" href="#">History</a>
        </li>
        <li class="nav-item">
            <a class="{{Illuminate\Support\Facades\Route::currentRouteName() == 'purchases' ? 'nav-link active fw-bold' : 'nav-link'}}" aria-current="page" href="#">Purchases</a>
        </li>
        <li class="nav-item">
            <a class="{{Illuminate\Support\Facades\Route::currentRouteName() == 'calendar' ? 'nav-link active fw-bold' : 'nav-link'}}" aria-current="page" href="#">Calendar</a>
        </li>

    </ul>
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn-primary {background-color: #FF45B5 !important;}" type="submit">Login</button>
    </form>
    </div>
</div>
</nav>