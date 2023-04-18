    <x-fav-ico></x-fav-ico>
            @if (Route::has('login'))
                <div class="sm:top-0 sm:items-center">
                    @auth
                        {{view('dashboard')}}
                    @else
                        {{view('auth.login')}}
                    @endauth
                </div>
            @endif
