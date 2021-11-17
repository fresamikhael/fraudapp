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

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="/litigation/customer-dispute" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mt-3">
            <h1>Customer Dispute</h1>
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <div class="col-lg-6">
            <div class="row">
              <label class="col-sm-4 col-form-label my-2">Nomor Kasus</label>
              <div class="col-sm-7 my-2">
                <input type="text" class="form-control" name="no_kasus" readonly value="{{ $no_kasus }}"/>
              </div>
              <label class="col-sm-4 col-form-label my-2">Tanggal</label>
              <div class="col-sm-7 my-2">
                <input type="text" class="form-control" name="tanggal" value="{{ $datenow }}" readonly/>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-4 col-form-label my-2">Jenis Kasus</label>
              <div class="col-sm-7 my-2">
                <input type="text" class="form-control" name="jenis_kasus" />
              </div>
              <label class="col-sm-4 col-form-label my-2"
                >Faktor Penyebab</label
              >
              <div class="col-sm-7 my-2">
                <input type="text" class="form-control" name="faktor_penyebab"/>
              </div>
               <label class="col-sm-4 col-form-label my-2"
                ></label
              >
              <div class="col-sm-7 my-2">
                <input type="text" class="form-control" name="faktor_penyebab_lain" placeholder="Jelaskan Jika Lain-Lain"/>
              </div>
            </div>
            
          </div>
          <div class="col-lg-6">
            <div class="mb-3 row">
              <label class="col-sm-5 col-form-label my-2"
                >Total Kerugian / Klaim</label
              >
              <div class="col-sm-7 my-2">
                <input type="text" class="form-control" name="total_kerugian"/>
              </div>
              <label class="col-sm-5 col-form-label my-2"
                >Connote/Perjanjian</label
              >
              <div class="col-sm-7 my-2">
                <input type="text" class="form-control" name="perjanjian" />
              </div>
              <label class="col-sm-5 col-form-label my-2"
                >Tanggal Kejadian</label
              >
              <div class="col-sm-7 my-2">
                <input type="date" class="form-control" name="tanggal_kejadian"/>
              </div>
              <label class="col-sm-5 col-form-label my-2">Customer</label>
              <div class="col-sm-7 my-2">
                <input type="text" class="form-control" name="customer"/>
              </div>
              <label class="col-sm-5 col-form-label my-2">Jenis Kiriman</label>
              <div class="col-sm-7 my-2">
                <input type="text" class="form-control" name='jenis_kiriman' />
              </div>
              <label class="col-sm-5 col-form-label my-2">Asuransi</label>
              <div class="col-sm-7 my-2">
                <input type="text" class="form-control" name="asuransi"/>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center mt-1">
          <div class="col-lg-12">
            <p>Kronologis Singkat Kejadian :</p>
            <textarea id="editor" name="kronologis_singkat">
              <p></p>
            </textarea>
          </div>
        </div>
        <div class="d-flex justify-content-start mt-2">
          <div class="col-lg-12">
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label my-2">Bentuk Kiriman</label>
              <div class="col-sm-5">
                <input type="text" class="form-control my-2" name="bentuk_kiriman"/>
              </div>
              <div class="col-sm-4">
                <input type="text" class="form-control my-2" name="detail_kiriman" placeholder="Jelaskan Detail Kiriman"/>
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
              <label for="inputPassword" class="col-sm-4 col-form-label my-2">
                Keterangan Saksi</label
              >
              <div class="col-sm-7">
                <input
                  type="text"
                  class="form-control my-2"
                  id="inputPassword"
                  name="keterangan_saksi"
                />
              </div>
              <label for="inputPassword" class="col-sm-4 col-form-label my-2"
                >Dokumen Surat</label
              >
             
              <div class="col-sm-7">
                <input
                  type="file"
                  class="form-control my-2 "
                  id="inputPassword"
                  name="dokumen_surat"
                />
              </div>

            {{-- @error('dokumen_surat')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror --}}
              <label for="inputPassword" class="col-sm-4 col-form-label my-2"
                >Dokumen Form Klaim</label
              >
              <div class="col-sm-7">
                <input
                  type="file"
                  class="form-control my-2"
                  id="inputPassword"
                  name="dokumen_form_klaim"
                />
              </div>
            <label class="col-sm-4 col-form-label my-2">Lain-lain</label>
              <div class="col-sm-7">
                <input type="file" class="form-control my-2" name="lain_lain" id="coba"/>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-start">
          <div class="col-lg-6">
            <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-5 col-form-label my-2"
                >Barang Bukti</label
              >
              <div class="col-sm-7">
                <input
                  type="file"
                  class="form-control my-2"
                  id="inputPassword"
                  name="barang_bukti"
                />
              </div>
              <label for="inputPassword" class="col-sm-5 col-form-label my-2"
                >Kelengkapan Dokumen</label
              >
              <div class="col-sm-7">
                <input
                  type="file"
                  class="form-control my-2"
                  id="inputPassword"
                  name="kelengkapan_dokumen"
                />
              </div>
              <label for="inputPassword" class="col-sm-5 col-form-label my-2"
                >Bukti Lainnya</label
              >
              <div class="col-sm-7">
                <input
                  type="file"
                  class="form-control my-2"
                  id="inputPassword"
                  name="bukti_lainya"
                />
              </div>
            </div>
          </div>
        </div>

       
        <div class="d-flex justify-content-end mb-5">
          <div class="col-lg-3">
            <button type="submit" class="btn btn-danger">Input</button>
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
<script>
 


</script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
