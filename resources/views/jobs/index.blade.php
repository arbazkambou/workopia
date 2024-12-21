


<x-layout>
    <h1>Available Jobs</h1>
    @if (!empty($jobs))
        <ul>
            @foreach ($jobs as $job)
                <li>
                    {{ $job }}
                </li>
            @endforeach
        </ul>
    @else
        <p>No jobs found</p>
    @endif
</x-layout>