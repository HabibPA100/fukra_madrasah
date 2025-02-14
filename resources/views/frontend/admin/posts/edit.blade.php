<x-admin-layout>
    <div class="max-w-lg mx-auto bg-white p-6 rounded-2xl shadow-lg">
        <h2 class="text-xl font-bold text-gray-700 mb-4">Edit Post</h2>
        <a href="" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Go Back
        </a>
        <form action="{{ route('post.update', $edit->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')
            <!-- Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title', $edit->title) }}"
                    class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
            </div>
            <!-- Description -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description <span class="text-red-500">*</span></label>
                <textarea id="description" name="description" required
                    class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none h-32">{{ old('description', $edit->description) }}</textarea>
            </div>
            <!-- Image Upload -->
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Upload Image</label>
                <input type="file" id="image" name="image" class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
                @if ($edit->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $edit->image) }}" alt="Current Image" class="w-32 rounded-lg">
                    </div>
                @endif
            </div>
            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                Update Post
            </button>
        </form>
    </div>
</x-admin-layout>
