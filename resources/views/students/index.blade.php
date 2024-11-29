<x-layout>
   <x-slot:heading>
      Users page
    </x-slot:heading>

    <div class="space-y-4 " >
       @foreach ($users as $user)

    <a href="/students/{{$user ['id'] }}" class="bg-blue-300 px-2  py-4 block border ">
       <li class="list-none text-center  ">
        {{ $user['name'] }} {{ $user['lastname'] }}
       </li>
</a>
      
 @endforeach
    </div>
    <div class="py-6">
        {{ $users->links() }}
    </div>
  

   
</x-layout>