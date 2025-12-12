@extends('layouts.regLog')

@section('content')

<form action = "{{ route('login') }}" method = "POST" class = "flex flex-col gap-y-5">
    @csrf
        
    <div class="flex flex-col">
        <h1 class="text-xl font-semibold">Welcome Back to the Library System</h1>
        <p class="text-md mt-1">Access the vast collection of resources, and stay updated</p>
    </div>

    <div class="flex flex-col gap-y-5">
        <div class="flex flex-col">
            <label class="ms-[4px]">Email</label>
            <input 
                type="email" 
                name="email" 
                class="mt-1 p-3 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300"
                placeholder="Enter your email"
                required
            >
        </div>
        <div class="flex flex-col">
            <label class="ms-[4px]">Password</label>
            <input 
                type="password" 
                name="password"
                class="mt-1 p-3 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300"
                placeholder="Enter your password"
                required
            >
        </div>

        <button 
            type = "submit"
            class="bg-[#EAD4AA] text-black font-bold py-3 px-8 rounded flex items-center justify-center space-x-2 hover:bg-[#dcc08e] transition mt-2">
            <span>Login</span>
        </button>
    </div>

    <div class="flex flex-row gap-[4px] self-center">
        <p>Don't have an account already ?</p>
        <a href="{{ route('regisForm') }}" class="text-orange-200">Register Here</a>
    </div>
</form>
@endSection
