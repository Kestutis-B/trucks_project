<nav class="navbar navbar-dark bg-dark   d-flex justify-content-between text-light" >
    <div class="d-flex justify-content-between" style="padding: 10px">
        <div>
            <h1>TRUCKS PROJECT</h1>
        </div>
    </div>
    <div>
        @if (Route::has('login'))
            <div class="form-inline">
                @auth
                    <div class="d-flex justify-content-between">
                        <a href="{{ url('/trucks') }}" class="navbar-brand">Trucks</a>
                        <a href="{{ url('/subunits') }}" class="navbar-brand">Subunits</a>
                        <form method="POST" action="{{ route('logout') }}" class="navbar-brand">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </div>
                @else
                    <div class="navbar-brand">
                        <a href="{{ route('login') }}" class="navbar-brand">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="navbar-brand">Register</a>
                        @endif
                    </div>
                @endauth
            </div>
        @endif
    </div>
</nav>

