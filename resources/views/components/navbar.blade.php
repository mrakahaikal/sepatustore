<div id="bottom-nav" class="relative flex h-[100px] w-full shrink-0">
    <nav class="fixed bottom-5 w-full max-w-[640px] px-4 z-30">
        <div
            class="grid grid-flow-col auto-cols-auto items-center justify-between rounded-full bg-[#2A2A2A] p-2 min-h-16 px-[30px]">
            <x-nav-link href="{{ route('front.index') }}" isEdge="true" routeName="front.index">
                <x-slot:icon>
                    <svg class="size-6" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.92 2.26003L19.43 5.77003C20.19 6.18003 20.19 7.35003 19.43 7.76003L12.92 11.27C12.34 11.58 11.66 11.58 11.08 11.27L4.57 7.76003C3.81 7.35003 3.81 6.18003 4.57 5.77003L11.08 2.26003C11.66 1.95003 12.34 1.95003 12.92 2.26003Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M3.61 10.13L9.66 13.16C10.41 13.54 10.89 14.31 10.89 15.15V20.87C10.89 21.7 10.02 22.23 9.28 21.86L3.23 18.83C2.48 18.45 2 17.68 2 16.84V11.12C2 10.29 2.87 9.75999 3.61 10.13Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M20.39 10.13L14.34 13.16C13.59 13.54 13.11 14.31 13.11 15.15V20.87C13.11 21.7 13.98 22.23 14.72 21.86L20.77 18.83C21.52 18.45 22 17.68 22 16.84V11.12C22 10.29 21.13 9.75999 20.39 10.13Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </x-slot:icon>
                Browse
            </x-nav-link>
            <x-nav-link href="{{ route('front.check_booking') }}" isEdge="false" routeName="front.check_booking">
                <x-slot:icon>
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        @svg('heroicon-m-rectangle-stack')
                    </svg>
                </x-slot:icon>
                My Order
            </x-nav-link>
            <x-nav-link href="{{ route('front.index') }}" isEdge="false" routeName="#">
                <x-slot:icon>
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.7235 5.21L17.1334 8.02999C17.3234 8.41999 17.8334 8.78999 18.2634 8.86999L20.8135 9.28999C22.4435 9.55999 22.8235 10.74 21.6535 11.92L19.6634 13.91C19.3334 14.24 19.1435 14.89 19.2535 15.36L19.8234 17.82C20.2734 19.76 19.2334 20.52 17.5234 19.5L15.1334 18.08C14.7034 17.82 13.9834 17.82 13.5534 18.08L11.1634 19.5C9.45343 20.51 8.41345 19.76 8.86345 17.82L9.43345 15.36C9.54345 14.9 9.35345 14.25 9.02345 13.91L7.03346 11.92C5.86346 10.75 6.24346 9.56999 7.87346 9.28999L10.4234 8.86999C10.8534 8.79999 11.3634 8.41999 11.5534 8.02999L12.9635 5.21C13.7135 3.68 14.9535 3.68 15.7235 5.21Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8.33337 5H2.33337" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M5.33337 19H2.33337" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M3.33337 12H2.33337" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </x-slot:icon>
                Rating
            </x-nav-link>
            <x-nav-link href="{{ route('front.index') }}" isEdge="true" routeName="#">
                <x-slot:icon>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18 18.86H17.24C16.44 18.86 15.68 19.17 15.12 19.73L13.41 21.42C12.63 22.19 11.36 22.19 10.58 21.42L8.87 19.73C8.31 19.17 7.54 18.86 6.75 18.86H6C4.34 18.86 3 17.53 3 15.89V4.97998C3 3.33998 4.34 2.01001 6 2.01001H18C19.66 2.01001 21 3.33998 21 4.97998V15.89C21 17.52 19.66 18.86 18 18.86Z"
                            stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M7 9.16003C7 8.23003 7.76 7.46997 8.69 7.46997C9.62 7.46997 10.38 8.23003 10.38 9.16003C10.38 11.04 7.71 11.24 7.12 13.03C7 13.4 7.31 13.77 7.7 13.77H10.38"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M16.04 13.76V8.05003C16.04 7.79003 15.87 7.55997 15.62 7.48997C15.37 7.41997 15.1 7.51997 14.96 7.73997C14.24 8.89997 13.46 10.22 12.78 11.38C12.67 11.57 12.67 11.82 12.78 12.01C12.89 12.2 13.1 12.3199 13.33 12.3199H17"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </x-slot:icon>
                Support
            </x-nav-link>
        </div>
    </nav>
</div>
