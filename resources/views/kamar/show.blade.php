@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Kamar')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Kamar</a></li>
        <li class="active">Lihat Kamar</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Kamar</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Kamar</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th>Nama</th><th>Asrama</th><th>Nama-Nama Peserta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $kamar->kamar_id }}</td> <td> {{ $kamar->nama }} </td><td> {{ $kamar->asrama_id }} </td><td> {{ $kamar->peserta_id }} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
