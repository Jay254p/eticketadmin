<x-ig-layout>
    <div class="py-12 w-full">
                    @if (session('status') === 'Permission-Already-Assigned.')
                    <div
                          class="mb-2 rounded-lg bg-red-100 px-3 py-3 text-base font-bold text-red-900"
                          x-data="{ show: true }"
                          x-show="show"
                          x-transition
                          x-init="setTimeout(() => show = false, 2000)"
                          role="alert">
                          Permission Already Assigned.
                        </div>
                    @endif

                    @if (session('status') === 'Permission-Added.')
                    <div
                          class="mb-2 rounded-lg bg-red-100 px-3 py-3 text-base font-bold text-red-900"
                          x-data="{ show: true }"
                          x-show="show"
                          x-transition
                          x-init="setTimeout(() => show = false, 2000)"
                          role="alert">
                          Permission Assigned Successfully.
                        </div>
                    @endif

                    @if (session('status') === 'Permission-Revoked.')
                    <div
                          class="mb-2 rounded-lg bg-red-100 px-3 py-3 text-base font-bold text-red-900"
                          x-data="{ show: true }"
                          x-show="show"
                          x-transition
                          x-init="setTimeout(() => show = false, 2000)"
                          role="alert">
                          Permission Revoked Successfully.
                        </div>
                    @endif

                    @if (session('status') === 'Permission-Does-Not-Exist.')
                    <div
                          class="mb-2 rounded-lg bg-red-100 px-3 py-3 text-base font-bold text-red-900"
                          x-data="{ show: true }"
                          x-show="show"
                          x-transition
                          x-init="setTimeout(() => show = false, 2000)"
                          role="alert">
                          Permission Does Not Exist.
                        </div>
                    @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                
                <div class="flex flex-col p-2 bg-slate-100">
                    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                        <form method="POST" action="{{ route('ig.roles.update', $role->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium text-gray-700"> Role name </label>
                                <div class="mt-1">
                                    <input type="text" id="name" name="name" value="{{ $role->name }}"
                                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                                @error('name')
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
                <div class="mt-6 p-2 bg-slate-100">
                    <h2 class="text-2xl font-semibold">Role Permissions</h2>
                    <div class="block text-sm font-medium text-gray-700">Please note that clicking on the permissions will enable delete functionality.</div>
                    <div class="flex space-x-2 mt-4 p-2">
                        @if ($role->permissions)
                            @foreach ($role->permissions as $role_permission)
                                <form class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-800 py-3 px-5 bg-blue-500 rounded hover:bg-red-200 focus:outline-none" method="POST"
                                    action="{{ route('ig.roles.permissions.revoke', [$role->id, $role_permission->id]) }}"
                                    onsubmit="return confirm('Do you really want to revoke this permission?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">{{ $role_permission->name }}</button>
                                </form>
                            @endforeach
                        @endif
                    </div>
                    <div class="max-w-xl mt-6">
                        <form method="POST" action="{{ route('ig.roles.permissions', $role->id) }}">
                            @csrf
                            <div class="sm:col-span-6">
                                <label for="permission"
                                    class="block text-sm font-medium text-gray-700">Permission</label>
                                <select id="permission" name="permission" autocomplete="permission-name"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @foreach ($permissions as $permission)
                                        <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('name')
                                <span class="text-red-400 text-sm">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="sm:col-span-6 pt-5">
                        <button type="submit"
                            class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-800 py-3 px-5 bg-green-500 rounded hover:bg-blue-200 focus:outline-none">Assign</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-ig-layout>