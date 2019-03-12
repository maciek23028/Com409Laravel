@yield ('navMenu')
<!----navmenu ----->

<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('FILM4U', 'FILM4U') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('showMovies') }}">{{ __('All') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('showMovies') }}">{{ __('Movies') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('showMovies') }}">{{ __('Series') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('showMovies') }}">{{ __('Mood') }}</a>
                            </li>
                    </ul>
                    <div class="filterItems">
                            <select class="filterItem">
                             <option value="#" selected="selected">Release year</option>
                             </select> 
                             <select class="filterItem">
                             <option value="#" selected="selected">Genre</option>
                             </select> 
                             <select class="filterItem">
                             <option value="#" selected="selected">Rating</option>
                             </select> 
                    </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    <!-- search bar-->
                        <div class="searchbar">
                           <div class="search">
                              <input type="text" class="searchTerm" placeholder="Search">
                              <button type="submit" class="searchButton">
                                <i class="fa fa-search" aria-hidden="true"></i>
                             </button>
                           </div>
                        </div>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>

            </div>
        </nav>
</header>

        <!----end of navmenu ----->