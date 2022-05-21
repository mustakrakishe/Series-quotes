<div class="container d-block">
    <header class="d-flex flex-wrap justify-content-center py-3 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4">{{ env('APP_NAME') }}</span>
        </a>

        <ul class="nav nav-pills">
            <x-nav-link :route="'main'">Main</x-nav-link>
            @auth
                <x-nav-link :route="'logout'" :method="'post'">Log Out</x-nav-link>
            @else
                <x-nav-link :route="'login'">Login</x-nav-link>
                <x-nav-link :route="'register'">Register</x-nav-link>
            @endif
        </ul>
    </header>
</div>