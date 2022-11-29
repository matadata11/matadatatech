
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title><?=$titla;?> | Matadata Technologi</title>

    
    <link rel="shortcut icon" type="image/x-icon" href="https://dapo.kemdikbud.go.id/assets/img/logo-dikdasmen.png">

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel='stylesheet' type="text/css" href='https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700,300'>

    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="https://dapo.kemdikbud.go.id/assets/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://dapo.kemdikbud.go.id/assets/libs/bootstrap-material-design/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" type="text/css" href="https://dapo.kemdikbud.go.id/assets/libs/bootstrap-material-design/css/ripples.min.css">
    <link rel="stylesheet" type="text/css" href="https://dapo.kemdikbud.go.id/assets/libs/amcharts/plugins/export/export.min.css" media="all" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://dapo.kemdikbud.go.id/assets/css/social-share-kit.css">
    <link rel="stylesheet" href="https://dapo.kemdikbud.go.id/assets/css/icomoon/styles.min.css">
    <link rel="stylesheet" href="https://dapo.kemdikbud.go.id/assets/libs/datatables/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://dapo.kemdikbud.go.id/assets/css/styles.min.css">
    
    <!-- Additional Style -->
        <link rel="stylesheet" type="text/css" href="https://dapo.kemdikbud.go.id/assets/libs/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="https://dapo.kemdikbud.go.id/assets/libs/jquery-countdown/css/jquery.countdown.min.css">
    <link rel="stylesheet" type="text/css" href="https://dapo.kemdikbud.go.id/assets/libs/jquery-marquee/css/jquery.marquee.min.css">
    <link rel="stylesheet" type="text/css" href="https://dapo.kemdikbud.go.id/assets/libs/jquery-event-calendar/css/eventCalendar.min.css">
    <link rel="stylesheet" type="text/css" href="https://dapo.kemdikbud.go.id/assets/libs/jquery-event-calendar/css/eventCalendar_theme_responsive.min.css">
    <link rel="stylesheet" type="text/css" href="https://dapo.kemdikbud.go.id/assets/libs/jquery-event-calendar/css/eventCalendar_theme.min.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.js"></script>
    <![endif]-->

</head>
<body>

<!-- HEADER -->
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-logo" style="margin-top: 0!important;">
                    <a href="/"><img src="https://dapo.kemdikbud.go.id/assets/img/logo-dikdasmen.png" alt="" class="img-responsive"></a>
                </div>
                <div class="header-text">
                    <h1 style="font-size: 30px;margin-top: 5px!important;">Portal Data</h1>
                    <p class="lead"><strong>Bidang Pembinaan Sekolah Menengah Kejuruan</strong></p>
                    <p class="lead"> Dinas Pendidikan Aceh </p>
                </div>
            </div>
                    </div>
    </div>
</div>
<!-- END HEADER -->
<!-- NAVIGATION -->
<nav class="navbar navbar-custom navbar-primary" role="navigation" style="border-top: 1px solid rgba(0,0,0,0.15);">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/" class="animate">Beranda</a></li>
                <li ><a href="/unduhan" class="animate">Unduhan</a></li>
                <li ><a href="/berita" class="animate">Berita</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle animate " data-toggle="dropdown">Data Pokok <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/pencarian" class="animate">Pencarian</a></li>
                        <li><a href="/sp" class="animate">Data Sekolah</a></li>
                        <li><a href="/pd" class="animate">Data Peserta Didik</a></li>
                        <li><a href="/rombel" class="animate">Data Rombel</a></li>
                        <li><a href="/guru" class="animate">Data Guru</a></li>
                        <li><a href="/pegawai" class="animate">Data Pegawai</a></li>
                        <li><a href="/sarpras" class="animate">Data Sarpras</a></li>
                    </ul>
                </li>
                                <li class="dropdown">
                    <a href="#" class="dropdown-toggle animate " data-toggle="dropdown">Progres Data <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/progres" class="animate">Progres Data Semua Jenjang</a></li>
                        <li><a href="/progres-paud?view=tk" class="animate">Progres Data TK</a></li>
                        <li><a href="/progres-paud?view=kb" class="animate">Progres Data KB</a></li>
                        <li><a href="/progres-paud?view=tpa" class="animate">Progres Data TPA</a></li>
                        <li><a href="/progres-paud?view=sps" class="animate">Progres Data SPS</a></li>
                        <li><a href="/progres-paud?view=pkbm" class="animate">Progres Data PKBM</a></li>
                        <li><a href="/progres-paud?view=skb" class="animate">Progres Data SKB</a></li>
                        <li><a href="/progres-sd" class="animate">Progres Data SD</a></li>
                        <li><a href="/progres-smp" class="animate">Progres Data SMP</a></li>
                        <li><a href="/progres-sma" class="animate">Progres Data SMA</a></li>
                        <li><a href="/progres-smk" class="animate">Progres Data SMK</a></li>
                        <li><a href="/progres-slb" class="animate">Progres Data SLB</a></li>
                    </ul>
                </li>
                                                                                <li class="dropdown">
                    <a href="#" class="dropdown-toggle animate " data-toggle="dropdown">Bantuan <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/troubleshoot" class="animate">Troubleshoot</a></li>
                        <li><a href="/laman/faq" class="animate">FAQ</a></li>
                        <li><a href="/laman/sambutan" class="animate">Sambutan</a></li>
                        <li><a href="http://helpdesk.dikmen.kemdikbud.go.id/" target="_blank" class="animate">Helpdesk</a></li>
                        <li><a href="/laman/tentang" class="animate">Tentang</a></li>
                    </ul>
                </li>
                            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" class="dropdown-toggle animate " data-toggle="dropdown">Login <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="https://datadik.kemdikbud.go.id" target="_blank" class="animate">Manajemen Dinas</a></li>
                        <li><a href="https://sp.datadik.kemdikbud.go.id" target="_blank" class="animate">Manajemen Sekolah</a></li>
                        <li><a href="https://ptk.datadik.kemdikbud.go.id" target="_blank" class="animate">Individual GTK</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END NAVIGATION CONTENT -->
<div class="container isi">
        
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body card-padding-sm">
                    <h3 class="text-center" style="margin-top: 0;">
                        Perpanjangan Waktu Cut Off Pengiriman Data PMP 2017<br>
                        <small style="font-size: 17px; line-height: 2.0;">
                            Batas waktu : <strong>20 Oktober 2017 Pkl 23:59 </strong> <br>
                            <a href="http://pmp.dikdasmen.kemdikbud.go.id/berita/perpanjangan-waktu-cut-off-pengiriman-data-pmp-2017" target="_blank" title="Perpanjangan Waktu Cut-Off Pengiriman Data PMP 2017">
                                (Informasi Selengkapnya)
                            </a>
                        </small>
                    </h3>
                    <h4 id="countdownPMP"></h4>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="col-md-12">
        <div class="card">
            <div class="card-body card-padding-sm">
                <h3 class="text-center" style="margin-top: 0;">Batas Waktu Cut Off BOS<br>
                    <small style="font-size: 17px; line-height: 2.0;">Batas waktu : <strong>31 Agustus 2021 Pkl 23:59 </strong><br>(Permendikbud No. 8 tahun 2020)</small>
                </h3>
                <h4 id="countCutOffBos"></h4>
            </div>
        </div>
    </div> -->
    <!-- <div class="col-md-12">
        <div class="card">
            <div class="card-body card-padding-sm">
                <h3 class="text-center" style="margin-top: 0;">Batas Waktu Cut Off BOP<br>
                    <small style="font-size: 17px; line-height: 2.0;">Batas waktu : <strong>30 September 2021 Pkl 23:59 </strong><br>(Permendikbud No. 9 tahun 2021)</small>
                </h3>
                <h4 id="countCutOffBop"></h4>
            </div>
        </div>
    </div> -->

    <!-- <div class="col-md-12">
        <div class="card">
            <div class="card-body card-padding-sm">
                <h3 class="text-center" style="margin-top: 0;">Batas Akhir Pengambilan Data Dapodik <br/>untuk Calon Peserta Pendidikan Profesi Guru (PPG) tahun 2022<br>
                    <small style="font-size: 17px; line-height: 2.0;">Batas waktu : <strong>30 Januari 2022 Pkl 23:59 </strong></small>
                </h3>
                <h4 id="countDownTime"></h4>
            </div>
        </div>
    </div> -->

    <!-- <div class="col-md-12">
        <div class="card">
            <div class="card-body card-padding-sm">
                <h3 class="text-center" style="margin-top: 0;">Batas Akhir Sinkronisasi T.A 2020/2021 Semester Genap<br>
                    <small style="font-size: 17px; line-height: 2.0;">Batas waktu : <strong>30 Juni 2021 Pkl 23:59 </strong></small>
                </h3>
                <h4 id="countDownTimeSync"></h4>
            </div>
        </div>
    </div> -->

    <!-- <div class="col-md-12">
        <div class="card">
            <div class="card-body card-padding-sm">
                <h3 class="text-center" style="margin-top: 0;">Informasi Layanan Dapodik<br/><br/>
                    <small style="font-size: 17px; line-height: 1.0;"><strong>
                        Sehubungan dengan peningkatan layanan infrastruktur Dapodik, maka dengan ini akan berdampak pada terganggunya pengiriman data/sinkronisasi dengan rentang waktu antara Kamis, 17 Februari 2022 pukul 10.00 WIB sampai dengan 17.00 WIB.
                    </strong></small>
                </h3>
            </div>
        </div>
    </div> -->

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="alert alert-success text-center">
                        <a href="http://datadik.kemdikbud.go.id/" target="_blank"
							class="alert-link text-15"><img src="https://dapo.kemdikbud.go.id/assets/img/icon/bar-chart.png" alt="" class="img-responsive " width="50%"></a>
							<a href="https://datadik.kemdikbud.go.id/acc/login" target="_blank"
							class="alert-link text-15"><strong>Manajemen <br> Dapodik</strong></a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="alert alert-warning text-center">
                        <a href="http://bos.kemdikbud.go.id/" target="_blank" class="alert-link text-15"><img
                                    src="https://dapo.kemdikbud.go.id/assets/img/icon/user.png" alt="" class="img-responsive"
                                    width="50%"></a>
                        <a href="http://bos.kemdikbud.go.id/" target="_blank" class="alert-link text-15"><strong>Info
                                <br>
                                BOS</strong></a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="alert alert-info text-center">
                        <a href="http://pmp.kemdikbud.go.id/" target="_blank" class="alert-link text-15"><img
                                    src="https://dapo.kemdikbud.go.id/assets/img/icon/document.png" alt="" class="img-responsive"
                                    width="50%"></a>
                        <a href="http://pmp.kemdikbud.go.id/" target="_blank"
                           class="alert-link text-15"><strong>
                                PMP
                                <br> Dikdasmen</strong></a>
                                                                                                                                                                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="alert alert-primary text-center">
                        <a href="https://simdak.dikdasmen.kemdikbud.go.id/" target="_blank"
                           class="alert-link text-15"><img
                                    src="https://dapo.kemdikbud.go.id/assets/img/icon/briefcase.png" alt="" class="img-responsive"
                                    width="50%"></a>
                        <a href="https://simdak.dikdasmen.kemdikbud.go.id/" target="_blank"
                           class="alert-link text-15"><strong>Dana
                                Alokasi <br>Khusus</strong></a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 ">
                    <div class="alert alert-danger text-center">
                        <a href="http://pip.kemdikbud.go.id:8080/sipintar/" target="_blank"
                           class="alert-link text-15"><img
                                    src="https://dapo.kemdikbud.go.id/assets/img/icon/pencil.png" alt="" class="img-responsive"
                                    width="50%"></a>
                        <a href="https://pip.kemdikbud.go.id/index/summary" target="_blank"
                           class="alert-link text-15"><strong>PIP
                                <br>Dikdasmen</strong></a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="alert alert-biru text-center">
                        <a href="https://pusdatin.kemdikbud.go.id/" target="_blank" class="alert-link text-15"><img
                                    src="https://dapo.kemdikbud.go.id/assets/img/icon/key.png" alt="" class="img-responsive"
                                    width="50%"></a>
                        <a href="https://pusdatin.kemdikbud.go.id/" target="_blank"
                           class="alert-link text-15"><strong>Situs<br>
                                Pusdatin</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-blue ch-alt">
                    <h2>Peta Sebaran Tingkat Kepadatan Jumlah Sekolah Per Provinsi</h2>
                </div>
                <div id="map"></div>
            </div>
        </div>
    </div -->

    <!-- Rekap Utama & Sambutan -->
    <div class="row">
        <!-- Rekap Total -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header border-blue ch-alt">
                    <h2>Rekapitulasi Data Pokok Pendidikan Nasional</h2>
                    <div class="ch-widget">
                        <select class="pull-right form-control" id="semesterId" title="Pilih Semester">
                            <option value="20212" disabled>Pilih Semester</option>
                            <option value="20212" selected>Semester 2021/2022 Genap</option>
                            <option value="20211">2021/2022 Ganjil</option>
                            <option value="20202">2020/2021 Genap</option>
                            <option value="20201">2020/2021 Ganjil</option>
                            <option value="20192">2019/2020 Genap</option>
                            <option value="20191">2019/2020 Ganjil</option>
                            <!-- <option value="20182">2018/2019 Genap</option>
                            <option value="20181">2018/2019 Ganjil</option>
                            <option value="20172">2017/2018 Genap</option>
                            <option value="20171">2017/2018 Ganjil</option>
                            <option value="20162">2016/2017 Genap</option>
                            <option value="20161">2016/2017 Ganjil</option>
                            <option value="20152">2015/2016 Genap</option>
                            <option value="20151">2015/2016 Ganjil</option>
                            <option value="20142">2014/2015 Genap</option>
                            <option value="20141">2014/2015 Ganjil</option> -->
                        </select>
                    </div>
                </div>
                <div class="card-body card-padding-sm">
                    <p class="text-center">
                        Rekap Nasional
                        <small class="semester-label">2015/2016 Genap</small>
                        <br>
                        Per <strong><span class="tanggal-sekarang-label"></span></strong>
                    </p>
                    <div class="main-rekap">
                        <div class="loader"></div>
                    </div>
                    <p>*: Guru dan Tendik yang masuk dalam penghitungan rekap adalah Guru dan Tendik yang sudah mendapat
                        penugasan, berstatus aktif dan terdaftar di sekolah induk</p>
                </div>
            </div>
        </div>
        <!-- Sambutan Dirjen Dikdasmen -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header border-blue ch-alt">
                    <h2>Sambutan Dirjen PAUD, Dikdas, dan Dikmen</h2>
                </div>
                <div class="card-body card-padding-sm">
                    <p><img src="https://dapo.kemdikbud.go.id/assets/img/dirjen-dikdasmen.jpg" alt="Dirjen Dikdasmen"
                            class="img-responsive" width="60%" height="60%"></p>
                    <p>Puji syukur kita panjatkan ke hadirat Tuhan Yang Maha Kuasa atas penerbitan Peraturan Menteri
                        Pendidikan dan Kebudayaan RI Nomor 79 Tahun 2015 tentang Data Pokok Pendidikan. <a
                                href="/laman/sambutan" target="_blank">(Baca selengkapnya)</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Konten Main -->
        <div class="col-md-8 main-content">

            <!-- Berita -->
            <div class="row berita">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header border-blue ch-alt">
                            <h2>Berita Seputar Dapodik</h2>
                        </div>
                        <div class="card-body card-padding-lg berita">
                                                                                    <div class="row">
                                                                    <div class="media">
                                        <a class="pull-left" href="/berita/surat-kelengkapan-data-an-2021">
                                            <img src="/files/thumbnail surat_Artboard 3.png" alt="Surat Kelengkapan data AN 2021" class="img-responsive"
                                                 width="200" height="200">
                                        </a>
                                        <div class="media-body">
                                            <a href="/berita/surat-kelengkapan-data-an-2021"><h3
                                                        class="media-heading">Surat Kelengkapan data AN 2021</h3></a>
                                            <ul class="list-inline list-unstyled">
                                                <li><span><i class="glyphicon glyphicon-user"></i> Admin </span></li>
                                                <li>|</li>
                                                <li><span><i class="glyphicon glyphicon-calendar"></i> 08 Maret 2022 </span>
                                                </li>
                                                <li>|</li>
                                                <li><span><i class="glyphicon glyphicon-tag"></i> Informasi </span>
                                                </li>
                                            </ul>
                                            Yth. Bapak/Ibu

Kepala Dinas Pendidikan Provinsi
Kepala Cabang Dinas Pendidikan Provinsi
Kepala Dinas Pendidikan Kabupaten/Kota
Kepala LPMP
Kepala PP/BP PAUD dan Dikmas
Kepala Satuan Pendidikan

di seluruh Indonesia
Assalamualaikum warahmat... <a
                                                    href="/berita/surat-kelengkapan-data-an-2021" title="Surat Kelengkapan data AN 2021">(Baca
                                                Selengkapnya)</a>
                                                                                    </div>
                                    </div>

                                    <hr>
                                                                    <div class="media">
                                        <a class="pull-left" href="/berita/pembaruan-data-pokok-pendidikan-tahun-2022-dalam-rangka-evaluasi-2021-dan-perencanaan-2023-dak-fisik-pendidikan">
                                            <img src="/files/thumbnail surat_Artboard 3.png" alt="Pembaruan Data Pokok Pendidikan Tahun 2022 dalam rangka Evaluasi 2021 dan Perencanaan 2023 DAK Fisik Pendidikan" class="img-responsive"
                                                 width="200" height="200">
                                        </a>
                                        <div class="media-body">
                                            <a href="/berita/pembaruan-data-pokok-pendidikan-tahun-2022-dalam-rangka-evaluasi-2021-dan-perencanaan-2023-dak-fisik-pendidikan"><h3
                                                        class="media-heading">Pembaruan Data Pokok Pendidikan Tahun 2022 dalam rangka Evaluasi 2021 dan Perencanaan 2023 DAK Fisik Pendidikan</h3></a>
                                            <ul class="list-inline list-unstyled">
                                                <li><span><i class="glyphicon glyphicon-user"></i> Admin </span></li>
                                                <li>|</li>
                                                <li><span><i class="glyphicon glyphicon-calendar"></i> 07 Maret 2022 </span>
                                                </li>
                                                <li>|</li>
                                                <li><span><i class="glyphicon glyphicon-tag"></i> Informasi </span>
                                                </li>
                                            </ul>
                                            Yth. Bapak/Ibu

Kepala Dinas Pendidikan Provinsi
Kepala Cabang Dinas Pendidikan Provinsi
Kepala Dinas Pendidikan Kabupaten/Kota
Kepala LPMP
Kepala PP/BP PAUD dan Dikmas
Kepala Satuan Pendidikan

di seluruh Indonesia
Assalamualaikum warahmat... <a
                                                    href="/berita/pembaruan-data-pokok-pendidikan-tahun-2022-dalam-rangka-evaluasi-2021-dan-perencanaan-2023-dak-fisik-pendidikan" title="Pembaruan Data Pokok Pendidikan Tahun 2022 dalam rangka Evaluasi 2021 dan Perencanaan 2023 DAK Fisik Pendidikan">(Baca
                                                Selengkapnya)</a>
                                                                                    </div>
                                    </div>

                                    <hr>
                                                                    <div class="media">
                                        <a class="pull-left" href="/berita/pembaruan-aplikasi-dapodik-versi-2022-d-rapor-dapodik">
                                            <img src="/files/thumbnail surat_Artboard 3.png" alt="Pembaruan Aplikasi Dapodik Versi 2022.d* Rapor Dapodik" class="img-responsive"
                                                 width="200" height="200">
                                        </a>
                                        <div class="media-body">
                                            <a href="/berita/pembaruan-aplikasi-dapodik-versi-2022-d-rapor-dapodik"><h3
                                                        class="media-heading">Pembaruan Aplikasi Dapodik Versi 2022.d* Rapor Dapodik</h3></a>
                                            <ul class="list-inline list-unstyled">
                                                <li><span><i class="glyphicon glyphicon-user"></i> Admin </span></li>
                                                <li>|</li>
                                                <li><span><i class="glyphicon glyphicon-calendar"></i> 07 Maret 2022 </span>
                                                </li>
                                                <li>|</li>
                                                <li><span><i class="glyphicon glyphicon-tag"></i> Informasi </span>
                                                </li>
                                            </ul>
                                            Yth. Bapak/Ibu

Kepala Dinas Pendidikan Provinsi
Kepala Cabang Dinas Pendidikan Provinsi
Kepala Dinas Pendidikan Kabupaten/Kota
Kepala LPMP
Kepala PP/BP PAUD dan Dikmas
Kepala Satuan Pendidikan

di seluruh Indonesia
Assalamualaikum warahmat... <a
                                                    href="/berita/pembaruan-aplikasi-dapodik-versi-2022-d-rapor-dapodik" title="Pembaruan Aplikasi Dapodik Versi 2022.d* Rapor Dapodik">(Baca
                                                Selengkapnya)</a>
                                                                                    </div>
                                    </div>

                                    <hr>
                                                                    <div class="media">
                                        <a class="pull-left" href="/berita/pemutakhiran-data-kerusakan-bangunan-sarana-prasarana">
                                            <img src="/files/berita sarpras-02.png" alt="Pemutakhiran Data Kerusakan Bangunan (Sarana Prasarana)" class="img-responsive"
                                                 width="200" height="200">
                                        </a>
                                        <div class="media-body">
                                            <a href="/berita/pemutakhiran-data-kerusakan-bangunan-sarana-prasarana"><h3
                                                        class="media-heading">Pemutakhiran Data Kerusakan Bangunan (Sarana Prasarana)</h3></a>
                                            <ul class="list-inline list-unstyled">
                                                <li><span><i class="glyphicon glyphicon-user"></i> Admin </span></li>
                                                <li>|</li>
                                                <li><span><i class="glyphicon glyphicon-calendar"></i> 25 Februari 2022 </span>
                                                </li>
                                                <li>|</li>
                                                <li><span><i class="glyphicon glyphicon-tag"></i> Informasi </span>
                                                </li>
                                            </ul>
                                            Yth. Bapak/Ibu

Kepala Dinas Pendidikan Provinsi
Kepala Cabang Dinas Pendidikan Provinsi
Kepala Dinas Pendidikan Kabupaten/Kota
Kepala LPMP
Kepala PP/BP PAUD dan Dikmas
Kepala Satuan Pendidikan

di seluruh Indonesia
Assalamualaikum warahmat... <a
                                                    href="/berita/pemutakhiran-data-kerusakan-bangunan-sarana-prasarana" title="Pemutakhiran Data Kerusakan Bangunan (Sarana Prasarana)">(Baca
                                                Selengkapnya)</a>
                                                                                    </div>
                                    </div>

                                    <hr>
                                                                    <div class="media">
                                        <a class="pull-left" href="/berita/pembaruan-aplikasi-dapodik-versi-2022-d">
                                            <img src="/files/Dapodik 2022_2.png" alt="Pembaruan Aplikasi Dapodik Versi 2022.d" class="img-responsive"
                                                 width="200" height="200">
                                        </a>
                                        <div class="media-body">
                                            <a href="/berita/pembaruan-aplikasi-dapodik-versi-2022-d"><h3
                                                        class="media-heading">Pembaruan Aplikasi Dapodik Versi 2022.d</h3></a>
                                            <ul class="list-inline list-unstyled">
                                                <li><span><i class="glyphicon glyphicon-user"></i> Admin </span></li>
                                                <li>|</li>
                                                <li><span><i class="glyphicon glyphicon-calendar"></i> 23 Februari 2022 </span>
                                                </li>
                                                <li>|</li>
                                                <li><span><i class="glyphicon glyphicon-tag"></i> Informasi </span>
                                                </li>
                                            </ul>
                                            Yth. Bapak/Ibu

Kepala Dinas Pendidikan Provinsi
Kepala Cabang Dinas Pendidikan Provinsi
Kepala Dinas Pendidikan Kabupaten/Kota
Kepala LPMP
Kepala PP/BP PAUD dan Dikmas
Kepala Satuan Pendidikan

di seluruh Indonesia
Assalamualaikum warahmat... <a
                                                    href="/berita/pembaruan-aplikasi-dapodik-versi-2022-d" title="Pembaruan Aplikasi Dapodik Versi 2022.d">(Baca
                                                Selengkapnya)</a>
                                                                                    </div>
                                    </div>

                                    <hr>
                                                            </div>

                            <div class="row">
                                <div class="col-md-7">
                                    <a href="/berita" style="font-size: 20px; width: 100%; text-align:center;" class="btn btn-raised btn-info">
                                        <i class="fa fa-newspaper-o"></i> Berita Selengkapnya
                                    </a>
                                </div>
                                <div class="col-md-5">
                                    <a href="/berita/arsip" style="font-size: 20px; width: 100%; text-align:center;" class="btn btn-raised btn-warning">
                                        <i class="fa fa-archive"></i> Arsip Berita
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Konten Sidebar -->
        <div class="col-md-4">

            <!-- Kalender Kegiatan -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header border-blue ch-alt">
                            <h2>Kalender Pendataan</h2>
                        </div>
                        <div class="card-body card-padding-sm">
                            <div id="eventCalendarDefault"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Foto Gallery -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header border-blue ch-alt">
                            <h2>Foto Gallery</h2>
                        </div>
                        <div class="card-body card-padding-sm">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                    <li data-target="#myCarousel" data-slide-to="3"></li>
                                    <li data-target="#myCarousel" data-slide-to="4"></li>
                                    <li data-target="#myCarousel" data-slide-to="5"></li>
                                    <li data-target="#myCarousel" data-slide-to="6"></li>
                                    <li data-target="#myCarousel" data-slide-to="7"></li>
                                    <li data-target="#myCarousel" data-slide-to="8"></li>
                                    <li data-target="#myCarousel" data-slide-to="9"></li>
                                    <li data-target="#myCarousel" data-slide-to="10"></li>
                                    <li data-target="#myCarousel" data-slide-to="11"></li>
                                    <li data-target="#myCarousel" data-slide-to="12"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <a href="https://dapo.kemdikbud.go.id/assets/img/gallery/gallery-1.jpg"
                                           data-lightbox="gallery">
                                            <img src="https://dapo.kemdikbud.go.id/assets/img/gallery/thumb/gallery-thumb-1.jpg"
                                                 class="img-responsive" alt="">
                                        </a>
                                    </div>

                                    <div class="item">
                                        <a href="https://dapo.kemdikbud.go.id/assets/img/gallery/gallery-2.jpg"
                                           data-lightbox="gallery">
                                            <img src="https://dapo.kemdikbud.go.id/assets/img/gallery/thumb/gallery-thumb-2.jpg" alt=""
                                                 class="img-responsive">
                                        </a>
                                    </div>

                                    <div class="item">
                                        <a href="https://dapo.kemdikbud.go.id/assets/img/gallery/gallery-3.jpg"
                                           data-lightbox="gallery">
                                            <img src="https://dapo.kemdikbud.go.id/assets/img/gallery/thumb/gallery-thumb-3.jpg" alt=""
                                                 class="img-responsive">
                                        </a>
                                    </div>

                                    <div class="item">
                                        <a href="https://dapo.kemdikbud.go.id/assets/img/gallery/gallery-4.jpg"
                                           data-lightbox="gallery">
                                            <img src="https://dapo.kemdikbud.go.id/assets/img/gallery/thumb/gallery-thumb-4.jpg" alt=""
                                                 class="img-responsive">
                                        </a>
                                    </div>

                                    <div class="item">
                                        <a href="https://dapo.kemdikbud.go.id/assets/img/gallery/gallery-5.jpg"
                                           data-lightbox="gallery">
                                            <img src="https://dapo.kemdikbud.go.id/assets/img/gallery/thumb/gallery-thumb-5.jpg" alt=""
                                                 class="img-responsive">
                                        </a>
                                    </div>

                                    <div class="item">
                                        <a href="https://dapo.kemdikbud.go.id/assets/img/gallery/gallery-6.jpg"
                                           data-lightbox="gallery">
                                            <img src="https://dapo.kemdikbud.go.id/assets/img/gallery/thumb/gallery-thumb-6.jpg" alt=""
                                                 class="img-responsive">
                                        </a>
                                    </div>

                                    <div class="item">
                                        <a href="https://dapo.kemdikbud.go.id/assets/img/gallery/gallery-7.jpg"
                                           data-lightbox="gallery">
                                            <img src="https://dapo.kemdikbud.go.id/assets/img/gallery/thumb/gallery-thumb-7.jpg" alt=""
                                                 class="img-responsive">
                                        </a>
                                    </div>

                                    <div class="item">
                                        <a href="https://dapo.kemdikbud.go.id/assets/img/gallery/gallery-8.jpg"
                                           data-lightbox="gallery">
                                            <img src="https://dapo.kemdikbud.go.id/assets/img/gallery/thumb/gallery-thumb-8.jpg" alt=""
                                                 class="img-responsive">
                                        </a>
                                    </div>

                                    <div class="item">
                                        <a href="https://dapo.kemdikbud.go.id/assets/img/gallery/gallery-9.jpg"
                                           data-lightbox="gallery">
                                            <img src="https://dapo.kemdikbud.go.id/assets/img/gallery/thumb/gallery-thumb-9.jpg" alt=""
                                                 class="img-responsive">
                                        </a>
                                    </div>

                                    <div class="item">
                                        <a href="https://dapo.kemdikbud.go.id/assets/img/gallery/gallery-10.jpg"
                                           data-lightbox="gallery">
                                            <img src="https://dapo.kemdikbud.go.id/assets/img/gallery/thumb/gallery-thumb-10.jpg"
                                                 alt=""
                                                 class="img-responsive">
                                        </a>
                                    </div>

                                    <div class="item">
                                        <a href="https://dapo.kemdikbud.go.id/assets/img/gallery/gallery-11.jpg"
                                           data-lightbox="gallery">
                                            <img src="https://dapo.kemdikbud.go.id/assets/img/gallery/thumb/gallery-thumb-11.jpg"
                                                 alt=""
                                                 class="img-responsive">
                                        </a>
                                    </div>

                                    <div class="item">
                                        <a href="https://dapo.kemdikbud.go.id/assets/img/gallery/gallery-12.jpg"
                                           data-lightbox="gallery">
                                            <img src="https://dapo.kemdikbud.go.id/assets/img/gallery/thumb/gallery-thumb-12.jpg"
                                                 alt=""
                                                 class="img-responsive">
                                        </a>
                                    </div>

                                    <div class="item">
                                        <a href="https://dapo.kemdikbud.go.id/assets/img/gallery/gallery-13.jpg"
                                           data-lightbox="gallery">
                                            <img src="https://dapo.kemdikbud.go.id/assets/img/gallery/thumb/gallery-thumb-13.jpg"
                                                 alt=""
                                                 class="img-responsive">
                                        </a>
                                    </div>

                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                                                    </div>
                        <div style="width: 100%; height: 20px;"></div>
                    </div>
                </div>
            </div>


            
            
            
            
            
            
            <!-- Jumlah Sinkronisasi 10 Hari Terakhir -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header border-blue ch-alt">
                            <h2>Jumlah Sinkronisasi 10 Hari Terakhir</h2>
                        </div>
                        <div class="card-body card-padding-sm">
                            <table class="table table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th class="text-right">Jumlah</th>
                                </tr>
                                </thead>
                                <tbody>
                                                                                                    <tr>
                                        <td>1</td>
                                        <td>08 Maret 2022</td>
                                        <td class="text-right"><strong>41.974</strong></td>
                                    </tr>
                                                                    <tr>
                                        <td>2</td>
                                        <td>07 Maret 2022</td>
                                        <td class="text-right"><strong>30.757</strong></td>
                                    </tr>
                                                                    <tr>
                                        <td>3</td>
                                        <td>06 Maret 2022</td>
                                        <td class="text-right"><strong>11.921</strong></td>
                                    </tr>
                                                                    <tr>
                                        <td>4</td>
                                        <td>05 Maret 2022</td>
                                        <td class="text-right"><strong>20.208</strong></td>
                                    </tr>
                                                                    <tr>
                                        <td>5</td>
                                        <td>04 Maret 2022</td>
                                        <td class="text-right"><strong>16.628</strong></td>
                                    </tr>
                                                                    <tr>
                                        <td>6</td>
                                        <td>03 Maret 2022</td>
                                        <td class="text-right"><strong>6.678</strong></td>
                                    </tr>
                                                                    <tr>
                                        <td>7</td>
                                        <td>02 Maret 2022</td>
                                        <td class="text-right"><strong>12.852</strong></td>
                                    </tr>
                                                                    <tr>
                                        <td>8</td>
                                        <td>01 Maret 2022</td>
                                        <td class="text-right"><strong>13.382</strong></td>
                                    </tr>
                                                                    <tr>
                                        <td>9</td>
                                        <td>28 Februari 2022</td>
                                        <td class="text-right"><strong>11.257</strong></td>
                                    </tr>
                                                                    <tr>
                                        <td>10</td>
                                        <td>27 Februari 2022</td>
                                        <td class="text-right"><strong>6.873</strong></td>
                                    </tr>
                                                                    <tr>
                                        <td>11</td>
                                        <td>26 Februari 2022</td>
                                        <td class="text-right"><strong>9.117</strong></td>
                                    </tr>
                                                                                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Grafik Sinkronisasi -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-blue ch-alt">
                    <h2>Grafik Jumlah Sinkronisasi 30 Hari Terakhir</h2>
                </div>
                <div class="card-body card-padding-bg">
                    <div id="chartKirimBulanan" style="width: 100%; height: 422px;">
                        <div class="loader"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Peringkat Sinkronisasi Propinsi -->
    <div class="row">
        <!-- 10 Teratas  -->
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header border-blue ch-alt">
                    <h2>10 Teratas Sinkronisasi Propinsi
                        <small class="semester-label">2015/2016 Genap</small>
                    </h2>
                </div>
                <div id="progresTop10Prop">
                    <div class="loader"></div>
                </div>
                <a href="/progres" class="btn btn-raised btn-info">
                    Peringkat Selengkapnya
                </a>
            </div>
        </div>
        <!-- 10 Teratas -->
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header border-blue ch-alt">
                    <h2>10 Teratas Sinkronisasi Kabupaten
                        <small class="semester-label">2015/2016 Genap</small>
                    </h2>
                </div>
                <div id="progresTop10Kab">
                    <div class="loader"></div>
                </div>
                <a href="/progres" class="btn btn-raised btn-info">
                    Peringkat Selengkapnya
                </a>
            </div>
        </div>
        <!-- 10 Terbawah -->
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header border-blue ch-alt">
                    <h2>10 Terbawah Sinkronisasi Propinsi
                        <small class="semester-label">2015/2016 Genap</small>
                    </h2>
                </div>
                <div id="progresBottom10Prop">
                    <div class="loader"></div>
                </div>
                <a href="/progres" class="btn btn-raised btn-info">
                    Peringkat Selengkapnya
                </a>
            </div>
        </div>
        <!-- 10 Terbawah -->
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header border-blue ch-alt">
                    <h2>10 Terbawah Sinkronisasi Kabupaten
                        <small class="semester-label">2015/2016 Genap</small>
                    </h2>
                </div>
                <div id="progresBottom10Kab">
                    <div class="loader"></div>
                </div>
                <a href="/progres" class="btn btn-raised btn-info">
                    Peringkat Selengkapnya
                </a>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myInfo" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h2 class="modal-title">PENGUMUMAN</h2>
            </div>
            <div id="m1" class="modal-body clearfix">
                <!-- Dalam Rangka Pemeliharaan Sistem dan Jaringan, maka seluruh layanan Dapodik akan mengalami <i>downtime</i> mulai <b>Jumat, 13 Agustus 2021, pukul 22.00 WIB hingga Sabtu, 14 Agustus 2021, pukul 01.00 WIB</b> -->

                Sehubungan dengan peningkatan layanan infrastruktur Dapodik, maka dengan ini akan berdampak pada terganggunya pengiriman data/sinkronisasi mulai <b>Kamis, 17 Februari 2022 pukul 10.00 WIB hingga pukul 17.00 WIB.</b>

                <br>Mohon maaf atas ketidaknyamanan ini, terima kasih.

                <br><br>Tim Dapodik
            </div>  
          </div>
        </div>
    </div>

        </div>
<!-- END CONTENT -->

<div class="container-fluid">
    </div>

<!-- FOOTER -->
<div class="footer">
    <div class="container">
        <div class="row">

            <div class="col-xs-6 col-md-3">
                <h4>LAYANAN</h4>
                <ul>
                    <li><a href="http://referensi.data.kemdikbud.go.id/index.php" title="Data Referensi Dikbud" target="_blank">Data Referensi Dikbud</a></li>
                    <li><a href="https://bansm.kemdikbud.go.id/akreditasi" title="Akreditasi Sekolah" target="_blank">Akreditasi Sekolah</a></li>
                    <li><a href="https://bos.kemdikbud.go.id/" title="info BOS" target="_blank">info BOS</a></li>
                    <li><a href="http://perpustakaan.kemdikbud.go.id/" title="Perpustakaan" target="_blank">Perpustakaan</a></li>
                    <li><a href="http://belajar.kemdikbud.go.id/" title="Rumah Belajar" target="_blank">Rumah Belajar</a></li>
                </ul>
            </div>

            <div class="col-xs-6 col-md-3">
                <h4>UNIT UTAMA</h4>

                <ul>
                    <li><a href="http://kemdikbud.go.id/" title="Kemdikbud" target="_blank">Kemdikbud</a></li>
                    <li><a href="http://setjen.kemdikbud.go.id/" title="Sekretariat Jenderal" target="_blank">Sekretariat Jenderal</a></li>
                                        <li><a href="#" title="Ditjen Kebudayaan" target="_blank">Ditjen Vokasi</a></li>
                    <li><a href="http://kebudayaan.kemdikbud.go.id/" title="Ditjen Kebudayaan" target="_blank">Ditjen Kebudayaan</a></li>
                </ul>
            </div>

            <div class="col-xs-6 col-md-3">
                <h4>DIREKTORAT</h4>

                <ul>
                    <li><a href="http://ditpsd.dikdas.kemdikbud.go.id/" title="Direktorat SD" target="_blank">Direktorat SD</a></li>
                    <li><a href="http://ditpsmp.kemdikbud.go.id/" title="Direktorat SMP" target="_blank">Direktorat SMP</a></li>
                    <li><a href="http://psma.kemdikbud.go.id/" title="Direktorat SMA" target="_blank">Direktorat SMA</a></li>
                    <li><a href="http://psmk.kemdikbud.go.id/" title="Direktorat SMK" target="_blank">Direktorat SMK</a></li>
                    <li><a href="http://pklk.kemdikbud.go.id/" title="Direktorat PK-LK" target="_blank">Direktorat PK-LK</a></li>
                </ul>
            </div>

            <div class="col-xs-6 col-md-3">
                <h4>HUBUNGI KAMI</h4>
                <p>Direktorat Jenderal Pendidikan Anak Usia Dini, Pendidikan Dasar dan Pendidikan Menengah</p>
                <p><strong>Kompleks Kemdikbud Gedung E Lantai 5</strong> <br>
                    Jl. Jenderal Sudirman Senayan Jakarta, 10270</p>
            </div>
        </div>
    </div>
</div>
<!-- END FOOTER -->

<!-- COPYRIGHT -->
<div class="copyright" style="margin-bottom:-20px;">
    <p class="text-center">Hak Cipta &copy; Bidang Pembinaan SMK, Dinas Pendidikan Aceh 2022</p>
</div>
<!-- END COPYRIGHT -->
<!-- SSK Share Buttons -->
<div class="ssk-sticky ssk-left ssk-center ssk-md">
    <a href="" class="ssk ssk-facebook"></a>
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
<script type="text/javascript" src="https://dapo.kemdikbud.go.id/assets/libs/jquery/jquery-1.11.3.min.js"></script>
<!-- DataTables -->
<script type="text/javascript" src="https://dapo.kemdikbud.go.id/assets/libs/datatables/extensions/jszip/jszip.min.js"></script>
<script type="text/javascript" src="https://dapo.kemdikbud.go.id/assets/libs/datatables/extensions/pdfmake/pdfmake.js"></script>
<script type="text/javascript" src="https://dapo.kemdikbud.go.id/assets/libs/datatables/extensions/pdfmake/vfs_fonts.min.js"></script>
<script type="text/javascript" src="https://dapo.kemdikbud.go.id/assets/libs/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://dapo.kemdikbud.go.id/assets/libs/datatables/extensions/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://dapo.kemdikbud.go.id/assets/libs/datatables/extensions/buttons.colVis.min.js"></script>
<script type="text/javascript" src="https://dapo.kemdikbud.go.id/assets/libs/datatables/extensions/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://dapo.kemdikbud.go.id/assets/libs/datatables/extensions/buttons.print.min.js"></script>
<script type="text/javascript" src="https://dapo.kemdikbud.go.id/assets/libs/datatables/extensions/dataTables.select.min.js"></script>

<!-- Bootstrap & Material Design -->
<script src="https://dapo.kemdikbud.go.id/assets/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="https://dapo.kemdikbud.go.id/assets/libs/bootstrap-material-design/js/material.min.js"></script>
<script src="https://dapo.kemdikbud.go.id/assets/libs/bootstrap-material-design/js/ripples.min.js"></script>
<!-- Social Media Sharing Tool -->
<script src="https://dapo.kemdikbud.go.id/assets/js/social-share-kit.js"></script>
<!-- Charting -->
<script src="https://dapo.kemdikbud.go.id/assets/libs/amcharts/amcharts.js"></script>
<script src="https://dapo.kemdikbud.go.id/assets/libs/amcharts/plugins/export/export.min.js"></script>
<script src="https://dapo.kemdikbud.go.id/assets/libs/amcharts/themes/light.js"></script>

<!-- Main -->
<script src="https://dapo.kemdikbud.go.id/assets/js/functions.min.js"></script>
<script src="https://dapo.kemdikbud.go.id/assets/js/main.min.js"></script>

<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3539813&101" alt="" border="0"></a></noscript>
<!-- Matomo -->
<script type="text/javascript">
    ;(function(d, s, c) {
        var j = d.createElement(s),
        t = d.getElementsByTagName(s)[0]
        j.src = 'https://unpkg.com/@elastic/apm-rum@5.8.0/dist/bundles/elastic-apm-rum.umd.min.js'
        j.onload = function() {elasticApm.init(c)}
        t.parentNode.insertBefore(j, t)
    })(document, 'script', {serviceName: 'Portal-Dapo', serverUrl: 'https://dapo-log.kemdikbud.go.id', environment: 'production'})
</script>

<!-- Additional Plugins -->
    <script src="https://dapo.kemdikbud.go.id/assets/libs/jquery-marquee/js/jquery.marquee.min.js" type="text/javascript"></script>
    <script src="https://dapo.kemdikbud.go.id/assets/libs/jquery-countdown/js/jquery.plugin.min.js"></script>
    <script src="https://dapo.kemdikbud.go.id/assets/libs/jquery-countdown/js/jquery.countdown.min.js"></script>
    <script src="https://dapo.kemdikbud.go.id/assets/libs/jquery-countdown/js/jquery.countdown-id.min.js"></script>
    <script src="https://dapo.kemdikbud.go.id/assets/libs/jquery-event-calendar/js/jquery.eventCalendar.min.js"></script>
    <script src="https://dapo.kemdikbud.go.id/assets/libs/underscore/underscore.min.js"></script>
    <script src="https://dapo.kemdikbud.go.id/assets/libs/moment/moment.min.js"></script>
    <script src="https://dapo.kemdikbud.go.id/assets/libs/amcharts/serial.js"></script>
    <script src="https://dapo.kemdikbud.go.id/assets/libs/amcharts/pie.js"></script>
    <script src="https://dapo.kemdikbud.go.id/assets/libs/numeral/numeral.min.js"></script>

    <script>
        // pesan perbaikan
        // $(function(){
        //     $('#myModal').modal('show');
        //     $('#myInfo').modal('show');
        //     $('#myInfoVerifikasi').modal('show');
        // });
    </script>

    <script src="/modules/beranda.min.js"></script>


</body>
</html>