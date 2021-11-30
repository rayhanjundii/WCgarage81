@extends('layouts.main')
@section('tittle','Admin Garage 81')
@section('content')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- ISI CONTENT ADMIN -->
<div class="content">

  <!-- ISI JUDUL KONTEN    -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard Caffe 81</h1>
        </div>

      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- ISI KONTEN    -->
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title" style="text-align: center;">Data Stok Menu Caffe Garage 81</h3>

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
        <h3>Caffe Bandung</h3>
        <p>--------------------------------------</p>
        <div class="row">
          @foreach ($stok as $s)
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $s->jml }}</h3>

                <p>{{ $s->nama_kategori}}</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{ route('menubdg') }}" class="small-box-footer">Selengkapnya... <i
                  class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          @endforeach

        </div>
        <h3>Caffe Cimahi</h3>
        <p>--------------------------------------</p>
        <div class="row">
          @foreach ($stok2 as $k)
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $k->jml }}</h3>

                <p>{{ $k->nama_kategori}}</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{ route('menubdg') }}" class="small-box-footer">Selengkapnya... <i
                  class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          @endforeach

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