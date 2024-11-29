<x-layout>
  <x-slot:heading>
     Create Student

  </x-slot:heading>

<form method="POST" action="/students/group">


@csrf

  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base/7 font-semibold text-gray-900">Student</h2>
    

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="name" class="block text-sm/6 font-medium text-gray-900">Username</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="name" id="name" autocomplete="name" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6" placeholder="name">
            </div>
          </div>

          <div class="mt-2">
            @error('name')
            <p class="text-xs text-red-500">{{$message}}</p>
            @enderror
          </div>
        </div>

        <div class="sm:col-span-4">
          <label for="lastname" class="block text-sm/6 font-medium text-gray-900">Lastname</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="lastname" id="lastname" autocomplete="lastname" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6" placeholder="Lastname">
            </div>
                  <div class="mt-2">
                       @error('lastname')
                          <p class="text-xs text-red-500">{{$message}}</p>
                      @enderror
          </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
</form>

</x-layout>