<?php
$name = $attributes->get('name');
$class = 'form-control';

if ($errors->has($name)) {
    $class .= ' is-invalid';
} else if (old($name)) {
    $class .= ' is-valid';
}
?>

<div {{ $attributes->class(['form-floating']) }}>
    <input {{ $attributes->except('class')->merge([
        'class' => $class,
        'value' => old($name)
    ]) }}>
    <label>
        @error($name)
        {{ $message }}
        @else
        {{ $slot }}
        @enderror
    </label>
</div>