<x-admin-layout>
    <div class="container mx-auto">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="w-full border border-gray-300 text-left">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-4 py-2">Id</th>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Email</th>
                                <th class="px-4 py-2">Role</th>
                                <th class="px-4 py-2">Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($users->isNotEmpty())
                                @foreach ($users as $user)
                                    <tr class="border-b border-gray-300 hover:bg-gray-100">
                                        <td class="px-4 py-2">{{ $user->id }}</td>
                                        <td class="px-4 py-2">{{ $user->name }}</td>
                                        <td class="px-4 py-2">{{ $user->email }}</td>
                                        <td class="px-4 py-2">{{ $user->role }}</td>
                                        <td class="px-4 py-2">{{ $user->password }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="text-center py-4">No User Found For you</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
</x-admin-layout>