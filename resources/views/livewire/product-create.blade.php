<div>

<form wire:submit.prevent="submit" class="max-w-lg space-y-5 p-6">
    <!-- Name -->
    <div>
        <label for="name" class="mb-2 block text-sm font-medium text-gray-700">
            Name
        </label>
        <input
            type="text"
            id="name"
            name="name"
            placeholder="Enter name"
            class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200"
            wire:model="name"
        >
        @error("name")
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <!-- Price -->
    <div>
        <label for="price" class="mb-2 block text-sm font-medium text-gray-700">
            Price
        </label>
        <input
            type="number"
            id="price"
            name="price"
            placeholder="Enter price"
            class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200"
            wire:model="price"
        >
        @error("price")
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <!-- Detail -->
    <div>
        <label for="detail" class="mb-2 block text-sm font-medium text-gray-700">
            Detail
        </label>
        <textarea
            id="detail"
            name="detail"
            rows="4"
            placeholder="Enter detail"
            class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200"
            wire:model="detail"
        ></textarea>
        @error("detail")
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <!-- Submit -->
    <button
        type="submit"
        class="rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-700"
    >
        Save
    </button>
</form>


</div>
