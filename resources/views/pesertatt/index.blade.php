@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Data Peserta Diklat TT')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Peserta Diklat TT</a></li>
        <li class="active">Here</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Peserta Diklat TT</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Peserta <a href="{{ url('pesertatt/create') }}" class="btn btn-primary pull-right btn-sm">Tambah Data Peserta TT</a></h1>
                <div class="table">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th><th>Nama Lengkap</th><th>Nama Diklat TT</th><th>Pendidikan</th><th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {{-- */$x=0;/* --}}
                        @foreach($pesertatt as $item)
                            {{-- */$x++;/* --}}
                            <tr>
                                <td>{{ $x }}</td>
                                <td><a href="{{ url('pesertatt', $item->pesertatt_id) }}">{{ $item->nama }}</a></td><td>{{ $item->diklattt_id }}</td><td>{{ $item->pend }}</td>
                                <td>
                                    <a href="{{ url('pesertatt/' . $item->pesertatt_id . '/edit') }}">
                                        <button type="submit" class="btn btn-primary btn-xs">Update</button>
                                    </a> /
                                    {!! Form::open([
                                        'method'=>'DELETE',
                                        'url' => ['pesertatt', $item->pesertatt_id],
                                        'style' => 'display:inline'
                                    ]) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <center><div class="pagination"> {!! $pesertatt->render() !!} </div></center>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
