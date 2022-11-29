<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title><?=$title;?> - Matadata Technologi</title>

    
    <link rel="shortcut icon" type="image/x-icon" href="<?= __img('logomatadata.png');?>">

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel='stylesheet' type="text/css" href='https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700,300'>

    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="<?=__css('bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=__css('bootstrap-material-design.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=__css('ripples.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=__css('export.min.css');?>" media="all" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=__css('social-share-kit1.css');?>">
    <link rel="stylesheet" href="<?=__css('styles.min.css');?>">
    <link rel="stylesheet" href="<?=__css('jquery.dataTables.min.css');?>">
    <link rel="stylesheet" href="<?=__css('stylessweb.min.css');?>">

    <link rel="stylesheet" href="<?=__css('portal_data1.css');?>">
    
    <!-- Additional Style -->
    <link rel="stylesheet" type="text/css" href="<?=__css('animate.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=__css('jquery.countdown.min.cs');?>s">
    <link rel="stylesheet" type="text/css" href="<?=__css('jquery.marquee.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=__css('eventCalendar.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=__css('eventCalendar_theme_responsive.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=__css('eventCalendar_theme.min.css');?>">

</head>
<body>

<!-- HEADER -->
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-logo" style="margin-top: 0!important;">
                    <a href="<?=site_url('/');?>" ><img src="<?= __img('logomatadata.png');?>" alt="" class="img-responsive" style="width:100px;"></a>
                </div>
                <div class="header-text">
                    <h1 style="font-size: 30px;margin-top: 5px!important;">Matadata Technologi</h1>
                    <p class="lead"><strong>Data API</strong></p>
                    <p class="lead"> Satu data untuk perkembangan pendidikan </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END HEADER -->

<!-- Navbar -->
<?php $this->load->view($navbar) ?>
<!-- end -->
<!-- data -->
<div class="container isi">
    <?php $this->load->view($content) ?>
</div>
<!-- end -->

<div class="container-fluid">
    </div>

<!-- FOOTER -->
<div class="footer">
    <div class="container">
        <div class="row">

            <div class="col-xs-6 col-md-3">
                <h4>LAYANAN</h4>
                <ul>
                    <li><a href="https://notfound.id/wedding/" title="Wedding Invitation" target="_blank">Wedding Invitation</a></li>
                    <li><a href="https://absenku.notfound.id" title="AbsenKU" target="_blank">Presensi Online</a></li>
                    
                </ul>
            </div>

            <div class="col-xs-6 col-md-3">
                <h4>UNIT UTAMA</h4>

                <ul>
                    <li><a href="http://disdik.acehprov.go.id/" title="Disdik Aceh" target="_blank">Disdik Aceh</a></li>
                    <li><a href="#" title="Bidang PSMK" target="_blank">Bidang PSMK</a></li>
                    <li><a href="https://notfound.id" title="Notfound Indonesia" target="_blank">Notfound Indonesia</a></li>
                </ul>
            </div>

            <div class="col-xs-6 col-md-3">
                <h4>GROUP</h4>

                <ul>
                    <li><a href="https://notfound.id/" title="Notfound Indonesia" target="_blank">Notfound Indonesia</a></li>
                    <li><a href="https://www.youtube.com/channel/UCkIvn_y8_l43UhI3hKvwmeg" title="Ananda Vlog" target="_blank">Ananda Vlog</a></li>
                </ul>
            </div>

            <div class="col-xs-6 col-md-3">
                <h4>HUBUNGI KAMI</h4>
                <p>Matadata Technologi</p>
                <p><strong>Rumah Dinas Yonzipur 16/DA</strong> <br>
                Krueng Lamkareung, Kec. Indrapuri, Kabupaten Aceh Besar, Aceh 23373</p>

                <p>
                    No Telp: 0821-6570-0141<br/>
                    <!-- Fax: 0<br/> -->
                    Email: <b>admin@matadata.tech</b>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- END FOOTER -->

<!-- COPYRIGHT -->
<div class="copyright" style="margin-bottom:-20px;">
    <p class="text-center">Hak Cipta &copy; <a href="https://matadata.tech">Matadata Technologi</a></p>
</div>
<!-- END COPYRIGHT -->
<!-- SSK Share Buttons -->
<div class="ssk-sticky ssk-left ssk-center ssk-md">
    <a href="" class="ssk ssk-youtube"></a>
    <a href="" class="ssk ssk-twitter"></a>
    <a href="" class="ssk ssk-google-plus"></a>
    <a href="" class="ssk ssk-linkedin"></a>
    <a href="" class="ssk ssk-pinterest"></a>
    <a href="" class="ssk ssk-tumblr"></a>
</div>

<!-- Back to Top Button -->
<div class="bs-component btn-group-sm" id="keAtas">
    <a href="javascript:void(0)" class="btn btn-success btn-fab" title="Kembali keatas"><i class="material-icons">expand_less</i></a>
</div>

<!-- Plugins Resources -->
<!-- jQuery -->
<script type="text/javascript" src="<?=__js('jquery-1.11.3.min.js');?>"></script>
<!-- DataTables -->
<script type="text/javascript" src="<?=__js('jszip.min.js');?>"></script>
<script type="text/javascript" src="<?=__js('pdfmake.js');?>"></script>
<script type="text/javascript" src="<?=__js('vfs_fonts.min.js');?>"></script>
<script type="text/javascript" src="<?=__js('jquery.dataTables.min.js');?>"></script>
<script type="text/javascript" src="<?=__js('dataTables.buttons.min.js');?>"></script>
<script type="text/javascript" src="<?=__js('buttons.colVis.min.js');?>"></script>
<script type="text/javascript" src="<?=__js('buttons.html5.min.js');?>"></script>
<script type="text/javascript" src="<?=__js('buttons.print.min.js');?>"></script>
<script type="text/javascript" src="<?=__js('dataTables.select.min.js');?>"></script>

<!-- Bootstrap & Material Design -->
<script src="<?=__js('bootstrap.min.js');?>"></script>
<script src="<?=__js('material.min.js');?>"></script>
<script src="<?=__js('ripples.min.js');?>"></script>
<!-- Social Media Sharing Tool -->
<script src="<?=__js('social-share-kit.js');?>"></script>
<!-- Charting -->
<script src="<?=__js('amcharts.js');?>"></script>
<script src="<?=__js('export.min.js');?>"></script>
<script src="<?=__js('light.js');?>"></script>

<!-- Main -->
<script src="<?=__js('functions.min.js');?>"></script>
<script src="<?=__js('main.min.js');?>"></script>

<!-- <noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3539813&101" alt="" border="0"></a></noscript> -->
<!-- Matomo -->
<script type="text/javascript">
    ;(function(d, s, c) {
        var j = d.createElement(s),
        t = d.getElementsByTagName(s)[0]
        j.src = 'https://unpkg.com/@elastic/apm-rum@5.8.0/dist/bundles/elastic-apm-rum.umd.min.js'
        j.onload = function() {elasticApm.init(c)}
        t.parentNode.insertBefore(j, t)
    })(document, 'script', {serviceName: 'Portal-Data', serverUrl: 'https://portal-log.bebascoding.com', environment: 'production'})
</script>


<!-- Additional Plugins -->
    <script src="<?=__js('jquery.marquee.min.js');?>" type="text/javascript"></script>
    <script src="<?=__js('jquery.plugin.min.js');?>"></script>
    <script src="<?=__js('jquery.countdown.min.js');?>"></script>
    <script src="<?=__js('jquery.countdown-id.min.js');?>"></script>
    <script src="<?=__js('jquery.eventCalendar.min.js');?>"></script>
    <script src="<?=__js('underscore.min.js');?>"></script>
    <script src="<?=__js('moment.min.js');?>"></script>
    <script src="<?=__js('serial.js');?>"></script>
    <script src="<?=__js('pie.js');?>"></script>
    <script src="<?=__js('numeral.min.js');?>"></script>

    <script>
        // pesan perbaikan
        $(function(){
            $('#myModal').modal('show');
            // $('#myInfo').modal('show');
        //     $('#myInfoVerifikasi').modal('show');
        });
    </script>

    <!-- <script src="<?=__js('beranda.min.js');?>"></script> -->
    <script src="https://dapo.kemdikbud.go.id/modules/beranda.min.js"></script>


</body>
</html>
