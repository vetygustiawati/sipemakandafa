@extends('admin.template.base')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Data Uang Makan
					<a href="{{url('admin/uangmakan/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i>Tambah Data</a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
							<thead>
									<th>No</th>
									<th>Aksi</th>
									<th>Id Santri</th>
									<th>Id User</th>
									<th>Nama Administrasi</th>
									<th>Nominal</th>
									
							</thead>
								<tbody>
									@foreach($list_uangmakan as $uangmakan)
									<tr>
										<td>{{$loop->iteration}}</td>
										<td>
											<div class="btn-group">
											<a href="{{url('admin/uangmakan', $uangmakan->id)}}"class="btn btn-dark"> <i class="fa fa-info"></i></a>
											<a href="{{url('admin/uangmakan', $uangmakan->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											@include('admin.template.utils.delete', ['url' => url('admin/uangmakan', $uangmakan->id)])
											</div>
										</td>
										<td>{{$uangmakan->id_santri}}</td>
										<td>{{$uangmakan->id_user}}</td>
										<td>{{$uangmakan->nama_adm}}</td>
										<td>{{$uangmakan->nominal}}</td>
										
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