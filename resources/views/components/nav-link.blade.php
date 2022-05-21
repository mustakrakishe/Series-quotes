<li class="nav-item">
    @isset($method)
    <form action="{{ route($route) }}" method="{{ $method }}">
        @csrf
        <button type="submit" class="nav-link">{{ $slot }}</button>
    </form>
    @else
    <a href="{{ route($route) }}" class="nav-link @if(Route::current()->getName() == $route) active" aria-current="page @endif" >
        {{ $slot }}
    </a>
    @endisset
</li>