@extends('admin.template.base')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Tambah Uang Makan</div>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
					</div>
				</div>
				<div class="card-body">

	<form action="{{url('admin/uangmakan')}}" method="post">
		@csrf
    
	<input type="hidden" name="id_user" required="" value="03">
	<input type="hidden" name="id_administrasi" required="" value="<?php date_default_timezone_set('Asia/Pontianak'); echo date("m"); ?>">
	<input type="hidden" name="nominal" required="" value="300000">
	<input type="hidden" name="tgl" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')" value="<?php date_default_timezone_set('Asia/Pontianak'); echo date("y/m/d"); ?>">
	<input type="hidden" name="status" required="" value="lunas">
	<input type="hidden" name="keterangan" required="" value="">

	<!-- <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Id Santri</label>
      <div class="input-group col-sm-10">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-table"></i> 
          </div>
        </div>
        <select name="id_santri" class="form-control select2" required="">
        	<option>--Pilih Santri--</option>
        	@foreach($list_santri as $d)
        	<option value="{{$d->id_santri}}">{{$d->id_santri}}-{{$d->nama_santri}}</option>
        	@endforeach
        </select>
      </div>          
    </div> -->
    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Id Santri</label>
        <div class="input-group col-sm-10">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
          <input type="text" name="id_santri" class="form-control bg-light" placeholder="Id Santri" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
        </div>          
      </div>
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Bulan</label>
      <div class="input-group col-sm-10">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-table"></i> 
          </div>
        </div>
          <select name="id_administrasi" class="form-control" required="">
          	<option>--Pilih Bulan--</option>
          	<option value="01" @if(date('m')== 1) selected @endif >1-Januari</option>
          	<option value="02" @if(date('m')== 2) selected @endif>2-Februari</option>
          	<option value="03" @if(date('m')== 3) selected @endif>3-Maret</option>
          	<option value="04" @if(date('m')== 4) selected @endif>4-April</option>
          	<option value="05" @if(date('m')== 5) selected @endif>5-Mei</option>
          	<option value="06" @if(date('m')== 6) selected @endif>6-Juni</option>
          	<option value="07" @if(date('m')== 7) selected @endif>7-Juli</option>
          	<option value="08" @if(date('m')== 8) selected @endif>8-Agustus</option>
          	<option value="09" @if(date('m')== 9) selected @endif>9-September</option>
          	<option value="10" @if(date('m')== 10) selected @endif>10-Oktober</option>
          	<option value="11" @if(date('m')== 11) selected @endif>11-November</option>
          	<option value="12" @if(date('m')== 12) selected @endif>12-Desember</option>
          </select>
      </div>          
    </div>

   
    <div class="text-right">
      <button class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
      
		</form>

	</div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-15 mt-6">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Data Uang Makan</div>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i></button>
					</div>
					<!-- <a href="{{--url('admin/presensi/create')--}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>Tambah Data</a> -->
				</div>
				<div class="card-body">
					<table class="table table-datatable">
							<thead>
								<th>No</th>
								<!-- <th>Aksi</th> -->
								<th>Foto</th>
								<th>Nama santri</th>
								<th>Nama Wali Santri</th>
								<th>Jan</th>
								<th>Feb</th>
								<th>Mar</th>
								<th>Apr</th>
								<th>Mei</th>
								<th>Juni</th>
								<th>Juli</th>
								<th>Agt</th>
								<th>Sep</th>
								<th>Okt</th>
								<th>Nov</th>
								<th>Des</th>
								<th>Aksi</th>
							</thead>
							<tbody>
							@foreach($list_uangmakan as $uangmakan)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td><img src="{{url("public/$uangmakan->foto")}}"></td>
								<td>{{$uangmakan->nama_santri}}</a></td>
								<td>{{$uangmakan->nm_wsantri}}</a></td>
								<td>
									@if($uangmakan->jan == '300000')
									<a href="{{url('admin/uangmakan/kwitansiThermo',$uangmakan->idu)}}"  target="_blank" class="badge badge-success">Rp.300.000</a>
									@elseif($uangmakan->jan == '0')
									<a href="#" class="badge badge-danger">Rp.0</a>
									@endif
								</td>							
								<td><!-- feb -->
									@if($uangmakan->feb == '300000')
										<a href="{{url('admin/uangmakan/kwitansiThermo',$uangmakan->idu)}}"  target="_blank" class="badge badge-success">Rp.300.000</a>
									@elseif($uangmakan->feb == '0')
										<a href="#" class="badge badge-danger">Rp.0</a>
										
									@endif
								</td>
								<td><!-- mar -->
									@if($uangmakan->mar == '300000')
										<a href="{{url('admin/uangmakan/kwitansiThermo',$uangmakan->idu)}}"  target="_blank" class="badge badge-success">Rp.300.000</a>
									@elseif($uangmakan->mar == '0')
										<a href="#" class="badge badge-danger">Rp.0</a>
									@endif
								</td>
								<td><!-- apr -->
									@if($uangmakan->apr == '300000')
										<a href="{{url('admin/uangmakan/kwitansiThermo',$uangmakan->idu)}}"  target="_blank" class="badge badge-success">Rp.300.000</a>
									@elseif($uangmakan->apr == '0')
										<a href="#" class="badge badge-danger">Rp.0</a>
										
									@endif
								</td>
								<td><!-- mei -->
									@if($uangmakan->mei == '300000')
										<a href="{{url('admin/uangmakan/kwitansiThermo',$uangmakan->idu)}}"  target="_blank" class="badge badge-success">Rp.300.000</a>
									@elseif($uangmakan->mei == '0')
										<a href="#" class="badge badge-danger">Rp.0</a>
									@endif
								</td>
								<td><!-- jun -->
									@if($uangmakan->juni == '300000')
										<a href="{{url('admin/uangmakan/kwitansiThermo',$uangmakan->idu)}}"  target="_blank" class="badge badge-success">Rp.300.000</a>
									@elseif($uangmakan->juni == '0')
										<a href="#" class="badge badge-danger">Rp.0</a>
									@endif
								</td>
								<td><!-- jul -->
									@if($uangmakan->juli == '300000')
										<a href="{{url('admin/uangmakan/kwitansiThermo',$uangmakan->idu)}}"  target="_blank" class="badge badge-success">Rp.300.000</a>
									@elseif($uangmakan->juli == '0')
										<a href="#" class="badge badge-danger">Rp.0</a>
									@endif
								</td>
								<td><!-- agu -->
									@if($uangmakan->agt == '300000')
										<a href="{{url('admin/uangmakan/kwitansiThermo',$uangmakan->idu)}}"  target="_blank" class="badge badge-success">Rp.300.000</a>
									@elseif($uangmakan->agt == '0')
										<a href="#" class="badge badge-danger">Rp.0</a>
									@endif
								</td>
								<td><!-- sep -->
									@if($uangmakan->sep == '300000')
										<a href="{{url('admin/uangmakan/kwitansiThermo',$uangmakan->idu)}}"  target="_blank" class="badge badge-success">Rp.300.000</a>
									@elseif($uangmakan->sep == '0')
										<a href="#" class="badge badge-danger">Rp.0</a>
									@endif
								</td>
								<td><!-- okt -->
									@if($uangmakan->okt == '300000')
										<a href="{{url('admin/uangmakan/kwitansiThermo',$uangmakan->idu)}}"  target="_blank" class="badge badge-success">Rp.300.000</a>
									@elseif($uangmakan->okt == '0')
										<a href="#" class="badge badge-danger">Rp.0</a>
									@endif
								</td>
								<td><!-- nov -->
									@if($uangmakan->nov == '300000')
										<a href="{{url('admin/uangmakan/kwitansiThermo',$uangmakan->idu)}}"  target="_blank" class="badge badge-success">Rp.300.000</a>
									@elseif($uangmakan->nov == '0')
										<a href="#" class="badge badge-danger">Rp.0</a>
									@endif
								</td>
								<td><!-- des -->
									@if($uangmakan->des == '300000')
										<a href="{{url('admin/uangmakan/kwitansiThermo',$uangmakan->idu)}}"  target="_blank" class="badge badge-success">Rp.300.000</a>
									@elseif($uangmakan->des == '0')
										<a href="#" class="badge badge-danger">Rp.0</a>
									@endif
								</td>
								<td>
											<div class="btn-group">
											
											@include('admin.template.utils.delete', ['url' => url('admin/uangmakan', $uangmakan->iduangmakan)])
											</div>
										</td>
								</tr>
									@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>	
		</div>	
	</div>	
</div>
@endsection

