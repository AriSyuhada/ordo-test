<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
        
    </head>
    <body class="antialiased">
        {{-- Nav --}}
        <nav>
            <img class="nav-logo" src="/images/gwk-logo.png" alt="gwk-logo">
            <div class="navigations">
                <h3>Homepage</h3>
                <h3>Tentang</h3>
                <h3>Daftar Hotel</h3>
                <h3>Bantuan</h3>
            </div>
            <div class="locale">
                <img class="locale-flag" src="/images/indonesia.png" alt="locale-flag">
                <h3>Indonesia ( ID )</h3>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="chevron-down">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </div>
        </nav>

        {{-- Header --}}
        <div class="header">
            <div class="header-label">
                <div class="label-point"></div>
                <h3>HOTEL OPERATOR</h3>
            </div>
            <h1>Membantu Menjalankan Operasi Bisnis Pariwisata Anda</h1>
            <h2>GWA membantu mengoperasikan keseluruhan layanan hotel, menajadikan mitra lebih percaya diri dalam menjalankan bisnis.</h2>
            <button>
                <p>Konsultasikan Bisnis Saya</p>
            </button>
            <div class="scroll-label">
                <p>Scroll</p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="arrow-right">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>                  
            </div>
            <img class="office-image" src="/images/office-image.png" alt="office-image">
        </div>

        <div class="section-1">
            <div class="header-label">
                <div class="label-point"></div>
                <h3>OUR WORKFLOW</h3>
            </div>
            <h2>Proses Kerja Kami dalam<br>Meningkatkan Kualitas Properti</h2>
            <div class="workflows-container">
                {{-- Tantangan --}}
                <div class="workflow-wrapper">
                    <div class="icon-wrapper">
                        <img src="/images/flag.png" alt="flag">
                    </div>
                    <h4>Tantangan</h4>
                    <p>Setiap property memiliki<br>tantangan tersendiri dan GWA<br>sangat memahami hal tersebut.</p>
                </div>
                {{-- Rumusan --}}
                <div class="workflow-wrapper">
                    <div class="icon-wrapper">
                        <img src="/images/scroll.png" alt="scroll">
                    </div>
                    <h4>Rumusan</h4>
                    <p>Setiap tantangan akan dirumuskan<br>menjadi sebuah hal yang harus dicari<br>jalan keluarnya oleh kami</p>
                </div>
                {{-- Goals --}}
                <div class="workflow-wrapper">
                    <div class="icon-wrapper">
                        <img src="/images/bullseye.png" alt="bullseye">
                    </div>
                    <h4>Goals</h4>
                    <p>Dari rumusan masalah, kami memberikan<br>respon cepat dan jalan keluar jangka<br>pendek - menengah - panjang.</p>
                </div>
                {{-- Ideas --}}
                <div class="workflow-wrapper">
                    <div class="icon-wrapper">
                        <img src="/images/stars.png" alt="stars">
                    </div>
                    <h4>Ideas</h4>
                    <p>Setiap rumusan menjadikan ide-ide<br>kreatif bagi kami untuk meningkatkan<br>kualitas property mitra.</p>
                </div>
            </div>
        </div>

        {{-- Section 2 --}}
        <div class="section-2">
            <div class="header-label">
                <div class="label-point"></div>
                <h3>OUR SERVICES</h3>
            </div>
            <h2>Apa Saja yang Bisa Kami Bantu ?</h2>
            <div class="card-container">
                {{-- Revenue --}}
                <div class="card">
                    <img class="card-illustration" src="/images/chart.png" alt="chart.png">
                    <p class="card-label">Revenue<br>Management Service</p>
                    <button>
                        <p>Saya Tertarik</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="arrow-right">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </button>
                    <p class="card-number">01</p>
                </div>
                {{-- Manage --}}
                <div class="card">
                    <img class="card-illustration" src="/images/list.png" alt="list.png">
                    <p class="card-label">Full Manage<br>Service</p>
                    <button>
                        <p>Saya Tertarik</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="arrow-right">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </button>
                    <p class="card-number">02</p>
                </div>
                {{-- Asset --}}
                <div class="card">
                    <img class="card-illustration" src="/images/bricks.png" alt="bricks.png">
                    <p class="card-label">Asset Monetize<br>Service</p>
                    <button>
                        <p>Saya Tertarik</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="arrow-right">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </button>
                    <p class="card-number">03</p>
                </div>
            </div>
        </div>

        {{-- Section 3 --}}
        <div class="section-3">
            <div class="header-label">
                <div class="label-point"></div>
                <h3>OUR LATEST PROJECTS</h3>
                <div class="label-point"></div>
            </div>
            <h2>Project Terbaru Kami</h2>
            <div class="projects">
                <div class="carousel-buttons-wrapper">
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="chevron-left">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="chevron-right">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
                <div class="project-content-wrapper">
                    <p class="project-completion">1/4 OPERATIONAL PROJECT</p>
                    <p class="project-name">Townhouse Oak</p>
                    <p class="project-renowned">Brand tertinggi di OYO</p>
                </div>
                <div class="details-button-wrapper">
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="chevron-right">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                    <p>Lihat Detail</p>
                </div>
            </div>
        </div>

        {{-- Section 4 --}}
        <div class="section-4">
            <div class="testimonials-layout">
                <div class="header-label">
                    <div class="label-point"></div>
                    <h3>OUR TESTIMONIALS</h3>
                </div>
                <h2>Yang Klien Kami Katakan</h2>
                <div class="testimonials-content">
                    <img src="/images/quote.png" alt="quote">
                    <h4>GWA Group membantu hotel<br>saya untuk menjangkau lebih banyak<br>client dan memberikan saran<br>monetisasi yang tidak pernah saya<br>bayangkan sebelumnya</h4>
                </div>
                <div class="testimonials-user">
                    <img src="/images/yello.png" alt="yello">
                    <div class="user-details-wrapper">
                        <p class="user-name">Chaim Desmon</p>
                        <p class="user-position">CEO of Yellow Hotel</p>
                    </div>
                </div>
            </div>
            <div class="testimonials-layout">
                <img src="/images/employee.png" alt="employee">
                <div class="chevrons-float-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="chevron-left">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="chevron-right">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- Section 5 --}}
        <div class="section-5">
            <div class="contact-layout">
                <div class="contact-content">
                    <div class="header-label">
                        <div class="label-point"></div>
                        <h3>HUBUNGI KAMI</h3>
                    </div>
                    <h2>Ingin Mendiskusikan<br>Bisnis Pariwisata Anda ?</h2>
                    <div class="border-stroke"></div>
                    <p>Ada kepentingan bisnismu yang ingin<br>didikusikan dengan kami, yuk segera isi form<br>disamping, konsultasinya gratis kok !</p>
                </div>
            </div>
            <div class="contact-layout">
                <div class="contact-card">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" name="name" id="name" placeholder="Masukkan Nama Lengkap">
                    <label for="company">Nama Perusahaan</label>
                    <input type="text" name="company" id="company" placeholder="Masukkan Nama Perusahaan">
                    <label for="whatsapp">Nomor Whatsapp Aktif</label>
                    <input type="text" name="whatsapp" id="whatsapp" placeholder="Masukkan Nomor Whatsapp">
                    <button>
                        <p>Jadwalkan Konsultasi</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="arrow-right">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        {{-- Footer --}}
        <div class="footer">
            <img class="nav-logo" src="/images/gwk-logo.png" alt="gwk-logo">
            <div class="footer-nav">
                <div class="nav-wrapper">
                    <h2>Halaman Utama</h2>
                    <h3>Homepage</h3>
                </div>
                <div class="nav-wrapper">
                    <h2>Perusahaan</h2>
                    <h3>Tentang Kami</h3>
                    <h3>Daftar Hotel</h3>
                </div>
                <div class="nav-wrapper">
                    <h2>Temukan Kami</h2>
                    <h3>Bantuan</h3>
                    <h3>Hubungi Kami</h3>
                </div>
                <div class="nav-wrapper">
                    <h2>Halaman Utama</h2>
                    <div class="social-media-wrapper">
                        <img src="/images/facebook.png" alt="facebook">
                        <img src="/images/youtube.png" alt="youtube">
                        <img src="/images/instagram.png" alt="instagram">
                    </div>
                </div>
            </div>
            <div class="border-stroke"></div>
            <div class="policy-language-wrapper">
                <div class="policy-wrapper">
                    <a href="#">Pemberitahuan Privasi</a>
                    <a href="#">Syarat dan Ketentuan</a>
                </div>
                <div class="language-wrapper">
                    <img src="/images/language-square.png" alt="language-square">
                    <div class="language-dropdown">
                        <p>Bahasa Indonesia</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="chevron-down">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </div>
                </div>
            </div>
            <h4>&#169; 2023 Graha Wisata Kita | PT Graha Wisata Kita Tbk.</h4>
        </div>
    </body>
</html>
