@extends ('admin.template.base')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Data Santri
					</div>
						<div class="card-body">
							<img src="{{url("public/$santri->foto")}}">
							<hr>
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
						<a href="{{url('admin/santri', $santri->id)}}/edit" class="btn btn-primary btn-sm my-1 mr-sm-1 btn-block"><i class="nav-icon fas fa-pencil-alt"></i> Edit</a>
											@include('admin.template.utils.delete', ['url' => url('admin/santri', $santri->id)])	
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection