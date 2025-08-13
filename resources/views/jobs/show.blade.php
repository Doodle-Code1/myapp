<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-lg dark:text-white">{{ $job['title'] }}</h2>
    <p class="dark:text-white">
        This job pays {{ $job['salary'] }} per year.
    </p>
</x-layout>