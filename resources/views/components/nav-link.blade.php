@props(['routeName' => null, 'isEdge' => false, 'icon' => ''])

@php
    $class = $isEdge ? '-mx-[22px] ' : 'mx-auto w-full';
@endphp

<a {{ $attributes->merge([
    'class' =>
        Route::currentRouteName() == $routeName || request()->is($routeName)
            ? "text-[#090917] $class"
            : 'text-white mx-auto',
]) }}
    wire:navigate>
    <div
        {{ $attributes->merge([
            'class' =>
                Route::currentRouteName() == $routeName || request()->is($routeName)
                    ? 'flex items-center rounded-full gap-2.5 p-[12px_16px] bg-primary transition ease-in'
                    : 'flex flex-col items-center justify-center transition-all gap-0.5',
        ]) }}>
        @svg($icon, 'size-6')
        <span
            {{ $attributes->merge([
                'class' =>
                    Route::currentRouteName() == $routeName || request()->is($routeName)
                        ? 'font-bold text-sm leading-[21px]'
                        : 'font-light text-xs',
            ]) }}>
            {{ $slot }}
        </span>
    </div>
</a>
