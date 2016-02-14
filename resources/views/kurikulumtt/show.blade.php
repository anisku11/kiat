@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Kurikulum Diklat TT')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Kurikulum Diklat TT</a></li>
        <li class="active">Lihat Kurikulum TT</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Kurikulum Diklat TT</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Kurikulum TT</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th>Nama Kurikulum</th><th>Nama Diklat TT</th><th>Isi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $kurikulumtt->kurikulumtt_id }}</td> <td> {{ $kurikulumtt->nama }} </td><td> {{ $kurikulumtt->diklattt_id }} </td><td> {{ $kurikulumtt->isi }} </td>
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
