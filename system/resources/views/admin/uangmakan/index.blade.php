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

	<div class="form-group row">
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
    </div>
    <div class="form-group row">
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
		<div class="col-md-12 mt-3">
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

