<x-layout>
    <x-slot name="title">{{ env('APP_NAME') }}</x-slot>

    <div class="h-100 w-100 d-flex align-items-center justify-content-center">
        <div>
            <a href="{{ route('login') }}">Log in</a> or <a href="{{ route('register') }}">Register</a> please.
        </div>
    </div>
</x-layout>