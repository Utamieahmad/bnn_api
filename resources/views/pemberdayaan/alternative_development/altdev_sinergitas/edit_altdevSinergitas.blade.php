@extends('layouts.base_layout')
@section('title', 'Ubah Data Sinergi')

@section('content')
    <div class="right_col" role="main">
        <div class="m-t-40">
            <div class="page-title">
                <div class="">
                    {!! (isset($breadcrumps) ? $breadcrumps : "" ) !!}
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="title_right">
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        @if (session('status'))
                            @php
                                $session= session('status');
                            @endphp
                            <div class="alert alert-{{$session['status']}}">
                                {{ $session['message'] }}
                            </div>
                        @endif
                        
                        <div class="x_title">
                            <h2>Form Ubah Data Sinergi Direktorat Peran Serta Masyarakat</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form action="{{route('update_altdev_sinergitas')}}" class="form-horizontal" id="frm_add" method="post" enctype="multipart/form-data" autocomplete="on">
                                <div class="form-body">
                                    <input type="hidden" name="id" value="{{$data->id}}"/>  
                                    {{csrf_field()}}  
                                    <div class="form-group">
                                        <label for="tgl_pelaksanaan" class="col-md-3 col-sm-3 col-xs-12 control-label">Tanggal Kegiatan</label>
                                        <div class='col-md-6 col-sm-6 col-xs-12 input-group date datepicker-only'>
                                            <input type='text' name="tgl_pelaksanaan" class="form-control" value="{{ (isset($data->tgl_pelaksanaan) ? \Carbon\Carbon::parse($data->tgl_pelaksanaan)->format('d/m/Y') : '')}}" required/>
                                            <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="idpelaksana" class="col-md-3 col-sm-3 col-xs-12 control-label">Pelaksana</label>
                                        <div class="col-md-6">
                                            <select name="idpelaksana" id="idpelaksana" class="form-control select2" tabindex="-1" aria-hidden="true" required>
                                                <option value="" {{(isset($data->idpelaksana) ? "" : 'selected=selected')}}> Pilih Pelaksana </option>
                                                    {!! dropdownPelaksana($data->idpelaksana) !!}
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="lokasi_kegiatan" class="col-md-3 col-sm-3 col-xs-12 control-label">Tempat Kegiatan</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input value="{{(isset($data->lokasi_kegiatan) ? $data->lokasi_kegiatan : "")}}" id="lokasi_kegiatan" name="lokasi_kegiatan" type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="lokasi_kegiatan_idkabkota" class="col-md-3 col-sm-3 col-xs-12 control-label">Lokasi Kegiatan</label>
                                        <div class="col-md-6 col-xs-12 col-sm-6">
                                            {!! dropdownPropinsiKabupaten($data->lokasi_kegiatan_idkabkota,'lokasi_kegiatan_idkabkota') !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="kodesasaran" class="col-md-3 col-sm-3 col-xs-12 control-label">Instansi</label>
                                        
                                        <div class='col-md-6 col-sm-6 col-xs-12'>
                                            <div class="radio">
                                                @if($instansi)
                                                    @foreach($instansi as $kode=>$kvalue)
                                                            <label class="mt-radio col-md-9"> <input type="radio" value="{{$kode}}" name="kodesasaran" id="" {{(isset($data->kodesasaran) ? ($data->kodesasaran == $kode ? 'checked=checked' : '') : '' )}}>
                                                            <span>{{$kvalue}}</span>
                                                            </label>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="materi" class="col-md-3 col-sm-3 col-xs-12 control-label">Nama Instansi/Lingkungan</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input value="{{(isset($data->materi) ? $data->materi : '')}}" id="materi" name="materi" type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="narasumber" class="col-md-3 col-sm-3 col-xs-12 control-label">Alamat Instansi/Lingkungan</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input value="{{(isset($data->narasumber) ? $data->narasumber : '')}}" id="narasumber" name="narasumber" type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="jenis_kegiatan" class="col-md-3 col-sm-3 col-xs-12 control-label">Bentuk Kegiatan</label>
                                        <div class='col-md-6 col-sm-6 col-xs-12'>
                                            <div class="radio">
                                                @if($bentuk_kegiatan)
                                                    @foreach($bentuk_kegiatan as $bkode=>$kbvalue)
                                                            <label class="mt-radio col-md-9"> <input type="radio" value="{{$bkode}}" name="jenis_kegiatan" id="" {{(isset($data->jenis_kegiatan) ? ($data->jenis_kegiatan == $bkode) ? 'checked=checked' : '' : '' )}}>
                                                            <span>{{$kbvalue}}</span>
                                                            </label>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="panitia_monev" class="col-md-3 col-sm-3 col-xs-12 control-label">Lamanya Kegiatan</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input value="{{(isset($data->panitia_monev) ? $data->panitia_monev : '')}}" id="panitia_monev" name="panitia_monev" type="text" class="form-control" onkeydown="numeric_only(event,this)" >
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="jumlah_peserta" class="col-md-3 col-sm-3 col-xs-12 control-label">Jumlah Peserta</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input value="{{(isset($data->jumlah_peserta) ? $data->jumlah_peserta : '')}}" name="jumlah_peserta" type="text" class="form-control col-md-7 col-xs-12"  onkeydown="numeric_only(event,this)">
                                        </div>
                                    </div>

                                </div>

                                 <div class="form-actions fluid">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button type="submit" class="btn btn-success">KIRIM</button>
                                            <a href="{{route('altdev_sinergi')}}" class="btn btn-primary" type="button">BATAL</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
