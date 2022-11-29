
<?php
	function tanggal_indonesia($tanggal){
		$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
		);
		
		$pecahkan = explode('-', $tanggal);
		
		// variabel pecahkan 0 = tanggal
		// variabel pecahkan 1 = bulan
		// variabel pecahkan 2 = tahun
		return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
	}

	// echo tanggal_indonesia(date('Y-m-d')); // Hasilnya menampilkan format tanggal 11 Oktober 2017
?>

<?php 
	
	function hari_ini(){
		$hari = date ("D");
	
		switch($hari){
			case 'Sun':
				$hari_ini = "Minggu";
			break;
	
			case 'Mon':			
				$hari_ini = "Senin";
			break;
	
			case 'Tue':
				$hari_ini = "Selasa";
			break;
	
			case 'Wed':
				$hari_ini = "Rabu";
			break;
	
			case 'Thu':
				$hari_ini = "Kamis";
			break;
	
			case 'Fri':
				$hari_ini = "Jumat";
			break;
	
			case 'Sat':
				$hari_ini = "Sabtu";
			break;
			
			default:
				$hari_ini = "Tidak di ketahui";		
			break;
		}
	
		return "<b>" . $hari_ini . "</b>";
	
	}
	
	// echo "Hari ini adalah ". hari_ini();
	
?> 

<!-- <div class="row">
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
</div> -->

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="alert alert-success text-center">
                    <a href="hhttp://notfound.id/" target="_blank" class="alert-link text-15"><img src="https://dapo.kemdikbud.go.id/assets/img/icon/bar-chart.png" alt="" class="img-responsive " width="50%"></a>
                    <a href="https://absenku.notfound.id/" target="_blank" class="alert-link text-15"><strong>Presensi <br> Online</strong></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="alert alert-warning text-center">
                    <a href="http://bos.kemdikbud.go.id/" target="_blank" class="alert-link text-15"><img src="https://dapo.kemdikbud.go.id/assets/img/icon/user.png" alt="" class="img-responsive" width="50%"></a>
                    <a href="https://sisy.notfound.id/" target="_blank" class="alert-link text-15"><strong>Info <br> Beasiswa</strong></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="alert alert-info text-center">
                    <a href="http://pmp.kemdikbud.go.id/" target="_blank" class="alert-link text-15"><img
                                src="https://dapo.kemdikbud.go.id/assets/img/icon/document.png" alt="" class="img-responsive"
                                width="50%"></a>
                    <a href="https://sppd.notfound.id/" target="_blank"
                        class="alert-link text-15"><strong>
                            Sppd
                            <br> Dinas</strong></a>
                                                                                                                                                                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="alert alert-primary text-center">
                    <a href="https://simdak.dikdasmen.kemdikbud.go.id/" target="_blank"
                        class="alert-link text-15"><img
                                src="https://dapo.kemdikbud.go.id/assets/img/icon/briefcase.png" alt="" class="img-responsive"
                                width="50%"></a>
                    <a href="https://recloud.notfound.id/" target="_blank"
                        class="alert-link text-15"><strong>Serapan <br>Dana</strong></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 ">
                <div class="alert alert-danger text-center">
                    <a href="http://pip.kemdikbud.go.id:8080/sipintar/" target="_blank"
                        class="alert-link text-15"><img
                                src="https://dapo.kemdikbud.go.id/assets/img/icon/pencil.png" alt="" class="img-responsive"
                                width="50%"></a>
                    <a href="https://ppdb.notfound.id" target="_blank"
                        class="alert-link text-15"><strong>Ppdb
                            <br>Dinas</strong></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="alert alert-biru text-center">
                    <a href="https://pusdatin.kemdikbud.go.id/" target="_blank" class="alert-link text-15"><img
                                src="https://dapo.kemdikbud.go.id/assets/img/icon/key.png" alt="" class="img-responsive"
                                width="50%"></a>
                    <a href="https://notfound.id/" target="_blank"
                        class="alert-link text-15"><strong>Situs<br>
                            Notfound</strong></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-blue border-portal ch-alt">
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
            <div class="card-header border-blue border-portal ch-alt">
                <h2>Rekapitulasi Data SMK Se-Aceh</h2>
                <!-- <div class="ch-widget">
                    <select class="pull-right form-control" id="semesterId" title="Pilih Semester">
                        <option value="20212" disabled>Pilih Semester</option>
                        <option value="20212" selected>Semester 2021/2022 Genap</option>
                        <option value="20211">2021/2022 Ganjil</option>
                        <option value="20202">2020/2021 Genap</option>
                        <option value="20201">2020/2021 Ganjil</option>
                        <option value="20192">2019/2020 Genap</option>
                        <option value="20191">2019/2020 Ganjil</option>
                         <option value="20182">2018/2019 Genap</option>
                        <option value="20181">2018/2019 Ganjil</option>
                        <option value="20172">2017/2018 Genap</option>
                        <option value="20171">2017/2018 Ganjil</option>
                        <option value="20162">2016/2017 Genap</option>
                        <option value="20161">2016/2017 Ganjil</option>
                        <option value="20152">2015/2016 Genap</option>
                        <option value="20151">2015/2016 Ganjil</option>
                        <option value="20142">2014/2015 Genap</option>
                        <option value="20141">2014/2015 Ganjil</option> 
                    </select>
                </div> -->
            </div>
            <div class="card-body card-padding-sm">
                <p class="text-center">
                    Rekap Sekolah
                    <small class="semester-label">
                    <!-- masukin Semester -->
                    </small>
                    <br>
                    Per <strong>
                    <?php
                        date_default_timezone_set("Asia/Jakarta");
                        echo hari_ini(), ", ". tanggal_indonesia(date('Y-m-d'));
                    ?>
                    </strong>
                </p>
                <!-- <div class="main-rekap"> -->
                    <div class="loader"></div>
                <!-- </div> -->
                <p>*: Guru dan Tendik yang masuk dalam penghitungan rekap adalah Guru dan Tendik yang sudah mendapat penugasan, berstatus aktif dan terdaftar di sekolah induk</p>
            </div>
        </div>
    </div>
    <!-- Sambutan Dirjen Dikdasmen -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-header border-blue border-portal ch-alt">
                <h2>Sejarah singkat Matadata Technologi</h2>
            </div>
            <div class="card-body card-padding-sm">
                <p><img src="<?=__img('sejarah.png');?>" alt="Dirjen Dikdasmen" class="img-responsive" width="60%" height="60%"></p>
                <p class="tengah">Matadata Tech merupakan sistem yang berbasis open data bagi siapa saja yang ingin mengambil atau menghubungkan sistem lain dengan sistem matadata tech. Dikembangkan oleh Dwi Satria Pangestu pengembang Notfound Indonesia untuk sebagai Cloud satu data pada tanggal 28 November 2022 <a href="/laman/sambutan" target="_blank" class="color">(Baca selengkapnya)</a></p>
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
                    <div class="card-header border-blue border-portal ch-alt">
                        <h2>Berita Seputar Matadata</h2>
                    </div>
                    <div class="card-body card-padding-lg berita">
                        <div class="row">
                            <div class="media">
                                <a class="pull-left" href="/berita/surat-kelengkapan-data-an-2021">
                                    <img src="<?=__img('contoh.png');?>" alt="Surat Kelengkapan Pengajuan Satu Data" class="img-responsive" width="200" height="200">
                                </a>
                                <div class="media-body">
                                    <a href="/berita/surat-kelengkapan-data-an-2021">
                                        <h3 class="media-heading">Surat Kelengkapan Pengajuan Satu Data</h3>
                                    </a>
                                        <ul class="list-inline list-unstyled">
                                            <li><span><i class="fa fa-user"></i> Matadata </span></li>
                                            <li>|</li>
                                            <li><span><i class="fa fa-calendar"></i> 29 November 2022 </span>
                                            </li>
                                            <li>|</li>
                                            <li><span><i class="fa fa-tag"></i> Informasi </span>
                                            </li>
                                        </ul>
                                        <p class="tengah">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt possimus exercitationem, saepe cumque incidunt impedit, ex, a dolor minima alias expedita quasi cupiditate accusamus debitis amet animi eligendi! Perferendis, exercitationem. 
                                            <a href="/berita/surat-kelengkapan-data-an-2021" title="Surat Kelengkapan data AN 2021">(Baca Selengkapnya)</a>
                                        </p>
                                            
                                </div>
                            </div>
                        </div>
                        <hr>

                        <!-- <div class="row">
                            <div class="media">
                                <a class="pull-left" href="/berita/surat-kelengkapan-data-an-2021">
                                    <img src="<?=__img('contoh.png');?>" alt="Surat Kelengkapan data AN 2021" class="img-responsive" width="200" height="200">
                                </a>
                                <div class="media-body">
                                    <a href="/berita/surat-kelengkapan-data-an-2021">
                                        <h3 class="media-heading">Surat Kelengkapan data AN 2021</h3>
                                    </a>
                                        <ul class="list-inline list-unstyled">
                                            <li><span><i class="fa fa-user"></i> Admin </span></li>
                                            <li>|</li>
                                            <li><span><i class="fa fa-calendar"></i> 08 Maret 2022 </span>
                                            </li>
                                            <li>|</li>
                                            <li><span><i class="fa fa-tag"></i> Informasi </span>
                                            </li>
                                        </ul>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt possimus exercitationem, saepe cumque incidunt impedit, ex, a dolor minima alias expedita quasi cupiditate accusamus debitis amet animi eligendi! Perferendis, exercitationem. 
                                            <a href="/berita/surat-kelengkapan-data-an-2021" title="Surat Kelengkapan data AN 2021">(Baca Selengkapnya)</a>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="media">
                                <a class="pull-left" href="/berita/surat-kelengkapan-data-an-2021">
                                    <img src="<?=__img('contoh.png');?>" alt="Surat Kelengkapan data AN 2021" class="img-responsive" width="200" height="200">
                                </a>
                                <div class="media-body">
                                    <a href="/berita/surat-kelengkapan-data-an-2021">
                                        <h3 class="media-heading">Surat Kelengkapan data AN 2021</h3>
                                    </a>
                                        <ul class="list-inline list-unstyled">
                                            <li><span><i class="fa fa-user"></i> Admin </span></li>
                                            <li>|</li>
                                            <li><span><i class="fa fa-calendar"></i> 08 Maret 2022 </span>
                                            </li>
                                            <li>|</li>
                                            <li><span><i class="fa fa-tag"></i> Informasi </span>
                                            </li>
                                        </ul>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt possimus exercitationem, saepe cumque incidunt impedit, ex, a dolor minima alias expedita quasi cupiditate accusamus debitis amet animi eligendi! Perferendis, exercitationem. 
                                            <a href="/berita/surat-kelengkapan-data-an-2021" title="Surat Kelengkapan data AN 2021">(Baca Selengkapnya)</a>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="media">
                                <a class="pull-left" href="/berita/surat-kelengkapan-data-an-2021">
                                    <img src="<?=__img('contoh.png');?>" alt="Surat Kelengkapan data AN 2021" class="img-responsive" width="200" height="200">
                                </a>
                                <div class="media-body">
                                    <a href="/berita/surat-kelengkapan-data-an-2021">
                                        <h3 class="media-heading">Surat Kelengkapan data AN 2021</h3>
                                    </a>
                                        <ul class="list-inline list-unstyled">
                                            <li><span><i class="fa fa-user"></i> Admin </span></li>
                                            <li>|</li>
                                            <li><span><i class="fa fa-calendar"></i> 08 Maret 2022 </span>
                                            </li>
                                            <li>|</li>
                                            <li><span><i class="fa fa-tag"></i> Informasi </span>
                                            </li>
                                        </ul>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt possimus exercitationem, saepe cumque incidunt impedit, ex, a dolor minima alias expedita quasi cupiditate accusamus debitis amet animi eligendi! Perferendis, exercitationem. 
                                            <a href="/berita/surat-kelengkapan-data-an-2021" title="Surat Kelengkapan data AN 2021">(Baca Selengkapnya)</a>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="media">
                                <a class="pull-left" href="/berita/surat-kelengkapan-data-an-2021">
                                    <img src="<?=__img('contoh.png');?>" alt="Surat Kelengkapan data AN 2021" class="img-responsive" width="200" height="200">
                                </a>
                                <div class="media-body">
                                    <a href="/berita/surat-kelengkapan-data-an-2021">
                                        <h3 class="media-heading">Surat Kelengkapan data AN 2021</h3>
                                    </a>
                                        <ul class="list-inline list-unstyled">
                                            <li><span><i class="fa fa-user"></i> Admin </span></li>
                                            <li>|</li>
                                            <li><span><i class="fa fa-calendar"></i> 08 Maret 2022 </span>
                                            </li>
                                            <li>|</li>
                                            <li><span><i class="fa fa-tag"></i> Informasi </span>
                                            </li>
                                        </ul>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt possimus exercitationem, saepe cumque incidunt impedit, ex, a dolor minima alias expedita quasi cupiditate accusamus debitis amet animi eligendi! Perferendis, exercitationem. 
                                            <a href="/berita/surat-kelengkapan-data-an-2021" title="Surat Kelengkapan data AN 2021">(Baca Selengkapnya)</a>
                                </div>
                            </div>
                        </div>
                        <hr> -->

                        
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
        <!-- <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header border-blue border-portal ch-alt">
                            <h2>Kalender Pendataan</h2>
                        </div>
                        <div class="card-body card-padding-sm">
                            <div id="eventCalendarDefault"></div>
                        </div>
                    </div>
                </div>
            </div> -->
        

        <!-- Foto Gallery -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-blue border-portal ch-alt">
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
                                <!-- <span class="fa fa-chevron-left" aria-hidden="true"></span> -->
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <!-- <span class="fa fa-chevron-right" aria-hidden="true"></span> -->
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
                    <div class="card-header border-blue border-portal ch-alt">
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
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- tweet -->
        <div class="row" style="margin-bottom:10px;">
            <div class="col-md-12 ">
                <!-- <a class="twitter-timeline" href="https://twitter.com/Kemdikbud_RI"
                data-widget-id="506707863251587072" data-height="400">Tweet oleh @Kemdikbud_RI</a> -->

                <a class="twitter-timeline" href="https://twitter.com/Kemdikbud_RI?ref_src=twsrc%5Etfw" data-height="400">Tweets by Kemdikbud_RI</a> 

                <script type="text/javascript">
                    // Twitter Widget
                    !function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = p + "://platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, "script", "twitter-wjs");
                </script>
            </div>
        </div>

    </div>
</div>

<!-- Grafik Sinkronisasi -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-blue border-portal ch-alt">
                <h2>Grafik Jumlah Sinkronisasi 30 Hari Terakhir</h2>
            </div>
            <div class="card-body card-padding-bg">
                <div id="#" style="width: 100%; height: 422px;"> <!--- isi pemanggil data --->
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
            <div class="card-header border-blue border-portal ch-alt">
                <h2>10 Teratas Sinkronisasi Propinsi
                    <small class="semester-label">2015/2016 Genap</small>
                </h2>
            </div>
            <div id="#"> <!--- isi pemanggil data --->
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
            <div class="card-header border-blue border-portal ch-alt">
                <h2>10 Teratas Sinkronisasi Kabupaten
                    <small class="semester-label">2015/2016 Genap</small>
                </h2>
            </div>
            <div id="#"> <!--- isi pemanggil data --->
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
            <div class="card-header border-blue border-portal ch-alt">
                <h2>10 Terbawah Sinkronisasi Propinsi
                    <small class="semester-label">2015/2016 Genap</small>
                </h2>
            </div>
            <div id="#"> <!--- isi pemanggil data --->
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
            <div class="card-header border-blue border-portal ch-alt">
                <h2>10 Terbawah Sinkronisasi Kabupaten
                    <small class="semester-label">2015/2016 Genap</small>
                </h2>
            </div>
            <div id="#"> <!--- isi pemanggil data --->
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

<!-- END CONTENT -->
