@extends('admin.template.base')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Data Presensi
					<a href="{{url('admin/presensi/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i>Tambah Data</a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
							<thead>
									<th>No</th>
									<th>Aksi</th>
									<th>Id Santri</th>
									<th>Tanggal</th>
									<th>Status</th>
									<th>Keterangan</th>
							</thead>
								<tbody>
									@foreach($list_presensi as $presensi)
									<tr>
										<td>{{$loop->iteration}}</td>
										<td>
											<div class="btn-group">
											<a href="{{url('admin/presensi', $presensi->id)}}"class="btn btn-dark"> <i class="fa fa-info"></i></a>
											<a href="{{url('admin/presensi', $presensi->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											@include('admin.template.utils.delete', ['url' => url('admin/presensi', $presensi->id)])
											</div>
										</td>
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