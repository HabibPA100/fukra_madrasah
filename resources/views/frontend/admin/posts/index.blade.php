<x-admin-layout>
    <div class="container mx-auto">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-4 border-b flex justify-end items-end">
                <a href="{{ route('admin-post.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Create Post</a>
            </div>
            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="w-full border border-gray-300 text-left">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-4 py-2">Id</th>
                                <th class="px-4 py-2">Title</th>
                                <th class="px-4 py-2">Description</th>
                                <th class="px-4 py-2">Image</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($posts->isNotEmpty())
                                @foreach ($posts as $post)
                                    <tr class="border-b border-gray-300 hover:bg-gray-100">
                                        <td class="px-4 py-2">{{ $post->id }}</td>
                                        <td class="px-4 py-2">{{ $post->title }}</td>
                                        <td class="px-4 py-2">{{ $post->description }}</td>
                                        <td class="px-4 py-2">
                                            @if ($post->image)
                                                <img src="{{ asset('storage/' . $post->image) }}" alt="Image" class="max-w-[200px] rounded">
                                            @endif
                                        </td>
                                        <td class="px-4 py-2 flex space-x-2">
                                            <a href="{{ route('admin-post.edit', $post->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded text-sm hover:bg-yellow-600">Edit</a>
                                            <a href="{{ route('admin-post.show', $post->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">Show</a>
                                            <form action="{{ route('admin-post.destroy', $post->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded text-sm hover:bg-red-600">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="text-center py-4">No Post Found For you</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
</x-admin-layout>