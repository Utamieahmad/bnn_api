@extends('layouts.base_layout')
@section('title', 'Dir Diseminasi Informasi : Data Penyebarluasan Informasi P4GN Melalui Videotron')

@section('content')
	<div class="right_col" role="main">
		<div class="m-t-40">
			<div class="page-title">
				<div class="">
					{!! (isset($breadcrumps) ? $breadcrumps : "" ) !!}
				</div>
			</div>
			<script>
			var TOKEN = '{{$token}}';
			var TITLE = '{{$title}}';
			</script>

			<div class="clearfix"></div>

			<div class="row">

				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2>Data Kegiatan Penyebarluasan Informasi P4GN Melalui Media Videotron<small></small></h2>
							<ul class="nav navbar-right panel_toolbox">
							<li class="">
							<a href="#" class="btn btn-lg btn-round btn-danger" data-toggle="modal" data-target="#modal_input_nihil">
							<i class="fa fa-plus-circle"></i> Input Nihil
							</a>
							</li>
							<li class="">
							<a href="{{url('pencegahan/dir_diseminasi/add_pendataan_videotron')}}" class="btn btn-lg btn-round btn-primary">
							<i class="fa fa-plus-circle c-yelow"></i> Tambah Data
							</a>
							</li>
							<li class="">
							<a href="{{URL('/pencegahan/dir_diseminasi/printvideotron?page='.$page['page'].'')}}" class="btn btn-lg btn-round btn-dark">
							<i class="fa fa-print"></i> Cetak
							</a>
							</li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content ">
							@if(count($data_disemvideotron))

								<table id="datatable-responsive" class="table table-striped dt-responsive nowrap col-left" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Pelaksana</th>
											<th>Waktu  </th>
											<th>Tema </th>
											<th>Alamat Penempatan</th>
											<th>Durasi Waktu (Detik)</th>
											<th>Actions</th>
										</tr>
									</thead>
								<tbody>
									@php $i = 1; @endphp
									@foreach($data_disemvideotron as $d)
										<tr>
											<td> {{$i}}</td>
											<td> {{$d['nm_instansi']}}</td>
											<td> {{$d['tanggal_pelaksanaan']}}</td>
											<td> {{$d['materi']}} </td>
											<td> {{$d['lokasi_penempatan']}} </td>
											<td> {{$d['durasi_waktu']}} </td>
											<td>
												<a href="{{url('pencegahan/dir_diseminasi/edit_pendataan_videotron/'.$d['id'])}}"><i class="fa fa-pencil"></i></a>
				                              	<button type="button" class="btn btn-primary button-delete" data-target="{{$d['id']}}" ><i class="fa fa-trash"></i></button>

				                            </td>
										</tr>
									@php $i = $i+1; @endphp
									@endforeach
								</tbody>
								</table>
								<ul id="pagination-demo" class="pagination-sm"></ul>
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

	<div class="modal fade bs-modal-sm" tabindex="-1" role="dialog" id="modalDelete" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel2">Hapus Data</h4>
				</div>
				<div class="modal-body">
					Apakah Anda ingin menghapus data ini ?
				</div>
				<input type="hidden" class="target_id" value=""/>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
					<button type="button" class="btn btn-primary confirm" onclick="deleteData()">Ya</button>
				</div>
			</div>
		</div>
	</div>
  @include('modal.modal_input_nihil')
@endsection
