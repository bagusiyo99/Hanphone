<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/m.jpg" class="img-carousel" alt="">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/m.jpg" class="img-carousel" alt="">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/m.jpg" class="img-carousel" alt="">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container my-5">
    <div class="text-center">
        <h4> About </h4>
    </div>
</div>
<section class="info mb-5">
    <div class="main-info">
        @foreach ($about as $item)
            <img src="/{{ $item->gambar }}">
            <div class="tulis">
                <h4>{{ $item->judul }}</h4>
                <h1>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1>
                <p>{{ $item->deskripsi }}
                </p>

            </div>
    </div>
    @endforeach
</section>

<div class="bg-success my-5">

    <div class="container my-5">
        <div class="text-center text-white">
            <h4> Pelajari lanjut </h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam magnam ducimus quam aliquid
                reprehenderit assumenda nobis facere nostrum odit accusantium delectus, obcaecati commodi voluptas
                dolorum unde eaque architecto deleniti totam!</p>
        </div>
    </div>
</div>






{{-- <div class="container mt-5">
    <div class="text-center">
        <h4> Blog </h4>
    </div>
</div> --}}

<div class="main">
    <h3 class="heading">Informasi</h3>
</div>
<div class="atur ">
    @foreach ($promo as $item)
        <div class="card-jurusan">
            <div class="card-image">
                <a href="#">
                    <img src="/{{ $item->gambar }}">
                </a>
            </div>
            <div class="card-description">
                <h3>{{ $item->judul }}</h3>
                <p>{!! Str::limit($item->deskripsi, 70) !!}</p>
                <a href="#">Detail</a>
            </div>
        </div>
    @endforeach
</div>
<nav aria-label="Page navigation example">
    <div class="d-flex justify-content-center mt-3">
        {{ $promo->links() }}
    </div>


</nav>



{{-- 
    <section id="blog">
        @foreach ($about as $item)
            <div class="blog-box">
                <div class="blog-img">
                    <img src="/{{ $item->gambar }}">
                </div>
                <div class="blog-detail">
                    <h4>{{ $item->judul }}</h4>
                    <p>{{ $item->deskripsi }}</p>
                    <a href="/about">Lanjutkan Membaca</a>
                </div>

            </div>
        @endforeach
    </section>
 --}}



<div class="main">
    <h3 class="heading">Informasi</h3>
</div>
<section class="blog">
    @foreach ($about as $item)
        <div class="blog-box">
            <div class="blog-img">
                <img src="/{{ $item->gambar }}">
            </div>
            <div class="blog-detail mb-3">
                <h3>{{ $item->judul }}</h3>
                <p> {!! Str::limit($item->deskripsi, 170) !!}</p>
                <a href="/xiomi/detail/{{ $item->id }}">Detail</a>
            </div>
        </div>
    @endforeach
</section>
