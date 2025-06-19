<button
    {{ $attributes->merge([
        'type' => 'submit',
        'class' => 'rounded-full p-[12px_20px] bg-primary font-bold',
    ]) }}>
    {{ $slot }}
</button>
