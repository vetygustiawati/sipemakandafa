@extends ('admin.template.base')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Data Presensi
				</div>
						<div class="card-body">
							<h6>Id Santri : {{$presensi->id_santri}}</h36>
							<hr>
							<h6>Bulan : {{$presensi->bln}}</h36>
							<hr>
							<h6>Tanggal : {{$presensi->tgl_presensi}}</h6>
							<hr>
							<h6>Status : {{$presensi->status}}</h6>
							<hr>
							<h6>Keterangan : {{$presensi->keterangan}}</h6>
							<hr>
							
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection