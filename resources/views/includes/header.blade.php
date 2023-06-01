<nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
            Project
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ Route::is('home') ? 'active' : ''}}" aria-current="page">
                        {{ __('Главная') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('participants') }}" class="nav-link {{ Route::is('participants') ? 'active' : ''}}" aria-current="page">
                        {{ __('Участники') }}
                    
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a href="{{ route('registration') }}" class="nav-link {{ Route::is('registration') ? 'active' : ''}}" aria-current="page">
                        {{ __('Регистрация') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link {{ Route::is('login') ? 'active' : ''}}" aria-current="page">
                        {{ __('Вход') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- <header class="py-3 border-bottom">
    <div class="container">
    <div class="d-flex justify-content-between">
    <div>
            <ul class="list-unstyled d-flex">
                <li class="ms-3">
                    <a href="{{ route('home') }}">
                        Главная страница
                    </a>
                </li>

                <li class="ms-3">
                    <a href="{{ route('participants') }}">
                        Участники
                    </a>
                </li>
            </ul>
        </div>
        

        <div>
            <ul class="list-unstyled d-flex">
                <li class="ms-3">
                    <a href="{{ route('registration') }}">
                        Регистрация
                    </a>
                </li>

                <li class="ms-3">
                    <a href="{{ route('login') }}">
                        Вход
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    </div>
</header> -->