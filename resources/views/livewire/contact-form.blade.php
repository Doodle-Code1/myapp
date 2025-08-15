<div class="max-w-lg mx-auto bg-white dark:bg-slate-800 p-6 rounded-lg shadow space-y-6">

    <form wire:submit="create" class="space-y-6">
        {{ $this->form }}
        @if (session('success'))
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)" 
                class="mb-4 p-4 rounded bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200"
            >
                {{ session('success') }}
            </div>
        @endif
        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition">
            Submit
        </button>
    </form>


    <x-filament-actions::modals />
</div>
