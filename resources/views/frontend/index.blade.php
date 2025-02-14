@extends('frontend.layouts.master')
@section('title', 'Home Page')
@push('style')
    <link rel="stylesheet" href="frontend/css/marquee.css">
@endpush
@section('header-message-above')
<div class="w-full pb-2">
  <img src="{{ asset('frontend/images/logo/sfim_banner-01.jpg') }}" alt="Banner">
</div>
@endsection
@section('body-message')
<div class="container mx-auto">
    <div class="marquee_container">
        <div class="marquee">
          <div class="marquee_text">
            <p class="text-xl" style="font-family: 110_Besmellah Normal">
              السلام عليكم ورحمة الله وبركاته، مرحبًا بكم في مدرسة جنوب الفكرة الإسلامية وإتيم خانة
            </p>
          </div>
        </div>
      </div>
</div>

@include('frontend.components.read_book')
@include('frontend.components.popup')
@include('frontend.components.about-us')
@endsection