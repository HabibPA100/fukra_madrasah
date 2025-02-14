
@extends('frontend.layouts.app')
@section('title','Class Routine For Kirat Bivag')

@section('app-header')
<div class="text-left text-2xl p-3 mt-2">
    <a href="{{ url('/') }}">
    <i class="fa-solid fa-backward"></i>
    </a>
    <span class="text-center text-green-500 font-bold"> মহান আল্লাহ্‌ আপনাকে সময়ের প্রতি গুরুত্ত দেওয়ার তাওফিক দিন </span>
</div>
@endsection

@section('app-body-message')
<div class="container mx-auto my-2 p-4">
    <!-- Class three  -->
    <a href="https://docs.google.com/document/d/10nPhoL_l8Iacc4bIjgqd5F9Yj82eBTYJ7vzve9MopD0/edit?usp=sharing" target="_blank">
    <x-my-outline-button-1 class="w-full my-2 text-lg md:text-2xl lg:text-5xl">
        <span> তৃতীয় জামাত </span>
    </x-my-outline-button-1>
    </a>
    <!-- Class two -->
    <a href="https://docs.google.com/document/d/1umAKWbAwXRzBxThWVgBB7zYceF_xxq3icVAm0Va5Tw4/edit?usp=sharing" target="_blank">
    <x-my-outline-button-2 class="w-full my-2 text-lg md:text-2xl lg:text-5xl">
        <span> দ্বিতীয় জামাত </span>
    </x-my-outline-button-2>
    </a>
    <!-- Class onw -->
    <a href="https://docs.google.com/document/d/1OJEMr_WRg7KRFd1lmsBA_uZKwslkjf5ZCjkvyWJJ6CA/edit?usp=sharing" target="_blank">
    <x-my-outline-button-3 class="w-full my-2 text-lg md:text-2xl lg:text-5xl">
        <span> প্রথম জামাত </span>
    </x-my-outline-button-3>
    </a>
    <!-- Yajdahom -->
</div>
@endsection