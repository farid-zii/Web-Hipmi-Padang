<div class="container row ">
    {{-- <div class="mb-2" style="">
        <input type="text" style="" wire:model="cari" placeholder="Cari ...">
    </div> --}}

    <div class="col-12 mt-2 mb-4 row">
    <div class="col-4 mx-4">
        <input type="text" wire:model="cari" class="form-control shadow" placeholder="Search...">
    </div>
    <div class="col-4">
        <select  wire:model="sektorId" class="form-control shadow" >
            <option value="">Pilih Sektor</option>
            @foreach ($sektor as $item )
                <option value="{{$item->id}}">{{$item->namaSektor}}</option>
            @endforeach
        </select>
    </div>
    </div>
    <hr>

    <div class="col-12 row portfolio-container">
        @forelse ($data as $item)
        <div class="col-lg-3 col-md-6 portfolio-item filter-{{$item->sektor->namaSektor}} " >
            <div class="portfolio-wrap" >
                <img src="{{asset('backend/images/logo-umkm/'.$item->logo)}}"  class="img-fluid mx-auto " alt="">
                <div class="portfolio-info">
                    <h4>{{$item->namaUsaha}}</h4>
                    <p>{{$item->sektor->namaSektor}}</p>
                    <div class="portfolio-links">
                        <a href="/umkm/{{$item->namaUsaha}}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="/umkm/{{$item->namaUsaha}}" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <h2 class="text-center">Tidak Ada Data</h2>
        @endforelse


    </div>

</div>
