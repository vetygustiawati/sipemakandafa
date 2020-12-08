@extends('admin.template.base')

@section('content')
	<div class = "container">
		<div class = "row">
			<div class = "col-md-12 mt-5">
				<div class = "card">
					<div class ="card-header">
					Tambah Data Presensi
					</div>
					<div class="card-body">
					<form action="{{url('admin/presensi')}}" method="post">
						@csrf
					<div class="form-group">
					<label for="" class ="control-label">Id Santri</label>
					<input type="text" class="form-control" name="id_santri">
					</div>
					
					<div class="form-group">
					<label for="" class ="control-label">Tanggal Presensi</label>
					<input type="date" class="form-control" name="tgl_presensi">
					</div>
			
							<div class="form-group">
					<label for="" class ="control-label">Status</label>
					 <select name="status" class="form-control" id="exampleFormControlSelect1">
      <option value="hadir">Hadir</option>
      <option value="tidak hadir">Tidak Hadir</option>
    </select>
					
					</div>
					
					<div class="form-group">
					<label for="" class ="control-label">Keterangan</label>
					<input type="text" class="form-control" name="keterangan">
					</div>
			
					
					<button type="submit" class = "btn btn-dark float-right"><i class="fa fa-save"></i>Simpan</button>
					</form>
						<table>
							
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection 