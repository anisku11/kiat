@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Tambah Data Kurikulum Diklat TT')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Kurikulum TT</a></li>
        <li class="active">Tambah Kurikulum TT</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Kurikulum TT</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                    <h1>Tambah Data Kurikulum TT</h1>
                    <hr/>

                    {!! Form::open(['url' => 'kurikulumtt', 'class' => 'form-horizontal']) !!}

            <div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
                {!! Form::label('nama', 'Nama Kurikulum: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nama', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('diklattt_id') ? 'has-error' : ''}}">
                {!! Form::label('diklattt_id', 'Nama Diklat TT: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('diklattt_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('diklattt_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('isi') ? 'has-error' : ''}}">
                {!! Form::label('isi', 'Isi: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('isi', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('isi', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tgl') ? 'has-error' : ''}}">
                {!! Form::label('tgl', 'Tanggal : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('tgl', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('tgl', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-3">
                            {!! Form::submit('Tambah Data', ['class' => 'btn btn-primary form-control']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}

                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
