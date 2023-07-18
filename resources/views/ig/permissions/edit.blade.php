<x-ig-layout>

    <div class="py-12 mx-auto sm:auto" >
        <div class="bg-grey dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h2>Creating permission</h2>
            


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('ig.permissions.update', $permission) }}">
                        @csrf
                        @method('PUT')
                    <div>
                        <x-input-label for="name" :value="__('Permission Name :   ')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name',$permission->name)" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    @error('name')
                    <span class="error">{{$message}}</span>                    
                    @enderror
      </div>
                          <button type="submit" class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-green-200 rounded hover:bg-blue-200 focus:outline-none">Update</button>
    </div>
  </section>               
                 </div>
            </div>
        </div>
    </div>

</x-ig-layout>
