{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('layouts.guest')

@section('slot')
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 py-5 ">
            <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                <h3 class="title">Register</h3>
                <form action="{{ route('register') }}" method="POST">@csrf
                    @foreach ($errors->all() as $err)
                        <p class="alert alert-danger">
                            {{ $err }}
                        </p>
                    @endforeach
                    <div class="form-group">
                        <input name="name" type="name" />
                        <label>Name *</label>
                        <span class="focus-border"></span>
                    </div>
                    <div class="form-group">
                        <input name="email" type="email" />
                        <label>Email address *</label>
                        <span class="focus-border"></span>
                    </div>

                    <div class="form-group">
                        <input name="password" type="password">
                        <label>Password *</label>
                        <span class="focus-border"></span>
                    </div>

                    <div class="form-group">
                        <input name="password_confirmation" type="password" required autocomplete="new-password">
                        <label>Confirm Password *</label>
                        <span class="focus-border"></span>
                    </div>

                    <div class="form-submit-group">
                        <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                            <span class="icon-reverse-wrapper">
                                <span class="btn-text">Register</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </span>
                        </button>
                    </div>

                </form>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
@endsection
