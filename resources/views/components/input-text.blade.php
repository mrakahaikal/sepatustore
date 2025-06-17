@props(['icon' => 'heroicon-m-magnifying-glass'])

<div
    class="flex items-center w-full rounded-full px-[14px] gap-[10px] overflow-hidden bg-[#F8F8F9] transition-all duration-300 focus-within:ring-2 focus-within:ring-[#FFC700]">
    @svg($icon, 'w-6 h-6 flex shrink-0')
    <input
        {{ $attributes->merge([
            'type' => 'text',
            'class' =>
                'appearance-none outline-none bg-[#F8F8F9] w-full font-semibold leading-[21px] placeholder:font-normal py-[14px]',
        ]) }}>
</div>
