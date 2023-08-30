<?php
    function get_title($_title){
        return $_title;
    }
    
    function get_css($css){
        return $css;
    }
    
    function open_page($_title, $css){
      echo('<!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta name="description" content="Website Pasir Putih Parparean adalah website yang menyediakan informasi tentang Pantai Pasir Putih Parparean dengan tujuan membantu mengembangkan, memberdayakan, mendistribusikan potensi wisata Pantai Pasir Putih Parparean.">
          <meta name="google-site-verification" content="_N4HfY8l9IeAkTsV8hzqEElhcBb1Yd7EUWXm5cWVKqc" />
          <title>' . 
          get_title($_title).
          '</title>
          <link rel="icon" type="image/png" href="img/icons/favicon.png">
          <link rel="stylesheet" type="text/css"  href="bootstrap/css/bootstrap.min.css">
          <link rel="stylesheet" href="fontawesome/css/all.min.css">    
          <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
          <link rel="stylesheet" href="bootstrap/css/animate.css">
          <link rel="stylesheet" href="bootstrap/css/bootstrap-datepicker.css">
          <link rel="stylesheet" href="bootstrap/css/jquery.fancybox.min.css">
          <link rel="stylesheet" href="bootstrap/css/owl.carousel.min.css">
          <link rel="stylesheet" href="bootstrap/fonts/ionicons/css/ionicons.min.css">
          <link rel="stylesheet" href="bootstrap/fonts/flaticon/font/flaticon.css">
          <link rel="stylesheet" type="text/css"  href="bootstrap/css/' . get_css($css) . '.css">
          <!-- pagination -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
          <script src="jquery-3.4.1.min.js"></script>
          <!-- Global site tag (gtag.js) - Google Analytics -->
          <script async src="https://www.googletagmanager.com/gtag/js?id=G-1K0N25Z423"></script>
          <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag("js", new Date());
        
            gtag("config", "G-1K0N25Z423");
          </script>
      </head>

      <body>');
    }
    
    function navigasi(){
        echo('
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
            <div class="container">

              <!-- Navbar brand -->
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo/logo-index.png" width="70" alt=""><span clas="judul-web" id="judul-web">
                    PANTAI PASPUT</span>
                </a>


                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">

                    <!-- Links -->
                    <ul class="navbar-nav ml-auto smooth-scroll">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="fasilitas.php">Fasilitas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="berita.php">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="peta.php">Peta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="about_us.php">About</a>
                        </li>
                    </ul>
                    <!-- Links -->
                </div>
                <!-- Collapsible content -->
            </div>
        </nav>'
        );
    }

    

    function close_page(){
    echo('
    <script src="bootstrap/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
</body>
</html>');
}
?>