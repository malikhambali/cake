    <link href="assets/css/style.css" rel="stylesheet">
    <link href="../../metro/css/metro.css" rel="stylesheet">
    <link href="../../metro/css/metro-icons.css" rel="stylesheet">
    <link href="../../metro/css/metro-responsive.css" rel="stylesheet">
    <link href="../../metro/css/css.css" rel="stylesheet">

    <script src="../../metro/js/jquery-2.1.3.min.js"></script>
    <script src="../../metro/js/jquery.dataTables.min.js"></script>

    <script src="../../metro/js/metro.js"></script>

<body onLoad="window.print()" class="bg-steel">
        
        <div class="example">
            <div class="panel">
    <div class="heading" style="background-color:#eceaea; margin:auto; box-shadow:0 5px 10px grey; height:70px; width:57%;">
        <font color="black">
        <center>
        <img src="../../metro/images/report.png">
        </center>
    </div>
    <br>
    <div class="content">
        <center><img src="../../gambar/<?php echo $pesanan['gambar'];?>" class="gambar"></center>
            <center>
                    <table class="batas">
                    <tr>
                        <th>Nama Pemesan</th>
                        
                        <td><?php echo $pesanan['nm_pemesan'];?></td>
                        <input type="hidden" name="id" value="<?php echo $pesanan['id'];?>">
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        
                        <td><?php echo $pesanan['alamat'];?></td>
                    </tr>
                    <tr>
                        <th>No Telepon</th>
                        
                        <td><?php echo $pesanan['no_telp'];?></td>
                    </tr>
                    <tr>
                        <th>Jumlah Pesanan</th>
                        
                        <td><?php echo $pesanan['jmlh_pesanan'];?> pcs</td>
                    </tr>
                    <tr>
                        <th>Jenis Jaket</th>
                        
                        <td><?php echo $pesanan['jenis_jkt'];?></td>
                    </tr>
                    <tr>
                        <th>Ukuran</th>
                        
                        <td><?php echo $pesanan['ukuran'];?></td>
                    </tr>
                    <br>
                    </table>
            </center>
            <br>
    </div>
</div>
        </div>


    <!--materialize js-->    <!--prism-->
    <!--scrollbar-->
    <!-- chartist -->
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->


                </div>
            </div>
        </div>
    </div>
</body>