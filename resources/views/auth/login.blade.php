@include('menus.header')

    <section class="connexion" style="height: 600px" >

    
        <!-- Session Status -->
        <div class="mb-4" :status="session('status')"> </div>

        <!-- Validation Errors -->
        <div class="mb-4" :errors="$errors"> </div>

        <form method="POST" action="{{ route('login') }}" style="margin: auto; width: 50%; padding: 150px; text-align: center;background-color: rgba(102, 102, 102, 0.102); margin-top: 50px">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" :value="__('Email')" style="font-size: 20px"> <i class="fa fa-envelope" aria-hidden="true"></i>
                    Adresse email</label><br>

                <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus style="padding: 50px; padding-top: 10px; padding-bottom: 10px; margin-bottom: 2rem"/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" :value="__('Password')" style="font-size: 20px" ><i class="fa fa-key" aria-hidden="true"></i>
                    Mot de passe</label><br>

                <input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" style="padding: 50px; padding-top: 10px; padding-bottom: 10px"/>
            </div>

            <!-- Remember Me -->
            <div class="block" style="margin-top: 1rem">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4" style="margin-top: 1rem">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                @endif

                <button class="ml-3" style="padding: 1rem; border-radius: 1rem; background-color: black; color: white">
                    {{ __('Se connecter') }}
                </button>
            </div>
        </form>

    </section>

    
