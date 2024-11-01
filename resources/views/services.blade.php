<x-layout>
   <x-slot:heading>
        Services page
    </x-slot:heading>


    @foreach ($services as $service)

        <a href="/service/{{$service ['id'] }}" class="text-blue-500 hover:underine">
              <li>
                  {{$service['model']}}
             </li>
        </a>
  
    @endforeach
</x-layout>