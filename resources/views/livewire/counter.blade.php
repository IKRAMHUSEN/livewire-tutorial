<div class="mx-auto flex min-h-[calc(100vh-4rem)] max-w-3xl items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
    <section class="w-full max-w-md overflow-hidden rounded-3xl bg-white shadow-xl ring-1 ring-slate-200">
        <div class="bg-gradient-to-br from-indigo-600 via-blue-600 to-sky-500 px-6 py-8 text-white sm:px-8">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-blue-100">Livewire demo</p>
            <h1 class="mt-2 text-3xl font-bold tracking-tight">Counter</h1>
            <p class="mt-2 text-sm text-blue-100">Change the value instantly with a reactive component.</p>
        </div>

        <div class="space-y-6 p-6 sm:p-8">
            <div class="rounded-2xl border border-slate-200 bg-slate-50 px-5 py-6 text-center" aria-live="polite">
                <p class="text-sm font-medium text-slate-500">Current value</p>
                <p class="mt-2 text-5xl font-bold tabular-nums text-slate-900">{{ $counter }}</p>
            </div>

            <div class="grid grid-cols-2 gap-3">
                <button
                    type="button"
                    wire:click="decrement"
                    wire:loading.attr="disabled"
                    wire:target="decrement"
                    aria-label="Decrease counter"
                    class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm font-semibold text-slate-700 shadow-sm transition hover:border-slate-400 hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                >
                    <span class="text-lg leading-none" aria-hidden="true">−</span>
                    Decrease
                </button>

                <button
                    type="button"
                    wire:click="increment"
                    wire:loading.attr="disabled"
                    wire:target="increment"
                    aria-label="Increase counter"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-4 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                >
                    <span class="text-lg leading-none" aria-hidden="true">+</span>
                    Increase
                </button>
            </div>
        </div>
    </section>
</div>
