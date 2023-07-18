<x-ig-layout>
    <div class="py-12 w-full">
        @if (session('status') === 'Role-exists.')
        <div
              class="mb-2 rounded-lg bg-red-100 px-3 py-3 text-base font-bold text-red-900"
              x-data="{ show: true }"
              x-show="show"
              x-transition
              x-init="setTimeout(() => show = false, 2000)"
              role="alert">
              Role Already Assinged.
            </div>
        @endif
                @if (session('status') === 'Role-assigned.')
        <div
              class="mb-2 rounded-lg bg-red-100 px-3 py-3 text-base font-bold text-red-900"
              x-data="{ show: true }"
              x-show="show"
              x-transition
              x-init="setTimeout(() => show = false, 2000)"
              role="alert">
              Role Assinged Successfully.
            </div>
        @endif

        @if (session('status') === 'Permission-revoked.')
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

        @if (session('status') === 'Permission-added.')
        <div
              class="mb-2 rounded-lg bg-red-100 px-3 py-3 text-base font-bold text-red-900"
              x-data="{ show: true }"
              x-show="show"
              x-transition
              x-init="setTimeout(() => show = false, 2000)"
              role="alert">
              Permission Assinged Successfully.
            </div>
        @endif

        @if (session('status') === 'Permission-exists.')
        <div
              class="mb-2 rounded-lg bg-red-100 px-3 py-3 text-base font-bold text-red-900"
              x-data="{ show: true }"
              x-show="show"
              x-transition
              x-init="setTimeout(() => show = false, 2000)"
              role="alert">
              Permission Already Exists.
            </div>
        @endif


        @if (session('status') === 'Role-removed.')
        <div
              class="mb-2 rounded-lg bg-red-100 px-3 py-3 text-base font-bold text-red-900"
              x-data="{ show: true }"
              x-show="show"
              x-transition
              x-init="setTimeout(() => show = false, 2000)"
              role="alert">
              Role Removed Successfully.
            </div>
        @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                                <div class="flex flex-col p-2 bg-slate-100">
                    <div>User Name: {{ $user->name }}</div>
                    <div>Police Badge number: {{ $user->badgenumber }}</div>
                </div>
                <div class="mt-6 p-2 bg-slate-100">
                    <h2 class="text-2xl font-semibold">Roles</h2>
                    <div class="block text-sm font-medium text-gray-700">Please note that clicking on the role will enable delete functionality.</div>

                    <div class="flex space-x-2 mt-4 p-2">
                        @if ($user->roles)
                            @foreach ($user->roles as $user_role)
                                <form class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-red-200 rounded hover:bg-blue-200 focus:outline-none" method="POST"
                                    action="{{ route('ig.users.roles.remove', [$user->id, $user_role->id]) }}"
                                    onsubmit="return confirm('Are you sure you want to revoke this role for this user?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">{{ $user_role->name }}</button>
                                </form>
                            @endforeach
                        @endif
                    </div>
                    <div class="max-w-xl mt-6">
                        <form method="POST" action="{{ route('ig.users.roles', $user->id) }}">
                            @csrf
                            <div class="sm:col-span-6">
                                <label for="role" class="block text-sm font-medium text-gray-700">Roles</label>
                                <select id="role" name="role" autocomplete="role-name"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('role')
                                <span class="text-red-400 text-sm">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="sm:col-span-6 pt-5">
                        <button type="submit"
                            class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-green-200 rounded hover:bg-blue-200 focus:outline-none">Assign</button>
                    </div>
                    </form>
                </div>
                <div class="mt-6 p-2 bg-slate-100">
                    <h2 class="text-2xl font-semibold">Permissions</h2>
                    <div class="block text-sm font-medium text-gray-700">Please note that clicking on the permissions will enable delete functionality.</div>

                    <div class="flex space-x-2 mt-4 p-2">
                        @if ($user->permissions)
                            @foreach ($user->permissions as $user_permission)
                                <form class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-red-200 rounded hover:bg-blue-200 focus:outline-none" method="POST"
                                    action="{{ route('ig.users.permissions.revoke', [$user->id, $user_permission->id]) }}"
                                    onsubmit="return confirm('Are you sure you want to revoke this permission for this user?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">{{ $user_permission->name }}</button>
                                </form>
                            @endforeach
                        @endif
                    </div>
                    <div class="max-w-xl mt-6">
                        <form method="POST" action="{{ route('ig.users.permissions', $user->id) }}">
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
                            class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-green-200 rounded hover:bg-blue-200 focus:outline-none">Assign</button>
                    </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
    </div>
</x-ig-layout>

