<header class="mb-5 d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between white">
                <div>COMICS</div>
                <span>Attualmente sei in: {{ Route::currentRouteName() }}</span>
                <div class="">

                        @if (Route::currentRouteName() == 'home')
                        <a class="active" href="{{ route('home') }}">Home</a>
                        @else
                        <a class="" href="{{ route('home') }}">Home</a>
                        @endif

                        {{-- @if (Route::currentRouteName() == 'about/{indice}')
                        <a class="active" href="{{ route('about') }}">About</a>
                        @else
                        <a href="{{ route('about') }}">About</a>
                        @endif --}}
                </div>
            </div>
        </div>
    </div>
</header>