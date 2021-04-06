<x-auth-layout>

    <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
        <div class="flex flex-col overflow-y-auto md:flex-row">
            <div class="h-32 md:h-auto md:w-1/2">
                <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="{{ asset('images/sobre-nos.jpg') }}" alt="Office"/>
                <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block" src="../assets/img/login-office-dark.jpeg" alt="Office"/>
            </div>
            <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                <div class="w-full">

                       <img src="{{ asset('images/logo.png') }}" class="object-contain h-32 w-full mb-8">

                        <x-jet-validation-errors class="mb-4" />

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div>
                                <x-jet-label for="email" value="{{ __('E-mail') }}" />
                                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="password" value="{{ __('Senha') }}" />
                                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                            </div>

                            <div class="block mt-4">
                                <label for="remember_me" class="flex items-center">
                                    <x-jet-checkbox id="remember_me" name="remember" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Lembrar-me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu a senha?') }}
                                    </a>
                                @endif

                                <x-jet-button class="ml-4">
                                    {{ __('Entrar') }}
                                </x-jet-button>
                            </div>
                        </form>

                </div>
            </div>
        </div>
    </div>


</x-auth-layout>
