<?php
include_once('html_structure.php');
open_page('Detail Blog - Pasir Putih Parparean', 'single-post');
navigasi();
close_page();
?>

<!-- Begin Article
================================================== -->
<div class="container">
    <div class="row">

        <!-- Begin Fixed Left Share -->
        <div class="col-md-2 col-xs-12">
            <div class="share">

            </div>
        </div>
        <!-- End Fixed Left Share -->

        <!-- Begin Post -->
        <div class="col-md-8 col-md-offset-2 col-xs-12">
            <?php
            include 'koneksi.php';
            $id_berita = abs(intval($_GET['id']));
            $query = mysqli_query($db, "SELECT * FROM berita WHERE id_berita = '$id_berita' LIMIT 1");
            while ($data = mysqli_fetch_array($query)) {
            ?>

                <div class="mainheading">

                    <!-- Begin Top Meta -->
                    <!-- End Top Menta -->
                    <img class="img-fluid" src="admin/img/berita/<?php echo $data['gambar'] ?>">

                    <div class="row post-top-meta">
                        <div class="col-md-8">
                            <p class="text-dark font-weight-bold">Oleh: <span> <?php echo $data['author'] ?></span>
                                <span> | </span>
                                <span><?php echo $data['tanggal'] ?></span>
                                <span>|</span>
                                <span class="text-secondary"><?php echo $data['kategori'] ?></span>
                                <span> | </span>
                        </div>
                    </div>
                    <h1 class="posttitle py-3"><?php echo $data['judul'] ?></h1>
                </div>

                <!-- Begin Post Content -->
                <div class="article-post">
                    <p>
                        <?php echo $data['isi'] ?>
                    </p>
                </div>
                <!-- End Post Content -->

                <!-- Begin Tags -->
                <div class="after-post-tags">
                    <ul class="tags">Tag :
                        <li><a href="#"><?php echo $data['tag'] ?></a></li>
                    </ul>
                </div>
                <!-- End Tags -->
            <?php } ?>
        </div>
        <!-- End Post -->

    </div>
</div>
<!-- End Article
================================================== -->

<div class="hideshare"></div>

<!-- Begin Related
================================================== -->
<div class="graybg">
    <div class="container">
        <div class="row listrecent listrelated">

            <!-- begin post -->
            <div class="col-md-10 ml-auto">
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v7.0&appId=167683047354007&autoLogAppEvents=1" nonce="VYJnIAyF"></script>
                <div class="fb-comments" data-href="http://pasputparparean.site/single-post.php?id=" data-numposts="5" data-width="350"></div>
            </div>
            <!-- end post -->
        </div>
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
<!-- End Related Posts
================================================== -->
<a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>

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
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ee39c07862ba877"></script>