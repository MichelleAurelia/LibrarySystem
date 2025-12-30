@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto mt-14 px-6">

    <section class="mb-20 text-justify">
        <h1 class="text-3xl md:text-4xl font-bold mb-6">{{ __('about.title') }}</h1>

        <p class="text-gray-300 text-base md:text-lg leading-relaxed max-w-3xl">
            {{ __('about.intro_1') }}
        </p>

        <p class="text-gray-300 text-base md:text-lg leading-relaxed max-w-3xl mt-6">
            {{ __('about.intro_2') }}
        </p>

        <div class="w-full h-px bg-gray-700 my-10"></div>
    </section>

    <section class="flex flex-col items-center text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-10">{{ __('about.mission_title') }}</h2>

        <div class="max-w-4xl text-gray-300 text-base md:text-lg text-justify">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 290 290" class="w-14 h-14 mb-6 fill-gray-400 opacity-70">
                <path d="M22.12 145v97.65h97.65V145H70.95c0-26.92 21.9-48.82 48.82-48.82V47.35c-53.93 0-97.65 43.72-97.65 97.65zm245.76-48.82V47.35c-53.93 0-97.65 43.72-97.65 97.65v97.65h97.65V145h-48.82c-.01-26.92 21.89-48.82 48.82-48.82z"/>
            </svg>

            <p>
                {{ __('about.mission_text') }}
            </p>
        </div>

        <div class="mt-16 flex flex-col md:flex-row items-center gap-10 max-w-4xl">
            <img
                src="{{ asset('images/Education.jpg') }}" alt="SDG 4 - Quality Education" class="w-[240px] max-w-sm rounded-2xl shadow-xl">

            <p class="text-gray-300 md:text-lg text-justify md:text-left">
                {{ __('about.sdg_text') }}
            </p>
        </div>
    </section>

</div>
@endsection
