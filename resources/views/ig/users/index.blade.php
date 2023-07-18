<x-ig-layout>
    <div class="py-12 w-full">
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
    @if (session('status') === 'User-deleted.')
    <div
          class="mb-2 rounded-lg bg-red-100 px-3 py-3 text-base font-bold text-red-900"
          x-data="{ show: true }"
          x-show="show"
          x-transition
          x-init="setTimeout(() => show = false, 2000)"
          role="alert">
          User Deleted Successfully
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
          Role Updated Successfully
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
          Role Updated Successfully
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
          Role Updated Successfully
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
          Role Updated Successfully
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
          Role Updated Successfully
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
          Role Updated Successfully
        </div>
    @endif

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <form action="{{ route('ig.users.index') }}" method="GET">
                    <input type="text" name="search" placeholder="Search Users">
                    <button type="submit">Search</button>
                </form>
                
                <div class="flex flex-col">
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
                                                Email</th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($users as $user)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        {{ $user->name }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        {{ $user->email }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="flex justify-end">
                                                        <div class="flex space-x-2">
                                                            <a href="{{ route('ig.users.show', $user->id) }}"
                                                                class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-green-200 rounded hover:bg-blue-200 focus:outline-none">Edit</a>
                                                            <form
                                                                class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-red-200 rounded hover:bg-blue-200 focus:outline-none"
                                                                method="POST"
                                                                action="{{ route('ig.users.destroy', $user->id) }}"
                                                                onsubmit="return confirm('Are you sure you want to delete this user?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $users->links() }}

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-ig-layout>