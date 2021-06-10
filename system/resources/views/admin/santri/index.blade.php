@extends('admin.template.base')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					<h4>
					DATA SANTRI 
						@if($gender == 'putra')
							PUTRA 
						@elseif($gender == 'putri')
							PUTRI
						@endif
					PONPES DAFA
				</h4>
					<a href="{{url('admin/santri/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>Tambah Data</a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
							<thead>
									<th>No</th>
									<!-- <th>Aksi</th> -->
									<th>Id Santri</th>
									<th>Nama Santri</th>
									<th>Tempat Lahir</th>
									<th>Tanggal Lahir</th>
									
							</thead>

							@if($gender == 'putra')
								<tbody>
									@foreach($list_santri_a as $santri)
									<tr>
										<td>{{$loop->iteration}}</td>
										<!-- <td>
											<div class="btn-group">
											<a href="{{url('admin/santri/show', $santri->id)}}"class="btn btn-dark"> <i class="fa fa-info"></i></a>
											<a href="{{url('admin/santri', $santri->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											@include('admin.template.utils.delete', ['url' => url('admin/santri', $santri->id)])
											</div>
											
										</td> -->
										<td>{{$santri->id_santri}}</td>
										<td><a href="{{url('admin/santri/show', $santri->id)}}">{{$santri->nama_santri}}</a></td>
										<td>{{$santri->tpt_lahir}}</td>
										<td>{{$santri->tgl_lahir}}</td>
									</tr>
									@endforeach
								</tbody>
							@elseif($gender == 'putri')
								<tbody>
									@foreach($list_santri_i as $santri)
									<tr>
										<td>{{$loop->iteration}}</td>
										<!-- <td>
											<div class="btn-group">
											<a href="{{url('admin/santri/show', $santri->id)}}"class="btn btn-dark"> <i class="fa fa-info"></i></a>
											<a href="{{url('admin/santri', $santri->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											@include('admin.template.utils.delete', ['url' => url('admin/santri', $santri->id)])
											</div>
											
										</td> -->
										<td>{{$santri->id_santri}}</td>
										<td><a href="{{url('admin/santri/show', $santri->id)}}">{{$santri->nama_santri}}</a></td>
										<td>{{$santri->tpt_lahir}}</td>
										<td>{{$santri->tgl_lahir}}</td>
									</tr>
									@endforeach
								</tbody>
							@endif
					</table>
				</div>
			</div>	
		</div>	
	</div>	
</div>
@endsection