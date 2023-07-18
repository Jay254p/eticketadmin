<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl font-bold mb-4">Appeals Assigned to You</h2>

                    @if ($appeals->count() > 0)
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Ticket ID</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Time Of Hearing</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Court Number</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Verdict</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($appeals as $appeal)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $appeal->TicketId }}</td>
                                        {{-- <td class="px-6 py-4 whitespace-no-wrap">{{ $appeal->offence->OffenceCommited }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $appeal->offence->DriverCarRegNo }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $appeal->offence->PlaceOfOffence }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $appeal->offence->created_at }}</td> --}}
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $appeal->time }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $appeal->roomnumber }}</td>

                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $appeal->status }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $appeal->verdict }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">

                                            @if ($appeal->status === 'Closed')
                <span class="text-red-600 font-bold">Closed</span>
            @else
                <a href="{{ route('judge.appeal.show', $appeal->id) }}" class="inline-block px-4 py-2 leading-none border rounded bg-blue-500 text-white hover:bg-blue-600">Show More</a>
            @endif
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No appeals assigned to you.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
