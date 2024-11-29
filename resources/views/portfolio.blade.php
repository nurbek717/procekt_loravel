<x-layout>
   <x-slot:heading>
        Portfolio page
    </x-slot:heading>

    @foreach ($laptops as $laptop)

<a href="/laptop/{{$laptop ['id'] }}" class="text-blue-500 hover:underine">
      <li>
          <strong>{{$laptop->company->name}}</strong>  || {{$laptop['brand']}}
     </li>
</a>

@endforeach 
</x-layout>
