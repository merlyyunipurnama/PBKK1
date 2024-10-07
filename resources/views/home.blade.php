@extends('app')

@section('content')
    <!-- Slider Section -->
    <section id="home" class="slider_section">
        <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="{{ asset('images/banner2.jpg') }}" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>Inovasi <br> <strong class="black_bold">Pilihan</strong><br>
                                <strong class="yellow_bold">Terbaru </strong></h1>
                            <p>Jelajahi koleksi terbaru dari perangkat elektronik kami<br>
                            yang dirancang untuk meningkatkan pengalaman teknologi Anda.</p>
                            <a href="#ourproducts">lihat lebih banyak produk</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="{{ asset('images/banner2.jpg') }}" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>Inovasi <br> <strong class="black_bold">Pilihan</strong><br>
                                <strong class="yellow_bold">Terbaru </strong></h1>
                            <p>Jelajahi koleksi terbaru dari perangkat elektronik kami<br>
                            yang dirancang untuk meningkatkan pengalaman teknologi Anda.</p>
                            <a href="#ourproducts">lihat lebih banyak produk</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="{{ asset('images/banner2.jpg') }}" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>Inovasi <br> <strong class="black_bold">Pilihan</strong><br>
                                <strong class="yellow_bold">Terbaru </strong></h1>
                            <p>Jelajahi koleksi terbaru dari perangkat elektronik kami<br>
                            yang dirancang untuk meningkatkan pengalaman teknologi Anda.</p>
                            <a href="#ourproducts">lihat lebih banyak produk</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>

    <!-- Separator -->
    <hr class="section-separator">

    <!-- About Section -->
    <div id="about" class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>About</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="about_box">
                        <figure><img src="{{ asset('images/pc_layout.png') }}" alt="PC Layout"/></figure>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="about_box">
                        <h3 style="text-align: center;">Who is Lighten</h3>
                        <p style="text-align: center;">Selamat datang di Lighten, toko online elektronik yang menyediakan berbagai produk berkualitas untuk memenuhi kebutuhan teknologi Anda. Di Lighten, kami berkomitmen untuk menawarkan pilihan perangkat elektronik terbaru dan terbaik. Setiap produk kami dipilih dengan cermat untuk memastikan pelanggan mendapatkan nilai terbaik dengan harga yang kompetitif.</p>
                        <p style="text-align: center;">Kami memahami bahwa teknologi memainkan peran penting dalam kehidupan sehari-hari, dan itulah sebabnya kami hadir untuk memberikan solusi yang dapat diandalkan dan inovatif bagi setiap pengguna. Dengan pelayanan yang ramah dan sistem belanja yang mudah, Lighten adalah tempat yang tepat untuk memenuhi semua kebutuhan elektronik Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="whyschose">
        <div class="container">
            <div class="row">
                <div class="col-md-7 offset-md-3">
                    <div class="title">
                        <h2>Why <strong class="black">choose us</strong></h2>
                        <span>Layanan perbaikan tercepat harga terbaik!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="choose_bg">
        <div class="container">
            <div class="white_bg">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="for_box">
                            <i><img src="{{ asset('icon/1.png') }}" alt="Data recovery"/></i>
                            <h3>Data recovery</h3>
                            <p>Memulihkan data yang hilang atau rusak dari berbagai perangkat penyimpanan</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="for_box">
                            <i><img src="{{ asset('icon/2.png') }}" alt="Computer repair"/></i>
                            <h3>Computer repair</h3>
                            <p>Memperbaiki berbagai masalah pada komputer, baik perangkat keras maupun perangkat lunak</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="for_box">
                            <i><img src="{{ asset('icon/3.png') }}" alt="Mobile service"/></i>
                            <h3>Mobile service</h3>
                            <p>Memperbaiki berbagai masalah pada perangkat mobile seperti smartphone dan tablet</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="for_box">
                            <i><img src="{{ asset('icon/4.png') }}" alt="Network solutions"/></i>
                            <h3>Network solutions</h3>
                            <p>Menyediakan solusi untuk segala masalah yang berkaitan dengan jaringan komputer</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a class="read-more">Lebih lengkap</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Separator -->
    <hr class="section-separator">

    <!-- Products Section -->
    <div id="ourproducts" class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Products</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <br></br>
                    <span>Kami mengemas produk dengan layanan terbaik untuk membuat bahagia setiap pelanggan.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="product-bg">
        <div class="product-bg-white">
            <div class="container">
                <div class="row">
                    @php
                        $products = [
                            ['name' => 'USB Flash Drive', 'price' => 1226000],
                            ['name' => 'Audio Splitter', 'price' => 352000],
                            ['name' => 'External Hard Drive', 'price' => 659000],
                            ['name' => 'Power Strip', 'price' => 1027000],
                            ['name' => 'Wireless Router', 'price' => 659000],
                            ['name' => 'Bluetooth Speakers', 'price' => 1139000],
                            ['name' => 'Extension Cord', 'price' => 352000],
                            ['name' => 'Smart Plug', 'price' => 704000],
                        ];
                    @endphp
                    @foreach ($products as $i => $product)
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="product-box">
                                <i><img src="{{ asset('icon/p' . ($i + 1) . '.png') }}" alt="Product Image {{ $i + 1 }}"/></i>
                                <h3>{{ $product['name'] }}</h3>
                                <span>Rp{{ number_format($product['price'], 0, ',', '.') }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12">
                         </div>
                </div>
            </div>
        </div>
    </div>    

    <!-- Separator -->
    <hr class="section-separator">

    <!-- Contact Section -->
    <div id="contact" class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="main_form">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Nama" type="text" name="Your Name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Email" type="text" name="Email">
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" placeholder="Telphone" type="text" name="Phone">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Pesan"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="send">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection