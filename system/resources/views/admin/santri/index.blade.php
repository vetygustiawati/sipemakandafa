@extends('admin.template.base')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Tambah Data Santri</div>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
					</div>
				</div>
				<div class="card-body">

	<form action="{{url('admin/santri')}}" method="post" enctype="multipart/form-data">
		@csrf
    
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
        <label class="col-sm-2 col-form-label">Nama Santri</label>
        <div class="col-sm-10">
          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
          <input type="text" name="nama_santri" class="form-control bg-light" placeholder="Nama Santri"
          required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
          </div>
        </div>
      </div>

 <div class="form-group row">
        <label class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-10">
          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
          <input type="file" name="foto" class="form-control bg-light" accept=".png" 
          required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
          </div>
        </div>
      </div>
      <!-- <label for="" class ="control-label">Foto</label>
          <input type="file" class="form-control" name="foto" accept=".png"> -->

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-10">
          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
          <input type="text" name="tpt_lahir" class="form-control bg-light" placeholder="Tempat Lahir"
          required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-10">
          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
          <input type="date" name="tgl_lahir" class="form-control bg-light" placeholder="Tanggal Lahir"
          required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="input-group col-sm-10">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-table"></i> 
            </div>
          </div>
          <select name="jk" class="form-control bg-light" placeholder="Jenis Kelamin" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
            <option value="">--Pilih Jenis Kelamin--</option>
            <option value="laki-laki">Laki-Laki</option>
            <option value="perempuan">Perempuan</option>
          </select>

        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
          <input type="text" name="alamat" class="form-control bg-light" placeholder="Alamat" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Wali Santri</label>
        <div class="col-sm-10">
          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
          <input type="text" name="nm_wsantri" class="form-control bg-light" placeholder="Nama Wali Santri" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">No HP</label>
        <div class="col-sm-10">
          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
          <input type="text" name="no_hp" class="form-control bg-light" placeholder="No HP" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
          </div>
        </div>
      </div>
      <div class="text-right">
        <button class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
        <button class="btn btn-danger" type="reset"><i class="fa fa-times-circle"></i> Reset
        </button>
      </div>						
					</form>

					</div>
				</div>
			</div>
		</div>
	</div>


<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					<div class="card-title">
					DATA SANTRI 
						@if($gender == 'putra')
							PUTRA 
						@elseif($gender == 'putri')
							PUTRI
						@endif
					PONPES DAFA
				</div>
				<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i></button>
					</div>
					<!-- <a href="{{url('admin/santri/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>Tambah Data</a> -->
				</div>
				<div class="card-body">
					<table class="table table-datatable">
							<thead>
									<th>No</th>
									<th>Foto</th>
									<th>Id Santri</th>
									<th>Nama Santri</th>
									<th>Nama Wali Santri</th>
									<th>Tanggal Lahir</th>
									
							</thead>

							@if($gender == 'putra')
								<tbody>
									@foreach($list_santri_a as $santri)
									<tr>
										<td>{{$loop->iteration}}</td>
										<!-- <td>
											<div class="btn-group">
											<a href="{{url('admin/santri/show', $santri->id)}}"class="btn btn-dark"> <i class="fa fa-info"></i></a>
											<a href="{{url('admin/santri', $santri->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											@include('admin.template.utils.delete', ['url' => url('admin/santri', $santri->id)])
											</div>
											
										</td> -->
                    <td><img src="{{url("public/$santri->foto")}}"></td>
										<td>{{$santri->id_santri}}</td>
										<td><a href="{{url('admin/santri/show', $santri->id)}}">{{$santri->nama_santri}}</a></td>
										<td>{{$santri->nm_wsantri}}</td>
										<td>{{$santri->tgl_lahir}}</td>
									</tr>
									@endforeach
								</tbody>
							@elseif($gender == 'putri')
								<tbody>
									@foreach($list_santri_i as $santri)
									<tr>
										<td>{{$loop->iteration}}</td>
										<!-- <td>
											<div class="btn-group">
											<a href="{{url('admin/santri/show', $santri->id)}}"class="btn btn-dark"> <i class="fa fa-info"></i></a>
											<a href="{{url('admin/santri', $santri->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											@include('admin.template.utils.delete', ['url' => url('admin/santri', $santri->id)])
											</div>
											
										</td> -->
                    <td><img src="{{url("public/$santri->foto")}}"></td>
										<td>{{$santri->id_santri}}</td>
										<td><a href="{{url('admin/santri/show', $santri->id)}}">{{$santri->nama_santri}}</a></td>
										<td>{{$santri->nm_wsantri}}</td>
										<td>{{$santri->tgl_lahir}}</td>
									</tr>
									@endforeach
								</tbody>
							@endif
					</table>
				</div>
			</div>	
		</div>	
	</div>	
</div>
@endsection