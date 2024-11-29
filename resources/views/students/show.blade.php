<x-layout>
    <x-slot:heading>
        User page
    </x-slot:heading>

    <h2> Name:  {{$user['name']}}</h2>
    <h3> Lastname: {{$user['lastname']}} </h3>
   
    <div class="mt-6">
        <x-link href="/students/{{ $user->id }}/edit">
            Edit Student
        </x-link>
    </div>
</x-layout>
