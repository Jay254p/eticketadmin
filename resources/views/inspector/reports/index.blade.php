<x-inspector-layout>
        <div class="py-12 w-full">

    @if (session('status') === 'driver-reported')
    <div
          class="mb-2 rounded-lg bg-red-100 px-3 py-3 text-base font-bold text-red-900"
          x-data="{ show: true }"
          x-show="show"
          x-transition
          x-init="setTimeout(() => show = false, 2000)"
          role="alert">
          Driver Reported Successfully
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

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">

                
                <div class="flex flex-col mt-4">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">

                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Ticket ID</th>
                                                <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Licence Number</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Offence Type</th>
                                                <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Time Of Offence</th>
                                                <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Place Of Offence</th>                                               
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($offences as $offence)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        {{ $offence->TicketId}}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        {{ $offence->DriverLicenceNumber}}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        {{ $offence->OffenceCommited }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        {{ $offence->created_at }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        {{ $offence->PlaceOfOffence }}
                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-inspector-layout>