<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Metro, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development">
    <meta name="author" content="Sergey Pimenov and Metro UI CSS contributors">

    <link rel='shortcut icon' type='image/x-icon' href='../favicon.ico' />

    <title>Admin - BookingJacket</title>

    <link href="assets/css/style.css" rel="stylesheet">
    <link href="../../metro/css/metro.css" rel="stylesheet">
    <link href="../../metro/css/metro-icons.css" rel="stylesheet">
    <link href="../../metro/css/metro-responsive.css" rel="stylesheet">

    <script src="../../metro/js/jquery-2.1.3.min.js"></script>
    <script src="../../metro/js/jquery.dataTables.min.js"></script>

    <script src="../../metro/js/metro.js"></script>

    <style>
        html, body {
            height: 100%;
        }
        body {
        }
        .page-content {
            padding-top: 3.125rem;
            min-height: 100%;
            height: 100%;
        }
        .table .input-control.checkbox {
            line-height: 1;
            min-height: 0;
            height: auto;
        }

        @media screen and (max-width: 800px){
            #cell-sidebar {
                flex-basis: 52px;
            }
            #cell-content {
                flex-basis: calc(100% - 52px);
            }
        }
    </style>

    <script>
        function pushMessage(t){
            var mes = 'Info|Implement independently';
            $.Notify({
                caption: mes.split("|")[0],
                content: mes.split("|")[1],
                type: t
            });
        }

        $(function(){
            $('.sidebar').on('click', 'li', function(){
                if (!$(this).hasClass('active')) {
                    $('.sidebar li').removeClass('active');
                    $(this).addClass('active');
                }
            })
        })
    </script>
</head>
<body class="bg-steel">
    <div class="app-bar fixed-top darcula" data-role="appbar" style="background-color:#1ABC9C;">
        <a class="app-bar-element branding"><img src="../../metro/images/bj.png"></a>
        <span class="app-bar-divider"></span>
    </div>

    <div class="page-content">
        <div class="flex-grid no-responsive-future" style="height: 100%;">
            <div class="row" style="height: 100%">
                
                <div class="cell auto-size padding20 bg-white" id="cell-content">
                    <h1 class="text-light"><a href="<?php echo base_url("admin");?>" class="nav-button transform"><span></span></a> EDIT DATA PEMESANAN</h1>
                    <hr class="thin bg-grayLighter">
                    <br><br>
        <div class="example">
            <br/>
                    <form method="POST" action="<?php echo base_url("admin/update");?>">
                    <div class="cell">
                        <label>Nama Pemesan</label>
                        <div class="input-control text success full-size">
                            <input type="text" name="nm_pemesan" value="<?php echo $pesanan['nm_pemesan'];?>" required>
                            <input type="hidden" name="id" value="<?php echo $pesanan['id'];?>" required>
                        </div>
                    </div>
                    <label>Alamat</label>
                    <div class="input-control textarea success full-size" data-role="input" data-text-auto-resize="true">
                    <textarea name="alamat" value="<?php echo $pesanan['alamat'];?>" required><?php echo $pesanan['alamat'];?></textarea>
                    </div>
                    <div class="cell">
                        <label>No Telepon</label>
                        <div class="input-control text success full-size">
                            <input type="text" name="no_telp" maxlength="13" value="<?php echo $pesanan['no_telp'];?>" required>
                        </div>
                    </div>
                    <div class="cell">
                        <label>Jumlah Pesanan</label>
                        <div class="input-control text success full-size">
                            <input type="text" name="jmlh_pesanan" maxlength="3" value="<?php echo $pesanan['jmlh_pesanan'];?>" required>
                        </div>
                    </div>    
                    <label>Jenis Jaket</label>              
                    <div class="input-control select success full-size">
                    <select name="jenis_jkt" required>
                          <option value="<?php echo $pesanan['jenis_jkt'];?>"><?php echo $pesanan['jenis_jkt'];?></option>
                          <?php 
                          foreach($jenis as $key){
                          ?>
                          <option value="<?php echo $key['jaket'];?>"><?php echo $key['jaket'];?></option>
                          <?php
                          }
                          ?>
                    </select>
                    </div>
                    <div class="cell">
                        <label>Ukuran</label>
                        <div class="input-control text success full-size">
                            <input type="text" name="ukuran" placeholder=" Ukuran / Jumlah" value="<?php echo $pesanan['ukuran'];?>" required>
                        </div>
                    </div>
                    <label>Keterangan</label>              
                    <div class="input-control select success full-size">
                    <select name="ket" required>
                    <option value="<?php echo $pesanan['ket'];?>"><?php echo $pesanan['ket'];?></option>
                    <option value="Disetujui">Disetujui</option>
                    <option value="Ditunda">Ditunda</option>
                    <option value="Ditolak">Ditolak</option>
                    </select>
                    </div>
                    <br><br>
                    <button type="submit" class="button primary"><span class="mif-loop2"></span> Simpan</button>
                    </form>
            <br/>
            <br/>
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
</html>