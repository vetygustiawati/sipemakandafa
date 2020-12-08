@extends ('admin.template.base')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Data Uang Makan
					</div>
						<div class="card-body">
							<h6>Id Santri : {{$uangmakan->id_santri}}</h6>
							<hr>
							<h6>Id User : {{$uangmakan->id_user}}</h6>
							<hr>
							<h6>Nama Administrasi : {{$uangmakan->nama_adm}}</h6>
							<hr>
							<h6>Nominal : {{$uangmakan->nominal}}</h6>
							<hr>
							<h6>Tanggal : {{$uangmakan->tgl}}</h6>
							<hr>
							<h6>Status : {{$uangmakan->status}}</h6>
							<hr>
							<h6>Keterangan : {{$uangmakan->keterangan}}</h6>
							<hr>
								
								
							
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection