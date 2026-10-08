<div>
    @session('success')
        <div class="mb-3 rounded-lg border border-green-300 bg-green-100 p-4 text-green-800 shadow-sm">
            {{ session('success') }}
        </div>
    @endsession
    @if ($postUpdate)
        @include('livewire.postUpdate')
    @endif

    @if ($postAdd)
        @include('livewire.postCreate')
    @else
        <div class="mb-3">
            <button wire:click="createPost" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Create Post
            </button>
        </div>
    @endif
    <div class="overflow-x-auto">
        <table class="w-full table-auto border-collapse border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Title</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Body</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Created At</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @if ($posts->count() > 0)
                    @foreach ($posts as $post)
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">{{ $post->id }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $post->title }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $post->body }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $post->created_at }}</td>
                            <td>
                                <button wire:click="editPost({{ $post->id }})"
                                    class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">
                                    Edit
                                </button>
                                <button wire:confirm="Are you sure you want to delete this post?" wire:click="deletePost({{ $post->id }})"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" class="border border-gray-300 px-4 py-2 text-center">No posts found.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
