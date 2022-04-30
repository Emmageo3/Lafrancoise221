@include('menus.header')

    <section class="inscription">

    

        <!-- Validation Errors -->
        <div :errors="$errors" ></div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" :value="__('Name')" ><i class="fa fa-user" aria-hidden="true"></i>
                    Nom complet</label><br>

                <input id="name" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label for="email" :value="__('Email')" ><i class="fa fa-envelope" aria-hidden="true"></i>Adresse email</label><br>

                <input id="email" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div>
                <label for="password" :value="__('Password')"><i class="fa fa-key" aria-hidden="true"></i> Mot de passe</label><br>

                <input id="password" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" :value="__('Confirm Password')" ><i class="fa fa-key" aria-hidden="true"></i> Confirmer le mot de passe</label><br>

                <input id="password_confirmation" type="password" name="password_confirmation" required />
            </div>

            <div>

                <button>
                    {{ __('Inscription') }}
                </button><br>

                <div class="compte">

                    <a href="{{ route('login') }}">
                        {{ __('Vous avez déja un compte ? Veuillez vous connecter') }}
                    </a>

                </div>
                

               
            </div>
        </form>
    </section>

@include('menus.footer')
