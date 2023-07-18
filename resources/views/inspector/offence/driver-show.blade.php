<x-inspector-layout>
    <div class="py-12 w-full">

    <div class="py-12 mx-auto sm:auto" >
        <div class="bg-grey dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h2>Registering an Offence</h2>
            


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
                <form method="POST" action="{{ route('inspector.offence.driver-show.store', $driver->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="sm:col-span-6">
                        <label for="InspectorBadgeNumber" class="block text-sm font-medium text-gray-700"> Inspector Badge Number: (disabled)</label>
                        <div class="mt-1">
                            <input type="text" id="InspectorBadgeNumber" name="InspectorBadgeNumber" value="{{Auth::user()->badgenumber}}" {{ $isEditable ? '' : 'readonly' }}
                                class="block w-full appearance-none bg-white border border-blue-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('InspectorBadgeNumber')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="sm:col-span-6">
                        <label for="DriverName" class="block text-sm font-medium text-gray-700"> Driver Name: (disabled)</label>
                        <div class="mt-1">
                            <input type="text" id="DriverName" name="DriverName" value="{{$driver->name}}"  {{ $isEditable ? '' : 'readonly' }}
                                class="block w-full appearance-none bg-white border border-black-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('DriverName')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="sm:col-span-6">
                        <label for="DriverLicenceNumber" class="block text-sm font-medium text-gray-700"> Driver Licence Number: (disabled)</label>
                        <div class="mt-1">
                            <input type="text" id="DriverLicenceNumber" name="DriverLicenceNumber" value="{{$driver->licencenumber}}" {{ $isEditable ? '' : 'readonly' }}
                                class="block w-full appearance-none bg-white border border-black-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('DriverLicenceNumber')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="sm:col-span-6">
                        <label for="DriverPhoneNumber" class="block text-sm font-medium text-gray-700"> Driver Phone Number: (disabled)</label>
                        <div class="mt-1">
                            <input type="text" id="DriverPhoneNumber" name="DriverPhoneNumber" value="{{$driver->phonenumber}}" {{ $isEditable ? '' : 'readonly' }}
                                class="block w-full appearance-none bg-white border border-black-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('DriverPhoneNumber')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="sm:col-span-6">
                        <label for="DriverCarRegNo" class="block text-sm font-medium text-gray-700"> Car Registration Number: </label>
                        <div class="mt-1">
                            <input type="text" id="DriverCarRegNo" name="DriverCarRegNo" placeholder="i.e GKA 123A"
                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('DriverCarRegNo')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="sm:col-span-6">
                        <label for="PlaceOfOffence" class="block text-sm font-medium text-gray-700"> Place Of Offence: </label>
                        <div class="mt-1">
                            <input type="text" id="PlaceOfOffence" name="PlaceOfOffence" placeholder="i.e 2nd Parklands"
                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('PlaceOfOffence')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    {{--  --}}
            
                                <div class="sm:col-span-6">
                                    <label for="OffenceCommited" class="block text-sm font-medium text-gray-700">Offence Committed</label>
                                    <select id="OffenceCommited" name="OffenceCommited" autocomplete="OffenceCommited"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        @foreach ($offencelists as $offencelist)
                                            <option value="{{ $offencelist->offencename }}">{{ $offencelist->offencename }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('role')
                                    <span class="text-red-400 text-sm">{{ $message }}</span>
                                @enderror
                        
                        {{--  --}}


                    
                    <div class="sm:col-span-6 pt-5">
                        <button type="submit"
                            class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-800 py-3 px-5 bg-green-500 rounded hover:bg-blue-200 focus:outline-none">Issue Ticket</button>
                    </div>
                </form>
            </div>
        </div>
                 </div>
            </div>
        </div>
    </div>

</x-inspector-layout>
