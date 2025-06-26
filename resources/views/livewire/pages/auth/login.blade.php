<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;

use function Livewire\Volt\form;
use function Livewire\Volt\layout;

layout('app-layout');

form(LoginForm::class);

$login = function () {
    $this->validate();

    $this->form->authenticate();

    Session::regenerate();

    $this->redirectIntended(default: route('user.dashboard', absolute: false), navigate: true);
};

?>

<div class="flex flex-col items-center justify-center px-4 gap-[30px] my-auto">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="login" class="flex flex-col w-full max-w-sm rounded-[30px] p-5 gap-6 bg-white">
        <h1 class="font-bold text-2xl leading-9 text-center">Login</h1>
        <!-- Email Address -->
        <x-input-wrap>
            <x-input-label for="email" :value="__('Email')" />
            <x-input-text wire:model="form.email" placeholder="name@example.com" id="email" type="email"
                name="email" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
        </x-input-wrap>

        <!-- Password -->
        <x-input-wrap>
            <x-input-label for="password" :value="__('Password')" />

            <x-input-text wire:model="form.password" placeholder="Your account password" id="password" type="password"
                name="password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
        </x-input-wrap>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember" class="inline-flex items-center">
                <input wire:model="form.remember" id="remember" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}" wire:navigate>
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-button-primary class="ms-3">
                {{ __('Log in') }}
            </x-button-primary>
        </div>
    </form>
</div>
