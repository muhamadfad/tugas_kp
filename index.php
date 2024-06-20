<?php
include 'config.php';
if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $asal = $_POST['asal'];
    $tanggal = $_POST['tanggal'];
    $pesan = $_POST['pesan'];

    $sql_kirim = "INSERT INTO saran VALUES ('', '$nama', '$asal', '$tanggal', '$pesan')";
    $query = mysqli_query($koneksi, $sql_kirim);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Beranda | Dinas Pengendalian Penduduk dan KB</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css?v">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;800&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <!-- header top section start -->
    <div class="header_top_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="header_top_main">
                        <div class="call_text"><a style="font-family:'Times New Roman', Times, serif;"><i
                                    class="fa fa-phone" aria-hidden="true"></i>
                                0851-4552-2224</a></div>
                        <div class="call_text_2"><a><i class="fa fa-envelope" aria-hidden="true"></i>
                                dppkbkotakendari.go.id</a></div>
                        <div class="call_text_1"><a><i class="fa fa-map-marker" aria-hidden="true"></i> Jl.
                                Sultan Qaimuddin No.17</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header top section start -->
    <!-- header section start -->
    <div class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="logo"><a href="index.php"><img
                            src="images/logo_dp2kb_2.png" width="290px"></a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Tentang Kami <i class="fas fa-caret-down"></i></a>
                            <div class="dropdown-content">
                                <a href="sejarah.php">SEJARAH</a>
                                <a href="visimisi.php">VISI MISI</a>
                                <a href="struktur.php">STRUKTUR</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="layanan.php">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="fasilitas.php">Fasilitas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="berita.php">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pengumuman.php">Pengumuman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="agenda.php">Agenda</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="banner_taital_main">
                                        <h1 class="banner_taital">DP2KB </h1>
                                        <h1 class="banner_taital">KOTA KENDARI</h1>
                                        <p class="banner_text">Selamat Datang di Website <br> Dinas Pengendalian Penduduk dan Keluarga Berencana
                                            <br> Kota Kendari</p>
                                        <div class="btn_main">
                                            <div class="started_text active"
                                                style="font-weight:bold; font-family: 'Times New Roman', Times, serif;">
                                                <a>NPP :
                                                    7471032B2000001</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- header section end -->

    <!-- about sectuion start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-md-6 mt-3 mb-4">
                    <h1 class="about_taital">Sekilas DPPKB</h1>
                    <p class="about_text text-justify">Dinas Pengendalian Penduduk dan Keluarga Berencana (KB) Kota Kendari bertugas melaksanakan program pengendalian pertumbuhan penduduk dan peningkatan kualitas keluarga. Kami berkomitmen untuk menyediakan layanan KB yang berkualitas dan edukasi kesehatan reproduksi bagi masyarakat, guna mewujudkan keluarga sejahtera dan berencana di Kota Kendari. Melalui kolaborasi dengan berbagai pihak, kami terus berupaya meningkatkan kesadaran dan partisipasi aktif masyarakat dalam program keluarga berencana.
                    </p>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="about_img" onclick="showVideo()">
                        <div class="video_overlay">
                            <div class="play_icon"><img src="images/play-icon.png" alt="Play Video"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mt-3">
                    <img src="images/Sambutan.png" alt="Kepala Perpustakaan IAIN Kendari">
                </div>
                <div class="col-md-8">
                    <h1 class="about_taital">Sambutan Kepala Dinas</h1>
                    <p class="about_text text-justify">Selamat Datang di
                        <span style="font-weight : bold; color: #0b2d0b;">Dinas Pengendalian Penduduk dan Keluarga 
                        Berencana Kota Kendari</span><br>
                        Selamat datang di website resmi Dinas Pengendalian Penduduk dan Keluarga 
                        Berencana Kota Kendari. Kami berkomitmen untuk memberikan pelayanan terbaik 
                        dalam pengendalian penduduk dan program keluarga berencana demi mewujudkan 
                        keluarga sejahtera di Kota Kendari. Melalui inovasi, edukasi, dan kolaborasi
                        dengan berbagai pihak, kami berupaya meningkatkan kualitas hidup masyarakat
                        dan menciptakan lingkungan yang mendukung kesejahteraan keluarga. 
                        Semoga website ini dapat menjadi sumber informasi yang bermanfaat dan
                        mendukung partisipasi aktif masyarakat dalam program-program yang kami jalankan. 
                        Terima kasih atas kunjungan Anda.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- about sectuion end -->

    <!-- services section start -->
    <div class="services_section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="services_taital">Layanan Perpustakaan</h1>
                    <p class="services_text_1">
                    <div class="col-sm-12">
                        <p class="services_text_1">Layanan perpustakaan menyediakan akses ke berbagai koleksi buku,
                            majalah, jurnal, dan sumber daya lainnya</p>
                    </div>
                    </p>
                </div>
            </div>
            <div class="services_section_2">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="box_main">
                            <div class="service_img"><img src="images/icon-1.png"></div>
                            <h4 class="development_text">OPAC</h4>
                            <p class="services_text">Sistem katalog terpasang yang dapat diakses secara
                                umum dan dapat dipakai pengguna untuk menelusuri data katalog.</p>
                            <div class="readmore_bt"><a target="_blank"
                                    href="https://simpus.iainkendari.ac.id/index.php?search=ogojpspvy&page=1">Selengkapnya.
                                    . .</a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="box_main">
                            <div class="service_img"><img src="images/icon-2.png"></div>
                            <h4 class="development_text">E-Jurnal</h4>
                            <p class="services_text">Pada layanan e-jurnal, IAIN Kendari menyediakan akses ke jurnal
                                yang dipublikasikan oleh fakultas yang berada di IAIN Kendari.</p>
                            <div class="readmore_bt"><a target="_blank"
                                    href="https://ejournal.iainkendari.ac.id/">Selengkapnya. . .</a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="box_main">
                            <div class="service_img"><img src="images/icon-3.png"></div>
                            <h4 class="development_text">i-Pusnas</h4>
                            <p class="services_text">iPusnas merupakan wujud inovasi perpustakaan digital yang
                                diluncurkan secara gratis oleh Perpustakaan Nasional RI.
                            </p>
                            <div class="readmore_bt"><a target="_blank" href="https://ipusnas.id/">Selengkapnya. . .</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="box_main">
                            <div class="service_img"><img src="images/icon-4.png"></div>
                            <h4 class="development_text">Management</h4>
                            <p class="services_text">fact that a reader will be distracted by the readable content of a
                                page when looking at its layout. The point of using L</p>
                            <div class="readmore_bt"><a target="_blank" href="#">Selengkapnya. . .</a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="box_main">
                            <div class="service_img"><img src="images/icon-4.png"></div>
                            <h4 class="development_text">Management</h4>
                            <p class="services_text">fact that a reader will be distracted by the readable content of a
                                page when looking at its layout. The point of using L</p>
                            <div class="readmore_bt"><a target="_blank" href="#">Selengkapnya. . .</a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="box_main">
                            <div class="service_img"><img src="images/icon-4.png"></div>
                            <h4 class="development_text">Management</h4>
                            <p class="services_text">fact that a reader will be distracted by the readable content of a
                                page when looking at its layout. The point of using L</p>
                            <div class="readmore_bt"><a target="_blank" href="#">Selengkapnya. . .</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- services section end -->

    <!-- projects section start -->
    <div class="projects_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="projects_taital">Pusat Informasi</h1>
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <ul class="nav" data-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#berita" data-toggle="tab">Berita</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pengumuman" data-toggle="tab">Pengumuman</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#agenda" data-toggle="tab">Agenda</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="projects_section_2 layout_padding">
            <div class="container">
                <div class="tab-content">
                    <div class="tab-pane active" id="berita">
                        <div class="pets_section">
                            <div class="pets_section_2">
                                <div id="berita_slider" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <!-- <div class="col-md-4">
                                                    <div class="container_main">
                                                        <img src="images/img-1.png" alt=""
                                                            style="border-radius: 5% 5% 0% 0%;" class="image">
                                                        <div class="overlay">
                                                            <div class="text">
                                                                <h4 class="some_text"><i class="fa fa-link"
                                                                        aria-hidden="true"></i></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="project_main">
                                                        <div style="font-family: Arial, Helvetica, sans-serif; font-size:smaller"
                                                            class="text-grey mb-2">Ricky Aryansah • 21 April 2024</div>

                                                        <h2 class="work_text">Berita</h2>
                                                        <p class="dummy_text">Konten berita...</p>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="pengumuman">
                        <div class="pets_section">
                            <div class="pets_section_2">
                                <div id="berita_slider" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <!-- <div class="col-md-4">
                                                    <div class="container_main">
                                                        <img src="images/img-1.png" alt=""
                                                            style="border-radius: 5% 5% 0% 0%;" class="image">
                                                        <div class="overlay">
                                                            <div class="text">
                                                                <h4 class="some_text"><i class="fa fa-link"
                                                                        aria-hidden="true"></i></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="project_main">
                                                        <div style="font-family: Arial, Helvetica, sans-serif; font-size:smaller"
                                                            class="text-grey mb-2">Ricky Aryansah • 21 April 2024</div>
                                                        <h1 class="work_text">Pengumuman</h1>
                                                        <p class="dummy_text">Konten pengumuman...</p>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="agenda">
                        <div class="pets_section">
                            <div class="pets_section_2">
                                <div id="berita_slider" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <!-- <div class="col-md-4">
                                                    <div class="container_main">
                                                        <img src="images/img-1.png" alt=""
                                                            style="border-radius: 5% 5% 0% 0%;" class="image">
                                                        <div class="overlay">
                                                            <div class="text">
                                                                <h4 class="some_text"><i class="fa fa-link"
                                                                        aria-hidden="true"></i></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="project_main">
                                                        <div style="font-family: Arial, Helvetica, sans-serif; font-size:smaller"
                                                            class="text-grey mb-2">Ricky Aryansah • 21 April 2024</div>
                                                        <h2 class="work_text">Agenda</h2>
                                                        <p class="dummy_text">Konten agenda...</p>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- projects section end -->

    <!-- testimonial section start -->
    <div class="testimonial_section layout_padding">
        <div class="container">
            <div id="costum_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="testimonial_taital">Apa Kata Mereka?</h1>
                                <div class="testimonial_section_2">
                                    <h2 class="client_name_text">Molik <span style="float: right;"><img
                                                src="images/quick-icon.png"></span></h2>
                                    <p class="textimonial_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                        esse cillum dolore eu fugia</p>
                                </div>
                                <div class="testimonial_section_2">
                                    <h2 class="client_name_text"><img src="images/quick-icon.png"> <span
                                            style="float: right;">jeaanson</span></h2>
                                    <p class="textimonial_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                        esse cillum dolore eu fugia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="testimonial_taital">Apa Kata Mereka?</h1>
                                <div class="testimonial_section_2">
                                    <h2 class="client_name_text">Molik <span style="float: right;"><img
                                                src="images/quick-icon.png"></span></h2>
                                    <p class="textimonial_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                        esse cillum dolore eu fugia</p>
                                </div>
                                <div class="testimonial_section_2">
                                    <h2 class="client_name_text"><img src="images/quick-icon.png"> <span
                                            style="float: right;">jeaanson</span></h2>
                                    <p class="textimonial_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                        esse cillum dolore eu fugia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="testimonial_taital">Apa Kata Mereka?</h1>
                                <div class="testimonial_section_2">
                                    <h2 class="client_name_text">Molik <span style="float: right;"><img
                                                src="images/quick-icon.png"></span></h2>
                                    <p class="textimonial_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                        esse cillum dolore eu fugia</p>
                                </div>
                                <div class="testimonial_section_2">
                                    <h2 class="client_name_text"><img src="images/quick-icon.png"> <span
                                            style="float: right;">jeaanson</span></h2>
                                    <p class="textimonial_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                        esse cillum dolore eu fugia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#costum_slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#costum_slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- testimonial section end -->
    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="contact_taital">Saran & Masukan</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="contact_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <form action="index.php" method="post">
                            <div class="mail_section_1">
                                <input type="text" class="mail_text" placeholder="Nama Lengkap" name="nama" required>
                                <input type="text" class="mail_text" placeholder="Asal Prodi/Instansi" name="asal"
                                    required>
                                <input type="date" class="mail_text" name="tanggal" id="tanggalInput"
                                    placeholder="Tanggal" readonly required>

                                <script>
                                var tanggalInput = document.getElementById("tanggalInput");

                                var today = new Date().toISOString().split('T')[0];

                                tanggalInput.value = today;
                                </script>


                                <textarea class="massage-bt" placeholder="Saran dan Masukan" rows="5" id="comment"
                                    name="pesan"></textarea>
                                <div class="send_bt justify-content-end">
                                    <button type="submit" name="kirim">KIRIM!</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 padding_left_15">
                        <div class="contact_img"><img src="images/Kontak.png" style="border-radius: 3%;" width="714px"
                                height="535px"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map_main">
            <div class="map-responsive">
                <iframe
                    src="
https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.1391222012358!2d122.52793127029804!3d-3.991798387101625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d988d3fd32105d7%3A0xe9b1aac2c5e0fc38!2sDinas%20Pengendalian%20Penduduk%20dan%20Keluarga%20Berencana%20Kota%20Kendari!5e0!3m2!1sen!2sid!4v1718692248991!5m2!1sen!2sid"

                    width="600" height="600" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
    <!-- contact section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <div class="location_text mb-3">
                        <img src="images/Iain.png" width="120px">
                    </div>
                </div>
            </div>
            <div class="footer_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="useful_text">Dinas Pengendalian Penduduk dan Keluarga Berencana <br> Kota Kendari</h2>
                        <p class="lorem_text">Kambu, Kota Kendari, Sulawesi Tenggara,  93231</p>
                        <p class="lorem_text mt-3" style="font-weight: bold;">NPP : 7471032B2000001</p>
                    </div>
                    <div class="col-md-3">
                        <h2 class="useful_text">Link Terkait</h2>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="http://iainkendari.ac.id" target="_blank">IAIN Kendari</a></li>
                                <li><a href="https://simpus.iainkendari.ac.id/" target="_blank">Digilib IAIN Kendari</a>
                                </li>
                                <li><a href="https://repository.iainkendari.ac.id/" target="_blank">Repository IAIN
                                        Kendari</a></li>
                                <li><a href="https://www.perpusnas.go.id/" target="_blank">Perpustakaan Nasional RI</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer_menu mt-5">
                            <ul>
                                <li><a href="https://sia.iainkendari.ac.id/" target="_blank">Sistem Informasi Akademik
                                        (SIA)</a></li>
                                <li><a href="https://simpeg.iainkendari.ac.id/login" target="_blank">Sistem Informasi
                                        Kepegawaian</a>
                                </li>
                                <li><a href="https://kkn.iainkendari.ac.id/" target="_blank">KKN IAIN Kendari</a>
                                </li>
                                <li><a href="http://rumahsurvei.iainkendari.ac.id/" target="_blank">Rumah Survey</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="social_icon">
                        <ul>
                            <li>
                                <a href="https://www.instagram.com/perpustakaaniainkendari" target="_blank"><i
                                        class="fab fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li class="ml-1 mr-1">
                                <a href="https://www.facebook.com/UPT.PerpustakaanIAINKendari" target="_blank"><i
                                        class="fab fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/@perpustakaaniainkendari848" target="_blank"><i
                                        class="fab fa-youtube" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p class="copyright_text">Copyright © 2024 UPT. Perpustakaan IAIN Kendari</p>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <script>
    function showVideo() {
        var videoUrl = "https://www.youtube.com/embed/57dtj7KPOfQ"; // Ganti dengan URL video YouTube yang sesuai
        var iframe = document.createElement("iframe");
        iframe.setAttribute("src", videoUrl);
        iframe.setAttribute("width", "560");
        iframe.setAttribute("height", "380");
        iframe.setAttribute("frameborder", "0");
        iframe.setAttribute("allowfullscreen", "");

        var videoContainer = document.querySelector(".about_img");
        videoContainer.innerHTML = "";
        videoContainer.appendChild(iframe);
    }
    </script>

</body>

</html>