  @include('loaders/css')
  @include('component/menu')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h2 style="color:black">Selamat datang di portal</h2>
            <h1 style="text-align:left;color:black; font-size: 30px;">Sistem Online Data Penerima Bantuan Sosial</h1>
            <h2 style="color:black">Pemerintah Kabupaten Ciamis</h2>
            <p style="text-align:justify;">Program bantuan sosial dirancang pemerintah untuk mendukung kesejahteraan masyarakat yang terdampak ekonominya akibat pandemi COVID-19.
              <a href="assets/img/bansos-1.png"class="glightbox play-btn mb-4">       
              <u><strong>Lihat Selengkapnya</strong></u></a><p>      
            <p>Sekarang Anda dapat melihat daftar penerima bantuan di wilayah Anda.<p>
            <button type="button" class="btn btn-primary rounded" data-toggle="modal" data-target="#exampleModal">
              Lihat Daftar Penerimaan Bantuan <i class='fas fa-external-link-alt'></i>
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"style="color:#1E88E5;">PENCARIAN INFORMASI LEBIH LENGKAP</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form class="row g-3">
                      <div class="col-md-6">
                        <label for="inputState" class="form-label">Kecamatan</label>
                        <select id="inputState" class="form-select">
                          <option selected>Pilih Kecamatan</option>
                          <option>CIAMIS</option>
                        </select>
                      </div>
                      <div class="col-md-3">
                        <label for="inputState" class="form-label">Pilih RT / RW </label>
                        <select id="inputState" class="form-select">
                          <option selected>RT</option>
                          <option>01</option>
                          <option>02</option>
                        </select>
                      </div>
                      <div class="col-md-3">
                        <label for="inputState" class="form-label"style="color:#FFFFFF">.</label>
                        <select id="inputState" class="form-select">
                          <option selected>RW</option>
                          <option>01</option>
                          <option>02</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <label for="inputState" class="form-label">Kelurahan / Desa</label>
                        <select id="inputState" class="form-select">
                          <option selected>Pilih Kelurahan / Desa</option>
                          <option>CIAMIS</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <label for="inputState" class="form-label">Tahapan</label>
                        <select id="inputState" class="form-select">
                          <option selected>PILIH TAHAPAN</option>
                          <option>1</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <label for="inputState" class="form-label">Tipe Bantuan </label>
                        <select id="inputState" class="form-select">
                          <option selected>PILIH TIPE BANTUAN</option>
                          <option>PKH</option>
                        </select>
                      </div><br><br>
                      <div class="col-md-6">
                        </select>
                      </div>
                      <br><br>
                      <div class="col-7">
                        <div class="form-check">
                          <p style="color:#1E88E5">  Atur ulang <i class="fas fa-redo-alt"style="color : #1E88E5;"></i> </p>
                          </label>
                        </div>
                      </div>   
                      <div class="col-md-2">
                        <button type="submit" class="btn btn-outline-primary">Batal</button>
                      </div>
                      <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Terapkan</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="assets/img/hero-img.png" class="img-fluid" alt=""width="500" height="600">
      </div>
      </div>
    </div>
  </section><!-- End Hero -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <div class="icon-box">
                <h5 style="text-align:center;">Pencarian Penerima Bantuan</a></h5><br>
                <p style="text-align:justify;">Anda dapat melakukan pencarian penerima bantuan dengan cara input nomor NIK di bawah ini.</p><br><br><br>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Masukkan NIK">
                  <div class="input-group-append">
                      <button class="btn btn-secondary" type="button"style="background-color : #1E88E5;">
                          <i class="fa fa-search"></i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm">
              <div class="icon-box">
                <h5 style="text-align:center;">Informasi Penolakan</a></h5><br>
                <p style="text-align:justify;">Untuk mengetahui kenapa anda tidak lolos dalam penetapan bansos provinsi Anda dapat mengisi NIK di bawah ini. Untuk keterangan lebih lanjut seputar Informasi Penolakan Klik Disini</p>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Masukkan NIK">
                  <div class="input-group-append">
                      <button class="btn btn-secondary" type="button"style="background-color : #1E88E5;">
                          <i class="fa fa-search"></i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-sm" data-wow-delay="0.1s">
              <div class="icon-box">
                <h5 style="text-align:center;">Lacak Penyaluran</a></h5><br>
                <p style="text-align:justify;">Untuk melakukan pelacakan penyaluran bansos provinsi masukkan nomor NIK di bawah ini.</p><br><br><br>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Masukkan NIK">
                  <div class="input-group-append">
                      <button class="btn btn-secondary" type="button"style="background-color : #1E88E5;">
                          <i class="fa fa-search"></i>
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section><!-- End Services Section -->
  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="coba" class="d-flex align-items-center">
      <div class="container">

        <div class="section-title">
          <h2>STATISTIK BANTUAN SOSIAL</h2>
          <p>Anda dapat melihat informasi realisasi bantuan sosial beserta jenis dan status alokasi bantuan sosial yang</p>
          <p>dilengkapi jumlah total penerima manfaat pada masing-masing wilayah.</p>
        </div>
        <br>
        <div class="row">
          <div class="col-sm">
            <h4 class="title">Kecamatan</a></h4>
              <p class="description">Lihat statistik jumlah penerima manfaat bantuan sosial pemerintah di seluruh kecamatan di Kabupaten Ciamis.</p>
              <u><strong><a href="bansoskecamatan">Lihat Selengkapnya</strong></u></a><p> 
          </div>
          <div class="col-sm">
            <h4 class="title">Kelurahan / Desa</a></h4>
              <p class="description">Lihat statistik jumlah penerima manfaat bantuan sosial pemerintah di seluruh kelurahan/desa di Kabupaten Ciamis.</p>
              <u><strong><a href="bansoskelurahan">Lihat Selengkapnya</strong></u></a><p> 
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->
  <main id="main">


    </section><!-- kurir  Section -->
    <section id="coba" class="services section-bg">
    <div class="container">
      <div class="row">
        <div class="col hero-img">
          <img src="assets/img/kurir.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h3>Alur Pemberian Bantuan Sosial</h3>
          <h5>Berbasis DTKS dan Non-DTKS</h5>
          <p>Bagaimana alur pemberian bantuan sosial berbasis DTKS dan Non-DTKS dapat sampai ke masayrakat? Anda dapat melihat alur lengkap dari proses tersebut dengan mengklik tautan yang tersedia di bawah ini.
          <br></br>
          <a href="/alurbansos" class="btn btn-primary" role="button">Lihat Alur Pemberian Bantuan Sosial <i class='fas fa-external-link-alt'></i></a>
        </div>
      </div>
    </div>
    </section><!-- End Counts Section -->
    <section id="coba" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h3>Komponen Bantuan Sosial Tahap III </h3>
            <p>Ada perubahan komponen bantuan di penyaluran tahap III. Apa saja? </p>
            <a href="https://sapawarga.jabarprov.go.id/#/info-penting?id=240" class="btn btn-primary" role="button"style="height:35px;width:130px">Cek Disini <i class='fas fa-external-link-alt'></i></a>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img src="assets/img/bansos.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
  </section><!-- End Counts Section -->
  <section id="coba" class="services section-bg">
  <div class="container">
    <div class="row">
      <div class="col hero-img">
        <img src="assets/img/ditolak.png" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h3>Alasan Ditolaknya Pendaftar</h3>
        <h5>Sebagai Penerima Bantuan Sosial Provinsi</h5>
        <p>Pada aplikasi Sapawarga dan website Solidaritas, tercantum sekitar 27 alasan detail yang menjelaskan ditolaknya pendaftar sebagai penerima atau Keluarga Rumah Tangga Sasaran (KRTS) Bansos Provinsi.</p>
        <a href="/alasanditolak" class="btn btn-primary" role="button"style="height:35px;width:130px">Lihat Disini <i class='fas fa-external-link-alt'></i></a>
        </div> 
      </div>
    </div>
  </section><!-- End Counts Section -->
  <section id="hotline" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h3>Kontak Hotline Bantuan Sosial</h3>
          <p>Anda dapat menghubungi Hotline Bantuan Sosial untuk bertanya atau sekedar mencari informasi seputar Bantuan Sosial di Jawa Barat.</p>
          <a href="https://api.whatsapp.com/send/?phone=6285697391854&text=Halo+Admin%21+Saya+ingin+tanya+seputar+PIKOBAR&app_absent=0" class="btn btn-primary"style="height:35px;width:230px"> Hubungi hotline kami <i class="fas fa-phone-alt"></i></a>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/komputer.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </div>
  </section>
  <section id="bekerjasama" class="services section-bg">
    <div class="section-title">
      <h2>Bekerja sama dengan </h2>
  </div>
      <div class="row align-items-center">
        <div class="col">
          <a href="/">
            <img class="img-responsive" src="{{url('assets/img/Lambang_Kabupaten_Ciamis.png')}}"style="position: relative; display: inline-block; left: 50%; transform: translate(-50%);">
          </a>
        </div>
        <div class="col">
          <a href="/">
            <img class="img-responsive" src="{{url('assets/img/gugus_tugas.png')}}"style="position: relative; display: inline-block; left: 50%; transform: translate(-50%);">
          </a>

        </div>
        <div class="col">
          <a href="/">
            <img class="img-responsive" src="{{url('assets/img/dinsos.png')}}"style="position: relative; display: inline-block; left: 50%; transform: translate(-50%);">
          </a>

        </div>
        <div class="col">
          <a href="/">
            <img class="img-responsive" src="{{url('assets/img/logo_pikobar.png')}}"style="position: relative; display: inline-block; left: 50%; transform: translate(-50%);">
          </a>

        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-sm">
          <center>
            <p>Pemerintah<br> Kabupaten Ciamis</p>
          </center>
        </div>
        <div class="col-sm">
          <center>
            <p>Gugus Tugas Percepatan Penanggulangan<br> Kabupaten Ciamis</p>
          </center>
        </div>
        <div class="col-sm">
          <center>
            <p>Dinas Sosial<br> Kabupaten Ciamis</p>
          </center>
        </div>
        <div class="col-sm">
          <center>
            <p>Pusat Informasi & Koordinasi<br> Kabupaten Ciamis</p>
          </center>
        </div>
    </div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@include('loaders/js')