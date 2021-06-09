@extends('walisantri.template.base')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					<H4>Data Santri</H4>
					
				</div>
				<div class="card-body">
					<table class="table table-datatable">
							<thead>
									<th>No</th>
									<th>Aksi</th>
									<th>Id Santri</th>
									<th>Nama Santri</th>
									<th>Tempat Lahir</th>
									<th>Tanggal Lahir</th>
									
							</thead>
								<tbody>
									@foreach($list_santri as $santri)
									<tr>
										<td>{{$loop->iteration}}</td>
										<td>
											<div class="btn-group">
											<a href="{{url('admin/santri', $santri->id)}}"class="btn btn-dark"> <i class="fa fa-info"></i></a>
										</td>
										<td>{{$santri->id_santri}}</td>
										<td>{{$santri->nama_santri}}</td>
										<td>{{$santri->tpt_lahir}}</td>
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