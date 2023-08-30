<?php
include_once('html_structure.php');
open_page('Beranda - Pantai Pasir Putih Parparean', 'index');
navigasi();
close_page();
?>


<!--Main Navigation-->
<header>

    <!--Mask-->
    <div id="intro" class="view">

        <div class="mask rgba-black-strong">

            <div class="container-fluid d-flex align-items-center justify-content-center h-100">

                <div class="row d-flex justify-content-center text-center">

                    <div class="col-md-10">

                        <!-- Heading -->
                        <h2 class="display-4 font-weight-bold white-text pt-5 mb-2 animated fadeInUp" id="title">Pantai Pasir Putih Parparean</h2>

                        <!-- Divider -->
                        <hr class="hr-light">

                        <!-- Description -->
                        <h4 class="white-text my-4 animated fadeInUp" id="desc">Pantai Pasir Putih Parparean adalah objek wisata yang terletak di Desa Parparean II, Kecamatan Porsea, Kabupaten Toba Samosir.</h4>

                        <button type="button" class="btn btn-outline-white tombol-read"><a href="#sejarah">Read more<i class="fa fa-book ml-2"></i></a></button>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!--/.Mask-->

</header>
<!--Main Navigation-->

<!--Main layout-->
<main class="mt-5">
    <div class="container">

        <!--Section: Best Features-->
        <section id="sejarah" class="text-center">

            <!-- Heading -->
            <h2 class="mb-5 font-weight-bold sejarah--part1">Sejarah</h2>

            <!--Grid row-->
            <div class="row d-flex justify-content-center mb-4">

                <!--Grid column-->
                <div class="col-md-8">

                    <!-- Description -->
                    <p class="grey-text sejarah--part2">
                        Pantai Pasir Putih Parparean berada di Desa Parparean II (dua). Desa ini terletak di Kecamatan Porsea,
                        Kabupaten Toba, Sumatera Utara. Awalnya, pantai ini ditutupi oleh semak-belukar dengan kondisi pantai yang jorok
                        dan berlumpur serta rumah-rumah penduduk. Dengan kondisi pantai tersebut dan belum dieksplorasi lebih dalam lagi membuat objek wisata ini
                        tidak dikenal oleh wisatawan. Namun, pada tahun 2007 warga sekitar yang bertempat tinggal di sekitar lokasi pantai tersebut mulai mengembangkan potensi
                        dari Pantai Pasir Putih Parparean dengan melakukan kegiatan pembersihan area pantai serta pembangunan usaha wisata di lokasi pantai.
                        Dengan adanya usaha pengembangan objek wisata dari masyarakat lokal secara terus menerus sehingga membuat pantai ini dilirik oleh Pemkab Tobasa
                        dan sejak saat itulah objek wisata ini mulai dikenal oleh wisatawan lokal dan non-lokal.
                    </p>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-4 mb-5 keterangan--part1">
                    <i class="fa fa-camera-retro fa-4x orange-text"></i>
                    <h4 class="my-4 font-weight-bold">Selfie</h4>
                    <p class="grey-text"> Pantai Pasir Putih Parparean juga menawarkan tiga keindahan dalam satu tempat,
                        yakni untuk menikmati sunset, sunrise, dan lanskap pantai secara menyeluruh. Hal ini menjadi suatu
                        surga bagi traveler yang mencarinya.
                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-1 keterangan--part2">
                    <i class="fa fa-heart fa-4x orange-text"></i>
                    <h4 class="my-4 font-weight-bold">Bersantai</h4>
                    <p class="grey-text">Lembutnya pasir pantai dan suara deru ombak dapat menyejukkan hati siapapun yang singgah di tempat ini.
                        Menikmatinya dapat dengan diri sendiri, pacar, ataupun keluarga menjadikan Pasir Putih Parparean sebuah tempat
                        yang nyaman untuk menenangkan diri.
                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-1 keterangan--part3">
                    <i class="fas fa-swimmer fa-4x fa-rotate-180 fa-flip-horizontal"></i>
                    <h4 class="my-4 font-weight-bold">Olahraga</h4>
                    <p class="grey-text">Selain menyimpan keindahannya, Pasir Putih Parparean juga dapat menjadi tempat
                        wisatawan untuk berolahraga baik olahraga darat dan air seperti bermain voli, <i>jogging</i> dan
                        polo air.
                    </p>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Best Features-->

        <hr class="my-5">

        <!--Section: Examples-->
        <section id="examples" class="text-center">

            <!-- Heading -->
            <h2 class="mb-5 font-weight-bold galeri--1">Galeri</h2>

            <!--Grid row-->
            <div class="row">
                <?php
                require_once("koneksi.php");
                $query = mysqli_query($db, "SELECT * FROM galeri ORDER BY id_galeri DESC LIMIT 3");
                while ($data = mysqli_fetch_array($query)) :
                ?>
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4 zoom-effect">


                        <div class="view overlay z-depth-1-half kotak">
                            <img class="img-fluid" src="galeri/<?php echo $data['gambar'] ?>">
                        </div>

                        <h4 class="my-4 font-weight-bold"><?php echo $data['judul'] ?></h4>
                        <p class="grey-text"><?php echo $data['deskripsi'] ?></p>

                    </div>
                    <!--Grid column-->
                <?php endwhile ?>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <?php
                require_once("koneksi.php");
                $query = mysqli_query($db, "SELECT * FROM galeri ORDER BY id_galeri ASC LIMIT 3");
                while ($data = mysqli_fetch_array($query)) :
                ?>
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4 zoom-effect">

                        <div class="view overlay z-depth-1-half kotak">
                            <img class="img-fluid" alt="" src="galeri/<?php echo $data['gambar'] ?>">
                        </div>

                        <h4 class="my-4 font-weight-bold"><?php echo $data['judul'] ?></h4>
                        <p class="grey-text"><?php echo $data['deskripsi'] ?></p>

                    </div>
                    <!--Grid column-->
                <?php endwhile ?>

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Examples-->

        <hr class="my-5">

        <!--Section: Gallery-->
        <section id="gallery">

            <!-- Heading -->
            <h2 class="mb-5 font-weight-bold text-center postingan--1">Postingan Terbaru</h2>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <?php
                    require_once("koneksi.php");
                    $query = mysqli_query($db, "SELECT * FROM berita ORDER BY tanggal DESC");
                    $data = mysqli_fetch_array($query);
                    ?>

                    <!--Carousel Wrapper-->
                    <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-fade" data-ride="carousel">
                        <!--Slides-->
                        <div class="carousel-inner z-depth-1-half" role="listbox">
                            <!--First slide-->
                            <div class="carousel-item active">
                                <img class="d-block w-100 gambar--1" alt="First slide" src="admin/img/berita/<?php echo $data['gambar'] ?>">
                            </div>
                        </div>
                        <!--/.Slides-->
                    </div>
                    <!--/.Carousel Wrapper-->
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 ket--berita1">

                    <?php
                    require_once("koneksi.php");
                    $query = mysqli_query($db, "SELECT * FROM berita ORDER BY tanggal DESC LIMIT 1");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <!--Excerpt-->
                        <a href="#" class="teal-text">
                            <h6 class="pb-1"><i class="fa fa-heart"></i><strong> <?php echo $data['tag'] ?> </strong></h6>
                        </a>
                        <h4 class="mb-3"><strong><?php echo $data['judul'] ?></strong></h4>
                        <p><?php echo substr($data["isi"], 0, 520) . '...' ?></p>

                        <p>by <a><strong>Author &mdash; <?php echo $data['author'] ?></strong></a>, <?php echo $data['tanggal'] ?>.</p>
                        <a class="btn btn-primary btn-md text-light" href="single-post.php?id=<?php echo $data['id_berita'] ?>">Read more</a>
                    <?php } ?>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Gallery-->

        <hr class="my-5">


        <section id="contact">

            <!-- Heading -->
            <h2 class="mb-4 font-weight-bold text-center peta--1" id="peta">How to <strong>#Reach</strong> there?</h2>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-6 col-md-12 isi-peta1">

                    <p class="text-dark text-justify">
                        <li class="text-dark text-justify">Pantai Pasir Putih Parparean adalah objek wisata yang terletak di Desa Parparean II, Kecamatan Porsea, Kabupaten Toba Samosir. </li>
                        <li class="text-dark text-justify">Apabila pengunjung berangkat dari kota Porsea menuju ke pantai jarak yang ditempuh ±3 km.</li>
                        <li class="text-dark text-justify">Pantai Pasir Putih Parparean memiliki nomor lokasi pantai sebanyak 3 lokasi pantai.</li>
                        <li class="text-dark text-justify">Jika kita menggunakan angkutan umum pengunjung umumnya diantarkan hanya sampai di simpang Desa Parparean II. Hal ini terjadi karena adanya biaya parkir apabila telah sampai di pantai tersebut.</li>
                        <li class="text-dark text-justify">Untuk beberapa supir dari angkutan umum<span class="text-info font-weight-bold"> mereka juga menerima tawaran untuk mengantarkan pengunjung hingga ke lokasi pantai namun dengan biaya tambahan.</span></li>
                    </p>

                    <p class="text-dark text-justify">
                        <a class="btn btn-primary btn-md text-light" href="peta.php">Lebih lengkapnya..</a>
                    </p>

                </div>
                <!--Grid column-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 gambar-peta">

                        <!--Google map-->
                        <div id="map-container" class="z-depth-1-half map-container mb-5">
                            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15944.900424110567!2d99.149081!3d2.4318413!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4329e9a7d027afb0!2sPantai%20Pasir%20Putih%20Parparean!5e0!3m2!1sid!2sid!4v1589881902892!5m2!1sid!2sid" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>

                    </div>
                    <!--Grid column-->

                </div>
            </div>
            <!--Grid row-->

        </section>


    </div>
</main>
<!--Main layout-->
<section>

</section>

<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 400);
            return false;
        });
    });
</script>

<a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>


<!-- Footer -->
<footer class="page-footer font-small bg-dark">

    <!-- Social buttons -->
    <div class="bg-primary text-light">
        <div class="container">
            <!--Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!--Grid column-->
                <div class="col-md-6 col-lg-5 text-center mb-4 mb-md-0 mx-auto">
                    <h6 class="mb-0 white-text">We <i class="fas fa-heart text-danger"></i> Pasir Putih Parparean</h6>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </div>
    </div>
    <!-- Social buttons -->

    <!--Footer Links-->
    <div class="container mt-5 mb-4 text-center text-md-left text-white">
        <div class="row mt-3">

            <!--First column-->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Pasir Putih Parparean</strong>
                </h6>
                <hr class="bg-light accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><em>"Surga yang tersembunyi dibalik kota Porsea.
                        Halusnya pasir pantai, deru ombak, dan lanskap
                        pantai menyejukkan hati siapapun yang mengunjunginya."
                    </em></p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Quick Links</strong>
                </h6>
                <hr class="bg-light accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="fasilitas.php">Fasilitas</a>
                </p>
                <p>
                    <a href="berita.php">Berita</a>
                </p>
                <p>
                    <a href="peta.php">Peta</a>
                </p>
                <p>
                    <a href="about_us.php">Developer</a>
                </p>
            </div>
            <!--/.Second column-->

            <!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Contact</strong>
                </h6>
                <hr class="bg-light accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fas fa-map-marker-alt mr-3"></i></i><a href="https://www.google.com/maps?ll=2.431841,99.149081&z=14&t=m&hl=id&gl=ID&mapclient=embed&cid=4839656181547380656" class="text-light" target="_blank"> Parparean II, Porsea, Toba, Sumatera Utara</a></p>
                <p>
                    <i class="fa fa-envelope mr-3"></i><a href="mailto:developer.pasput@gmail.com" title="kirim email ke Admin" class="text-light"> Hubungi Admin</a></p>
                <p>
                    <i class="fa fa-phone mr-3"></i><a href="tel:+62 812 6979  2933" class="text-light"> +62 812 6979 2933</p>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 bg-dark text-light">Copyright © <?php echo date('Y'); ?> All Rights Reserved |
        <a href="#" class="text-primary"> Kelompok 06 PA 1 - IT Del</a> <i class="fas fa-heart text-danger"></i>
    </div>
    <!-- Copyright -->

</footer>


<!-- Footer -->


<script>
    // var waypoint = new Waypoint({
    //     element: document.getElementById('basic-waypoint'),
    //     handler: function() {
    //         notify('Basic waypoint triggered')
    //     },
    //     offset: 20
    // });

    $(document).ready(function() {
        $('.sejarah--part1').waypoint(function(direction) {
            $('.sejarah--part1').addClass('animated fadeInUp')
        }, {
            offset: '60%'
        })
    });

    $(document).ready(function() {
        $('.sejarah--part2').waypoint(function(direction) {
            $('.sejarah--part2').addClass('animated fadeInLeft')
        }, {
            offset: '50%'
        })
    });

    $(document).ready(function() {
        $('.keterangan--part1').waypoint(function(direction) {
            $('.keterangan--part1').addClass('animated fadeInLeft')
        }, {
            offset: '55%'
        })
    });
    $(document).ready(function() {
        $('.keterangan--part2').waypoint(function(direction) {
            $('.keterangan--part2').addClass('animated fadeInLeft')
        }, {
            offset: '45%'
        })
    });
    $(document).ready(function() {
        $('.keterangan--part3').waypoint(function(direction) {
            $('.keterangan--part3').addClass('animated fadeInLeft')
        }, {
            offset: '35%'
        })
    });

    $(document).ready(function() {
        $('.postingan--1').waypoint(function(direction) {
            $('.postingan--1').addClass('animated fadeInUp')
        }, {
            offset: '50%'
        })
    });

    $(document).ready(function() {
        $('.gambar--1').waypoint(function(direction) {
            $('.gambar--1').addClass('animated fadeInLeft')
        }, {
            offset: '40%'
        })
    });

    $(document).ready(function() {
        $('.ket--berita1').waypoint(function(direction) {
            $('.ket--berita1').addClass('animated fadeInRight')
        }, {
            offset: '40%'
        })
    });


    $(document).ready(function() {
        $('.peta--1').waypoint(function(direction) {
            $('.peta--1').addClass('animated fadeInRight')
        }, {
            offset: '50%'
        })
    });

    $(document).ready(function() {
        $('.isi-peta1').waypoint(function(direction) {
            $('.isi-peta1').addClass('animated fadeInLeft')
        }, {
            offset: '40%'
        })
    });

    $(document).ready(function() {
        $('.gambar-peta').waypoint(function(direction) {
            $('.gambar-peta').addClass('animated fadeInRight')
        }, {
            offset: '35%'
        })
    });
</script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ee39c07862ba877"></script>