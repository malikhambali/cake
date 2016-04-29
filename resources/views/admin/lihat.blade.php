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
    <link href="../../metro/css/css.css" rel="stylesheet">

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
                    <h1 class="text-light"><a href="<?php echo base_url("admin");?>" class="nav-button transform"><span></span></a> DETAIL DATA PEMESANAN</h1>
                    <hr class="thin bg-grayLighter">
                    <br><br>
        <div class="example">
            <br/>
            <div class="panel">
    <div class="heading" style="background-color:#1ABC9C;">
        <span class="title"><?php echo $pesanan['nm_pemesan'];?></span>
    </div>
    <div class="content">
        <br><br>
        <form method="POST" action="<?php echo base_url("admin/update");?>">
        <center><img src="../../gambar/<?php echo $pesanan['gambar'];?>" class="gambar"></center>
            <center>
                    <table class="padding">
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
                    <tr>
                        <th>Keterangan</th>
                        
                        <td>
                        <select name="ket" required>
                        <option value="<?php echo $pesanan['ket'];?>"><?php echo $pesanan['ket'];?></option>
                        <option value="Disetujui">Disetujui</option>
                        <option value="Ditunda">Ditunda</option>
                        <option value="Ditolak">Ditolak</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <th><button type="submit" class="button primary"><span class="mif-checkmark"></span></button>
                        <a href="<?php echo base_url("admin/report/".$pesanan['id']);?>" class="button primary"><span class="mif-printer"></span></a></th>
                        <td></td>
                    </tr>
                    <br>
                    </table>
            </center>
        <br><br>
        </form>
    </div>
</div>
                    
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