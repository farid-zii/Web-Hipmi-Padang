@php
$kategori = App\models\Kategori::get();

@endphp
<div class="col-lg-4">

    <div class="sidebar">

        <h3 class="sidebar-title">Search</h3>
        <div class="sidebar-item search-form">
            <form action="" class="">
                <input type="text" name="cari" value="{{old('cari')}}">
                <button type="submit" style="background: rgb(16, 16, 16) !important"><i
                        class="bi bi-search"></i></button>
            </form>
        </div><!-- End sidebar search formn-->
        <h3 class="sidebar-title">Categories</h3>
        <div class="sidebar-item categories">
            <ul>
                @forelse ($kategori as $item)
                @php
                $berita = App\models\Berita::where('idKategori',$item->id)->count();
                @endphp
                <li><a href="/berita/{{$item->namaKategori}}">{{$item->namaKategori}} <span>({{$berita}})</span></a>
                </li>
                @empty
                Tidak Ada Data
                @endforelse

            </ul>
        </div><!-- End sidebar categories-->

        <h3 class="sidebar-title">Recent Posts</h3>
        <div class="sidebar-item recent-posts">
            @php
            $berita = app\models\Berita::get()->take(5);
            @endphp

            @forelse ($berita as $item)
            <div class="post-item clearfix">
                <img src="{{asset('backend/images/berita/'.$item->gambarBerita)}}" alt="">
                <h4><a href="blog-single.html">{{$item->judulBerita}}</a></h4>
                <time datetime="2020-01-01"></time>
            </div>
            @empty

            @endforelse

        </div><!-- End sidebar recent posts-->

        <h3 class="sidebar-title">Tags</h3>
        <div class="sidebar-item tags">
            <ul>
                @forelse ($kategori as $item)
                <li><a href="/berita/{{$item->namaKategori}}">{{$item->namaKategori}}</a></li>
                @empty

                @endforelse
            </ul>
        </div><!-- End sidebar tags-->
    </div><!-- End sidebar -->

</div>
