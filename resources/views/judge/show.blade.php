<!-- Show all possible information about the appeal -->
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl font-bold mb-4">Appeal Details</h2>
                    <p>Ticket ID: {{ $appeal->TicketId }}</p>
                    <p>Driver icense Number: {{ $appeal->licencenumber }}</p>
                    <p>Inspector Badge Number: {{ $appeal->badgenumber }}</p>
                    <p>Time of Hearing: {{ $appeal->time }}</p>
                    <p>Court Number: {{ $appeal->roomnumber }}</p>
                    <p>Status: {{ $appeal->status }}</p>
                    <p>Verdict: {{ $appeal->verdict }}</p>

                    {{-- If there is an associated Offence with this Appeal, display its details --}}
                    @if ($appeal->offence)
                        <h3 class="text-xl font-bold mt-4">Associated Offence Details</h3>
                        <p>Offence Committed: {{ $appeal->offence->OffenceCommited }}</p>
                        <p>Car Reg Number: {{ $appeal->offence->DriverCarRegNo }}</p>
                        <p>Place of Offence: {{ $appeal->offence->PlaceOfOffence }}</p>
                        <p>Time of Offence: {{ $appeal->offence->created_at }}</p>
                        {{-- Add more details of the associated Offence here if needed --}}
                    @endif


                    @if ($driverOffencesHistory->count() > 0)
                        <h3 class="text-xl font-bold mt-4">{{ $appeal->licencenumber }}'s Offenses History</h3>
                        <table class="min-w-full divide-y divide-gray-200 mt-2">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Offence Committed</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Car Reg Number</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Place of Offence</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Time of Offence</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action Taken</th>
                            </tr>                            
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($driverOffencesHistory as $offence)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $offence->OffenceCommited }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $offence->DriverCarRegNo }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $offence->PlaceOfOffence }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $offence->created_at }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap">

                                    @php
                                    // Check if the TicketId exists in the appeals table
                                        $isAppealed = \App\Models\Appeal::where('TicketId', $offence->TicketId)->first();
                                    @endphp
                                    @if ($isAppealed)
                                    <span class="text-red-500 font-semibold">Appealed</span>
                                @else
                                @php
                                    $stkPush = \App\Models\STKPush::where('TicketId', $offence->TicketId)->first();
                                @endphp
                                @if ($stkPush)
                                    <span class="text-green-500 font-semibold">Fine Paid</span>
                                @endif
                                @endif
                                    </tr>                                
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>{{ $appeal->licencenumber }} has no offence.</p>
                    @endif

                    <h2 class="text-xl font-bold mt-6 mb-3">Edit Appeal</h2>
        <a href="{{ route('judge.appeal.edit', $appeal->id) }}" class="text-blue-500">Edit Appeal</a>
                    {{-- Add more appeal details or actions here based on your application's requirements --}}
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>
