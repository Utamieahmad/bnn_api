<div class="">
  <form class="form-group filter" action="{{isset($route) ? route($route) : ''}}" method="post">
    <div class="row">
      {{csrf_field()}}
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="row">
        <?php
          $key = [
            'periode' => 'Tanggal Pelaporan',
            'jns_kegiatan' => 'Jenis Kegiatan',
            'pelapor' => 'Pelapor',
            'satker' => 'Satuan Kerja',
            'status' => 'Status'
          ];
        ?>

          <div class="col-md-6 col-sm-6 col-xs-12">
            <label for="tipe" class="control-label">Tipe</label>
            <select class="form-control select2"  name="tipe" onchange="formFilter(this)">
              <option value="">SEMUA</option>
              @foreach($key as $k=>$v)
                <option value="{{$k}}" {{( isset($filter['tipe']) ? ( ( $filter['tipe'] ==$k)  ? 'selected=selected' : '') : '')}}>{{$v}}</option>
              @endforeach
            </select>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 keyword {{( isset($filter['tipe']) ?  ( ($filter['tipe'] == 'pelapor')  ? '' : 'hide')  :'' )}} div-wrap">
            <label for="tipe" class="control-label">Kata Kunci</label>
            <?php
              $kata_kunci = "";
              $tipe_keyword = ['pelapor'];
              if(isset($filter['tipe'])){
                if(in_array($filter['tipe'],$tipe_keyword)){
                  $kata_kunci = $filter[$filter['tipe']];
                }else{
                  $kata_kunci = "";
                }
              }else{
                $kata_kunci = "";
              }


            ?>
            <input class="form-control" name="kata_kunci" value="{{$kata_kunci}}" {{($kata_kunci ? '' : 'disabled=disabled')}}  />
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 status {{(isset($filter['tipe']) ? (($filter['tipe'] == 'status') ? '' : 'hide') :'hide')}} div-wrap">
            <label for="tipe" class="control-label"> Status</label>
             <select class="form-control select2 " name="status">
                <option>-- Pilih Status --</option>
                <option value="Y" {{(isset($filter['status']) ? (($filter['status'] == 'Y') ? 'selected=selected' : '') :'')}}>Lengkap</option>
                <option value="N" {{(isset($filter['status']) ? (($filter['status'] == 'N') ? 'selected=selected' : '') :'')}}>Belum Lengkap</option>

            </select>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 jns_kegiatan {{(isset($filter['tipe']) ? (($filter['tipe'] == 'jns_kegiatan') ? '' : 'hide') :'hide')}} div-wrap">
            <label for="tipe" class="control-label"> Status</label>
             <select class="form-control select2 " name="jns_kegiatan">
                <option>-- Pilih Status --</option>
                @if(count($jenis_kegiatan) > 0 )
                  @foreach($jenis_kegiatan as $j => $k)
                    <option value="{{$j}}" {{( isset($filter['jns_kegiatan']) ? ( ( $filter['jns_kegiatan'] ==$j)  ? 'selected=selected' : '') : '')}}>{{$k}}</option>
                  @endforeach
                @endif
            </select>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 satker {{(isset($filter['tipe']) ? (($filter['tipe'] == 'satker') ? '' : 'hide') :'hide')}} div-wrap">
            <label for="tipe" class="control-label"> Status</label>

             <select class="form-control select2 " name="satker">
                <option>-- Pilih Status --</option>
                @if(count($instansi) > 0 )
                  @foreach($instansi as $ins => $i)
                    <option value="{{$i['nm_instansi']}}" {{( isset($filter['satker']) ? ( ( $filter['satker'] ==$i['nm_instansi'])  ? 'selected=selected' : '') : '')}}>{{$i['nm_instansi']}}</option>
                  @endforeach
                @endif
            </select>
          </div>



          <div class="clearfix"></div>
          <div class="periode {{(isset($filter['tipe']) ? (($filter['tipe'] == 'periode') ? '' : 'hide') :'hide')}} div-wrap">
            <div class="col-md-6 col-sm-6 col-xs-12 m-t-10">
              <label for="tipe" class="control-label">Mulai</label>
              <div class='input-group date date_start row'>
                  <input type='text' name="tgl_from" class="form-control" value="{{isset($filter) ? (isset($filter['tgl_from']) ? ($filter['tgl_from']? $filter['tgl_from']  :'' ): '') :''}}"/>
                  <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>

            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 m-t-10">
              <label for="tipe" class="control-label">Selesai</label>
              <div class='input-group date date_end row'>
                  <input type='text' name="tgl_to" class="form-control" value="{{isset($filter) ? (isset($filter['tgl_to'])? ($filter['tgl_to'] ? $filter['tgl_to'] : ''):'') :''}}"/>
                  <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
            </div>
          </div>
        </div>


        <div class="clearfix"></div>
        <div class="m-t-10 m-b-20">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-xs-12">
              <label for="tipe" class="control-label">Urutan</label>
              <select class="form-control select2" name="order">
                <option value="desc"  {{(isset($filter['order']) ? (($filter['order'] == 'desc') ? 'selected=selected' : '') :'')}}>Bawah ke Atas</option>
                <option value="asc"  {{(isset($filter['order']) ? (($filter['order'] == 'asc') ? 'selected=selected' : '') :'')}}>Atas ke Bawah</option>
              </select>
            </div>
            <div class="col-sm-6 col-md-6 col-xs-12">
              <label for="tipe" class="control-label">Jumlah Per Halaman</label>
              <select class="form-control select2" name="limit">
                <option value="5" {{isset($filter) ? ( isset($filter['limit'])? ($filter['limit'] == '5' ? 'selected=selected':''): '' ): ''}}>5</option>
                <option value="10" {{isset($filter) ? ( isset($filter['limit'])? ($filter['limit'] == '10' ? 'selected=selected':''): 'selected=selected' ): 'selected=selected'}}>10</option>
                <option value="25" {{isset($filter) ?( isset($filter['limit'])? ($filter['limit'] == '25' ? 'selected=selected':''): ''): ''}}>25</option>
                <option value="50" {{isset($filter) ? ( isset($filter['limit'])? ($filter['limit'] == '50' ? 'selected=selected':''): ''): ''}}>50</option>
                <option value="100" {{isset($filter) ? ( isset($filter['limit'])? ($filter['limit'] == '100' ? 'selected=selected':''): ''): ''}}>100</option>
              </select>
              <div class="clearfix"></div>
                <div class="m-t-10">
                  <input type="submit" class="btn btn-success btn-search" value="Cari" name="cari"/>
                  <a href="{{isset($route) ? route($route) : ''}}" class="btn btn-primary">Hapus</a>
                </div>
              </div>
            </div>
          </div>

      </div>
    </div>
  </form>

  <div class="m-b-20">
    <div class="m-b-20">


      @if(isset($filter))
        @php
          $s = $filter;

        @endphp

         Menampilkan:

        <i>
        {{ isset($s['tipe']) ? (isset($key[$s['tipe']]) ?$key[$s['tipe']] .' =' : '')  : ''}}
        @if( isset($s['tipe']))
          @if( $s['tipe'] == 'periode')
            {{isset($s['tgl_from']) ? $s['tgl_from'] : ''}}
            {{isset($s['tgl_from']) && isset($s['tgl_to'])  ? '-' : ''}}
            {{isset($s['tgl_to']) ?  $s['tgl_to'] .', ' : ', '}}
          @elseif($s['tipe'] == 'status')
            @if($s['status'] == 'Y')
              Lengkap ,
            @else
              Belum Lengkap ,
            @endif
          @elseif($s['tipe'] == 'pelapor')
            {{ $filter['pelapor'] }} ,
          @elseif($s['tipe'] == 'jns_kegiatan')
            {{ isset($jenis_kegiatan[$filter['jns_kegiatan']]) ? $jenis_kegiatan[$filter['jns_kegiatan']] :$filter['jns_kegiatan']  }} ,
         @endif
        @endif

        Urutan =

        @if(isset($s['order']))
          @if($s['order'] == 'desc')
            Bawah ke Atas
          @elseif($s['order'] == 'asc')
            Atas ke Bawah
          @else
            Bawah ke Atas
          @endif
        @endif
        , Jumlah Per Halaman =
        @if(isset($s['limit']))
          {{$s['limit']}}
        @endif
        </i>
      @endif


    </div>

  </div>
</div>
