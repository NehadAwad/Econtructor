<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} 
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />

                <h1> I can do this</h1>
                {{-- <form method="POST" action="http://127.0.0.1:8000/admin/logout">
                                <input type="hidden" name="_token" value="Izm5bm5eJQxmJlf97Is7rVQU9reLuraTTdtHARuT">
                                <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition" href="http://127.0.0.1:8000/admin/logout" onclick="event.preventDefault();
                                                this.closest('form').submit();">Log Out</a>
                </form> --}}

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-dropdown-link href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-jet-dropdown-link>
                </form>

                
            </div>
        </div>
    </div>
</x-app-layout>
