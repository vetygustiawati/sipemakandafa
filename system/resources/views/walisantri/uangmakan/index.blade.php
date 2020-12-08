@extends('walisantri.template.base')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Data Uang Makan
					
				</div>
				<div class="card-body">
					<table class="table table-datatable">
							<thead>
									<th>No</th>
									<th>Id Santri</th>
									<th>Id User</th>
									<th>Nama Administrasi</th>
									<th>Nominal</th>
									
							</thead>
								<tbody>
									@foreach($list_uangmakan as $uangmakan)
									<tr>
										<td>{{$loop->iteration}}</td>
										
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