@extends('layouts.base_layout')
@section('title', 'Pemberdayaan Masyarakat : Alih Fungsi Lahan Ganja')

@section('content')
	<div class="right_col" role="main">
		<div class="m-t-40">
			<div class="page-title">
				<div class="">
					{!! (isset($breadcrumps) ? $breadcrumps : "" ) !!}
				</div>
			</div>

			<div class="clearfix"></div>

			<div class="row">

				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2> Alih Fungsi Lahan Ganja<small></small></h2>
							<ul class="nav navbar-right panel_toolbox">
							<li class="">
							<a href="#" class="btn btn-lg btn-round btn-danger" data-toggle="modal" data-target="#modal_input_nihil">
							<i class="fa fa-plus-circle"></i> Input Nihil
							</a>
							</li>
							<li class="">
							<a href="{{route('add_altdev_lahan_ganja')}}" class="btn btn-lg btn-round btn-primary">
							<i class="fa fa-plus-circle c-yelow"></i> Tambah Data
							</a>
							</li>
							<li class="">
								@if(count($data) && isset($current_page))
									<a href="{{route('print_page',['altdev_lahan_ganja',$current_page])}}" class="btn btn-lg btn-round btn-dark">
										<i class="fa fa-print"></i> Cetak
									</a>
								@endif
							</li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content ">
							@if (session('status'))
				                @php
				                	$session= session('status');
				                @endphp
		    					<div class="alert alert-{{$session['status']}}">
				        			{{ $session['message'] }}
				    			</div>
							@endif
							@if(count($data))

								<table id="datatable-responsive" class="table table-striped dt-responsive nowrap col-left2" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Tanggal Kegiatan</th>
											<th width="20%">Pelaksana</th>
											<th>Nama Kegiatan</th>
											<th>Penyelenggara </th>
											<th>Luas Lahan </th>
											<th>Actions</th>
										</tr>
									</thead>
								<tbody>
									@php $i = $start_number; @endphp
									@foreach($data as $d)
										<tr>
											<td> {{$i}}</td>

											<td> {{$d->tgl_kegiatan ? date('d/m/Y',strtotime($d->tgl_kegiatan)) : ''}} </td>
											<td> {{$d->nm_instansi}}</td>
											<td> {{$d->nama_kegiatan}}</td>
											<td> {{labelPenyelenggara('jenis_penyelenggara_kegiatan_alihfungsi_lahan',$d->kodepenyelenggara)}}</td>
											<td> {{number_format($d->luas_lahan)}}</td>

											<td>
												<a href="{{route('edit_altdev_lahan_ganja',$d->id)}}"><i class="fa fa-pencil"></i></a>
				                              	<button type="button" class="btn btn-primary button-delete-form" data-target="{{$d->id}}" onClick="delete_form(event,this)"><i class="fa fa-trash"></i></button>

				                            </td>
										</tr>
									@php $i = $i+1; @endphp
									@endforeach
								</tbody>
								</table>
								{!! $pagination !!}
							@else
								<div class="alert alert-warning">
									Data Kasus belum tersedia.
								</div>
							@endif

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


@include('modal.modal_delete_form')
@include('modal.modal_inputNihil')

@endsection
