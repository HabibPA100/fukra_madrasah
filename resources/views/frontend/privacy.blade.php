@extends('frontend.layouts.app')
@section('title','Privacy Policy')
@section('app-header')
<div class="text-left text-2xl p-3 mt-2">
    <a href="{{ route('about.us') }}">
    <i class="fa-solid fa-backward"></i>
    </a>
    <span class="text-center text-green-500 font-bold"> মহান আল্লাহ্‌ আপনার জীবনে বরকত দিন </span>
</div>
@endsection
@section('app-body-message')

<div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-3xl font-semibold text-center mb-6">Privacy Policy</h1>
    
    <p class="text-lg text-gray-700 mb-4">
        At <strong>দক্ষিণ ফুকরা ইসলামিয়া মাদ্রাসা ও এতিমখানা</strong>, we are committed to protecting your privacy. This privacy policy outlines the types of personal information we collect and how it is used and protected.
    </p>

    <h2 class="text-2xl font-semibold text-gray-800 mb-4">1. Information Collection</h2>
    <p class="text-lg text-gray-700 mb-4">
        We collect personal information when you interact with our website, such as:
    </p>
    <ul class="list-disc pl-6 text-gray-700 mb-4">
        <li>Personal details like name, email address, and contact information.</li>
        <li>Information related to your usage of our website and services.</li>
        <li>Any other information you provide voluntarily.</li>
    </ul>

    <h2 class="text-2xl font-semibold text-gray-800 mb-4">2. How We Use Your Information</h2>
    <p class="text-lg text-gray-700 mb-4">
        The information we collect is used for the following purposes:
    </p>
    <ul class="list-disc pl-6 text-gray-700 mb-4">
        <li>To provide and improve our services.</li>
        <li>To communicate with you regarding our services and updates.</li>
        <li>To ensure the security and functionality of our website.</li>
        <li>To comply with legal obligations.</li>
    </ul>

    <h2 class="text-2xl font-semibold text-gray-800 mb-4">3. Data Protection</h2>
    <p class="text-lg text-gray-700 mb-4">
        We take appropriate measures to protect your personal information from unauthorized access, alteration, or disclosure. However, no method of electronic transmission or storage is completely secure.
    </p>

    <h2 class="text-2xl font-semibold text-gray-800 mb-4">4. Sharing Your Information</h2>
    <p class="text-lg text-gray-700 mb-4">
        We do not share your personal information with third parties except in the following cases:
    </p>
    <ul class="list-disc pl-6 text-gray-700 mb-4">
        <li>If required by law or regulation.</li>
        <li>If we believe it is necessary to protect our rights or the safety of others.</li>
    </ul>

    <h2 class="text-2xl font-semibold text-gray-800 mb-4">5. Your Rights</h2>
    <p class="text-lg text-gray-700 mb-4">
        You have the right to:
    </p>
    <ul class="list-disc pl-6 text-gray-700 mb-4">
        <li>Access the personal information we hold about you.</li>
        <li>Request correction or deletion of your personal data.</li>
        <li>Object to the processing of your data in certain circumstances.</li>
    </ul>

    <h2 class="text-2xl font-semibold text-gray-800 mb-4">6. Changes to This Privacy Policy</h2>
    <p class="text-lg text-gray-700 mb-4">
        We reserve the right to update this privacy policy at any time. Any changes will be posted on this page, and we will notify you of significant changes.
    </p>

    <h2 class="text-2xl font-semibold text-gray-800 mb-4">7. Contact Us</h2>
    <p class="text-lg text-gray-700 mb-4">
        If you have any questions about this privacy policy or how we handle your personal information, please contact us at:
    </p>
    <p class="text-lg text-gray-700 mb-4">
        <strong>Email:</strong> dfim.madrasa@gmail.com
    </p>
    <p class="text-lg text-gray-700 mb-4">
        <strong>Phone:</strong> +8801234----
    </p>
</div>

@endsection