<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-dark h4">Data {{$judul}}</h4>
    </div>

    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    {{-- <th class="table-plus datatable-nosort">Name</th> --}}
                    <th>#</th>
                    <th>Nama</th>
                    <th>Action</th>
                    {{-- <th class="datatable-nosort">Action</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($jabatan as $index=>$item )
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$item->namaJabatan}}</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">Edit</a>
                        <a onclick="hapus({{$item->id}})" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>
