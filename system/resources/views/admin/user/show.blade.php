@extends ('admin.template.base')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Data User
					</div>
						<div class="card-body">
							<h6> Nama : {{$user->nama}}</h6>
							<hr>
							
							<h6> Username : {{$user->username}}</h6>
							<hr>
							<h6>Email : {{$user->email}}</h6>
							<hr>
							<h6>Level : {{$user->level}}</h6>
							<hr>
							
							<a href="{{url('admin/user', $user->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
							@include('admin.template.utils.delete', ['url' => url('admin/user', $user->id)])
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection