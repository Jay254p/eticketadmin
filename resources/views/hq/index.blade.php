<x-hq-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inspector General') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold mb-4">Total Number Of Public Servants</h3>
                    <div class="text-3xl font-bold">{{ $totalUsers }}</div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold mb-4">Total Number Of Drivers</h3>
                    <div class="text-3xl font-bold">{{ $totalDrivers }}</div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold mb-4">Total Revenue</h3>
                    <div class="text-3xl font-bold">KSH {{ $revenue }}</div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold mb-4">Most Common Offence</h3>
                    <div class="text-3xl font-bold">{{ $mostCommonOffence->OffenceCommited  }} - {{$mostCommonOffence->total}} </div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold mb-4">Number Of Offences Per Day</h3>
                    <!-- Include your graph component or code here -->

                    <canvas id="offencesChart" width="800" height="400"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var chartData = @json($chartData);

    var ctx = document.getElementById('offencesChart').getContext('2d');
    var offencesChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: chartData.labels,
            datasets: [{
                label: 'Number of Offences',
                data: chartData.data,
                backgroundColor: 'rgba(0, 123, 255, 0.5)',
                borderColor: 'rgba(0, 123, 255, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Day'
                    }
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Number of Offences'
                    }
                }
            }
        }
    });
</script>

                </div>
            </div>
        </div>
    </div>
</x-hq-layout>
