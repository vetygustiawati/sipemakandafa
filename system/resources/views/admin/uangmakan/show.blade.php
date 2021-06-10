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
							<h6>Id Administrasi : {{$uangmakan->id_administrasi}}</h6>
							<hr>
							<h6>Nominal : {{$uangmakan->nominal}}</h6>
							<hr>
							<h6>Tanggal : {{$uangmakan->tgl}}</h6>
							<hr>
							<h6>Status : {{$uangmakan->status}}</h6>
							<hr>
							<h6>Keterangan : {{$uangmakan->keterangan}}</h6>
							<hr>
							<a href="{{url('admin/uangmakan', $uangmakan->iduangmakan)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											@include('admin.template.utils.delete', ['url' => url('admin/uangmakan', $uangmakan->iduangmakan)])	
								
							<a href="{{url('admin/uangmakan/kwitansiThermo', $uangmakan->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i>Cetak Kwitansi</a>

						<!-- <a href="{{url('admin/uangmakan/kwitansiTinta', $uangmakan->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Tinta</a> -->

						<a href="{{url('admin/uangmakan/laporanBulanan', $uangmakan->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i>Cetak Laporan</a>
							
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection