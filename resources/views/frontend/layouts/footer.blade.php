<div class="relative">
    <!-- Cover Image as Background -->
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('frontend/images/cover.jpg') }}');"></div>

    <!-- Content Section with Green Background -->
    <div class="w-full max-w-screen-xl mx-auto bg-gray-500 p-4 md:py-8 relative z-10">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('frontend/images/logo/south-fukra-m-logo.jpg') }}" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-sm md:text-2xl font-semibold text-wrap-wrap dark:text-white">Al Zamia Al Islamia South Fukra Islamia Madrasa & Etimkhana</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-900 sm:mb-0 dark:text-white">
                <li>
                    <a href="{{ route('about.us') }}" class="hover:underline me-6 md:me-6 p-2">About</a>
                </li>
                <li>
                    <a href="{{ route('privacy.policy') }}" class="hover:underline me-6 md:me-6 p-2">Privacy Policy</a>
                </li>
                <li>
                    <a href="{{ route('terms.condition') }}" class="hover:underline me-6 md:me-6 p-2">Terms & Condition</a>
                </li>
                <li>
                    <a href="{{ route('contact.us') }}" class="hover:underline me-6 md:me-6 p-2">Contact</a>
                </li>
            </ul>
        </div>
        <!-- Contact Info Section -->
        <div class="lg:w-4/12 px-2 md:w-6/12 md:mb-2">
            <!-- Office Address -->
            <div class="flex items-center mb-3">
                <div class="flex items-center justify-center flex-shrink-0 bg-blue-500" style="width: 50px; height: 50px;">
                    <i class="fa fa-map-marker-alt text-white"></i>
                </div>
                <div class="ms-3">
                    <h5 class="text-white">অফিস</h5>
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
                    <a href="tel:+880 1719-634541">
                        <h5 class="text-gray-800">মোবাইল</h5>
                        <p class="mb-0">+880 1719-634541</p>
                    </a>
                </div>
            </div>
            <!-- Email -->
            <div class="flex items-center">
                <div class="flex items-center justify-center flex-shrink-0 bg-blue-500" style="width: 50px; height: 50px;">
                    <i class="fa fa-envelope-open text-white"></i>
                </div>
                <div class="ms-3">
                    <a href="mailto:dfim.madrasa@gmail.com">
                        <h5 class="text-gray-800">Email</h5>
                        <p class="mb-0">dfim.madrasa@gmail.com</p>
                    </a>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-100 sm:mx-auto dark:border-gray-900 lg:my-8" />
        <section id="glary">
            <p class="text-4xl text-white mb-3"> Glary </p>
            <div class="grid grid-cols-4 md:grid-cols-4 gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('frontend/images/glary/glary_1.jpg') }}" alt="Glary-1">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('frontend/images/glary/glary_2.jpg') }}" alt="Glary-2">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('frontend/images/glary/glary_3.jpg') }}" alt="Glary-3">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('frontend/images/glary/glary_4.jpg') }}" alt="Glary-4">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('frontend/images/glary/glary_4.jpg') }}" alt="Glary-4">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('frontend/images/glary/glary_3.jpg') }}" alt="Glary-3">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('frontend/images/glary/glary_2.jpg') }}" alt="Glary-2">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('frontend/images/glary/glary_1.jpg') }}" alt="Glary-1">
                </div>
            </div>
        </section>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <!-- Footer Under Footer -->
        <div class="bg-yellow-100 p-3">
            <span class="block text-sm text-gray-900 sm:text-center dark:text-gray-400">© 2025 South Fukra Islamiya Madrasah And Etim Khana.</span>
            <p class="text-center">
                All Rights Reserved.
            </p>
            <p class="lg:text-center md:text-center">
                Design By: <a href="https://wa.me/+8801885451771" class="hover:underline">Habib PA™</a>
            </p>
        </div>
    </div>
</div>
