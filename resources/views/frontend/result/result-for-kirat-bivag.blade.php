
@extends('frontend.layouts.app')
@section('title','Class Routine For Kirat Bivag')

@section('app-header')
<div class="text-left text-2xl p-3 mt-2">
    <a href="{{ route('result.sheet') }}">
    <i class="fa-solid fa-backward"></i>
    </a>
    <span class="text-center text-green-500 font-bold"> মহান আল্লাহ্‌ আপনাকে জীবনের প্রতি ধাপে বিজয়ী করুন </span>
</div>
@endsection

@section('app-body-message')
<div class="container mx-auto my-2 p-4">
    <!-- Class three  -->
    <a href="https://docs.google.com/document/d/1dzo8r0Nhj8yByWb0-2RF766fWDTX_RAwGVWPs8ypW0U/edit?usp=sharing" target="_blank">
    <x-my-outline-button-1 class="w-full my-2 text-lg md:text-2xl lg:text-5xl">
        <span> তৃতীয় জামাত </span>
    </x-my-outline-button-1>
    </a>
    <!-- Class two -->
    <a href="https://docs.google.com/document/d/1uzgeFKzjdRijn8J6e238TbEBBFjQBT3uZC67rOKx7L8/edit?usp=sharing" target="_blank">
    <x-my-outline-button-2 class="w-full my-2 text-lg md:text-2xl lg:text-5xl">
        <span> দ্বিতীয় জামাত </span>
    </x-my-outline-button-2>
    </a>
    <!-- Class onw -->
    <a href="https://docs.google.com/document/d/1RLiB9S7q32oA3MHTvoZxBgkzQg0Ngfo6_H-mct-FOzI/edit?usp=sharing" target="_blank">
    <x-my-outline-button-3 class="w-full my-2 text-lg md:text-2xl lg:text-5xl">
        <span> প্রথম জামাত </span>
    </x-my-outline-button-3>
    </a>
    <!-- Yajdahom -->
</div>
@endsection