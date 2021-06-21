@extends('walisantri.template.base')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					<div class="card-title">
						Data Santri
				</div>
				<div class="card-tools">
						
					</div>
					<!-- <a href="{{url('admin/santri/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>Tambah Data</a> -->
				</div>
				<div class="card-body">
					<table class="table table-datatable">
							<thead>
									<th>No</th>
									<th>Foto</th>
									<th>Id Santri</th>
									<th>Nama Santri</th>
									<th>Nama Wali Santri</th>
									<th>Tanggal Lahir</th>
									
							</thead>

							
								<tbody>
									@foreach($list_santri as $santri)
									<tr>
										<td>{{$loop->iteration}}</td>
										<!-- <td>
											<div class="btn-group">
											<a href="{{url('admin/santri/show', $santri->id)}}"class="btn btn-dark"> <i class="fa fa-info"></i></a>
											<a href="{{url('admin/santri', $santri->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											@include('admin.template.utils.delete', ['url' => url('admin/santri', $santri->id)])
											</div>
											
										</td> -->
                    <td><img src="{{url("public/$santri->foto")}}"></td>
										<td>{{$santri->id_santri}}</td>
										<td><a href="{{url('admin/santri/show', $santri->id)}}">{{$santri->nama_santri}}</a></td>
										<td>{{$santri->nm_wsantri}}</td>
										<td>{{$santri->tgl_lahir}}</td>
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