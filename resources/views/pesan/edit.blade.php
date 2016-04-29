<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Rental - Mobil</title>
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="../assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="icon" href="images/car.png" sizes="32x32"> <!-- gambar yg diatas title -->
    <!--  Android 5 Chrome Color-->
    <!-- CSS-->
    <link href="../assets/css/prism.css" rel="stylesheet">
    <link href="../assets/css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <script>
      window.liveSettings = {
        api_key: "a0b49b34b93844c38eaee15690d86413",
        picker: "bottom-right",
        detectlang: true,
        dynamic: true,
        autocollect: true
      };
    </script>
    <script src="//cdn.transifex.com/live.js"></script>
  </head>
  <body>
    <header>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="mdi-navigation-menu"></i></a></div>
      <ul id="nav-mobile" class="side-nav fixed">
        <li class="logo"><a id="logo-container" href="<?php echo base_url("pesanan/jos");?>" class="brand-logo">
            <object id="front-page-logo" type="image/svg+xml" data="../assets/images/bj.png">Your browser does not support SVG</object></a></li>
        <li class="search">
          <div class="search-wrapper card">
            <input id="search"><i class="material-icons">Cari</i>
            <div class="search-results"></div>
          </div>
        </li>
        <li class="bold"><a href="<?php echo base_url("pesanan/jos");?>" class="waves-effect waves-teal">Home</a></li>
        <li class="bold"><a href="<?php echo base_url("pesanan");?>" class="waves-effect waves-teal">Lihat Data</a></li>
        <li class="bold"><a href="<?php echo base_url("pesanan/add");?>" class="waves-effect waves-teal">Tambah Data</a></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Contoh</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="color.html">Color</a></li>
                  <li><a href="grid.html">Grid</a></li>
                  <li><a href="helpers.html">Helpers</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li class="bold"><a href="<?php echo base_url("login/logout");?>" class="waves-effect waves-teal">Logout</a></li>
      </ul>
    </header>
    <main>
      <div class="section no-pad-bot" id="index-banner">
        <div class="container">
          <h1 class="header center-on-small-only">EDIT DATA PENYEWAAN MOBIL</h1><br>
        </div>
        </div>
      </div>

      <div class="container">
        <div class="section">
          <!--   Promo Section   -->
        </div>
        <div class="section">
          <div class="row center">
            
<form method="POST" action="<?php echo base_url("pesanan/update");?>">
  <div class="row">
    <div class="input-field col s12">
    <select name="namamerk">
      <option value="<?php echo $merk['namamerk'];?>" disabled selected><?php echo $merk['namamerk'];?></option>
      <option value="Avanza">Avanza</option>
      <option value="APV">APV</option>
      <option value="Xenia">Xenia</option>
    </select>
    <label>Merk Mobil</label>
  </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
          <input id="text" type="text" name="nmpenyewa" value="<?php echo $merk['nmpenyewa'];?>">
          <label for="text">Nama Penyewa</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="alamat" value="<?php echo $merk['alamat'];?>"><?php echo $merk['alamat'];?></textarea>
          <label for="textarea1">Alamat</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="text" name="notelp" value="<?php echo $merk['notelp'];?>">
          <label for="password">Nomor Telepon</label>
        </div>
      </div>
    <input type="hidden" name="id" value="<?php echo $merk['id'];?>">
            <br><br>
          <button type="submit" class="btn-big merah"> Ubah </button>
        </div>
      </div>
      </form>
      <br><br><br><br><br><br>
    </main>    <footer class="page-footer">
      <div class="container">
        <div class="row">
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        CopyRight © 2016 CASPER 
        <a class="grey-text text-lighten-4 right" href="https://github.com/Dogfalo/materialize/blob/master/LICENSE">EXSOFT License</a>
        </div>
      </div>
    </footer>

    <!--  Scripts-->
    <script src="../../assets/js/jquery-2.1.4.min.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>'); }
    </script>
    <script src="../../assets/js/jquery.timeago.min.js"></script>
    <script src="../../assets/js/prism.js"></script>
    <script src="../../assets/jade/lunr.min.js"></script>
    <script src="../../assets/jade/search.js"></script>
    <script src="../../assets/bin/materialize.js"></script>
    <script src="../../assets/js/init.js"></script>
    <!-- Twitter Button -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

    <!-- Google Plus Button-->
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <!--  Google Analytics  -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-56218128-1', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');
    </script>

  </body>
</html>