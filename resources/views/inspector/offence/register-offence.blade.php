<x-inspector-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                
                <div class="flex flex-col p-2 bg-slate-100">
                    <div>User Name: {{ $user->name }}</div>
                    <div>User Badge Number: {{ $user->badgenumber }}</div>
                    <div>User Email: {{ $user->email }}</div>
                </div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                        
                        <div class="flex flex-col p-2 bg-slate-100">
                            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                                <form method="POST" action="#">
                                    @csrf
                                    @method('PUT')
                                    <div class="sm:col-span-6">
                                        <label for="DriverName" class="block text-sm font-medium text-gray-700"> Driver Name: </label>
                                        <div class="mt-1">
                                            <input type="text" id="DriverName" name="drivername" :value="{{ $driver->name }}"
                                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                        </div>
                                        @error('drivername')
                                            <span class="text-red-400 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="sm:col-span-6">
                                        <label for="inspectorname" class="block text-sm font-medium text-gray-700"> Inspector Name: </label>
                                        <div class="mt-1">
                                            <input type="text" id="inspectorname" name="inspectorname" :value="{{ $user->name }}"
                                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                        </div>
                                        @error('inspectorname')
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
</x-inspector-layout> 