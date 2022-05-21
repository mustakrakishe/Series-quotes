<x-layout>
    <x-slot name="title">{{ env('APP_NAME') }}</x-slot>

    <div class="mx-auto">
        @auth
        {{ auth()->user()->name }} is logined.
        @else
        <a href="{{ route('login') }}">Log in</a> or <a href="{{ route('register') }}">Register</a> please.
        @endif
    </div>
</x-layout>