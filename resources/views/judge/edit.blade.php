<!-- edit.blade.php -->

<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl font-bold mb-4">Edit Appeal</h2>

                    <form action="{{ route('judge.appeal.update', $appeal->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="verdict" class="block text-sm font-medium text-gray-700">Verdict</label>
                            <input type="text" name="verdict" id="verdict" value="{{ old('verdict', $appeal->verdict) }}" class="form-input mt-1 block w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <select name="status" id="status" class="form-select mt-1 block w-full" required>
                                <option value="Ongoing" @if(old('status', $appeal->status) === 'Ongoing') selected @endif>Ongoing</option>
                                <option value="Closed" @if(old('status', $appeal->status) === 'Closed') selected @endif>Closed</option>
                            </select>
                        </div>
                        

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Appeal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
