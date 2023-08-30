<?php
include_once('html_structure.php');
open_page('Peta - Pantai Pasir Putih Parparean', 'peta');

navigasi();
close_page();
?>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
<div class="container">
    <div class="row">
        <section class="gallery-block grid-gallery">
            <div class="container">
                <div class="heading">
                    <h2 class="text-light judul">Mari ke Pasput!</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="img/peta/lokasi-awal.jpg">
                            <img class="img-fluid image scale-on-hover gambar1" src="img/peta/lokasi-awal.jpg">
                            <figcaption class="figure-caption text-center text-light gambar1">
                                Simpang RSUD adalah penanda wisata Pasir Putih Parparean.
                                Pada simpang ini terdapat sebuah gapura yang menjadi titik penanda lokasi wisata.
                            </figcaption>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="img/peta/lokasi-awal-2.jpg">
                            <img class="img-fluid image scale-on-hover gambar1" src="img/peta/lokasi-awal-2.jpg">
                            <figcaption class="figure-caption text-center text-light gambar1">
                                Apabila Anda telah menemukan gapura RSUD maka Anda melanjutkan perjalanan Anda ke arah Utara ±900m.
                            </figcaption>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="img/peta/pintu-masuk-pantai.jpg">
                            <img class="img-fluid image scale-on-hover gambar1" src="img/peta/pintu-masuk-pantai.jpg">
                            <figcaption class="figure-caption text-center text-light gambar1">
                                Anda akan menemukan sebuah persimpangan dan berikut adalah simpang yang merupakan
                                pintu masuk menuju Pantai Pasir Putih Parparean.
                            </figcaption>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="img/peta/lokasi-pantai.jpg">
                            <img class="img-fluid image scale-on-hover gambar2" src="img/peta/lokasi-pantai.jpg">
                            <figcaption class="figure-caption text-center text-light gambar2">
                                Anda hanya perlu bergerak mengikuti arah jalan tersebut hingga Anda menemukan persimpangan lagi.
                                Berikut informasi masing-masing simpang yang menunjukkan nomor pantai. FYI, Pantai Pasir Putih Parparean
                                memiliki 3 lokasi Pantai.
                            </figcaption>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="img/peta/lokasi-pantai-1.jpg">
                            <img class="img-fluid image scale-on-hover gambar2" src="img/peta/lokasi-pantai-1.jpg">
                            <figcaption class="figure-caption text-center text-light gambar2">
                                Untuk menuju ke lokasi pantai pertama, Anda cukup mengikuti jalan tersebut lalu akan sampai di lokasi pantai seperti gambar di atas.
                            </figcaption>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="img/peta/lok-pantai-23.jpg">
                            <img class="img-fluid image scale-on-hover gambar2" src="img/peta/lok-pantai-23.jpg">
                            <figcaption class="figure-caption text-center text-light gambar2">
                                Untuk menuju ke lokasi pantai kedua ataupun lokasi pantai ketiga, Anda belok ke arah kanan simpan tersebut
                                hingga mendapati sebuah persimpangan lagi sesuai dengan gambar di atas.
                            </figcaption>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item mx-auto">
                        <a class="lightbox" href="img/peta/lokasi-pantai-2.jpg">
                            <img class="img-fluid image scale-on-hover gambar3" src="img/peta/lokasi-pantai-2.jpg">
                            <figcaption class="figure-caption text-center text-light gambar3">
                                Untuk menuju ke lokasi pantai kedua, Anda berbelok ke arah kiri lalu mengikuti jalan tersebut
                                hingga sampai di lokasi pantai seperti gambar di atas.
                            </figcaption>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item mx-auto">
                        <a class="lightbox" href="img/peta/lokasi-pantai-3.jpg">
                            <img class="img-fluid image scale-on-hover gambar3" src="img/peta/lokasi-pantai-3.jpg">
                            <figcaption class="figure-caption text-center text-light gambar3">
                                Untuk menuju ke lokasi pantai ketiga, Anda melanjutkan perjalanan Anda dengan mengikuti jalan sesuai gambar di atas
                                dan Anda akan menemukan sebuah persimpangan. Lalu, Anda berbelok ke arah kiri dan mengikuti jalan tersebut
                                hingga sampai di lokasi pantai seperti gambar di atas.
                            </figcaption>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item mx-auto">
                    <div id="map-container" class="z-depth-1-half map-container mb-5 gmaps">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15944.900424110567!2d99.149081!3d2.4318413!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4329e9a7d027afb0!2sPantai%20Pasir%20Putih%20Parparean!5e0!3m2!1sid!2sid!4v1589881902892!5m2!1sid!2sid" width="350" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        <figcaption class="figure-caption text-center text-light gmaps">
                            Apabila informasi di atas kurang lengkap, Anda dapat menelusurinya dengan menggunakan Google Maps. <br>
                            Cukup klik <span class="text-primary font-weight-bold">"Lihat peta lebih besar"</span>.
                        </figcaption>
                    </div>
                </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
        <script>
            baguetteBox.run('.grid-gallery', {
                animation: 'slideIn'
            });
        </script>
    </div>

</div>



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

    $(document).ready(function() {
        $('.judul').waypoint(function(direction) {
            $('.judul').addClass('animated fadeInDown')
        }, {
            offset: '90%'
        })
    });

    $(document).ready(function() {
        $('.gambar1').waypoint(function(direction) {
            $('.gambar1').addClass('animated fadeInLeft')
        }, {
            offset: '60%'
        })
    });


    $(document).ready(function() {
        $('.gambar2').waypoint(function(direction) {
            $('.gambar2').addClass('animated fadeInRight')
        }, {
            offset: '70%'
        })
    });

    $(document).ready(function() {
        $('.gambar3').waypoint(function(direction) {
            $('.gambar3').addClass('animated fadeInUp')
        }, {
            offset: '80%'
        })
    });

    $(document).ready(function() {
        $('.gmaps').waypoint(function(direction) {
            $('.gmaps').addClass('animated fadeInUp')
        }, {
            offset: '85%'
        })
    });
</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ee39c07862ba877"></script>
<a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>