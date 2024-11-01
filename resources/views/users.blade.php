<x-layout>
   <x-slot:heading>
      Users page
    </x-slot:heading>

    @foreach ($users as $user)

    <a href="/user/{{$user ['id'] }}" class="text-blue-500 hover:underine">
       <li>
        {{$user['name']}}
       </li>
</a>
      
 @endforeach
</x-layout>