<header>
    <div class="top bg-primary">
        <div class="container text-white text-end">
            <span>
                DC POWER VISA &copy;
            </span>
            <span>
                ADDITIONAL DC SITES
            </span>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <div class="row align-items-center">
                <nav class="navbar navbar-expand-sm navbar-light bg-white fw-bold">
                    <div class="container">
                        <div class="col-1 left">
                            <a href="{{route('home_page')}}">
                                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                            </a>
                        </div>
                        <div class="center">
                            <div class="collapse navbar-collapse" id="collapsibleNavId">
                                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::currentRouteName() === 'characters_page' ? 'my_active' :''}}" href="{{route('characters_page')}}">CHARACTERS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::currentRouteName() === 'comics_page' ? 'my_active' :''}}" href="{{route('comics_page')}}">COMICS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::currentRouteName() === 'movies_page' ? 'my_active' :''}}" href="{{route('movies_page')}}">MOVIES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::currentRouteName() === 'tv_page' ? 'my_active' :''}}" href="{{route('tv_page')}}">TV</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::currentRouteName() === 'games_page' ? 'my_active' :''}}" href="{{route('games_page')}}">GAMES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::currentRouteName() === 'collectibles_page' ? 'my_active' :''}}" href="{{route('collectibles_page')}}">COLLECTIBLES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::currentRouteName() === 'videos_page' ? 'my_active' :''}}" href="{{route('videos_page')}}">VIDEOS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::currentRouteName() === 'fans_page' ? 'my_active' :''}}" href="{{route('fans_page')}}">FANS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::currentRouteName() === 'news_page' ? 'my_active' :''}}" href="{{route('news_page')}}">NEWS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{Route::currentRouteName() === 'shop_page' ? 'my_active' :''}}" href="{{route('shop_page')}}">SHOP</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-1 right">
                            <form class="d-flex my-2 my-lg-0">
                                <input class="form-control me-sm-2 text-end my_input" type="text" placeholder="Search" />
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>