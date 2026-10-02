<div class="p-6">
    <form wire:submit.prevent="submit" class="max-w-md">
        @if (session()->has('message'))
            <div class="rounded-lg bg-green-100 px-4 py-3 text-green-800">
                {{ session('message') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="rounded-lg bg-red-100 px-4 py-3 text-red-800">
                {{ session('error') }}
            </div>
        @endif
        @if ($photo)
            Preview:
            <img src="{{ $photo->temporaryUrl() }}">
        @endif
        <label class="block mb-2 text-sm font-medium text-gray-900">
            Image
        </label>

        <input type="file" wire:model="photo" name="photo"
            class="block w-full mb-4 rounded-lg border border-gray-300 bg-gray-50 px-4 py-2.5 text-sm text-gray-900 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200">
        @error('photo')
            <p class="text-sm text-red-500">{{ $message }}</p>
        @enderror

        <button class="rounded-lg bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700" type="submit">
            Save
        </button>
    </form>
</div>
