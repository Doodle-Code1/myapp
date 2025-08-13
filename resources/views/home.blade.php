<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>

    <!-- Hero Section -->
    <section class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-8 mb-8">
        <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
            Welcome to <span class="text-blue-400">DoodleTech</span> Consulting!
        </h1>
        <p class="text-gray-700 dark:text-gray-300 mb-6">
            Explore our services, read our latest blog posts, and get in touch for more information.
        </p>
        <a href="{{ route('services.index') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
            View Services
        </a>
    </section>

    <!-- Features / Highlights -->
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

    <!-- Call-to-Action Section -->
    <section class="mt-12 text-center">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Stay Updated!</h2>
        <p class="text-gray-700 dark:text-gray-300 mb-6">
            Subscribe to our newsletter for our latest updates and offers.
        </p>
        <form class="flex justify-center gap-2">
            <input type="email" placeholder="Your email" class="px-4 py-2 dark:text-white rounded-l-md border border-gray-300 dark:border-gray-600 focus:outline-none">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-r-md">
                Subscribe
            </button>
        </form>
    </section>
</x-layout>
