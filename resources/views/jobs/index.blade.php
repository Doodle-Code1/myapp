<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
<div class="space-y-4">
    @foreach ($jobs as $job)
        <a href="/jobs/{{$job['id']}}" class="hover:border-blue-500 dark:hover:border-blue-300 dark:text-white transition block px-4 py-6 border border-gray-300 rounded-lg shadow-md">
            <div class="bold text-blue-500 text-sm"><strong>{{$job->employer->name}}</strong></div>
            <div>
                <strong>{{$job['title']}}:</strong> Pays {{$job['salary']}} per year.
            </div>
        </a>
    @endforeach

    <div>
        {{$jobs->links()}}
    </div>
    </div>

</x-layout>