<x-layout>
    <x-slot:heading>
        Our Services
    </x-slot:heading>

    <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($services as $service)
        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-6 shadow hover:shadow-lg transition flex flex-col justify-between">
            <div>
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">{{ $service->title }}</h2>
                <p class="text-gray-600 dark:text-gray-300">{{ $service->description }}</p>
            </div>
            <a href="{{ route('services.show', $service) }}" class="text-blue-600 dark:text-blue-400 hover:underline mt-4">Learn More</a>
        </div>
        @endforeach
    </section>
</x-layout>
