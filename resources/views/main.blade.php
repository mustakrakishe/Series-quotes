<x-layout>
    <x-slot name="title">{{ env('APP_NAME') }}</x-slot>

    <main class="form-info w-100 m-auto">
        <div class="mx-auto">
            @auth
            <h1 class="h3 mb-3 fw-normal">Your credentials:</h1>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" value="{{ auth()->user()->name }}" disabled>
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text"class="form-control" value="{{ auth()->user()->tokens->first()['token'] }}" disabled>
                <label for="floatingPassword">Bearer token</label>
            </div>
            @else
            <a href="{{ route('login') }}">Log in</a> or <a href="{{ route('register') }}">Register</a> please.
            @endif
        </div>
    </main>
</x-layout>