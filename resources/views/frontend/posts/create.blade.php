<x-app-layout>
    <div class="flex items-end justify-end">
        <a href="{{ route('post.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Go Back
        </a>
    </div>
<div class="max-w-lg mx-auto bg-white p-6 rounded-2xl shadow-lg">
    <h2 class="text-xl font-bold text-gray-700 mb-4">Create a New Post</h2>
    
    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <!-- Title (Optional) -->
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Title (Optional)</label>
            <input type="text" id="title" name="title" 
                class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
        </div>
        @error('title')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <!-- Description (Required) -->
        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description <span class="text-red-500">*</span></label>
            <textarea id="description" name="description" required 
                class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none h-32"></textarea>
        </div>
        @error('description')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <!-- Image Upload (Optional) -->
        <div>
            <label for="image" class="block text-sm font-medium text-gray-700">Upload Image (Optional)</label>
            <input type="file" id="image" name="image" 
                class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
        </div>
        @error('image')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
           
        <!-- Submit Button -->
        <button type="submit" 
            class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
            Submit Post
        </button>
    </form>
</div>
</x-app-layout>