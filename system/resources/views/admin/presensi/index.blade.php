@extends('admin.template.base')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Tambah Presensi</div>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
					</div>
				</div>
				<div class="card-body">

	<form action="{{url('admin/presensi')}}" method="post">
		@csrf
    <input type="hidden" name="bln" required="" value="<?php date_default_timezone_set('Asia/Pontianak'); echo date("m"); ?>">
	<input type="hidden" name="status" required="" value="hadir">
	<input type="hidden" name="tgl_presensi" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')" value="<?php date_default_timezone_set('Asia/Pontianak'); echo date("y/m/d"); ?>">
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
					<div class="card-title">Data Presensi</div>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i></button>
					</div>
					<!-- <a href="{{--url('admin/presensi/create')--}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>Tambah Data</a> -->
				</div>
				<div class="card-body">
					<table class="table table-datatable">
							<thead>
									<th>No</th>
									<!-- <th>Aksi</th -->
									<th>Foto</th>	
									<th>Nama Santri</th>
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
									@foreach($list_presensi as $presensi)
									<tr>
										<td>{{$loop->iteration}}</td>
										<!-- <td>
											<div class="btn-group">
											<a href="{{url('admin/presensi', $presensi->idpresensi)}}"class="btn btn-dark"> <i class="fa fa-info"></i></a>
											<a href="{{url('admin/presensi', $presensi->idpresensi)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											@include('admin.template.utils.delete', ['url' => url('admin/presensi', $presensi->idpresensi)])
											</div>
										</td> -->
										<td><img src="{{url("public/$presensi->foto")}}"></td>
										<td>{{$presensi->nama_santri}}</a></td>
										<td>{{$presensi->nm_wsantri}}</a></td>
										<!-- jan -->
										<td>
											@if($presensi->jan == 'hadir')
											<button class="btn btn-success"><i class="fa fa-check"></i></button>
											@elseif($presensi->jan == '0')
											<button class="btn btn-danger"><i class="fa fa-times"></i></button>
											
											@endif
										</td>							<td><!-- feb -->
								@if($presensi->feb == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->feb == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
									
								@endif
							</td>
							<td><!-- mar -->
								@if($presensi->mar == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->mar == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- apr -->
								
							<!-- 	<h6>Ramadhan</h6> -->
								@if($presensi->apr == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->apr == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- mei -->
								@if($presensi->mei == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->mei == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- jun -->
								@if($presensi->jun == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->jun == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- jul -->
								@if($presensi->jul == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->jul == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- agu -->
								@if($presensi->agu == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->agu == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- sep -->
								@if($presensi->sep == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->sep == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- okt -->
								@if($presensi->okt == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->okt == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- nov -->
								@if($presensi->nov == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->nov == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- des -->
								@if($presensi->des == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->des == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td>
											<div class="btn-group">
											
											@include('admin.template.utils.delete', ['url' => url('admin/presensi', $presensi->idpresensi)])
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
@endsection