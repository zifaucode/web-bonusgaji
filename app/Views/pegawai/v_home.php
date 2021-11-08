  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <br>

        <body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
          <h1><span class="label label-warning"><?php
                                                $hari = date('l');
                                                /*$new = date('l, F d, Y', strtotime($Today));*/
                                                if ($hari == "Sunday") {
                                                  echo "Minggu";
                                                } elseif ($hari == "Monday") {
                                                  echo "Senin";
                                                } elseif ($hari == "Tuesday") {
                                                  echo "Selasa";
                                                } elseif ($hari == "Wednesday") {
                                                  echo "Rabu";
                                                } elseif ($hari == "Thursday") {
                                                  echo ("Kamis");
                                                } elseif ($hari == "Friday") {
                                                  echo "Jum'at";
                                                } elseif ($hari == "Saturday") {
                                                  echo "Sabtu";
                                                }
                                                ?>, &nbsp;<i class="fa fa-clock-o"></i> &nbsp; <b id="clock"></b></span> </h1>
          <script type="text/javascript">
            function tampilkanwaktu() { //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
              var waktu = new Date(); //membuat object date berdasarkan waktu saat 
              var sh = waktu.getHours() + ""; //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
              var sm = waktu.getMinutes() + ""; //memunculkan nilai detik    
              var ss = waktu.getSeconds() + ""; //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
              document.getElementById("clock").innerHTML = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" + sm : sm) + ":" + (ss.length == 1 ? "0" + ss : ss);
            }
          </script>

          <br>
          <ol class="breadcrumb">
            <li><a href="<?= base_url() ?>/mahasiswa"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?= $title ?></li><br>

          </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">NAMA : <b><?= session()->get('nama') ?></b></span>
                <span class="info-box-text">JABATAN : <b><?= session()->get('jabatan') ?></b></span>
                <span class="info-box-text">STATUS PEGAWAI : <b><?= session()->get('status') ?></b></span>

              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-green"><i class="fa fa-money"></i></span>

              <div class="info-box-content">

                <span class="info-box-text">Bonus Gaji</span><br>
                <?php
                foreach ($bonus as $key => $oke) : ?>
                  <span class="info-box-text"><b>Rp. <?= $oke['hasilbonus']; ?></b></span>
                <?php endforeach ?>

                <?php
                foreach ($bonus2 as $key => $oke) : ?>
                  <span class="info-box-text"><b>Rp. <?= $oke['hasilbonus2']; ?></b></span>
                <?php endforeach ?>

                <?php
                foreach ($bonus3 as $key => $oke) : ?>
                  <span class="info-box-text"><b>Rp. <?= $oke['hasilbonus3']; ?></b></span>
                <?php endforeach ?>

                <?php
                foreach ($bonus4 as $key => $oke) : ?>
                  <span class="info-box-text"><b>Rp. <?= $oke['hasilbonus4']; ?></b></span>
                <?php endforeach ?>

                <?php
                foreach ($bonus5 as $key => $oke) : ?>
                  <span class="info-box-text"><b>Rp. <?= $oke['hasilbonus5']; ?></b></span>
                <?php endforeach ?>

                </span>

                </b>

              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- /.info-box -->

          <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- =========================================================== -->

    <!-- Main content -->
    <section class="content">




      <!-- /.box -->
    </section>
    <!------------------------------------------ FITUR PESAN ------------------------------------------------>





  </div>
  <!-- /.box-body -->

  </div>

  </div>
  </div>
  <br>


  <!------------------------------------------ SELESAI FITUR PESAN ------------------------------------------------>
  <!-- /.content -->
  </div>
  <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->