<x-ig-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inspector General') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold mb-4">Download Offence CSV</h3>
                    <div class="text-sm font-bold"><a href="/ig/reports/offences">Download now</a>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold mb-4">Download Offencelists CSV</h3>
                    <div class="text-sm font-bold"><a href="/ig/reports/offencelists">Download now</a>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold mb-4">Download Receipts CSV</h3>
                    <div class="text-sm font-bold"><a href="/ig/reports/receipts">Download now</a>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold mb-4">Download Drivers CSV</h3>
                    <div class="text-sm font-bold"><a href="/ig/reports/drivers">Download now</a>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold mb-4">Download Transactions CSV</h3>
                    <div class="text-sm font-bold"><a href="/ig/reports/transactions">Download now</a>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold mb-4">Download Appeals CSV</h3>
                    <div class="text-sm font-bold"><a href="/ig/reports/appeals">Download now</a>
                    </div>
                </div>
                
            </div>
        </div>
    </x-ig-layout>