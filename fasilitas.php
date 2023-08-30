<?php
include_once('html_structure.php');
open_page('Fasilitas - Pantai Pasir Putih Parparean', 'fasilitas');

navigasi();

close_page();
?>

<div class="container py-5">
    <!-- For Demo Purpose -->
    <header class="text-center">
        <h1 class="display-4 font-weight-bold text-dark judul">Fasilitas &amp; Wahana </h1>
        <p class="font-italic text-muted mb-0"></p>
        <p class="text-dark deskripsi">&mdash; We <i class="fas fa-heart text-danger"></i> <a href="index.php" class="text-dark">
                <u>Pasir Putih Parparean</u></a>
        </p>
    </header>

    
    <!-- DEMO 2-->
    <div class="py-2">
        <div class="row fa-wrap">
        <?php
            // require_once("koneksi.php");
            // $query = mysqli_query($db, "SELECT * FROM fasilitas ORDER BY id_fasilitas ");
            // while ($data = mysqli_fetch_array($query)) {
            require_once("koneksi.php");
            $page = (isset($_GET['page']))? (int) $_GET['page'] : 1;
            // Jumlah data per halaman
            $limit = 4;
            $limitStart = ($page - 1) * $limit;   
            $data_fasilitas = mysqli_query($db, "SELECT * FROM fasilitas LIMIT ".$limitStart.",".$limit);
            $no = $limitStart + 1;
            while($d = mysqli_fetch_array($data_fasilitas)){ 
        ?>
            <!-- DEMO 2 Item-->
            <div class="col-lg-6 mb-3 mb-lg-0 fa-item">
                <div class="hover hover-2 text-white rounded"><img src="admin/img/FasilitasPantai/<?php echo $d['gambar'] ?>">
                    <div class="hover-overlay"></div>
                    <div class="hover-2-content px-5 py-2">
                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light"><?php echo $d['nama_fasilitas'] ?></span> &mdash; <?php echo $d['nama_pantai'] ?></h3>
                        <p class="hover-2-description text-uppercase mb-4"><?php echo $d['deskripsi'] ?></p>
                    </div>
                </div><br>
            </div>
        <?php } ?>
        </div>
    </div>
    <div align="center">
        <ul class="pagination">
            <?php
            // Jika page = 1, maka LinkPrev disable
            if($page == 1){ 
            ?>        
            <!-- link Previous Page disable --> 
            <li class="disabled"><a href="#">Previous</a></li>
            <?php
            }
            else{ 
            $LinkPrev = ($page > 1)? $page - 1 : 1;
            ?>
            <!-- link Previous Page --> 
            <li><a href="fasilitas.php?page=<?php echo $LinkPrev; ?>">Previous</a></li>
            <?php
            }
            ?>

            <?php
            $data_fasilitas = mysqli_query($db, "SELECT * FROM fasilitas");        
            
            //Hitung semua jumlah data yang berada pada tabel Sisawa
            $JumlahData = mysqli_num_rows($data_fasilitas);
            
            // Hitung jumlah halaman yang tersedia
            $jumlahPage = ceil($JumlahData / $limit); 
            
            // Jumlah link number 
            $jumlahNumber = 1; 

            // Untuk awal link number
            $startNumber = ($page > $jumlahNumber)? $page - $jumlahNumber : 1; 
            
            // Untuk akhir link number
            $endNumber = ($page < ($jumlahPage - $jumlahNumber))? $page + $jumlahNumber : $jumlahPage; 
            
            for($i = $startNumber; $i <= $endNumber; $i++){
            $linkActive = ($page == $i)? ' class="active"' : '';
            ?>
            <li<?php echo $linkActive; ?>><a href="fasilitas.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php
            }
            ?>
            
            <!-- link Next Page -->
            <?php       
            if($page == $jumlahPage){ 
            ?>
            <li class="disabled"><a href="#">Next</a></li>
            <?php
            }
            else{
            $linkNext = ($page < $jumlahPage)? $page + 1 : $jumlahPage;
            ?>
            <li><a href="fasilitas.php?page=<?php echo $linkNext; ?>">Next</a></li>
            <?php
            }
            ?>
        </ul>
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

<script>
    $(document).ready(function() {
        $('.fa-wrap .fa-item').hide();

        $('.fa-wrap').children('.fa-item:lt(4)').show();

        $('.load-more').click(function() {
            $('.fa-wrap').children('.fa-item:hidden:lt(2)').show();
        });

    });
</script>

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
            $('.judul').addClass('animated fadeInUp')
        }, {
            offset: '60%'
        })
    });

    $(document).ready(function() {
        $('.deskripsi').waypoint(function(direction) {
            $('.deskripsi').addClass('animated fadeInLeft')
        }, {
            offset: '50%'
        })
    });
</script>

<a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>