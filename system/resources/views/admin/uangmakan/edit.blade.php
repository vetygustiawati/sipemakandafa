@extends ('admin.template.base')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Ubah Data Uang Makan
					</div>
						<div class="card-body">
							<form action="{{url('admin/uangmakan', $uangmakan->id)}}" method="post">
							@csrf
							@method("PUT")
							<div class="form-group">
								<label for="" class="control-label">Id Santri</label>
								<input type="text" class="form-control" name="id_santri" value="{{$uangmakan->id_santri}}">
							</div>
							<div class="form-group">
								<label for="" class="control-label">Id User</label>
								<input type="text" class="form-control" name="id_user" value="{{$uangmakan->id_user}}">
							</div>
							<div class="form-group">
								<label for="" class="control-label">Nama Administrasi</label>
								<select name="nama_adm" class="form-control" id="exampleFormControlSelect1">
      <option value="spp bulan januari">Spp Bulan Januari</option>
      <option value="spp bulan februari">Spp Bulan Februari</option>
      <option value="spp bulan maret">Spp Bulan Maret</option>
      <option value="spp bulan april">Spp Bulan April</option>
      <option value="spp bulan mei">Spp Bulan Mei</option>
      <option value="spp bulan juni">Spp Bulan Juni</option>
      <option value="spp bulan juli">Spp Bulan Juli</option>
      <option value="spp bulan agustus">Spp Bulan Agustus</option>
      <option value="spp bulan september">Spp Bulan September</option>
      <option value="spp bulan oktober">Spp Bulan Oktober</option>
      <option value="spp bulan november">Spp Bulan November</option>
      <option value="spp bulan desember">Spp Bulan Desember</option>
    </select>							
</div>
							<div class="form-group">
								<label for="" class="control-label">Nominal</label>
								<input type="text" class="form-control" name="nominal" value="{{$uangmakan->nominal}}">
							</div>
							<div class="form-group">
								<label for="" class="control-label">Tanggal</label>
								<input type="date" class="form-control" name="tgl" value="{{$uangmakan->tgl}}">
							</div>
							<div class="form-group">
								<label for="" class="control-label">Status</label>
								<select name="status" class="form-control" id="exampleFormControlSelect1">
      <option value="lunas">Lunas</option>
      <option value="belum lunas">Belum Lunas</option>
    </select>
							</div>
							<div class="form-group">
								<label for="" class="control-label">Keterangan</label>
								<input type="text" class="form-control" name="keterangan" value="{{$uangmakan->keterangan}}">
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