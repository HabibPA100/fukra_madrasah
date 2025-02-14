<x-app-layout>
    <div class="container mx-auto">
        <div class="mt-4">
            <a href="{{ route('post.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Go Back</a>
            <div class="overflow-x-auto mt-4">
                <table class="w-full border border-gray-300 text-left">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="px-4 py-2">Id</th>
                            <th class="px-4 py-2">Title</th>
                            <th class="px-4 py-2">Description</th>
                            <th class="px-4 py-2">Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="px-4 py-2">{{ $show->id }}</td>
                            <td class="px-4 py-2">{{ $show->title }}</td>
                            <td class="px-4 py-2">{{ $show->description }}</td>
                            <td class="px-4 py-2">
                                @if ($show->image)
                                    <img src="{{ asset('storage/' . $show->image) }}" alt="Image" class="max-w-[200px] rounded">
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>