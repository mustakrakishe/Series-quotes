<x-layout>
    <x-slot name="title">{{ env('APP_NAME') }}</x-slot>

    <main class="form-info w-100 m-auto">
        <div class="mx-auto">
            <h1 class="h3 mb-3 fw-normal">Hi, {{ $user->name }}!</h1>
        </div>
    </main>
</x-layout>