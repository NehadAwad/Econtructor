<h1>sdadfsad</h1>
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-jet-dropdown-link href="{{ route('logout') }}"
             onclick="event.preventDefault();
                    this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-jet-dropdown-link>
</form>
<a href="/test">test</a>
