<x-layout>
    <x-slot name="title">{{ env('APP_NAME') }}</x-slot>

    <main class="form-info w-100 m-auto">
        <div class="mx-auto">
            <a href="{{ route('login') }}">Log in</a> or <a href="{{ route('register') }}">Register</a> please.
        </div>
    </main>
</x-layout>