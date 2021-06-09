@extends ('walisantri.template.base')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Data Santri
					</div>
						<div class="card-body">
							<h6>Id Santri : {{$santri->id_santri}}</h6>
							<hr>
							<h6>Nama Santri : {{$santri->nama_santri}}</h6>
							<hr>
							<h6>Tempat Lahir : {{$santri->tpt_lahir}}</h6>
							<hr>
							<h6>Tanggal Lahir : {{$santri->tgl_lahir}}</h6>
							<hr>
							<h6>Jenis Kelamin : {{$santri->jk}}</h6>
							<hr>
							<h6>Alamat : {{$santri->alamat}}</h6>
							<hr>
							<h6>Nama Wali Santri : {{$santri->nm_wsantri}}</h6>
							<hr>
							<h6>No HP : {{$santri->no_hp}}</h6>
							<hr>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection