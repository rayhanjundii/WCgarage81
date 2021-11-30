@extends('layouts.main')
@section('tittle','Admin Garage 81')
@section('content')
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- ISI CONTENT ADMIN -->
<div class="content">

    <!-- ISI JUDUL KONTEN    -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{ route('kopiportal') }}">
                        <h1>Homepage Menu Kopi Portal </h1>
                    </a>

                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- ISI KONTEN    -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Menu Baru</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Masukan Menu baru </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form
                        action="{{ empty($dataportal) ?  route('kopiportal.store'): route('kopiportal.update',$dataportal->id)}}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputFile">Masukan Foto Menu</label>
                                <div class="input-group">
                                    <input type="file" class="form-control" name="foto_menu" id="foto_menu">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName">Nama Menu</label>
                                <input type="text" class="form-control" name="nama" id="nama"
                                    value="{{ @$dataportal->nama }}" placeholder="Masukan nama menu">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" id="keterangan"
                                    value="{{ @$dataportal->keterangan }}" placeholder="Tambahkan keterangan menu">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName">Harga Menu</label>
                                <input type="text" class="form-control" name="harga" id="harga"
                                    value="{{ @$dataportal->harga }}" placeholder="Masukan Harga">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                <ion-icon name="save-outline"></ion-icon>Selesai
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
</div>

@endsection