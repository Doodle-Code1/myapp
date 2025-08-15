<x-layout>
    <x-slot:heading>
        Blog
    </x-slot:heading>

    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($posts as $post)
            <div class="bg-slate-50 dark:bg-slate-700 rounded-lg p-6 shadow hover:shadow-lg transition">
                <h2 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">{{ $post->title }}</h2>
                <p class="text-slate-600 dark:text-slate-300">{{ Str::limit($post->content, 100) }}</p>
                <a href="{{ route('blog.show', $post) }}" class="text-blue-600 dark:text-blue-400 hover:underline mt-2 block">Read More</a>
            </div>
        @endforeach
    </section>
</x-layout>
