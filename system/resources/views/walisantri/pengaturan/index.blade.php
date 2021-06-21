@extends('walisantri.template.base')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Data Pengguna</div>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i></button>
					</div>
					<a href="{{url('admin/user', $user->id)}}/edit" class="btn btn-primary btn-sm my-1 mr-sm-1 btn-block"><i class="nav-icon fas fa-pencil-alt"></i> Edit</a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
							<thead>
									<th>No</th>
									<th>Nama</th>
									<th>Username</th>
									<th>Level</th>
									
							</thead>
								<tbody>
									@foreach($list_user as $user)
									<tr>
										<td>{{$loop->iteration}}</td>
										<!-- <td>
											<div class="btn-group">
											<a href="{{url('admin/user', $user->id)}}"class="btn btn-dark"> <i class="fa fa-info"></i></a>
											<a href="{{url('admin/user', $user->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											@include('admin.template.utils.delete', ['url' => url('admin/user', $user->id)])
											</div>
										</td> -->
                    					<td>{{$user->nama}}</a></td>
										<td>{{$user->username}}</td>
										<td>{{$user->email}}</td>
										<td>{{$user->level}}</td>
										
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