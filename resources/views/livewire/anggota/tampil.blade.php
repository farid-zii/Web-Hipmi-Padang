<div class="container my-4">
    <div class="row">
        <div class="col-4">
            <input type="text" class="form-control" wire:model="cari" placeholder="Search...">
        </div>
        <div class="col-4">
            <select type="text" class="form-control" wire:model="idDivisi" placeholder="Search...">
                <option value="">Pilih Divisi</option>
                @foreach ($divisi as $item )
                <option value="{{$item->id}}">{{$item->namaDivisi}}</option>
                @endforeach
            </select>
        </div>

    </div>
    <hr>
    <div class="row justify-content-center">
        @forelse ($data as $item  )
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
                <div class="member-img">
                    {{-- @if (!$data->ketumfoto)
                            <img src="{{asset('backend/images/foto-anggota/foto.jpg')}}" class="img-fluid" width="100%"
                    alt="">
                    @endif --}}
                    <img src="{{asset('backend/images/foto-anggota/'.$item->foto)}}" class="img-fluid" width="100%"
                        alt="">
                    <div class="social">
                        <div class="d-flex"></div>
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info text-center">
                    <h4>{{$item->nama}}</h4>
                    <span style="font-weight: bolder; color:gray;">{{$item->divisi->namaDivisi}}</span>
                </div>
            </div>
        </div>
        @empty
        Tidak Ada Anggota
        @endforelse

        <div>{{$data->links()}}</div>
    </div>

</div>
