<x-ig-layout>

    <div class="py-12 mx-auto sm:auto" >
        <div class="bg-grey dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h2>Creating an offence category</h2>
            


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('ig.offencelist.store') }}">
                        @csrf
                    <div>
                        <x-input-label for="offencename" :value="__('Offence Name :   ')" />
                        <x-text-input id="offencename" class="block mt-1 w-full" type="text" name="offencename" :value="old('offencename')" required autofocus autocomplete="offencename" placeholder="Offence Name i.e Over Speeding"/>
                        <x-input-error :messages="$errors->get('offencename')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="offencetype" :value="__('Offence Type :   ')" />
                        <x-text-input id="offencetype" class="block mt-1 w-full" type="text" name="offencetype" :value="old('offencetype')" required autofocus autocomplete="offencetype" placeholder="Offence Type i.e minor"/>
                        <x-input-error :messages="$errors->get('offencetype')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="offencefine" :value="__('Offence Fine :   ')" />
                        <x-text-input id="offencefine" class="block mt-1 w-full" type="text" name="offencefine" :value="old('offencefine')" required autofocus autocomplete="offencefine" placeholder="Offence fine i.e 500"/>
                        <x-input-error :messages="$errors->get('offencefine')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="createdby" :value="__()" />
                        <x-text-input id="createdby" class="block mt-1 w-full" type="hidden" name="createdby" value="{{Auth::user()->name}}" required autofocus autocomplete="createdby"    />
                        <x-input-error :messages="$errors->get('createdby')" class="mt-2" />
                    </div>
    
                    @error('name')
                    <span class="error">{{$message}}</span>                    
                    @enderror
      </div>
                          <button type="submit" class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-green-200 rounded hover:bg-blue-200 focus:outline-none">Create</button>
    </div>
  </section>               
                 </div>
            </div>
        </div>
    </div>

</x-ig-layout>
