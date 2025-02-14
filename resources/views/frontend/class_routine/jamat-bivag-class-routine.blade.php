
@extends('frontend.layouts.app')
@section('title','Class Routine For Jamat Bivag')

@section('app-header')
<div class="text-left text-2xl p-3 mt-2">
    <a href="{{ url('/') }}">
    <i class="fa-solid fa-backward"></i>
    </a>
    <span class="text-center text-green-500 font-bold"> মহান আল্লাহ্‌ আপনাকে সময়ের প্রতি গুরুত্ত দেওয়ার তাওফিক দিন </span>
</div>
@endsection

@section('app-body-message')
 @include('frontend.components.class-routine-buttons')
@endsection