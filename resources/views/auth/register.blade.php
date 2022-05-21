<x-layout>
    <x-slot name="title">Register</x-slot>

    <main class="form-signin w-100 m-auto">
        <form method="post" action="{{ route('register') }}">
            @csrf

            <h1 class="h3 mb-3 fw-normal">Please register</h1>

            <div class="form-floating">
                <input type="name" name="name" class="form-control" id="floatingInput" placeholder="name">
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            <a href="{{ route('login') }}">login</a>
        </form>
    </main>
    
</x-layout>