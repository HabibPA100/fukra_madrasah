
@extends('frontend.layouts.app')
@section('title','Result Sheet For Jamat Bivag')

@section('app-header')
<div class="text-left text-2xl p-3 mt-2">
    <a href="{{ url('/') }}">
    <i class="fa-solid fa-backward"></i>
    </a>
    <span class="text-center text-green-500 font-bold"> মহান আল্লাহ্‌ আপনাকে জীবনের প্রতি ধাপে বিজয়ী করুন </span>
</div>
@endsection

@section('app-body-message')
 @include('frontend.components.result-sheet-buttons')
@endsection