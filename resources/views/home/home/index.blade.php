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
    <h3 class="heading">Promo</h3>
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
                <a href="/detail/{{ $item->id }}">Detail</a>
            </div>
        </div>
    @endforeach
</div>
<nav aria-label="Page navigation example  bg-success">
    <div class="d-flex justify-content-center mt-3">
        {{ $promo->links() }}
    </div>


</nav>






<div class="main">
    <h3 class="heading">Informasi</h3>
</div>
<main class="container">

    <div class="p-4 p-md-5 mb-4 text-white rounded bg-success">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                efficiently about what’s most interesting in this post’s contents.</p>
            <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
        </div>
    </div>

    <div class="row mb-2">
        @foreach ($promo as $item)
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-3">Featured post</h3>
                        <p class="card-text mb-4">This is a wider card with supporting text below as a natural
                            lead-in to
                            additional content.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="/{{ $item->gambar }}">

                    </div>
                </div>

            </div>
        @endforeach

    </div>
</main>

{{-- <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success">Design</strong>
                <h3 class="mb-0">Post title</h3>
                <div class="mb-1 text-muted">Nov 11</div>
                <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to
                    additional content.</p>
                <a href="#" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                    role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                    focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                        fill="#eceeef" dy=".3em">Thumbnail</text>
                </svg>

            </div>
        </div>
    </div> --}}
