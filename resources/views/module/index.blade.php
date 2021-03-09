<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-5">
                    {{ __('Skenario Case') }}
                </h2>
                <a href="{{ route('create-module') }}" class="bg-indigo-500 text-white font-bold py-2 px-4 rounded">Create</a><br />
                <table id="table-moduls" class="table-auto">
                    <thead>
                        <tr>
                            <th data-priority="1">No</th>
                            <th data-priority="2">Module name</th>
                            <th data-priority="3">Description</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody id="moduls">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    var numbering = 1;
    $('#table-moduls').DataTable( {
        ajax: 'http://127.0.0.1:8000/api/get-module',
        columns: [
            { data: 'id' },
            { data: 'name'},
            { data: 'description'},
            { data: 'id', render: function (dataField) { return '<a href="edit-module/' + dataField + '" class="">Edit</a> || <a href="delete-modul/' + dataField + '">Delete</a>'; } }
        ]
    } );
    // $(function(){
        // var $moduls = $('#moduls');
        // $.ajax({
        //     type: 'GET',
        //     url: 'http://127.0.0.1:8000/api/get-module',
        //     success: function(moduls) {
        //         var data = moduls.data;
        //         var trtd_modul = '';
        //         var number = 1;
        //         $.each(data, function(i, data){
        //             trtd_modul += "<tr>";
        //             trtd_modul += "<td>" + number++ + "</td>";
        //             trtd_modul += "<td>" + data.name + "</td>";
        //             trtd_modul += "<td>" + "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat modi animi sequi expedita accusamus quidem suscipit voluptatibus praesentium ducimus sapiente at harum, ab quo provident dignissimos totam corporis iste nisi!" + "</td>";
        //             trtd_modul += "<td>" + '<a href="">Edit</a> || <a href="">Delete</a>' + 
        //             "</td></tr>";
        //             document.getElementById('moduls').innerHTML = trtd_modul;
        //         });
        //     }
        // });
    // });
</script>
