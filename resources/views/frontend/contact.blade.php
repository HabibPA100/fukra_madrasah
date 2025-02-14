@extends('frontend.layouts.app')
@section('title','Contact US')
@section('app-header')
<div class="text-left text-2xl p-3 mt-2">
    <a href="{{ route('about.us') }}">
    <i class="fa-solid fa-backward"></i>
    </a>
    <span class="text-center text-green-500 font-bold"> মহান আল্লাহ্‌ আপনার উপর রহম করুন </span>
</div>
@endsection

@section('app-body-message')

<div class="container mx-auto py-5">
    <div class="container mx-auto p-2 m-2">
        <div class="text-center fadeInUp">
            <h6 class="text-xl bg-white text-center text-blue-500 px-3">যোগাযোগ</h6>
            <h1 class="mb-5 text-4xl text-red-500">যেকোনো প্রশ্নের জন্য যোগাযোগ করুন</h1>
        </div>
        <div class="flex flex-wrap -mx-2 g-4">
            <!-- Contact Info Section -->
            <div class="lg:w-4/12 px-2 md:w-6/12 md:mb-2">
                <!-- Office Address -->
                <div class="flex items-center mb-3">
                    <div class="flex items-center justify-center flex-shrink-0 bg-blue-500" style="width: 50px; height: 50px;">
                        <i class="fa fa-map-marker-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="text-blue-500">অফিস</h5>
                        <a href="https://maps.app.goo.gl/vkuuLpBD3Xrza9FN8" target="_blank">
                            <p class="mb-0"> দক্ষিণ ফুকরা, মিল্টন বাজার, কাশিয়ানী, গোপালগঞ্জ, ঢাকা - বাংলাদেশ</p>
                        </a>
                    </div>
                </div>
                <!-- Mobile Phone -->
                <div class="flex items-center mb-3">
                    <div class="flex items-center justify-center flex-shrink-0 bg-blue-500" style="width: 50px; height: 50px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                        <a href="tel:+8801875-905552">
                            <h5 class="text-gray-800">মোবাইল</h5>
                            <p class="mb-0">+8801875-------</p>
                        </a>
                    </div>
                </div>
                <!-- Email -->
                <div class="flex items-center">
                    <div class="flex items-center justify-center flex-shrink-0 bg-blue-500" style="width: 50px; height: 50px;">
                        <i class="fa fa-envelope-open text-white"></i>
                    </div>
                    <div class="ms-3">
                        <a href="mailto:mhudb1361@gmail.com">
                            <h5 class="text-gray-800">Email</h5>
                            <p class="mb-0">dfim.madrasa@gmail.com</p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Google Maps -->
            <div class="lg:w-4/12 md:w-6/12 px-2 mx-auto my-2 sm:mt-4">
                <iframe class="relative rounded w-full h-full" 
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7337.435915212909!2d89.76437276074618!3d23.143982330471392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ffc6628318d085%3A0x6d180a7edf3ed552!2sSouth%20Fukra%20Madrasha!5e0!3m2!1sen!2sbd!4v1738491657326!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></>
                        frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" alt="Google Map is here"></iframe>
            </div>

            <!-- Contact Form -->
            <div class="lg:w-4/12 md:w-full px-4 my-2 sm:mt-4 py-6 bg-gradient-to-r from-blue-500 to-teal-500 rounded-lg shadow-lg">
                <form action="" method="POST" class="space-y-6">
                    @csrf <!-- CSRF token for Laravel -->
                    <div class="flex flex-wrap gap-4">
                        <!-- Name -->
                        <div class="w-full md:w-1/2 px-2">
                            <label for="name" class="text-white text-lg font-semibold">Your Name</label>
                            <input type="text" class="w-full px-4 py-3 rounded-lg bg-white text-gray-800 shadow-md focus:outline-none focus:ring-2 focus:ring-blue-300" id="name" name="name" placeholder="Enter your name" required>
                            @error('name')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Email -->
                        <div class="w-full md:w-1/2 px-2">
                            <label for="email" class="text-white text-lg font-semibold">Your Email</label>
                            <input type="email" class="w-full px-4 py-3 rounded-lg bg-white text-gray-800 shadow-md focus:outline-none focus:ring-2 focus:ring-blue-300" id="email" name="email" placeholder="Enter your email" required>
                            @error('email')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Subject -->
                        <div class="w-full px-2">
                            <label for="subject" class="text-white text-lg font-semibold">Subject</label>
                            <input type="text" class="w-full px-4 py-3 rounded-lg bg-white text-gray-800 shadow-md focus:outline-none focus:ring-2 focus:ring-blue-300" id="subject" name="subject" placeholder="Subject of your message">
                            @error('subject')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Message -->
                        <div class="w-full px-2">
                            <label for="message" class="text-white text-lg font-semibold">Message</label>
                            <textarea class="w-full px-4 py-3 rounded-lg bg-white text-gray-800 shadow-md focus:outline-none focus:ring-2 focus:ring-blue-300" id="message" name="message" rows="6" placeholder="Write your message" required></textarea>
                            @error('message')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Submit Button -->
                        <div class="w-full px-2">
                            <button type="submit" class="w-full py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg shadow-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection