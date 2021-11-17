@extends('layouts.app')

@section('title')
    Other Input
@endsection

@section('content')
    <div class="d-flex justify-content-between">
      <div class="col-lg-3">
        <a
          class="nav-link"
          href="{{ url('/litigation/customer-dispute') }}"
          style="
            border: solid 1px #eceff5;
            background: #0d2b70;
            padding: 15px;
            margin-top: 10px;
            margin-left: 10px;
            text-align: center;
            line-height: 50px;
            color: white;
            font-size: 50px;
            text-transform: uppercase;
          "
          >Customer Dispute</a
        >
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

    <div class="d-flex justify-content-between">
      <div class="col-lg-3">
        <a
          class="nav-link"
          href="{{ url('litigation/fraud') }}"
          style="
            border: solid 1px #eceff5;
            background: red;
            padding: 15px;
            margin-top: 4px;
            margin-left: 10px;
            text-align: center;
            line-height: 60px;
            color: white;
            font-size: 50px;
            text-transform: uppercase;
          "
          >Fraud</a
        >
      </div>
      <div class="col-lg-3 mt-3 me-3">
        <a
          class="nav-link"
          style="
            border: solid 1px #eceff5;
            background: rgb(245, 56, 56);
            padding: 15px;
            margin-top: -70px;
            margin-left: 10px;
            text-align: justify;
            line-height: 23px;
            color: white;
            font-size: 20px;
          "
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

    <div class="d-flex justify-content-between">
      <div class="col-lg-3">
        <a
          class="nav-link"
          href="outstanding.html"
          style="
            border: solid 1px #eceff5;
            background: grey;
            padding: 15px;
            margin-top: 3px;
            margin-left: 10px;
            margin-bottom: 10px;
            text-align: center;
            line-height: 60px;
            color: white;
            font-size: 40px;
            text-transform: uppercase;
          "
          >Outstanding</a
        >
      </div>
    </div>

    <div class="d-flex justify-content-between">
      <div class="col-lg-3">
        <a
          class="nav-link"
          href="otherCase.html"
          style="
            border: solid 1px #eceff5;
            background: green;
            padding: 15px;
            margin-top: -3px;
            margin-left: 10px;
            margin-bottom: 10px;
            text-align: center;
            line-height: 60px;
            color: white;
            font-size: 50px;
            text-transform: uppercase;
          "
          >Other</a
        >
      </div>
    </div>
@endsection
