<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
            <!-- LastName -->
                        <div>
                            <x-label for="lastName" :value="__('LastName')" />
            
                            <x-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="old('lastName')" required autofocus />
                        </div>
           <!-- Tel -->
                        <div>
                            <x-label for="tel" :value="__('Tel')" />
            
                            <x-input id="tel" class="block mt-1 w-full" type="text" name="tel" :value="old('tel')" required autofocus />
                        </div>
         <!--Adresse  -->
                   <div>
                    <x-label for="adresse" :value="__('Adresse')" />
    
                    <x-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required autofocus />
                </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

             <!-- Role -->
        <div class="mt-4">
            <fieldset>
                <legend>Vous voulez un compte en temps que?cocher le role correspondant</legend>
               
                  <input type="radio" name="role" value="Pecheur"/>Pecheur <br/>
                  <input type="radio" name="role" value="Scientifique"/>Scientifique <br/>
                  <input type="radio" name="role" value="ONG"/>ONG <br/>
                  <input type="radio" name="role" value="ServiceEtat"/>Service de l'Etat <br/>
                  <input type="radio" name="role" value="SecteurPrive"/>Secteur privé<br/>
                  <input type="radio" name="role" value="Autres"/> Autres<br/>
                
            </fieldset>
        </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
