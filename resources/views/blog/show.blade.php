<x-layout>
    <x-slot:heading>
        {{ $post->title }}
    </x-slot:heading>

    <article class="bg-slate-50 dark:bg-slate-700 rounded-lg p-6 shadow">
        <p class="text-slate-600 dark:text-slate-300 mb-6">
            {{ $post->content }}
        </p>

        <div class="flex justify-between items-center text-sm text-slate-500 dark:text-slate-400">
            <span>Published on {{ $post->created_at->format('F j, Y') }}</span>
            <a href="{{ route('blog.index') }}" class="text-blue-600 dark:text-blue-400 hover:underline">
                ← Back to Blog
            </a>
        </div>
    </article>
</x-layout>
