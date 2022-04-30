@include('menus.header')

    <section class="connexion" >

    
        <!-- Session Status -->
        <div :status="session('status')"> </div>

        <!-- Validation Errors -->
        <div :errors="$errors"> </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" :value="__('Email')"> <i class="fa fa-envelope" aria-hidden="true"></i>
                    Adresse email</label><br>

                <input id="email" type="email" name="email" :value="old('email')" required autofocus/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" :value="__('Password')"><i class="fa fa-key" aria-hidden="true"></i>
                    Mot de passe</label><br>

                <input id="password" type="password" name="password" required autocomplete="current-password"/>
            </div>

            <!-- Remember Me -->
            <div>

                <label for="remember_me">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span>{{ __('Se souvenir de moi') }}</span>
                </label> <br>

                <button>
                    {{ __('Se connecter') }}
                </button> <br>

                
            </div>

            <div class="oublie">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                @endif

                
            </div>

            <!-- s'inscrire -->
            <div class="inexistant">
                <label for="inscription">
                    <a href="{{ route('register') }}">Vous n'avez pas de compte ? veuillez vous inscrire</a>
                </label>
            </div>
        </form>

    </section>

@include('menus.footer')

    
