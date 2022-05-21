<x-layout>
    <x-slot name="title">Login</x-slot>

    <form class="auth-form" method="post" action="{{ route('login') }}">
        @csrf

        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <x-input :type="'text'" :name="'name'" :placeholder="'Name'">Name</x-input>
        <x-input :type="'password'" :name="'password'" :placeholder="'Password'">Password</x-input>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        or <a href="{{ route('register') }}">Register</a>
    </form>

</x-layout>