<div class="container d-block">
    <header class="d-flex flex-wrap justify-content-center py-3 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <span class="fs-4">{{ env('APP_NAME') }}</span>
        </a>

        <ul class="nav nav-pills">
            @auth
                <x-nav-link :url="route('users.tokens.index', ['user' => $user ?? auth()->user()])">Tokens</x-nav-link>
                <x-nav-link :url="route('logout')" :method="'post'">Log Out</x-nav-link>
            @else
                <x-nav-link :url="route('login')">Login</x-nav-link>
                <x-nav-link :url="route('register')">Register</x-nav-link>
            @endif
        </ul>
    </header>
</div>