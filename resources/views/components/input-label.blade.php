@props(['value'])

<label {{ $attributes->merge(['class' => 'font-semibold leading-[21px]']) }}>
    {{ $value ?? $slot }}
</label>
