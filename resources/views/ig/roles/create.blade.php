<x-ig-layout>

    <div class="py-12 w-full">

        <div class="py-12 mx-auto sm:auto" >
            <div class="bg-grey dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>Creating a new role category</h2>
            


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('ig.roles.store') }}">
                        @csrf
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"> Role Category name: </label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name" value=""
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('name')
                                <span class="text-red-400 text-sm">{{ $message }}</span>
                            @enderror
                            
      </div>
      <div class="sm:col-span-6 pt-5">
                          <button type="submit" 
                          class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-800 py-3 px-5 bg-green-500 rounded hover:bg-blue-200 focus:outline-none">Create</button>
                        </div>
  </section>               
                 </div>
            </div>
        </div>
    </div>


</x-ig-layout>
