<div x-data="{ open: false }" x-init="setTimeout(() => open = true, 100)"
    x-show="open"
    x-transition:enter="duration-300 ease-out"
    x-transition:enter-start="opacity-0 transform -translate-y-10"
    x-transition:enter-end="opacity-100 transform translate-y-0"
    x-transition:leave="duration-200 ease-in"
    x-transition:leave-start="opacity-100 transform translate-y-0"
    x-transition:leave-end="opacity-0 transform -translate-y-10"
    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
    @click="open = false">
    
    <!-- Modal Box -->
    <div class="relative bg-white rounded-lg shadow-lg w-full max-w-md p-2" @click.stop>
        <!-- Close Button -->
        <button @click="open = false" 
            class="absolute -top-4 -right-4 bg-gray-800 text-white rounded-full w-8 h-8 flex items-center justify-center shadow-lg hover:bg-gray-900 focus:outline-none">
            &times;
        </button>

        <!-- Modal Content -->
        <div class="cursor-pointer" @click="window.location.href='https://backupcoachingcenter.xyz/'">
            <img class="w-full rounded-lg" src="{{ asset('frontend/images/৩৩.jpg') }}" alt="Modal Image">
        </div>
    </div>
</div>

