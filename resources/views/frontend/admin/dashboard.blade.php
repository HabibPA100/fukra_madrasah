<x-admin-layout>
    <div class="py-2">
        <div class="container mx-auto">
            <div class="flex justify-end items-end text-lg md:text-xl lg:text-2xl text-green-500">
            <a href="{{ route('admin.user-list') }}">
                <x-my-outline-button-1 >
                    <i class="fa-solid fa-plus"></i>
                    <span> Users </span>
                </x-my-outline-button-1>
            </a>
            </div>
        </div>
    </div> 
    @include('frontend.components.all-posts')   
</x-admin-layout>
