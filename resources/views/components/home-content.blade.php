{{-- Carousel Section --}}
<div id="carouselExampleIndicators" class="carousel slide mb-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="bg-primary text-white text-center py-5" style="height: 400px; display: flex; align-items: center; justify-content: center;">
                <div>
                    <h2 class="display-4 mb-3">Selamat Datang</h2>
                    <p class="lead">Platform terbaik untuk kebutuhan Anda</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="bg-success text-white text-center py-5" style="height: 400px; display: flex; align-items: center; justify-content: center;">
                <div>
                    <h2 class="display-4 mb-3">Produk Terbaru</h2>
                    <p class="lead">Temukan produk berkualitas tinggi</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="bg-danger text-white text-center py-5" style="height: 400px; display: flex; align-items: center; justify-content: center;">
                <div>
                    <h2 class="display-4 mb-3">Layanan Unggulan</h2>
                    <p class="lead">Solusi terbaik untuk bisnis Anda</p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

{{-- Grid Produk Section --}}
<div class="container py-5">
    <h2 class="text-center mb-5">Produk Kami</h2>
    <div class="row g-4">

        {{-- 1. LOOPING DIMULAI --}}
        @foreach ($products ?? [] as $product)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    {{-- 2. TAMPILKAN DATA DINAMIS --}}
                    <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['title'] }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $product['title'] }}</h5>
                        <p class="card-text text-muted">{{ $product['description'] }}</p>
                        <a href="#" class="btn {{ $product['button_class'] }} btn-sm">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- 3. LOOPING SELESAI --}}

    </div>
</div>

{{-- Grid Layanan Section --}}
<div class="container py-5 bg-light">
    <h2 class="text-center mb-5">Layanan Kami</h2>
    <div class="row g-4">
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <svg width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                    </div>
                    <h5 class="card-title">Layanan 1</h5>
                    <p class="card-text text-muted small">Deskripsi layanan pertama yang memberikan solusi terbaik.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <svg width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                    </div>
                    <h5 class="card-title">Layanan 2</h5>
                    <p class="card-text text-muted small">Deskripsi layanan kedua yang memberikan solusi terbaik.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="bg-danger text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <svg width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                    </div>
                    <h5 class="card-title">Layanan 3</h5>
                    <p class="card-text text-muted small">Deskripsi layanan ketiga yang memberikan solusi terbaik.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="bg-warning text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <svg width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                    </div>
                    <h5 class="card-title">Layanan 4</h5>
                    <p class="card-text text-muted small">Deskripsi layanan keempat yang memberikan solusi terbaik.</p>
                </div>
            </div>
        </div>
    </div>
</div>

