@extends('frontend.layouts.app')
@section('title','Page Not Found')
@section('app-body-message')
<div class="page-container">
  <main>
      <section class="py-24 relative w-full h-screen flex justify-center items-center">
          <div class="mx-auto max-w-[85rem] px-4 sm:px-6 lg:px-8 relative">

              <div class=" w-full h-auto text-center mb-7">
                  <div class="w-full h-auto bg-white px-7 py-8 rounded-2xl">
                    <h1 class="font-manrope font-black text-[200px] leading-relaxed text-indigo-600 text-center mb-6">
                          4<span class="text-indigo-200">0</span>4</h1>
                      <p class="font-medium text-2xl leading-9 text-gray-900 text-center mb-4">Looks like You've got
                          lost....</p>
                      <p class="font-medium text-lg leading-9 text-gray-600 text-center mb-6">The page you're looking for
                          dosen't exist or has been moved</p>
                      <a href="{{ url('/') }}" class="w-44 bg-indigo-600 text-white rounded-full cursor-pointer font-semibold text-center shadow-xs transition-all duration-500 py-3.5 px-6 text-sm hover:bg-indigo-700">GO
                          HOME</a>
                  </div>
              </div>
          </div>
      </section>
  </main>
</div>
@endsection