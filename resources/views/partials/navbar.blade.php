<!-- Navbar -->
{{--Douglas--}}
<nav class="py-4">
    <div class="container flex items-center justify-between px-4 mx-auto">
        <a href="#" class="inline-flex text-2xl font-bold text-white">
            <x-application-logo class="w-20 h-20 fill-current text-gray-50" />
        </a>

        <div class="justify-end">
            <a href="#"
                class="ml-4 font-semibold text-gray-100 hover:text-green-200 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Contato
            </a>
        </div>
        <div class="justify-end hidden">
            @if (Route::has('login'))
            <a href="{{ route('login') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Entrar</a>
            @endif
            @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cadastrar-se</a>
            @endif
        </div>
    </div>
</nav>
