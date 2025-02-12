<x-layout>

    <x-slot:heading>
        Job Page
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)

            <li>
                <a href="/jobs/{{$job['id']}}" class="text-blue-600 hover:underline">
                    <strong> {{$job['title']}} </strong> are paid up to {{$job['salary']}} per month.
                </a>
            </li>

        @endforeach
    </ul>

</x-layout>
