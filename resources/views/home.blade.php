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
            >
            @auth
           <form action="/logout" method="POST">
            @csrf
            <button type="submit">Log out </button></form>
             @else
             
      Log in
             
            @endauth
            
            
            
            </a
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

    <div class="hero">
      <img src="/assets/hero.jpg" class="w-100" alt="" />
    </div>

    <div class="d-flex justify-content-between fraudButton">
      <div class="col-lg-3">
        <a class="nav-link buttonBiru" href="drafting.html">Drafting</a>
      </div>
      <div class="col-lg-3 mt-3 me-3">
        <form class="d-flex">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Search Keyword"
            aria-label="Search"
          />
          <button class="btn btn-danger" type="submit">Search</button>
        </form>
      </div>
    </div>

    <div class="d-flex justify-content-between fraudButton">
      <div class="col-lg-3">
        <a class="nav-link buttonMerah" href="{{ url('litigation') }}">Litigation</a>
      </div>
      <div class="col-lg-3 mt-3 me-3">
        <a class="nav-link cardSearch"
          ><p style="margin-top: 5px; text-transform: uppercase">Penelusuran</p>
          <p style="margin-top: -8px; text-transform: uppercase">
            Permohonan/Pelaporan
          </p>

          <form class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search Keyword"
              aria-label="Search"
            />
            <button class="btn btn-danger" type="submit">Search</button>
          </form></a
        >
      </div>
    </div>

    <div class="d-flex justify-content-between fraudButton">
      <div class="col-lg-3">
        <a class="nav-link buttonAbu" href="permit.html">Permit</a>
      </div>
    </div>

    <form action="/admin/dashboard" method="GET">
      <button>Coba</button>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
