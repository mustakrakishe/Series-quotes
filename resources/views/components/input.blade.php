<div class="form-floating mb-3">
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        class="
            form-control
            @error($name)
                is-invalid
            @else
                @if(old($name) !== null)
                    is-valid
                @endif
            @enderror
        "
        value="{{ old($name) }}"

        @isset($placeholder)
            placeholder="{{ $placeholder }}"
        @endisset
    >
    
    <label for="floatingInput">
        @error($name)
            {{ $message }}
        @else
            {{ $slot }}
        @enderror
    </label>
</div>