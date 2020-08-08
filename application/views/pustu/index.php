<!-- untuk menload head -->
<?php $this->load->view('pustu/atribut/head'); ?>
<!-- untuk menload menu -->
<?php $this->load->view('pustu/atribut/menu'); ?>

<!-- isi bagian kanan -->
<div class="breadcome-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="breadcome-list">
          <div class="row">

            <div class="col-lg-12">
              <div class="breadcomb-wp">

                <div class="breadcomb-icon">
                  <i class="fa fa-home"></i>
                </div>

                <div class="breadcomb-ctn">
                  <h2>Beranda</h2>
                  <p>Selamat Datang! <span class="bread-ntd">Dalam Sistem Informasi Implementasi K-Means Clustering Pada Jenis Penyakit</span></p>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <?php

    // untuk menampikan pemberitahuan
    if (isset($_GET['berhasil'])) {
      echo "
      <div class='alert alert-success alert-success-style1'>
      <button type='button' class='close sucess-op' data-dismiss='alert' aria-label='Close'>
      <span class='icon-sc-cl' aria-hidden='true'>&times;</span>
      </button>
      <i class='fa fa-check adminpro-checked-pro admin-check-pro' aria-hidden='true'></i>
      <p><strong>Berhasil!</strong> Data Berhasil Masuk</p>
      </div>";
    }

    ?>

  </div>
</div>

</div>

<!-- bagian kanan -->
<div class="mg-b-15">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">

        <div class="single-product-pr">
          <h4>K-Means Clustering</h4>
          <p>
            Metode <strong>K-Means Clustering</strong> merupakan salah satu teknik data mining yang memberikan deskripsi cluster pada sebuah penyakit. Tujuan algoritma ini yaitu untuk membagi data menjadi beberapa kelompok. Algoritma K-means merupakan algoritma klasterisasi yang mengelompokan data berdasarkan titik pusat klaster (centroid) terdekat dengan data.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- isi bagian kanan -->

<div class="footer-copyright-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="footer-copy-right">
          <p>Copyright © 2019 Alan Saputra Lengkoan - 2015020007.</p>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
<!-- isi content -->

<?php $this->load->view('admin/atribut/foot'); ?>
