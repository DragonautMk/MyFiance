<nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">MyFiance</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03"
            aria-controls="navbarsExample03" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse show" id="navbarsExample03" style="">
            <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="#">I nostri servizi finanziari</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">I nostro Staff</a>
                </li>
                @auth


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">Area Clienti</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault();document.querySelector('#form-logout').submit();">Logout</a>
                            </li>
                            <form action="{{ route('logout') }}" method="post" class="d-none" id="form-logout">@csrf</form>
                            <li><a class="dropdown-item" href="#">Prenota un appuntamento</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">Area Clienti</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                            <li><a class="dropdown-item" href="#">Prenota un appuntamento</a></li>
                        </ul>
                    </li>
                @endauth
                <li class="nav-item">
                    <a class="nav-link active" href="#">La nostra storia</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="#">Info e contatti</a>
                </li>
            </ul>
            <form role="search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </div>
</nav>
