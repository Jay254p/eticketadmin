<x-ig-layout>
    <div class="py-12 w-full">

    <div class="py-12 mx-auto sm:auto" >
        <div class="bg-grey dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h2>Edit offence category</h2>
            


        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('ig.offencelist.update', $offencelist->id) }}">
                        @csrf
                        @method('PUT')
                    <div>
                        <x-input-label for="offencename" :value="__('Offence Category Name :   ')" />
                        <x-text-input id="offencename" class="block mt-1 w-full" type="text" name="offencename" :value="old('offencename',$offencelist->offencename)" required autofocus autocomplete="offencename" />
                        <x-input-error :messages="$errors->get('offencename')" class="mt-2" />
                    </div>
                    @error('name')
                    <span class="error">{{$message}}</span>                    
                    @enderror
      </div>
                          <button type="submit" class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-green-200 rounded hover:bg-blue-200 focus:outline-none">Update</button>
    </div>
  </section>                --}}

  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
        
        <div class="flex flex-col p-2 bg-slate-100">
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                <form method="POST" action="{{ route('ig.offencelist.update', $offencelist->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="sm:col-span-6">
                        <label for="offencename" class="block text-sm font-medium text-gray-700"> Offence Category name: </label>
                        <div class="mt-1">
                            <input type="text" id="offencename" name="offencename" value="{{ $offencelist->offencename }}"
                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('offencename')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="sm:col-span-6">
                        <label for="offencetype" class="block text-sm font-medium text-gray-700"> Offence Type: </label>
                        <div class="mt-1">
                            <input type="text" id="offencetype" name="offencetype" value="{{ $offencelist->offencetype }}"
                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('offencetype')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="sm:col-span-6">
                        <label for="offencefine" class="block text-sm font-medium text-gray-700"> Offence Fine: </label>
                        <div class="mt-1">
                            <input type="text" id="offencefine" name="offencefine" value="{{ $offencelist->offencefine }}"
                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('offencefine')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="sm:col-span-6 pt-5">
                        <button type="submit"
                            class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-800 py-3 px-5 bg-green-500 rounded hover:bg-blue-200 focus:outline-none">Update</button>
                    </div>
                </form>
            </div>
        </div>
                 </div>
            </div>
        </div>
    </div>

</x-ig-layout>
