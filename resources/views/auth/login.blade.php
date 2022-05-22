<x-layout>
    <x-slot name="title">Login</x-slot>

    <div class="h-100 d-flex align-items-center justify-content-center"">
        <form id="auth-form" method="post" action="{{ route('login') }}">
            @csrf

            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <x-input type="text" name="name" placeholder="Name" class="mb-3">Name</x-input>
            <x-input type="password" name="password" placeholder="Password" class="mb-3">Password</x-input>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            or <a href="{{ route('register') }}">Register</a>
        </form>
    </div>

</x-layout>