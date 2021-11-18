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
    <form action="/admin/dashboard/fraud/approval/{{ $data->no_kasus }}" method="POST" enctype="multipart/form-data">
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
            <label class="col-sm-6 col-form-label my-2">Nomor Kasus</label>
            <div class="col-sm-6 my-2">
            <input type="text" class="form-control" name="no_kasus" value="{{ $data->no_kasus }}" readonly />
            </div>
            <label class="col-sm-6 col-form-label my-2">Tanggal</label>
            <div class="col-sm-6 my-2">
            <input type="text" class="form-control" name="tanggal" value="{{ $data->tanggal }}" readonly />
            </div>
        </div>
        <div class="row">
            <label class="col-sm-6 col-form-label my-2"
            >Jenis Kasus</label
            >
            <div class="col-sm-6 my-2">
            <input type="text" class="form-control" name="" value="{{ $data->jenis_kasus }}" readonly />
            </div>
            <label class="col-sm-6 col-form-label my-2"
            >Faktor Penyebab</label
            >
            <div class="col-sm-6 my-2">
            <input type="text" class="form-control" name="" value="{{ $data->faktor_penyebab }}" readonly />
            </div>
        </div>
        <div class="row">
            <label class="col-sm-6 col-form-label my-2"
            >Pelaku</label
            >
            <div class="col-sm-6 my-2">
            <input type="text" class="form-control" name="" value="{{ $data->pelaku }}" readonly />
            </div>
            <label class="col-sm-6 col-form-label my-2"
            >Unit/Departemen/Divisi</label
            >
            <div class="col-sm-6 my-2">
            <input type="text" class="form-control" name="" value="{{ $data->departemen }}" readonly />
            </div>
            <label class="col-sm-6 col-form-label my-2"
            >Total Kerugian</label
            >
            <div class="col-sm-6 my-2">
            <input type="text" class="form-control" name="" value="{{ $data->total_kerugian }}" readonly />
            </div>
            <label class="col-sm-6 col-form-label my-2"
            >Tanggal Kejadian</label
            >
            <div class="col-sm-6 my-2">
            <input type="text" class="form-control" name="" value="{{ $data->tanggal_kejadian }}" readonly />
            </div>
              <label class="col-sm-6 col-form-label my-2"
            >Tempat Kejadian</label
            >
            <div class="col-sm-6 my-2">
            <input type="text" class="form-control" name="" value="{{ $data->tempat_Kejadian }}" readonly />
            </div>
        </div>
        </div>
        <div class="ms-3 col-lg-6">
            <div class="row">
                <div class="col-sm-12 my-2">
                    <select name="status_no_kasus" id="" class="form-control">
                        <option value="APPROVE">APPROVE</option>
                        <option value="REJECT">REJECT</option>
                    </select>
                </div>
                <div class="col-sm-12 my-2">
                    <select name="status_tanggal" id="" class="form-control">
                        <option value="APPROVE">APPROVE</option>
                        <option value="REJECT">REJECT</option>
                    </select>
                </div>
                <div class="col-sm-12 my-2">
                    <select name="status_jenis_kasus" id="" class="form-control">
                        <option value="APPROVE">APPROVE</option>
                        <option value="REJECT">REJECT</option>
                    </select>                </div>
                <div class="col-sm-12 my-2">
                    <select name="status_faktor_penyebab" id="" class="form-control">
                        <option value="APPROVE">APPROVE</option>
                        <option value="REJECT">REJECT</option>
                    </select>
                </div>
                <div class="col-sm-12 my-2">
                    <select name="status_pelaku" id="" class="form-control">
                        <option value="APPROVE">APPROVE</option>
                        <option value="REJECT">REJECT</option>
                    </select>
                </div>
                <div class="col-sm-12 my-2">
                    <select name="status_departemen" id="" class="form-control">
                        <option value="APPROVE">APPROVE</option>
                        <option value="REJECT">REJECT</option>
                    </select>
                </div>
                  <div class="col-sm-12 my-2">
                    <select name="status_total_kerugian" id="" class="form-control">
                        <option value="APPROVE">APPROVE</option>
                        <option value="REJECT">REJECT</option>
                    </select>
                </div>
                  <div class="col-sm-12 my-2">
                    <select name="status_tanggal_Kejadian" id="" class="form-control">
                        <option value="APPROVE">APPROVE</option>
                        <option value="REJECT">REJECT</option>
                    </select>
                </div>
                  <div class="col-sm-12 my-2">
                    <select name="status_tempat_kejadian" id="" class="form-control">
                        <option value="APPROVE">APPROVE</option>
                        <option value="REJECT">REJECT</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <div class="col-lg-12">
        <p>Kronologis Singkat Kejadian :</p>
        <div id="editor">
            <textarea
            
            id="editor">
            <p>
                  {{ $data->kronologi }}
              </p>
            </textarea>
        </div>
        </div>
    </div>
    
    <div class="d-flex justify-content-start mt-4">
        <div class="col-sm-2 my-2">
        <label for="">Alat Bukti</label>
        </div>
        <div class="col-lg-6">
        <div class="mb-3 row">
            <label class="col-sm-4 col-form-label my-2">Keterangan Saksi</label>
            <div class="col-sm-6">
            <input type="file" class="form-control my-2" name="" value="" readonly />
            </div>
            <div class="col-sm-1 my-2">
                <button class="btn btn-secondary"><i class="fas fa-download"></i></button>
            </div>
            <label class="col-sm-4 col-form-label my-2">Bukti Dokumen Surat</label>
            <div class="col-sm-6">
            <input type="file" class="form-control my-2" name="" value="" readonly />
            </div>
            <div class="col-sm-1 my-2">
                <button class="btn btn-secondary"><i class="fas fa-download"></i></button>
            </div>
            <label class="col-sm-4 col-form-label my-2">Keterangan Pelaku</label>
            <div class="col-sm-6">
            <input type="file" class="form-control my-2" name="" value="" readonly />
            </div>
            <div class="col-sm-1 my-2">
                <button class="btn btn-secondary"><i class="fas fa-download"></i></button>
            </div>
            <label class="col-sm-4 col-form-label my-2"
            >Lain - Lain</label
            >
            <div class="col-sm-6">
            <input type="file" class="form-control my-2" name="" value="" readonly />
            </div>
            <div class="col-sm-1 my-2">
                <button class="btn btn-secondary"><i class="fas fa-download"></i></button>
            </div>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="mb-3 row">
            <div class="col-sm-4 my-2">
                <select name="status_keterangan_saksi" id="" class="form-control">
                    <option value="APPROVE">APPROVE</option>
                    <option value="REJECT">REJECT</option>
                </select>
            </div>
            <div class="col-sm-6 my-2">
                <input type="text" class="form-control" name="reason_keterangan_saksi" placeholder="Reason if Rejected"/>
            </div>
            <div class="col-sm-4 my-2">
                <select name="status_bukti_dokumen_surat" id="" class="form-control">
                    <option value="APPROVE">APPROVE</option>
                    <option value="REJECT">REJECT</option>
                </select>
            </div>
            <div class="col-sm-6 my-2">
                <input type="text" class="form-control" name="reason_bukti_dokumen_surat" placeholder="Reason if Rejected"/>
            </div>
            <div class="col-sm-4 my-2">
                <select name="status_keterangan_pelaku" id="" class="form-control">
                    <option value="APPROVE">APPROVE</option>
                    <option value="REJECT">REJECT</option>
                </select>
            </div>
            <div class="col-sm-6 my-2">
                <input type="text" class="form-control" name="reason_keterangan_pelaku" placeholder="Reason if Rejected"/>
            </div>
            <div class="col-sm-4 my-2">
                <select name="status_lain_lain" id="" class="form-control">
                    <option value="APPROVE">APPROVE</option>
                    <option value="REJECT">REJECT</option>
                </select>
            </div>
            <div class="col-sm-6 my-2">
                <input type="text" class="form-control" name="reason_lain_lain" placeholder="Reason if Rejected"/>
            </div>
        </div>
        </div>
    </div>
        <div class="d-flex justify-content-start">
            <div class="col-lg-6">
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label my-2">Barang Bukti</label>
                <div class="col-sm-6">
                    <input type="file" class="form-control my-2" name="" value="" readonly />
                </div>
                <div class="col-sm-1 my-2">
                    <button class="btn btn-secondary"><i class="fas fa-download"></i></button>
                </div>
                <label class="col-sm-4 col-form-label my-2"
                >Kelengkapan Dokumen</label
                >
                <div class="col-sm-6">
                    <input type="file" class="form-control my-2" name="" value="" readonly />
                </div>
                <div class="col-sm-1 my-2">
                    <button class="btn btn-secondary"><i class="fas fa-download"></i></button>
                </div>

                 <label class="col-sm-4 col-form-label my-2"
                >Kronologis Lengkap</label
                >
                <div class="col-sm-6">
                    <input type="file" class="form-control my-2" name="" value="" readonly />
                </div>
                <div class="col-sm-1 my-2">
                    <button class="btn btn-secondary"><i class="fas fa-download"></i></button>
                </div>
            </div>
            </div>
            <div class="col-lg-6">
            <div class="mb-3 row">
                <div class="col-sm-4 my-2">
                    <select name="status_dokumentasi_barang_bukti" id="" class="form-control">
                        <option value= "APPROVE">APPROVE</option>
                        <option value="REJECT">REJECT</option>
                    </select>
                </div>
                <div class="col-sm-6 my-2">
                    <input type="text" class="form-control" name="reason_barang_bukti" placeholder="Reason if Rejected"/>
                </div>
                <div class="col-sm-4 my-2">
                    <select name="status_dokumentasi_investigasi" id="" class="form-control">
                        <option value="APPROVE">APPROVE</option>
                        <option value="REJECT">REJECT</option>
                    </select>
                </div>
                <div class="col-sm-6 my-2">
                    <input type="text" class="form-control" name="reason_kelengkapan_dokumen" placeholder="Reason if Rejected"/>
                </div>
                 <div class="col-sm-4 my-2">
                    <select name="status_kronologis_lengkap" id="" class="form-control">
                        <option value="APPROVE">APPROVE</option>
                        <option value="REJECT">REJECT</option>
                    </select>
                </div>
                <div class="col-sm-6 my-2">
                    <input type="text" class="form-control" name="reason_kronologis_lengkap" placeholder="Reason if Rejected"/>
                </div>
                
            </div>
            </div>
        </div>
        <div class="d-flex justify-content-start">
            <div class="col-lg-6">
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label my-2">Regulation</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control my-2" name="regulasi" />
                </div>
                <label class="col-sm-4 col-form-label my-2"
                >Suggestion</label
                >
                <div class="col-sm-7">
                    <input type="text" class="form-control my-2" name="sugesti"/>
                </div>
            </div>
            </div>
            <div class="col-lg-6">
            </div>
        </div>
        <div class="d-flex justify-content-end mb-5">
            <div class="col-lg-3">
            
                <button class="btn btn-danger" name='action' value='return' type="submit">Return</button>
              

                    <button class="btn btn-primary" name='action' value='approve'>Process</button>
              
               
            </div>
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
    <script src="https://kit.fontawesome.com/e20e84f3eb.js" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
