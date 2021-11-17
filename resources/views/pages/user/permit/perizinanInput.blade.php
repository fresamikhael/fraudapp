@extends('layouts.app')

@section('title')
    Perizinan Baru
@endsection

@section('content')
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/permit/perizinanbaru/input" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
        <h1>Perijinan Baru</h1>
        </div>
    </div>
    <div class="d-flex justify-content-between">
        <div class="col-lg-12">
        <div class="row">
            <label class="col-sm-3 col-form-label my-2">Tipe Perizinan</label>
            <div class="col-sm-7 my-2">
                <input type="text" class="form-control" name="tipe_perizinan" />
            </div>
            <label class="col-sm-3 col-form-label my-2">Lokasi</label>
            <div class="col-sm-7 my-2">
                <input type="text" class="form-control" name="lokasi" />
            </div>
        </div>
        <div class="row">
            <label class="col-sm-3 col-form-label my-2">Spesifikasi</label>
            <div class="col-sm-7 my-2">
                <input type="text" class="form-control" name="spesifikasi" />
            </div>
        </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <div class="col-lg-12">
        <p>Alasan Permohonan :</p>
           <textarea
            name="alasan"
            id="editor">
            </textarea>
        </div>
    </div>
    <div class="d-flex justify-content-start mt-4">
        <div class="col-sm-2 my-3">
            <label for="">Dokumen Pendukung</label>
        </div>
    </div>
    <div class="d-flex justify-content-start">
        <div class="col-lg-6">
        <div class="mb-3 row">
            <label class="col-sm-4 col-form-label my-2">Disposisi</label>
            <div class="col-sm-7">
            <input type="file" class="form-control my-2" name="disposisi" />
            </div>
            <label class="col-sm-4 col-form-label my-2"
            >Dokumen 1</label
            >
            <div class="col-sm-7">
            <input type="file" class="form-control my-2" name="dokumen1" />
            </div>
            <label class="col-sm-4 col-form-label my-2"
            >Dokumen 2</label
            >
            <div class="col-sm-7">
            <input type="file" class="form-control my-2" name="dokumen2" />
            </div>
            <label class="col-sm-4 col-form-label my-2"
            >Dokumen 3</label
            >
            <div class="col-sm-7">
            <input type="file" class="form-control my-2" name="dokumen3" />
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
@endsection
