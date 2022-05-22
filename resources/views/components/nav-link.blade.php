<li class="nav-item">
    @isset($method)
    <form action="{{ $url }}" method="{{ $method }}">
        @csrf
        <button type="submit" class="nav-link">{{ $slot }}</button>
    </form>
    @else
    <a href="{{ $url }}" class="nav-link @if(Request::url() == $url) active" aria-current="page @endif" >
        {{ $slot }}
    </a>
    @endisset
</li>