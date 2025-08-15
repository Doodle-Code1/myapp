<x-layout>
    <x-slot:heading>
        {{ $service->title }}
    </x-slot:heading>

    <div class="bg-slate-50 dark:bg-slate-700 rounded-lg p-6 shadow-md">
        <p class="text-slate-600 dark:text-slate-300 mb-4">{{ $service->description }}</p>

        @if($service->details)
            <div class="mt-4">
                <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">Details</h3>
                <p class="text-slate-600 dark:text-slate-300">{{ $service->details }}</p>
            </div>
        @endif

        <a href="{{ route('services.index') }}" class="inline-block mt-6 text-blue-600 dark:text-blue-400 hover:underline">
            &larr; Back to All Services
        </a>
    </div>
</x-layout>
