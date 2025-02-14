@extends('frontend.layouts.app')
@section('title','Payment Here Now')
@section('app-header')
<div class="text-left text-2xl p-3 mt-2">
    <a href="{{ route('about.us') }}">
    <i class="fa-solid fa-backward"></i>
    </a>
    <span class="text-center text-green-500 font-bold"> মহান আল্লাহ্‌ আপনার দান কে কবুল করুন এবং আপনাকে সকল বিপদ মুক্ত জীবন দিন </span>
</div>
@endsection
@section('app-body-message')
<div class="container mx-auto">
 <div class="grid grid-cols-1 text-center items-center justify-center md:grid-cols-2 gap-10 m-4 p-2">
    <div class="bg-green-100 flex flex-col  items-center justify-center p-4">
        <p class="text-xl md:text-2xl lg:text-4xl text-red-600">সাধারণ পদ্ধতিতে দান করুন</p>
        <span class="flex items-center justify-center mb-4 space-x-4">
            <img src="{{ asset('frontend/images/payment/bkash.png') }}" alt="Bkash" class="rounded-full" width="50" height="50">
            <img src="{{ asset('frontend/images/payment/nagad.png') }}" alt="Nagad" class="rounded-full" width="50" height="50">
        </span>
        <p class="text-center font-bold text-green-500 text-xl md:text-2xl lg:text-4xl">সাধারণ দানঃ- 014065------ </p>
        <p class="text-center font-bold text-red-500 text-xl md:text-2xl lg:text-4xl">যাকাত দিনঃ- 014065------ </p>
    </div>
<!-- bkash get way end-->
    <div class="bg-green-100 flex flex-col p-4">
        <p class="text-xl md:text-2xl lg:text-4xl text-red-600">ব্যাংকিং পদ্ধতিতে দান করুন</p>
        <span class="flex items-center justify-center mb-4 space-x-4">
            <img src="{{ asset('frontend/images/payment/islami-bank.png') }}" alt="Bkash" class="rounded-full" width="50" height="50">
        </span>
        <p class="font-bold text-left text-lg md:text-xl"> অ্যাকাউন্টের নাম: <span class="text-red-700"> MADRASHA HEDAYATUL UMMAH DHAKA</span>  </p>
        <p class="font-bold text-left text-black text-lg md:text-xl"> অ্যাকাউন্ট নম্বর: <span class="text-blue-900">4211120203498</span> </p>
        <p class="font-bold text-left text-black text-lg md:text-xl"> ব্যাংক: <span class="text-green-700">Al-Arafah Islami Bank Ltd</span> </p>
        <p class="font-bold text-left text-black text-lg md:text-xl"> শাখা: <span class="text-purple-900">hajinagor Sub-Br./Konapara, Demra, Dhaka </span></p>
        <p class="font-bold text-left text-black text-lg md:text-xl"> রাউটিং নাম্বার: <span class="text-red-500">015273743</span> </p>
    </div>
<!-- bkash get way end-->
 </div>
</div>
@endsection