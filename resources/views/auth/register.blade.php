<x-layout>
    <x-slot name="title">Register</x-slot>

    <form class="auth-form" method="post" action="{{ route('register') }}">
        @csrf

        <h1 class="h3 mb-3 fw-normal">Please register</h1>

        <x-input :type="'text'" :name="'name'" :placeholder="'Name'">Name</x-input>
        <x-input :type="'password'" :name="'password'" :placeholder="'Password'">Password</x-input>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        or <a href="{{ route('login') }}">login</a>
    </form>
    
</x-layout>