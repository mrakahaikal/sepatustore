<div>

    <x-accordion id="my-order" label="Your Order">
        <div class="flex items-center gap-[14px]">
            <div class="flex shrink-0 w-20 h-20 rounded-[20px] bg-[#D9D9D9] p-1 overflow-hidden">
                <img src="" class="w-full h-full object-contain" alt="">
            </div>
            <h3 class="font-bold text-lg leading-6">
                Sepatu Super
            </h3>
        </div>
        <hr class="border-[#EAEAED]">
        <div class="flex items-center justify-between">
            <p class="font-semibold">Brand</p>
            <p class="font-bold">Cihuy</p>
        </div>
        <div class="flex items-center justify-between">
            <p class="font-semibold">Price</p>
            <p class="font-bold">Rp{{ number_format(2000, 0 ,',','.') }}</p>
        </div>
        <div class="flex items-center justify-between">
            <p class="font-semibold">Quantity</p>
            <p class="font-bold">1 Pcs</p>
        </div>
        <div class="flex items-center justify-between">
            <p class="font-semibold">Shoe Size</p>
            <p class="font-bold">40</p>
        </div>
        <div class="flex items-center justify-between">
            <p class="font-semibold">Grand Total</p>
            <p class="font-bold text-2xl leading-9 text-[#07B704]">Rp{{ number_format(40000, 0 ,',','.') }}</p>
        </div>
        <div class="flex items-center justify-between">
            <p class="font-semibold">Checkout At</p>
            <p class="font-bold">asldkjalsdkj</p>
        </div>
        {{-- @if($orderDetails->is_paid == false) --}}
        <div class="flex items-center justify-between">
            <p class="font-semibold">Status</p>
            <p class="rounded-full p-[6px_14px] bg-[#2A2A2A] font-bold text-sm leading-[21px] text-white">PENDING</p>
        </div>
        {{-- @else --}}
        <div class="flex items-center justify-between">
            <p class="font-semibold">Status</p>
            <p class="rounded-full p-[6px_14px] bg-[#07B704] font-bold text-sm leading-[21px] text-white">SUCCESS</p>
        </div>
        {{-- @endif --}}
    </x-accordion>
    <x-accordion id="coba-accordion" label="Coba Aja">
        Cihuy
    </x-accordion>
    <section id="customer" class="accordion  flex flex-col rounded-[20px] p-4 pb-5 gap-5 mx-4 bg-white overflow-hidden transition-all duration-300 has-[:checked]:!h-[66px] mb-10">
        <label class="group flex items-center justify-between">
            <h2 class="font-bold text-xl leading-[30px]">Customer</h2>
            <img src="{{ asset('assets/images/icons/arrow-up.svg') }}" class="w-7 h-7 transition-all duration-300 group-has-[:checked]:rotate-180" alt="icon">
            <input type="checkbox" class="hidden">
        </label>
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/icons/delivery.svg') }}" class="w-6 h-6 flex shrink-0" alt="icon">
            <div class="flex flex-col gap-[6px]">
                <p class="font-semibold">Booking ID</p>
                <p class="font-bold">Naon we</p>
            </div>
        </div>
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/icons/user.svg') }}" class="w-6 h-6 flex shrink-0" alt="icon">
            <div class="flex flex-col gap-[6px]">
                <p class="font-semibold">Name</p>
                <p class="font-bold">Icikiwir</p>
            </div>
        </div>
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/icons/call.svg') }}" class="w-6 h-6 flex shrink-0" alt="icon">
            <div class="flex flex-col gap-[6px]">
                <p class="font-semibold">Phone No.</p>
                <p class="font-bold">019230293</p>
            </div>
        </div>
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/icons/sms.svg') }}" class="w-6 h-6 flex shrink-0" alt="icon">
            <div class="flex flex-col gap-[6px]">
                <p class="font-semibold">Email</p>
                <p class="font-bold">kasepasdkad@mail.com</p>
            </div>
        </div>
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/icons/house-2.svg') }}" class="w-6 h-6 flex shrink-0" alt="icon">
            <div class="flex flex-col gap-[6px]">
                <p class="font-semibold">Delivery to</p>
                <p class="font-bold">asdasd, asdad - asda</p>
            </div>
        </div>
        <hr class="border-[#EAEAED]">
        <a href="#" class="rounded-full p-[12px_20px] text-center w-full bg-primary font-bold">Call Customer Service</a>
        <hr class="border-[#EAEAED]">
        <div class="flex items-center gap-[10px]">
            <img src="{{ asset('assets/images/icons/shield-tick.svg') }}" class="w-8 h-8 flex shrink-0" alt="icon">
            <p class="leading-[26px]">Kami melindungi data privasi anda dengan baik bantuan Angga X.</p>
        </div>
    </section>

    <script src="{{ asset('js/accordion.js') }}"></script>
</div>
</div>
