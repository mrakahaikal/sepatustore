<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Page Title' }} - {{ config('app.name', 'Sepatu Store') }}</title>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F5F5F0]">
    <div class="relative flex flex-col w-full max-w-screen-sm min-h-dvh gap-5 mx-auto bg-[#F5F5F0]">
        <div id="top-bar" class="flex justify-between items-center px-4 mt-4">
            <a href="/" wire:navigate>
                <x-icons.app-logo class="flex shrink-0" />
            </a>
            <a href="#" class="size-10 bg-white text-black rounded-full flex items-center justify-center">
                @svg('heroicon-o-bell', 'size-6')
            </a>
        </div>
        @isset($topbar)
            <div id="top-bar" class="flex justify-between items-center px-4 mt-4">
                {{ $topbar }}
            </div>
        @endisset
        <!-- Content goes here -->
        {{ $slot }}
        <x-navbar>
            {{ $navbar ?? '' }}
        </x-navbar>
    </div>
    @isset($script)
        {{ $script }}
    @endisset
    @livewireScripts
</body>

</html>
