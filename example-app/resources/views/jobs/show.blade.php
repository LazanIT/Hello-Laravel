<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2>{{ $job['title'] }}</h2>
    <p>This job pays {{ $job['salary'] }}</p>


    <p class="mt-6">
        <x-button>Edit Job</x-button>
    </p>
</x-layout>
