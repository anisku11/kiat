@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Data Kamar')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Kamar</a></li>
        <li class="active">Here</li>
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

                <h1>Kamar <a href="{{ url('kamar/create') }}" class="btn btn-primary pull-right btn-sm">Tambah Data Kamar</a></h1>
                <div class="table">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th><th>Nama</th><th>Asrama</th><th>Nama-Nama Peserta</th><th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {{-- */$x=0;/* --}}
                        @foreach($kamar as $item)
                            {{-- */$x++;/* --}}
                            <tr>
                                <td>{{ $x }}</td>
                                <td><a href="{{ url('kamar', $item->kamar_id) }}">{{ $item->nama }}</a></td><td>{{ $item->asrama_id }}</td><td>{{ $item->peserta_id }}</td>
                                <td>
                                    <a href="{{ url('kamar/' . $item->kamar_id . '/edit') }}">
                                        <button type="submit" class="btn btn-primary btn-xs">Update</button>
                                    </a> /
                                    {!! Form::open([
                                        'method'=>'DELETE',
                                        'url' => ['kamar', $item->kamar_id],
                                        'style' => 'display:inline'
                                    ]) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <center><div class="pagination"> {!! $kamar->render() !!} </div></center>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
