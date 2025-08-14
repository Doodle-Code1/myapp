<x-layout>
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-50 to-white dark:from-gray-900 dark:to-gray-800 rounded-lg shadow-md mt-4">
        <div class="flex flex-col md:flex-row items-center justify-between max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

            <!-- Text Content -->
            <div class="md:w-2/3 w-full">
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4 relative inline-block break-words">
                    Welcome to <span class="text-blue-400">DoodleTech Consulting!</span>
                    <span class="absolute left-0 bottom-0 w-32 sm:w-40 h-1 bg-blue-400 rounded-full"></span>
                </h1>
                <p class="text-gray-700 dark:text-gray-300 mb-6">
                    Explore our services, read our latest blog posts, and get in touch for more information.
                </p>
                <a href="{{ route('contact') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg shadow-md transition">
                    Contact us about a free first call
                </a>
            </div>

            <!-- Hero Image -->
            <div class="md:w-1/3 w-full mt-6 md:mt-0">
                <img src="{{ asset('images/doodletech-hero.svg') }}" alt="Hero illustration" class="w-full h-auto max-w-sm mx-auto md:max-w-full">
            </div>

        </div>
    </section>

    <!-- Services Section Header -->
    <section class="bg-gradient-to-tl from-blue-50 to-white dark:from-gray-900 dark:to-gray-800 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">Our Services</h2>
                <p class="mt-4 text-gray-600 dark:text-gray-300">World class service, No matter your industry</p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($services as $service)
                    <div class="bg-white dark:bg-gray-800 shadow-sm hover:shadow-lg transition rounded-lg overflow-hidden">
                        @if($service->image)
                            <img class="w-full h-48 object-cover" src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}">
                        @endif
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">
                                <a href="{{ route('services.index') }}" class="hover:underline">{{ $service->title }}</a>
                            </h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">{{ Str::limit($service->description, 100) }}</p>
                            <a href="{{ route('services.index') }}" class="text-indigo-600 dark:text-indigo-400 font-medium hover:underline">
                                Read More →
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- View All Services Button -->
            <div class="mt-12 text-center">
                <a href="{{ route('services.index') }}" class="inline-block px-6 py-3 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600">
                    View All Services
                </a>
            </div>
        </div>
    </section>

    <!-- Team Section -->
        <section class="bg-gradient-to-tr from-blue-50 to-white dark:from-gray-900 dark:to-gray-800 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">Meet Our Team</h2>
                <p class="mt-4 text-gray-600 dark:text-gray-300">
                    The passionate professionals behind DoodleTech Consulting
                </p>
            </div>

            <!-- Team Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($teamMembers as $member)
                    <div class="bg-gray-50 dark:bg-gray-900 rounded-lg shadow-md hover:shadow-lg transition overflow-hidden text-center p-6">
                        
                        @if($member->photo_path)
                            <img class="w-32 h-32 rounded-full mx-auto object-cover mb-4 border-4 border-blue-400"
                                src="{{ asset($member->photo_path) }}"
                                alt="{{ $member->name }}">
                        @else
                            <div class="w-32 h-32 rounded-full mx-auto bg-gray-300 dark:bg-gray-700 flex items-center justify-center text-gray-500 text-lg font-bold mb-4">
                                {{ strtoupper(substr($member->name, 0, 1)) }}
                            </div>
                        @endif

                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">{{ $member->name }}</h3>
                        <p class="text-blue-500 dark:text-blue-400 mb-2">{{ $member->role }}</p>
                        <p class="text-gray-600 dark:text-gray-300 text-sm">{{ Str::limit($member->bio, 100) }}</p>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- Blog Section -->
    <section class="bg-gradient-to-tl from-blue-50 to-white dark:from-gray-900 dark:to-gray-800 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">Latest From Our Blog</h2>
                <p class="mt-4 text-gray-600 dark:text-gray-300">Insights, tips, and stories from our team</p>
            </div>

            <!-- Blog Posts Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $post)
                    <div class="bg-white dark:bg-gray-800 shadow-sm hover:shadow-lg transition rounded-lg overflow-hidden">
                        @if($post->image)
                        <img class="w-full h-48 object-cover" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                        @endif
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">
                                <a href="{{ route('blog.show', $post->slug) }}" class="hover:underline">{{ $post->title }}</a>
                            </h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">{{ Str::limit($post->content, 100) }}</p>
                            <a href="{{ route('blog.show', $post) }}" class="text-indigo-600 dark:text-indigo-400 font-medium hover:underline">
                                Read More →
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- View All Blog Posts Button -->
            <div class="mt-12 text-center">
                <a href="{{ route('blog.index') }}" class="inline-block px-6 py-3 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600">
                    View All Blog Posts
                </a>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
        <section class="bg-gradient-to-t from-blue-50 to-white dark:from-gray-900 dark:to-gray-800 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Stay Updated!</h2>
                <p class="text-gray-700 dark:text-gray-300 mb-6">Subscribe to our newsletter for our latest updates and offers.</p>
                <form class="max-w-md mx-auto flex flex-col sm:flex-row gap-2">
                    <input type="email" placeholder="Your email" class="flex-1 px-4 py-2 text-gray-900 dark:text-white dark:bg-gray-700 rounded-md border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md transition-colors whitespace-nowrap">Subscribe</button>
                </form>
            </div>
        </div>
    </section>
</x-layout>