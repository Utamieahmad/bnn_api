@extends('layouts.base_layout')
@section('title', 'Master Data Instansi')
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
							<h2>Master Data Instansi<small></small></h2>
							<ul class="nav navbar-right panel_toolbox">
							<li class="" @php if(!in_array(134, Session::get("cancreate")))  echo 'style="display:none;"'; @endphp>
							<a href="#" id="tambahinstansi" onclick="tambah_datadetail()" data-url="{{URL('/master/save_instansi')}}" class="btn btn-lg btn-round btn-primary" data-toggle="modal" data-target="#modal_master_instansi">
							<i class="fa fa-plus-circle"></i> Tambah Data
							</a>
							</li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content ">
							<br/>
							@if (session('status'))
				              @php
				                $session= session('status');
				              @endphp

				              <div class="alert alert-{{$session['status']}}">
				                  {{ $session['message'] }}
				              </div>
				            @endif
				            @include('_templateFilter.master_instansi_filter')

								<table id="datatable-responsive" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Instansi</th>
											<th>Wilayah</th>
											<th>Alamat</th>
											<th>Actions</th>
										</tr>
									</thead>
								<tbody>
									@if(count($datamaster))
									@php $i = $start_number; @endphp
									@foreach($datamaster as $d)
										<tr>
											<td> {{$i}}</td>
											<td> {{$d['nm_instansi']}}</td>
											<td> {{$d['nm_wilayah']}} </td>
											<td> {{$d['alamat_inst']}} </td>
											<td>
												<a @php if(!in_array(134, Session::get("canedit")))  echo 'style="display:none;"'; @endphp id="edit{{$d['id_instansi']}}" onclick="edit_datadetail({{$d['id_instansi']}});" data-url="{{URL('/master/update_instansi')}}" data-id="{{$d['id_instansi']}}" data-nama="{{$d['nm_instansi']}}" data-wil="{{$d['id_wilayah']}}" data-alamat="{{$d['alamat_inst']}}">
												<i class="fa fa-pencil"></i></a>
												<button @php if(!in_array(134, Session::get("candelete")))  echo 'style="display:none;"'; @endphp type="button" class="btn btn-primary button-action" onClick="delete_form(event,this)" data-target="{{$d['id_instansi']}}" ><i class="fa fa-trash"></i></button>
				                            </td>
										</tr>
									@php $i = $i+1; @endphp
									@endforeach
									@else
										<tr>
											<td colspan="5">
												<div class="alert-messages alert-warning">
													@if(isset($filter))
			                      @if(count($filter) >0)
			                        Data Instansi Yang Anda Cari Belum Tersedia.
			                      @else
			                        Data Instansi belum tersedia.
			                      @endif
			                    @else
			                        Data Instansi belum tersedia.
			                    @endif

												</div>
											</td>
										</tr>
										@endif
								</tbody>
								</table>

								@if(count($datamaster) > 0)
		                {!! $pagination !!}
		            @endif


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

  <script>
    function edit_datadetail(editID){
      document.getElementById("form_modalInstansi").reset();
      var id = $('#edit'+editID).attr('data-id');
      var nama = $('#edit'+editID).attr('data-nama');
      var wil = $('#edit'+editID).attr('data-wil');
      var alamat = $('#edit'+editID).attr('data-alamat');
      var url = $('#edit'+editID).attr('data-url');

      $('#modal_master_instansi').find('form').attr('action', url);
      $('#modal_master_instansi').find('#id').val(id);
      $('#modal_master_instansi').find('#id_wilayah').val(wil).trigger('change');
      $('#modal_master_instansi').find('#nm_instansi').val(nama);
      $('#modal_master_instansi').find('#alamat_inst').val(alamat);
      $('#modal_master_instansi').modal('show');

    }

    function tambah_datadetail(){
      document.getElementById("form_modalInstansi").reset();
      var url = $('#tambahinstansi').attr('data-url');
      $('#modal_master_instansi').find('form').attr('action', url);
      $('#modal_master_instansi').find('#id_wilayah').val('').trigger('change');
    }

  </script>
  @include('modal.modal_master_instansi')
  @include('modal.modal_delete_form')
@endsection
