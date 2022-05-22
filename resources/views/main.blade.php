<x-layout>
    <x-slot name="title">{{ env('APP_NAME') }}</x-slot>

    <div class="h-100 d-flex align-items-center justify-content-center">
        <h1 class="h3 mb-3 fw-normal">Hi, {{ $user->name }}!</h1>
    </div>
</x-layout>