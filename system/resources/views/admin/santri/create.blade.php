@extends('admin.template.base')

@section('content')
	<div class = "container">
		<div class = "row">
			<div class = "col-md-12 mt-5">
				<div class = "card">
					<div class ="card-header">
					Tambah Data Santri
					</div>
					<div class="card-body">

						
					<form action="{{url('admin/santri')}}" method="post">
						@csrf
					
						<div class="form-group">
							<label for="" class ="control-label">Id Santri</label>
							<input type="text" class="form-control" name="id_santri">
						</div>
						<div class="form-group">
							<label for="" class ="control-label">Nama Santri</label>
							<input type="text" class="form-control" name="nama_santri">
						</div>
						<div class="form-group">
							<label for="" class ="control-label">Tempat Lahir</label>
							<input type="text" class="form-control" name="tpt_lahir">
						</div>
						
						<div class="form-group">
							<label for="" class ="control-label">Tanggal Lahir</label>
							<input type="date" class="form-control" name="tgl_lahir">
						</div>
							<div class="form-group">
							<label for="" class ="control-label">Jenis Kelamin</label>
						 <select name="jk" class="form-control" id="exampleFormControlSelect1">
      							<option value="laki-laki">Laki-laki</option>
     							 <option value="perempuan">Perempuan</option>
   						 </select>
						</div>
						<div class="form-group">
							<label for="" class ="control-label">Alamat</label>
							<input type="text" class="form-control" name="alamat">
						</div>
						<div class="form-group">
							<label for="" class ="control-label">Nama Wali Santri</label>
							<input type="text" class="form-control" name="nm_wsantri">
						</div>
						<div class="form-group">
							<label for="" class ="control-label">No HP</label>
							<input type="text" class="form-control" name="no_hp">
						</div>
					
					
					
						<button type="submit" class="btn btn-dark float-right"><i class="fa fa-save"></i>Simpan</button>
					</form>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection 