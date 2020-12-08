@extends ('admin.template.base')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Ubah Data Presensi
					</div>
						<div class="card-body">
							<form action="{{url('admin/presensi', $presensi->id)}}" method="post">
							@csrf
							@method("PUT")
							<div class="form-group">
								<label for="" class="control-label">Id Santri</label>
								<input type="text" class="form-control" name="id_santri" value="{{$presensi->id_santri}}">
							</div>
							
									<div class="form-group">
										<label for="" class="control-label">Tanggal</label>
										<input type="date" class="form-control" name="tgl_presensi" value="{{$presensi->tgl_presensi}}">
									</div>	
								
								
									<div class="form-group">
										<label for="" class="control-label">Status</label>
										<select name="status" class="form-control" id="exampleFormControlSelect1">
      <option value="hadir">Hadir</option>
      <option value="tidak hadir">Tidak Hadir</option>
    </select>
									</div>
									
								
									<div class="form-group">
										<label for="" class="control-label">Keterangan</label>
										<input type="text" class="form-control" name="keterangan" value="{{$presensi->keterangan}}">
									</div>
								
									<button type="submit" class="btn btn-dark float-right"><i class="fa fa-save">	</i>Simpan</button>
									</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection