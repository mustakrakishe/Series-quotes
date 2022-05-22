<?php
    $name = $attributes->get('name');
?>

<div {{ $attributes->class(['form-floating']) }}>
    <input
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
        {{ $attributes->except('class') }}
    >

    <label>
        @error($name)
        {{ $message }}
        @else
        {{ $slot }}
        @enderror
    </label>
</div>