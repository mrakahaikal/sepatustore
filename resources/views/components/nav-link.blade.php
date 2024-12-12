@props(['routeName', 'isEdge'])

@php
$class = ($isEdge) ? '-mx-[22px] ' : 'mx-auto w-full'
@endphp

<a {{ $attributes->merge([
    "class" => (Route::currentRouteName() ==
    $routeName || request()->is($routeName) ? "text-[#090917] $class" : "text-white mx-auto")]) }} wire:navigate>
    <div {{ $attributes->merge([
        "class" => (Route::currentRouteName() == $routeName || request()->is($routeName) ? "flex items-center rounded-full gap-2.5 p-[12px_16px] bg-primary transition ease-in" : "")]) }}>
        {{ $icon }}
        <span {{ $attributes->merge([
        'class' => (Route::currentRouteName() == $routeName || request()->is($routeName) ? "font-bold text-sm leading-[21px]" : "hidden")]) }}>
            {{ $slot }}
        </span>
    </div>
</a>
<!--
    Tengah
<a "mx-auto w-full text-white">
    Pinggir
<a "active flex shrink-0 -mx-[22px]">
-->
