<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-5">
                    {{ __('Create Module') }}
                </h2>
                <form action="">
                    @csrf
                    <div class="mb-2">
                        <x-jet-label for="module" value="{{ __('Module name') }}" />
                        <x-jet-input id="module" class="block mt-1 w-full" type="text" name="name" :value="old('module')" required autofocus />
                    </div>
                    <div class="mb-2">
                        <x-jet-label for="description" value="{{ __('Module description') }}" />
                        <textarea name="description" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    // $('#table-moduls').DataTable( {
    //     ajax: 'http://127.0.0.1:8000/api/get-module',
    //     columns: [
    //         { data: 'id' },
    //         { data: 'name'},
    //         { data: 'description'},
    //         { data: 'id', render: function (dataField) { return '<a href="edit-module/' + dataField + '" class="">Edit</a> || <a href="delete-modul/' + dataField + '">Delete</a>'; } }
    //     ]
    // } );
</script>
