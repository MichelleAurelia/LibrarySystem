@extends('layouts.regLog')

@section('content')

<form action = "{{ route('login') }}" method = "POST" class = "flex flex-col gap-y-5">
    @csrf
        
    <div class="flex flex-col">
        <h1 class="text-xl sm:text-2xl font-semibold">{{ __('auth.title_log') }}</h1>
        <p class="text-sm sm:text-base text-gray-300 mt-1">{{ __('auth.detail_log') }}</p>
    </div>

    <div class="flex flex-col gap-y-5">
        <div class="flex flex-col">
            <label class="ms-[4px]">{{ __('auth.email') }}</label>
            <input 
                type="email" 
                name="email" 
                class="mt-2 p-3 sm:p-3.5 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300 text-sm sm:text-base"
                placeholder= "{{ __('auth.placeholder_email') }}"
                required
            >
        </div>
        <div class="flex flex-col">
            <label class="ms-1 text-sm">{{ __('auth.password') }}</label>
            <input 
                type="password" 
                name="password"
                class="mt-2 px-4 py-3.5 bg-slate-800 border border-slate-700 rounded-xl outline-none text-[11px] sm:text-[14px] lg:text-base leading-normal focus:ring-2 focus:ring-orange-300"
                placeholder= "{{ __('auth.placeholder_password') }}"
                required
            >
        </div>

        <button 
            type = "submit"
            class="bg-[#EAD4AA] text-black font-bold py-3 sm:py-3.5 px-8 rounded-xl flex items-center justify-center hover:bg-[#dcc08e] transition mt-2">
            <span>{{ __('auth.butt_login') }}</span>
        </button>
    </div>

    <div class="flex flex-wrap gap-1 justify-center text-sm sm:text-base">
        <p>{{ __('auth.dont_have_acc') }}</p>
        <a href="{{ route('regisForm') }}" class="text-orange-200 hover:underline">{{ __('auth.reg_link') }}</a>
    </div>
</form>
@endSection
