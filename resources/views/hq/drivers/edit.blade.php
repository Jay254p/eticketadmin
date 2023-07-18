<x-hq-layout>
    <div class="py-12 w-full">

    <div class="py-12 mx-auto sm:auto" >
        <div class="bg-grey dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h2>Updating Driver Information</h2>
            


        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('ig.offencelist.update', $offencelist->id) }}">
                        @csrf
                        @method('PUT')
                    <div>
                        <x-input-label for="name" :value="__('Offence Category Name :   ')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name',$offencelist->name)" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
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
                <form method="POST" action="{{ route('hq.drivers.update', $driver->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700"> Name: </label>
                        <div class="mt-1">
                            <input type="text" id="name" name="name" value="{{ $driver->name }}"
                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('name')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-6">
                        <label for="email" class="block text-sm font-medium text-gray-700"> Email: </label>
                        <div class="mt-1">
                            <input type="text" id="email" name="email" value="{{ $driver->email }}"
                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('email')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-6">
                        <label for="idnumber" class="block text-sm font-medium text-gray-700"> ID Number: </label>
                        <div class="mt-1">
                            <input type="text" id="idnumber" name="idnumber" value="{{ $driver->idnumber }}"
                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('idnumber')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="sm:col-span-6">
                        <label for="licencenumber" class="block text-sm font-medium text-gray-700"> Licence Number: </label>
                        <div class="mt-1">
                            <input type="text" id="licencenumber" name="licencenumber" value="{{ $driver->licencenumber }}"
                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('licencenumber')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="sm:col-span-6">
                        <label for="phonenumber" class="block text-sm font-medium text-gray-700"> Phone Number: </label>
                        <div class="mt-1">
                            <input type="text" id="phonenumber" name="phonenumber" value="{{ $driver->phonenumber }}"
                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('phonenumber')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="sm:col-span-6">
                        <label for="bloodgroup" class="block text-sm font-medium text-gray-700"> Blood Group: </label>
                        <select id="bloodgroup" name="bloodgroup" class="block mt-1 w-full">
                            <option value="{{ $driver->bloodgroup }}">{{$driver->bloodgroup}}</option>
                            <option value="A+">A-positive (A+)</option>
                            <option value="A-">A-negative (A-)</option>
                            <option value="B+">B-positive (B+)</option>
                            <option value="B-">B-negative (B-)</option>
                            <option value="AB+">AB-positive (AB+)</option>
                            <option value="AB-">AB-negative (AB-)</option>
                            <option value="O+">O-positive (O+)</option>
                            <option value="O-">O-negative (O-)</option>
                        </select>
                        @error('bloodgroup')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="sm:col-span-6">
                        <label for="dob" class="block text-sm font-medium text-gray-700"> Date Of Birth: </label>
                        <div class="mt-1">
                            <input type="date" id="dob" name="dob" value="{{ $driver->dob }}"
                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('dob')
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
