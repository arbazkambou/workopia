
<x-layout>
<x-slot name="title">Create Job</x-slot>
    <h1>Create Job</h1>
    <form action="/jobs" method="post">
        @csrf
    <input type="text" name="name" placeholder="name">
    <br>
    <input type="text" name="description" placeholder="description">
    <br>
    <button type="submit">Submit</button>
    </form>

</x-layout>