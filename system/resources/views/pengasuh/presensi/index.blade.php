@extends('pengasuh.template.base')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Data Presensi
					
				</div>
				<div class="card-body">
					<table class="table table-datatable">
							<thead>
									<th>No</th>
									<th>Id Santri</th>
									<th>Tanggal</th>
									<th>Status</th>
									<th>Keterangan</th>
							</thead>
								<tbody>
									@foreach($list_presensi as $presensi)
									<tr>
										<td>{{$loop->iteration}}</td>
										
										<td>{{$presensi->id_santri}}</td>
										<td>{{$presensi->tgl_presensi}}</td>
										<td>{{$presensi->status}}</td>
										<td>{{$presensi->keterangan}}</td>
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