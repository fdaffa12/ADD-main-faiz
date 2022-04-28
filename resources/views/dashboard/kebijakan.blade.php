<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RPP - Beranda</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">


    <link rel="shortcut icon" href="{{$setting->image}}" type="image/x-icon" />
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('assets/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/main/bootstrap.bundle.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->


    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!-- /theme JS files -->

    <style>
    .hero {
        max-inline-size: 100%;
        block-size: auto;
        aspect-ratio: 2/1;
        object-fit: cover;
        object-position: top center;
    }
    </style>

</head>

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-expand-xl navbar-dark navbar-static px-0 bg-primary">
        <div class="d-flex flex-1 pl-3">
            <div class="navbar-brand wmin-0 mr-1">
                <a href="{{url('/')}}" class="d-inline-block">
                    <img src="{{asset($setting->image)}}" class="d-none d-sm-block d-sm-none" alt=""
                        style="height:50px; margin-top:-15px; margin-bottom:-50px; margin-left:60px">
                    <img src="{{asset($setting->image)}}" class="d-sm-none" alt=""
                        style="height:35px; margin-top:-40px; margin-bottom:-40px;">
                </a>
            </div>
        </div>

        <div
            class="d-flex w-100 w-xl-auto overflow-auto overflow-xl-visible scrollbar-hidden border-top border-top-xl-0 order-1 order-xl-0">
            <ul class="navbar-nav navbar-nav-underline flex-row text-nowrap mx-auto">
                <li class="nav-item">
                    <a href="{{url('/')}}" class="navbar-nav-link active">
                        <i class="icon-home2 mr-2"></i>
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('dashboard-dev')}}" class="navbar-nav-link">
                        <i class="icon-city mr-2"></i>
                        Katalog Produk
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{('/')}}" class="navbar-nav-link">
                        <i class="icon-cube3 mr-2"></i>
                        Profil
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('/')}}" class="navbar-nav-link">
                        <i class="icon-notebook mr-2"></i>
                        Kontak
                    </a>
                </li>
            </ul>
        </div>

        <div class="d-flex flex-xl-1 justify-content-xl-end order-0 order-xl-1 pr-3">

        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                <!-- Page header -->
                <div class="page-header">
                    <div class="page-header-content container header-elements-md-inline">
                        <div class="page-title">
                            <h4 class="font-weight-semibold">KEBIJAKAN PRIVASI</h4>
                        </div>
                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content container pt-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">1. KEBIJAKAN KAMI TENTANG PERLINDUNGAN INFORMASI PRIBADI</h5>
                                    <p>Melindungi informasi pribadi Anda sangatlah penting bagi ADD Property. (“ADD
                                        PROPERTY” atau “kami”) dan perusahaan properti (ADD PROPERTY dan Properti
                                        bersama disebut sebagai “ADD PROPERTY Group”). Kebijakan privasi ini (“Kebijakan
                                        Privasi”) dimaksudkan untuk memberi tahu cara ADD PROPERTY mengumpulkan,
                                        menggunakan, dan membaagikan informasi pribadi Anda.
                                        Kami menangani informasi pribadi ini sesuai dengan undang-undang, peraturan, dan
                                        panduan yang berlaku mengenai perlindungan informasi pribadi, dan sesuai dengan
                                        norma dan aturan yang diterima secara umum mengenai hal yang sama.
                                        Undang-undang dan peraturan tidak mewajibkan Anda memberikan informasi pribadi
                                        Anda kepada kami. Namun, harap perhatikan bahwa jika Anda memilih untuk tidak
                                        memberikan informasi pribadi Anda kepada kami, kami mungkin tidak dapat
                                        memberikan layanan kepada Anda. Perlu diketahui bahwa, meskipun kami menangani
                                        informasi pribadi berdasarkan izin dari Anda, izin tersebut berhak untuk ditarik
                                        kapan saja, meskipun penarikan izin tidak akan memengaruhi keabsahan penanganan
                                        informasi pribadi berdasarkan izin sebelum ditarik.
                                    </p>
                                    <h5 class="card-title">2. TUJUAN PENGGUNAAN INFORMASI PRIBADI ANDA</h5>
                                    <p>Kami hanya akan menggunakan informasi pribadi Anda sejauh diperlukan
                                        guna
                                        memenuhi tujuan berikut:
                                    <p class="ml-4">1. Untuk memberikan produk atau layanan;</p>
                                    <p class="ml-4">2. Untuk memberikan informasi tentang produk atau layanan;</p>
                                    <p class="ml-4">3. Untuk mengirimkan pesan iklan ADD PROPERTY; dan</p>
                                    <p class="ml-4">4. Untuk merespons pertanyaan Anda, dsb.</p>
                                    </p>
                                    <h5 class="card-title">3. JENIS INFORMASI PRIBADI, DSB., YANG KAMI PEROLEH MELALUI
                                        SITUS WEB KAMI</h5>
                                    <p>Saat Anda mengakses situs web kami di perangkat Anda, server kami akan secara
                                        otomatis mengumpulkan informasi yang dihasilkan oleh browser- atau perangkat-
                                        tertentu (yang disebut “file log server”), termasuk informasi berikut:
                                    <p class="ml-4">• tanggal dan waktu akses </p>
                                    <p class="ml-4">• durasi kunjungan </p>
                                    <p class="ml-4">• sistem operasi Anda</p>
                                    <p class="ml-4">• volume data yang dikirim </p>
                                    <p class="ml-4">• jenis akses </p>
                                    <p class="ml-4">• Alamat IP </p>
                                    <p class="ml-4">• nama domain </p>
                                    <p class="ml-4">• informasi browser, termasuk versi dan pengaturan bahasa </p>
                                    Informasi yang dikumpulkan akan dianalisis tanpa mengidentifikasi individu yang
                                    memberikan informasi. Informasi hanya digunakan untuk tujuan memberikan layanan
                                    di situs web, meningkatkan kepuasan pelanggan, dan memastikan operasi teknis
                                    yang tepat agar kami dapat menyelidiki dan menghilangkan kegagalan fungsi.
                                    Melalui formulir kontak yang dapat Anda isi di situs web kami untuk memberikan
                                    pertanyaan maupun komentar, kami mengumpulkan informasi pribadi berikut:
                                    <p class="ml-4">• nama Anda </p>
                                    <p class="ml-4">• alamat email Anda </p>
                                    <p class="ml-4">• isi pesan Anda </p>
                                    <p class="ml-4">• perusahaan tempat Anda bekerja dan departemen </p>
                                    <p class="ml-4">• alamat Anda atau alamat perusahaan tempat Anda bekerja </p>
                                    <p class="ml-4">• nomor telepon Anda </p>
                                    <p class="ml-4">• tanggal dan waktu pesan </p>
                                    <p class="ml-4">• Alamat IP </p>
                                    Informasi pribadi yang dikumpulkan tidak akan diungkapkan kepada pihak ketiga
                                    eksternal. Kami hanya akan menggunakan informasi pribadi ini untuk membalas
                                    pertanyaan Anda sesegera mungkin. Jika tidak, kami hanya akan menggunakannya
                                    jika kami telah menerima izin khusus dari Anda.
                                    Situs web kami juga menggunakan cookie. Untuk mempelajari selengkapnya tentang
                                    cookie, silakan buka Kebijakan Cookie terpisah kami.
                                    </p>
                                    <h5 class="card-title">4. MASA PENYIMPANAN INFORMASI PRIBADI ANDA</h5>
                                    <p>Kami hanya akan mengelola informasi pribadi Anda selama jangka waktu yang
                                        dibutuhkan untuk mematuhi kewajiban hukum kami yang relevan dan untuk
                                        menjalankan operasional bisnis yang tepat.</p>
                                    <h5 class="card-title">5. PENYEDIAN INFORMASI PRIBADI KEPADA PIHAK KETIGA</h5>
                                    <p>Aturannya, informasi pribadi tidak akan secara otomatis diungkapkan kepada pihak
                                        ketiga, kecuali jika informasi dibagikan seperti yang diuraikan di atas. Meski
                                        demikian, jika kami diwajibkan oleh undang-undang dan peraturan, proses litigasi
                                        dan hukum di dalam atau di luar negara tempat tinggal Anda, atau permintaan dari
                                        otoritas publik dan pemerintahan, dan/atau jika kami menganggap bahwa
                                        pengungkapan tersebut diperlukan atau sesuai untuk tujuan keamanan nasional,
                                        penegakan hukum, maupun masalah kepentingan umum lainnya, kami mungkin perlu
                                        mengungkapkan informasi pribadi Anda.
                                        Selain itu, kami dapat mengungkapkan informasi pribadi Anda jika kami
                                        menganggap, dengan iktikad baik, bahwa pengungkapan tersebut secara masuk akal
                                        diperlukan untuk melindungi hak dan kepentingan kami, serta untuk mencari solusi
                                        yang tersedia, untuk menegakkan syarat dan ketentuan kami, untuk menyelidiki
                                        penipuan, atau untuk melindungi operasional maupun pengguna kami.
                                    </p>
                                    <h5 class="card-title">6. TINDAKAN KEAMANAN</h5>
                                    <p>Kami menangani informasi pribadi Anda dengan cara yang secara tepat memastikan
                                        keamanannya (termasuk perlindungan terhadap penanganan tanpa izin atau melawan
                                        hukum, kehilangan yang tidak disengaja, penghancuran, maupun kerusakan). Selain
                                        itu, kami menggunakan tindakan teknis atau organisasi yang sesuai, yang
                                        dirancang untuk melindungi informasi pribadi Anda secara efektif, dan kami
                                        mengintegrasikan tindakan perlindungan ke dalam peraturan perusahaan guna
                                        mencapai tingkat perlindungan ini.
                                        Sebagai contoh, situs web kami diamankan secara kriptografis dengan menggunakan
                                        enkripsi Secure Socket Layer (SSL). Enkripsi ini memastikan data ditransfer
                                        dengan aman antar browser dan server, jadi jika browser Anda tidak kompatibel
                                        dengan teknologi enkripsi SSL, silakan unduh browser terbaru yang kompatibel.
                                        Jika alamat diawali dengan “https://”, ini menunjukkan bahwa situs web
                                        menggunakan teknologi enkripsi SSL.
                                        Kami akan menyimpan informasi Anda selama jangka waktu yang dibutuhkan untuk
                                        memenuhi tujuan yang ditetapkan dalam Kebijakan Privasi ini, kecuali jika jangka
                                        waktu penyimpanan yang lebih lama diwajibkan atau diizinkan oleh undang-undang
                                        dan peraturan.
                                    </p>
                                    <h5 class="card-title">7. PEMBERITAHUAN PELANGGARAN INFORMASI PRIBADI</h5>
                                    <p>Jika terjadi pelanggaran keamanan di mana informasi pribadi Anda dikirimkan
                                        secara eksternal, disimpan, atau tidak ditangani akibat penghancuran,
                                        kehilangan, perubahan yang tidak disengaja atau melanggar hukum, pengungkapan
                                        atau akses tanpa izin ke informasi, kami memiliki sejumlah mekanisme dan
                                        peraturan perusahaan yang berlaku untuk mengenali dan menyelidiki kejadian
                                        dengan cepat. Tergantung pada hasil penilaian, jika terjadi insiden semacam
                                        kebocoran, kami akan mengambil tindakan yang sesuai dalam kondisi tersebut,
                                        seperti membuat laporan kepada otoritas pengawas dan menghubungi individu yang
                                        mungkin terdampak.</p>
                                    <h5 class="card-title">8. PERMINTAAN PELANGGAN YANG TERKAIT DENGAN INFORMASI PRIBADI
                                    </h5>
                                    <p>Berkenaan dengan informasi pribadi Anda yang dikumpulkan oleh ADD PROPERTY, Anda
                                        dapat meminta item berikut sejauh yang diizinkan oleh undang-undang dan
                                        peraturan yang berlaku. Jika Anda ingin meminta item berikut, silakan hubungi
                                        contact person di Bagian 13 dari Kebijakan Privasi ini. ADD PROPERTY akan
                                        mempertimbangkan permintaan Anda berdasarkan undang-undang dan peraturan yang
                                        berlaku, dan akan meresponsnya dengan tepat.
                                    <p class="ml-4">1. Akses ke informasi pribadi Anda: Anda berhak untuk mendapatkan
                                        konfirmasi
                                        dari kami mengenai apakah informasi pribadi Anda sedang ditangani, dan, jika
                                        memang demikian, Anda dapat meminta pengungkapan informasi pribadi dan informasi
                                        terkait tertentu seperti tujuan penanganan dan kategori informasi pribadi yang
                                        dimaksud. </p>
                                    <p class="ml-4">2. Perbaikan dan penghapusan informasi pribadi Anda: Jika Anda
                                        memandang bahwa
                                        informasi pribadi tentang diri Anda tidak akurat, Anda dapat mengirim permintaan
                                        kepada ADD PROPERTY untuk memperbaiki, menambahkan, atau menghapus informasi
                                        pribadi.</p>
                                    <p class="ml-4">3. Penangguhan penggunaan dan penghapusan informasi pribadi Anda:
                                        Jika ADD
                                        PROPERTY menangani informasi pribadi Anda secara ilegal, Anda dapat meminta ADD
                                        PROPERTY untuk menangguhkan penggunaan informasi pribadi Anda, atau untuk
                                        menghapus informasi pribadi Anda.</p>
                                    <p class="ml-4">4. Petisi untuk otoritas pengawasan: Jika ADD PROPERTY tidak
                                        bertindak dengan
                                        iktikad baik, Anda dapat mengajukan keluhan kepada kami melalui otoritas
                                        pengawasan yang relevan.</p>
                                    </p>
                                    <h5 class="card-title">9. INFORMASI PRIBADI ANAK-ANAK</h5>
                                    <p>Kami tidak secara sadar mengumpulkan dan menangani informasi mengenai anak-anak
                                        sehubungan dengan operasional bisnis kami. Meski demikian, jika Anda menyadari
                                        bahwa kami telah mengumpulkan dan menangani informasi dari seorang anak, kami
                                        akan merespons dengan tepat sesuai dengan undang-undang dan peraturan yang
                                        berlaku.</p>
                                    <h5 class="card-title">10. TAUTAN KE SITUS WEB DAN LAYANAN PIHAK KETIGA LAINNYA</h5>
                                    <p>Kami mungkin memberikan tautan hypertext dari situs web ADD PROPERTY ke situs web
                                        maupun sumber Internet pihak ketika, sebagaimana ditunjukkan di bawah untuk
                                        tujuan ilustrasi. Karena kami belum memeriksa kebijakan privasi dari pihak
                                        ketiga dan konten tertentu di setiap tautan, kami tidak bertanggung jawab atas
                                        konten tersebut. Harap baca dengan saksama masing-masing kebijakan privasi
                                        tersebut guna mencari tahu bagaimana mereka mengumpulkan dan menangani informasi
                                        pribadi Anda.
                                        Google Maps (sebagai contoh)
                                        Pada beberapa halaman web dari Situs web, kami menggunakan API Google Maps yang
                                        disediakan oleh Google LLC, 1600 Amphitheatre Parkway, Mountain View, CA 94043,
                                        USA (“Google”). Layanan ini memungkinkan kami menunjukkan kepada kami lokasi
                                        kantor kami untuk kemudahan Anda mengakses.
                                        Saat Google Maps disematkan dalam halaman web, alamat IP Anda dikirim langsung
                                        ke Google tidak lama setelah Anda mengunjungi halaman web, dan cookie disimpan.
                                        Anda bisa mendapatkan informasi tentang, dan menghentikan, penanganan data oleh
                                        Google kapan saja di: <a
                                            href="https://policies.google.com/privacy?hl=id&gl=de">https://policies.google.com/privacy?hl=id&gl=de
                                            .</a>
                                        Jika Anda tidak setuju data Anda dikirim ke Google saat menggunakan Google
                                        Maps
                                        di masa mendatang, Anda juga memiliki opsi untuk menonaktifkan sepenuhnya
                                        layanan web Google Maps dengan mematikan JavaScript di browser Anda. Ini
                                        akan
                                        menonaktifkan sepenuhnya tampilan Google Maps di situs web Anda.
                                    </p>
                                    <h5 class="card-title">11. PEMBARUAN TERHADAP KEBIJAKAN PRIVASI</h5>
                                    <p>Kami akan memperhatikan semua undang-undang, peraturan, panduan, dan standar
                                        lainnya yang berlaku, yang terkait dengan penanganan informasi pribadi Anda, dan
                                        akan secara berkala meninjau dan meningkatkan Kebijakan Privasi ini. Setiap
                                        perubahan terhadap Kebijakan Privasi akan berlaku setelah Kebijakan Privasi yang
                                        telah direvisi diposting di Situs web.</p>
                                    <h5 class="card-title">12. KONTAK</h5>
                                    <p>Jika ada pertanyaan seputar informasi pribadi yang kami tangani, silakan hubungi
                                        staf perlindungan informasi pribadi kami melalui formulir pertanyaan di bawah.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /content area -->


                <!-- Footer -->
                <div class="content container pt-0">
                    <div class="navbar navbar-expand-lg navbar-light border-bottom-0 border-top">
                        <div class="navbar-collapse collapse" id="navbar-footer">
                            <span class="navbar-text">
                                &copy; 2020 - 2021. <a href="#">Rudi Prima Persada</a>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /footer -->

            </div>
            <!-- /inner content -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->
</body>

</html>