<?php
include_once('html_structure.php');
open_page('Berita - Pantai Pasir Putih Parparean', 'berita');
navigasi();
close_page();
?>


<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" style="background-image: url('https://images.pexels.com/photos/4605185/pexels-photo-4605185.jpeg?cs=srgb&dl=pexels-4605185.jpg&fm=jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-6" data-aos="fade-up">
                    <h1 class="mb-3 text-white">Berita</h1>
                    <p class="text-light">"Pasir Putih Parparean, surga yang sembunyi di Toba."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="mainheading">
        <h1 class="sitetitle">Berita</h1>
        <p class="lead">
            Informasi seputar aktivitas wisata di #Pasput.
        </p>
    </div>



    <section class="featured-posts">
        <div class="section-title">
            <h2><span>Berita Terbaru</span></h2>
        </div>
        <div class="card-columns listfeaturedtag">
            <?php
            require_once("koneksi.php");
            $query = mysqli_query($db, "SELECT * FROM berita ORDER BY tanggal DESC LIMIT 4");
            while ($data = mysqli_fetch_array($query)) {
            ?>

                <!-- begin post -->
                <div class="card">

                    <div class="row">
                        <div class="col-md-5 wrapthumbnail">
                            <a href="single-post.php?id=<?php echo $data['id_berita'] ?>">
                                <div class="thumbnail" style="background-image:url(admin/img/berita/<?php echo $data['gambar'] ?>);">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-block">
                                <h2 class="card-title"><a href="single-post.php?id=<?php echo $data['id_berita'] ?>"><?php echo $data['judul'] ?></a></h2>
                                <h4 class="card-text">
                                    <p><?php echo substr($data["isi"], 0, 220) . '...' ?></p>
                                </h4>
                                <div class="metafooter">
                                    <div class="wrapfooter">
                                        <span class="meta-footer-thumb">
                                            <img class="author-thumb" src="https://image.flaticon.com/icons/svg/3048/3048189.svg" alt="Sal">
                                        </span>
                                        <span class="author-meta">
                                            <span class="post-name"><?php echo $data['author'] ?></span><br />
                                            <span class="post-date"><?php echo $data['tanggal'] ?></span><span class="dot font-weight-bold"></span>
                                        </span>
                                        <span class="post-read-more"><a href="single-post.php?id=<?php echo $data['id_berita'] ?>" title="Read More"><i class="fas fa-long-arrow-alt-right fa-2x"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end post -->
            <?php } ?>
        </div>
    </section>


    <section class="recent-posts fa-wrap">
        <div class="section-title">
            <h2><span>Semua Berita</span></h2>
        </div>
        <div class="card-columns listrecent fa-wrap">
            <?php
            require_once("koneksi.php");
            $query = mysqli_query($db, "SELECT * FROM berita ORDER BY tanggal DESC");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <!-- begin post -->
                <div class="card fa-item">
                    <a href="single-post.php?id=<?php echo $data['id_berita'] ?>">
                        <img class="img-fluid" src="admin/img/berita/<?php echo $data['gambar'] ?>">
                    </a>
                    <div class="card-block">
                        <h2 class="card-title" id="judul_berita"><a href="single-post.php?id=<?php echo $data['id_berita'] ?>"><?php echo $data['judul'] ?></a></h2>
                        <h4 class="card-text" id="teks_berita">
                            <?php echo substr($data["isi"], 0, 300) . '...' ?>
                        </h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
                                <span class="meta-footer-thumb">
                                    <img class="author-thumb" id="gambar-author" src="https://image.flaticon.com/icons/svg/3048/3048189.svg" alt="Sal">
                                </span>
                                <span class="author-meta" id="author">
                                    <span class="post-name"><?php echo $data['author'] ?></span><br />
                                    <span class="post-date"><?php echo $data['tanggal'] ?></span><span class="dot font-weight-bold"></span>
                                </span>
                                <span class="post-read-more"><a href="single-post.php?id=<?php echo $data['id_berita'] ?>" title="Read More"><i class="fas fa-long-arrow-alt-right fa-2x" id="panah"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->
            <?php } ?>
        </div>
        <p class="text-center">
            <button class="btn btn-md load-more"><i class="fa fa-spinner" aria-hidden="true"> Load More</i></button>
        </p>
    </section>

</div>

<script>
    $(document).ready(function() {
        $('.fa-wrap .fa-item').hide();

        $('.fa-wrap').children('.fa-item:lt(3)').show();

        $('.load-more').click(function() {
            $('.fa-wrap').children('.fa-item:hidden:lt(3)').show();
        });

    });
</script>
<!-- /.container -->


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
                    <a href="fasilitas.php" class="text-primary">Fasilitas</a>
                </p>
                <p>
                    <a href="berita.php" class="text-primary">Berita</a>
                </p>
                <p>
                    <a href="peta.php" class="text-primary">Peta</a>
                </p>
                <p>
                    <a href="about_us.php" class="text-primary">Developer</a>
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
</script>

<a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ee39c07862ba877"></script>