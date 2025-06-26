<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}">
                <li><strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }}</li>
        @endforeach
        </a>
    </ul>
</x-layout>
