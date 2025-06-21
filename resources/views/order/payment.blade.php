<x-app-layout>
    <x-slot:title>
        Review & Pembayaran
    </x-slot:title>
    <x-slot:topbar>
        <a href="#">
            <img src="{{ asset('assets/images/icons/back.svg') }}" class="w-10 h-10" alt="icon">
        </a>
        <p class="font-bold text-lg leading-[27px]">Review & Payment</p>
        <div class="dummy-btn w-10"></div>
    </x-slot:topbar>
    <form method="POST" enctype="multipart/form-data" action="{{ route('front.payment_confirm') }}"
        class="relative flex flex-col w-full max-w-[640px] min-h-screen gap-5 mx-auto bg-[#F5F5F0]">
        @csrf
        <x-accordion id="your-order" label="Your Order">
            <div class="flex items-center gap-[14px]">
                <div class="flex shrink-0 w-20 h-20 rounded-[20px] bg-[#D9D9D9] p-1 overflow-hidden">
                    <img src="{{ Storage::url($shoe->thumbnail) }}" class="w-full h-full object-contain" alt="">
                </div>
                <h3 class="font-bold text-lg leading-6">
                    {{ $shoe->name }}
                </h3>
            </div>
            <hr class="border-[#EAEAED]">
            <div class="flex items-center justify-between">
                <p class="font-semibold">Brand</p>
                <p class="font-bold">{{ $shoe->brand->name }}</p>
            </div>
            <div class="flex items-center justify-between">
                <p class="font-semibold">Price</p>
                <p class="font-bold">Rp{{ number_format($shoe->price, 0, ',', '.') }}</p>
            </div>
            <div class="flex items-center justify-between">
                <p class="font-semibold">Quantity</p>
                <p class="font-bold">{{ $orderData['quantity'] }} Pcs</p>
            </div>
            <div class="flex items-center justify-between">
                <p class="font-semibold">Shoe Size</p>
                <p class="font-bold">{{ $orderData['shoe_size'] }}</p>
            </div>
        </x-accordion>
        <x-accordion id="customer" label="Customer">
            <div class="flex items-center gap-5">
                @svg('heroicon-o-user', 'size-7 flex shrink-0')
                <div class="flex flex-col gap-[6px]">
                    <p class="font-semibold">Name</p>
                    <p class="font-bold">{{ $orderData['name'] }}</p>
                </div>
            </div>
            <div class="flex items-center gap-5">
                @svg('heroicon-o-phone', 'size-7 flex shrink-0')
                <div class="flex flex-col gap-[6px]">
                    <p class="font-semibold">Phone No.</p>
                    <p class="font-bold">{{ $orderData['phone'] }}</p>
                </div>
            </div>
            <div class="flex items-center gap-5">
                @svg('heroicon-o-envelope', 'size-7 flex shrink-0')
                <div class="flex flex-col gap-[6px]">
                    <p class="font-semibold">Email</p>
                    <p class="font-bold">{{ $orderData['email'] }}</p>
                </div>
            </div>
            <div class="flex items-center gap-5">
                @svg('heroicon-o-truck', 'size-7 flex shrink-0')
                <div class="flex flex-col gap-[6px]">
                    <p class="font-semibold">Delivery to</p>
                    <p class="font-bold">{{ $orderData['address'] }}, {{ $orderData['city'] }} -
                        {{ $orderData['post_code'] }}</p>
                </div>
            </div>
        </x-accordion>
        <x-accordion id="payment-details" label="Payment Details">
            <div class="flex items-center justify-between">
                <p class="font-semibold">Sub Total</p>
                <p class="font-bold">Rp{{ number_format($orderData['sub_total_amount'], 0, ',', '.') }}</p>
            </div>
            <div class="flex items-center justify-between">
                <p class="font-semibold">Promo Code</p>
                <p class="font-bold">{{ $orderData['promo_code'] }}</p>
            </div>
            <div class="flex items-center justify-between">
                <p class="font-semibold">Discount</p>
                <p class="font-bold text-[#FF1943]">- Rp{{ number_format($orderData['discount_amount'], 0, ',', '.') }}
                </p>
            </div>
            <div class="flex items-center justify-between">
                <p class="font-semibold">PPN 11%</p>
                <p class="font-bold">Rp{{ number_format($orderData['total_tax'], 0, ',', '.') }}</p>
            </div>
            <div class="flex items-center justify-between">
                <p class="font-semibold">Delivery</p>
                <p class="font-bold">Rp 0</p>
            </div>
            <div class="flex items-center justify-between">
                <p class="font-semibold">Grand Total</p>
                <p class="font-bold text-2xl leading-9 text-[#07B704]">
                    Rp{{ number_format($orderData['grand_total_amount'], 0, ',', '.') }}</p>
            </div>
        </x-accordion>
        <x-accordion id="send-payment-to" label="Send Payment to">
            <div class="flex items-center gap-3">
                <div class="flex shrink-0 w-[71px] h-[50px] overflow-hidden">
                    <img src="{{ asset('assets/images/logos/bca-bank-central-asia 1.svg') }}"
                        class="w-full h-full object-contain" alt="bank logo">
                </div>
                <div class="flex flex-col gap-[2px]">
                    <p class="font-semibold flex items-center">Raka Tukang Sepatu @svg('heroicon-s-check-badge', 'size-5 ml-1 text-[#07B704]')</p>
                    <p>8008129839</p>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <div class="flex shrink-0 w-[71px] h-[50px] overflow-hidden">
                    <img src="{{ asset('assets/images/logos/bank-mandiri 1.svg') }}"
                        class="w-full h-full object-contain" alt="bank logo">
                </div>
                <div class="flex flex-col gap-[2px]">
                    <p class="font-semibold flex items-center">Raka Tukang Sepatu @svg('heroicon-s-check-badge', 'size-5 ml-1 text-[#07B704]')</p>
                    <p>12379834983281</p>
                </div>
            </div>
            <hr class="border-[#EAEAED]">
            <div class="flex flex-col gap-2">
                <p class="font-semibold">Bukti Transfer</p>
                <div
                    class="group w-full rounded-full px-[14px] flex items-center ring-1 ring-[#090917] gap-[10px] relative transition-all duration-300 focus-within:ring-2 focus-within:ring-[#FFC700]">
                    <div class="w-6 h-6 flex shrink-0">
                        @svg('heroicon-o-credit-card', 'size-5')
                    </div>
                    <button type="button" id="Upload-btn"
                        class="appearance-none outline-none w-full py-[14px] text-left text-sm overflow-hidden text-[#878785]"
                        onclick="document.getElementById('Proof').click()">
                        Add an attachment
                    </button>
                    <input type="file" name="proof" id="Proof" class="absolute -z-10 opacity-0" required>
                </div>
            </div>
            <hr class="border-[#EAEAED]">
            <div class="flex items-center gap-[10px]">
                @svg('heroicon-s-shield-check', 'size-12 text-[#07B704]')
                <p class="leading-[26px]">Kami melindungi data privasi anda dengan baik bantuan Raka Ganteng :v.</p>
            </div>
        </x-accordion>
        <x-slot:navbar>
            <div class="flex flex-col gap-[2px] mr-2">
                <p class="text-white">Apakah anda sudah benar membayar?</p>
            </div>
            <button type="submit" class="rounded-full p-[12px_20px] bg-primary font-bold text-nowrap">
                Confirm Now
            </button>
    </form>
    </x-slot:navbar>

    <x-slot:script>
        <script src="{{ asset('js/payment.js') }}"></script>
    </x-slot:script>
</x-app-layout>
