<x-inspector-layout>
    @if (session('status') === 'Role-Updated-Successfully.')
    <div
          class="mb-2 rounded-lg bg-red-100 px-3 py-3 text-base font-bold text-red-900"
          x-data="{ show: true }"
          x-show="show"
          x-transition
          x-init="setTimeout(() => show = false, 2000)"
          role="alert">
          Role Updated Successfully
        </div>
    @endif
    @if (session('status') === 'offence-Updated-Successfully.')
    <div
          class="mb-2 rounded-lg bg-red-100 px-3 py-3 text-base font-bold text-red-900"
          x-data="{ show: true }"
          x-show="show"
          x-transition
          x-init="setTimeout(() => show = false, 2000)"
          role="alert">
          offence Updated Successfully
        </div>
    @endif
    @if (session('status') === 'Role-Updated-Successfully.')
    <div
          class="mb-2 rounded-lg bg-red-100 px-3 py-3 text-base font-bold text-red-900"
          x-data="{ show: true }"
          x-show="show"
          x-transition
          x-init="setTimeout(() => show = false, 2000)"
          role="alert">
          offence Updated Successfully
        </div>
    @endif
    @if (session('status') === 'Role-Updated-Successfully.')
    <div
          class="mb-2 rounded-lg bg-red-100 px-3 py-3 text-base font-bold text-red-900"
          x-data="{ show: true }"
          x-show="show"
          x-transition
          x-init="setTimeout(() => show = false, 2000)"
          role="alert">
          offence Updated Successfully
        </div>
    @endif
    @if (session('status') === 'Role-Updated-Successfully.')
    <div
          class="mb-2 rounded-lg bg-red-100 px-3 py-3 text-base font-bold text-red-900"
          x-data="{ show: true }"
          x-show="show"
          x-transition
          x-init="setTimeout(() => show = false, 2000)"
          role="alert">
          offence Updated Successfully
        </div>
    @endif
    @if (session('status') === 'Role-Updated-Successfully.')
    <div
          class="mb-2 rounded-lg bg-red-100 px-3 py-3 text-base font-bold text-red-900"
          x-data="{ show: true }"
          x-show="show"
          x-transition
          x-init="setTimeout(() => show = false, 2000)"
          role="alert">
          offence Updated Successfully
        </div>
    @endif
    @if (session('status') === 'Role-Updated-Successfully.')
    <div
          class="mb-2 rounded-lg bg-red-100 px-3 py-3 text-base font-bold text-red-900"
          x-data="{ show: true }"
          x-show="show"
          x-transition
          x-init="setTimeout(() => show = false, 2000)"
          role="alert">
          offence Updated Successfully
        </div>
    @endif
    @if (session('status') === 'Role-Updated-Successfully.')
    <div
          class="mb-2 rounded-lg bg-red-100 px-3 py-3 text-base font-bold text-red-900"
          x-data="{ show: true }"
          x-show="show"
          x-transition
          x-init="setTimeout(() => show = false, 2000)"
          role="alert">
          offence Updated Successfully
        </div>
    @endif

    <div class="py-12 w-full">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="search-form mt-4 w-2/5 ">
                    <form action="{{ route('inspector.offence.index') }}" method="GET">   
                        <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <!-- Search input field -->
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                            <input type="text" id="search" name="search" value="{{ $search }}" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search By Licence Number" required>
                            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search User</button>
                        </div>
                    </form>
                </div>
                
                <div class="flex flex-col mt-4">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">

                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Name</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Licence Number</th>
                                                <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                ID Number</th>
                                                <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Action</th>                                               
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($drivers as $driver)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    {{ $driver->name }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    {{ $driver->licencenumber }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    {{ $driver->idnumber }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex">
                                                    <div class="flex space-x-2">
                                                        <a href="{{ route('inspector.offence.driver-show', $driver->id) }}" class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-green-200 rounded hover:bg-blue-200 focus:outline-none">Register An Offence</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                    </tbody>
                                </table>

                            </div>

                            <div class="pagination-links p-2">
                                {{ $drivers->links() }}
                            </div>
                        </div>

                        
                    </div>
                </div>

            </div>
        </div>
    </div>


</x-inspector-layout>