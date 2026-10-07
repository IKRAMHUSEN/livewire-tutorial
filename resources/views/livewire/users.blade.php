<div>
    <div>
        <input type="text" wire:model="search" wire:keyup="set('search', $event.target.value)"
            placeholder="Search by name" class="border border-gray-300 rounded px-4 py-2 mb-4 w-full">
    </div>
    <table class="table-auto border-collapse border border-gray-300 w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="border px-4 py-2">{{ $user->id }}</td>
                    <td class="border px-4 py-2">{{ $user->name }}</td>
                    <td class="border px-4 py-2">{{ $user->email }}</td>
                    <td class="border px-4 py-2">
                        <button wire:click="delete({{ $user->id }})"
                            wire:confirm="Are you sure you want to delete this user?"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div>
