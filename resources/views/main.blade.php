<x-layout>
    <x-slot name="title">{{ env('APP_NAME') }}</x-slot>

    <main class="form-info w-100 m-auto">
        <div class="mx-auto">
            @auth
                <h1 class="h3 mb-3 fw-normal">Hi, {{ auth()->user()->name }}!</h1>
            @else
                <a href="{{ route('login') }}">Log in</a> or <a href="{{ route('register') }}">Register</a> please.
            @endif
        </div>
    </main>
</x-layout>