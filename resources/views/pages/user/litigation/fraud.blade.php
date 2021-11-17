<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <link rel="icon" href="/assets/icon.png" />

    <link rel="stylesheet" href="/style/main.css" />

    <title>Aplikasi Fraud JNE</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-fraud">
      <div class="container-fluid ms-3">
        <a class="navbar-brand" href="index.html">
          <img src="/assets/logo.jpg" class="w-50" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse d-flex flex-column"
          id="navbarNavAltMarkup"
        >
          <a
            href="#"
            class="ms-auto"
            style="
              text-decoration: none;
              color: black;
              text-transform: uppercase;
            "
            >Log in</a
          >
          <div class="navbar-nav ms-auto">
            <a
              class="nav-link active"
              href="#"
              style="
                border: solid 1px #eceff5;
                background: #e7e9ee;
                padding: 15px;
                margin: 0;
                text-align: justify;
                line-height: 23px;
                color: black;
                font-size: 18px;
              "
              >Tentang Kami</a
            >
            <a
              class="nav-link"
              href="#"
              style="
                border: solid 1px #eceff5;
                background: #e0e2e6;
                padding: 15px;
                margin: 0;
                text-align: justify;
                line-height: 23px;
                color: black;
                font-size: 18px;
              "
              >Layanan Hukum</a
            >
            <a
              class="nav-link"
              href="#"
              style="
                border: solid 1px #eceff5;
                background: #c9cbce;
                padding: 15px;
                margin: 0;
                text-align: justify;
                line-height: 23px;
                color: black;
                font-size: 18px;
              "
              >Informasi</a
            >
            <a
              class="nav-link"
              href="#"
              style="
                border: solid 1px #eceff5;
                background: #b8bbc2;
                padding: 15px;
                margin: 0;
                text-align: justify;
                line-height: 23px;
                color: black;
                font-size: 18px;
              "
              >Database</a
            >
            <a
              class="nav-link"
              href="contactUs.html"
              style="
                border: solid 1px #eceff5;
                background: #9b9fa7;
                padding: 15px;
                margin: 0;
                text-align: justify;
                line-height: 23px;
                color: black;
                font-size: 18px;
              "
              >Hubungi Kami</a
            >
          </div>
        </div>
      </div>
    </nav>

    <div class="redLine">
      <div class="d-flex flex-row">
        <div class="row-lg-6">
          <p class="dateTime">Selasa, 2 November 2021 | 18:11 WIB</p>
        </div>
        <div class="row-lg 6">
          <p class="welcome">Selamat datang di legal service access</p>
        </div>
      </div>
    </div>

    <form action="/litigation/fraud" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1>Fraud</h1>
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <div class="col-lg-6">
            <div class="row">
              <label class="col-sm-4 col-form-label my-2">Nomor Kasus</label>
              <div class="col-sm-7 my-2">
                <input type="text" class="form-control" name="no_kasus" value="{{ $no_kasus }}" readonly/>
              </div>
              <label class="col-sm-4 col-form-label my-2">Tanggal</label>
              <div class="col-sm-7 my-2">
                <input type="text" class="form-control" name="tanggal" value="{{ $datenow }}" readonly/>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-4 col-form-label my-2">Jenis Kasus</label>
              <div class="col-sm-7 my-2">
                <select class="form-select" aria-label="Default select example" name="jenis_kasus">
  <option selected></option>
  <option value="Penggelapan">Penggelapan</option>
  <option value="Pencurian">Pencurian</option>
  <option value="Pemalsuan">Pemalsuan</option>
  <option value="Penipuan">Penipuan</option>
  <option value="Perusakan Barang">Perusakan Barang</option>
  <option value="Penganiayaan">Penganiayaan</option>
    <option value="Konflik Kepentingan">Konflik Kepentingan</option>
      <option value="Suap">Suap</option>
  <option value="Pemberian Ilegal">Pemberian Ilegal</option>
        <option value="CyberCrime">CyberCrime</option>
        <option value="dll">dll</option>
  
</select>
              </div>
              <label class="col-sm-4 col-form-label my-2"
                >Faktor Penyebab</label
              >
              <div class="col-sm-7 my-2">
            
                 <select class="form-select" aria-label="Default select example" name="faktor_penyebab">
  <option selected></option>
  <option value="Keserakahan">Keserakahan</option>
  <option value="Kesempatan">Kesempatan</option>
  <option value="Kebutuhab">Kebutuhan</option>
  <option value="Tekanan">Tekanan</option>
  <option value="Pembenaran">Pembenaran</option>  
</select>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mb-3 row">
              <label class="col-sm-5 col-form-label my-2">Pelaku</label>
              <div class="col-sm-7 my-2">
            
                     <select class="form-select" aria-label="Default select example" name="pelaku">
  <option selected></option>
  <option value="Internal">Internal</option>
  <option value="Eksternal">Eksternal</option>
                     </select>
              </div>
              <label class="col-sm-5 col-form-label my-2"
                >Unit/Departemen/Divisi</label
              >
              <div class="col-sm-7 my-2">
                <input type="text" class="form-control" name="departemen"/>
              </div>
              <label class="col-sm-5 col-form-label my-2">Total Kerugian</label>
              <div class="col-sm-7 my-2">
                <input type="text" class="form-control" name="total_kerugian" />
              </div>
              <label class="col-sm-5 col-form-label my-2"
                >Tanggal Kejadian</label
              >
              <div class="col-sm-7 my-2">
                <input type="date" class="form-control" name="tanggal_kejadian"/>
              </div>
              <label class="col-sm-5 col-form-label my-2"
                >Tempat Kejadian</label
              >
              <div class="col-sm-7 my-2">
                <input type="text" class="form-control" name="tempat_kejadian"/>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center mt-1">
          <div class="col-lg-12">
            <p>Kronologis Singkat Kejadian :</p>
            <textarea 
            name="kronologis_lengkap"
            id="editor">
              <p></p>
            </textarea>
          </div>
        </div>
        <div class="d-flex justify-content-start mt-2">
          <div class="col-lg-12">
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label my-2"
                >Klasifikasi Fraud</label
              >
              <div class="col-sm-5">
                <input type="text" class="form-control my-2" name="klasifikasi_kasus"/>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-start">
          <div class="col-sm-2 my-2">
            <label for="">Alat Bukti</label>
          </div>
          <div class="col-lg-6">
            <div class="mb-3 row">
              <label class="col-sm-4 col-form-label my-2"> Saksi 1</label>
              <div class="col-sm-7">
                <input type="text" class="form-control my-2" name="saksi_1"/>
              </div>
              <label class="col-sm-4 col-form-label my-2">
                Departemen/Unit</label
              >
              <div class="col-sm-7">
                <input type="text" class="form-control my-2" name="departemen_saksi_1" />
              </div>
              <label class="col-sm-4 col-form-label my-2"> Saksi 2</label>
              <div class="col-sm-7">
                <input type="text" class="form-control my-2" name="saksi_2" />
              </div>
              <label class="col-sm-4 col-form-label my-2">
                Departemen/Unit</label
              >
              <div class="col-sm-7">
                <input type="text" class="form-control my-2" name="departemen_saksi_2"/>
              </div>
              <label class="col-sm-4 col-form-label my-2"
                >Bukti Dokumen Surat</label
              >
              <div class="col-sm-7">
                <input type="file" class="form-control my-2" name="bukti_dokumen_surat"/>
              </div>
              <label class="col-sm-4 col-form-label my-2"
                >Keterangan Pelaku</label
              >
              <div class="col-sm-7">
                <input type="file" class="form-control my-2" name="keterangan_pelaku"/>
              </div>
              <label class="col-sm-4 col-form-label my-2"
                >Keterangan Saksi</label
              >
              <div class="col-sm-7">
                <input type="file" class="form-control my-2" name="keterangan_saksi" />
              </div>
              <label class="col-sm-4 col-form-label my-2">Lain-lain</label>
              <div class="col-sm-7">
                <input type="file" class="form-control my-2" name="lain_lain"/>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-start">
          <div class="col-lg-6">
            <div class="mb-3 row">
              <label class="col-sm-5 col-form-label my-2"
                >Dokumentasi Barang Bukti</label
              >
              <div class="col-sm-7">
                <input type="file" class="form-control my-2" name="dokumentasi_barang_bukti"/>
              </div>
              <label class="col-sm-5 col-form-label my-2"
                >Dokumen Investigasi</label
              >
              <div class="col-sm-7">
                <input type="file" class="form-control my-2" name="dokumentasi_investigasi"/>
              </div>
              <label class="col-sm-5 col-form-label my-2">Bukti Lainnya</label>
              <div class="col-sm-7">
                <input type="file" class="form-control my-2" name="bukti_lainya" />
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-end mb-5">
          <div class="col-lg-3">
            <button class="btn btn-danger">Input</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace("editor");
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
