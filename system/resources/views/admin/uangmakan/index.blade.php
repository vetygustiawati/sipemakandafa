@extends('admin.template.base')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-16 mt-5">
			<div class="card">
				<div class="card-header">
					<h4>Data Uang Makan</h4>
					
					<a href="{{url('admin/uangmakan/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>Tambah Data</a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
							<thead>
									<th>No</th>
									<th>Aksi</th>
									<th>Nama santri</th>
									<th>Jan</th>
									<th>Feb</th>
									<th>Mar</th>
									<th>Apr</th>
									<th>Mei</th>
									<th>Juni</th>
									<th>Juli</th>
									<th>Agt</th>
									<th>Sep</th>
									<th>Okt</th>
									<th>Nov</th>
									<th>Des</th>
									
							</thead>
								<tbody>
									@foreach($list_uangmakan as $uangmakan)
									<tr>
										<td>{{$loop->iteration}}</td>
										<td>
											<div class="btn-group">
											<a href="{{url('admin/uangmakan', $uangmakan->iduangmakan)}}"class="btn btn-dark"> <i class="fa fa-info"></i></a>
											<a href="{{url('admin/uangmakan', $uangmakan->iduangmakan)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											@include('admin.template.utils.delete', ['url' => url('admin/uangmakan', $uangmakan->iduangmakan)])
											</div>
										</td>
										<td>{{$uangmakan->nama_santri}}</td>
										
										<td>
											@if($uangmakan->jan == '300000')
											<button class="btn btn-success">Rp.300.000</button>
											@elseif($uangmakan->jan == '0')
											<button class="btn btn-danger">Rp.0</button>
											
											@endif
										</td>							<td><!-- feb -->
								@if($uangmakan->feb == '300000')
									<button class="btn btn-success">Rp.300.000</button>
								@elseif($uangmakan->feb == '0')
									<button class="btn btn-danger">Rp.0</button>
									
								@endif
							</td>
							<td><!-- mar -->
								@if($uangmakan->mar == '300000')
									<button class="btn btn-success">Rp.300.000</button>
								@elseif($uangmakan->mar == '0')
									<button class="btn btn-danger">Rp.0</button>
								@endif
							</td>
							<td><!-- apr -->
								@if($uangmakan->apr == '300000')
									<button class="btn btn-success">Rp.300.000</button>
								@elseif($uangmakan->apr == '0')
									<button class="btn btn-danger">Rp.0</button>
									
								@endif
							</td>
							<td><!-- mei -->
								@if($uangmakan->mei == '300000')
									<button class="btn btn-success">Rp.300.000</button>
								@elseif($uangmakan->mei == '0')
									<button class="btn btn-danger">Rp.0</button>
								@endif
							</td>
							<td><!-- jun -->
								@if($uangmakan->juni == '300000')
									<button class="btn btn-success">Rp.300.000</button>
								@elseif($uangmakan->juni == '0')
									<button class="btn btn-danger">Rp.0</button>
								@endif
							</td>
							<td><!-- jul -->
								@if($uangmakan->juli == '300000')
									<button class="btn btn-success">Rp.300.000</button>
								@elseif($uangmakan->juli == '0')
									<button class="btn btn-danger">Rp.0</button>
								@endif
							</td>
							<td><!-- agu -->
								@if($uangmakan->agt == '300000')
									<button class="btn btn-success">Rp.300.000</button>
								@elseif($uangmakan->agt == '0')
									<button class="btn btn-danger">Rp.0</button>
								@endif
							</td>
							<td><!-- sep -->
								@if($uangmakan->sep == '300000')
									<button class="btn btn-success">Rp.300.000</button>
								@elseif($uangmakan->sep == '0')
									<button class="btn btn-danger">Rp.0</button>
								@endif
							</td>
							<td><!-- okt -->
								@if($uangmakan->okt == '300000')
									<button class="btn btn-success">Rp.300.000</button>
								@elseif($uangmakan->okt == '0')
									<button class="btn btn-danger">Rp.0</button>
								@endif
							</td>
							<td><!-- nov -->
								@if($uangmakan->nov == '300000')
									<button class="btn btn-success">Rp.300.000</button>
								@elseif($uangmakan->nov == '0')
									<button class="btn btn-danger">Rp.0</button>
								@endif
							</td>
							<td><!-- des -->
								@if($uangmakan->des == '300000')
									<button class="btn btn-success">Rp.300.000</button>
								@elseif($uangmakan->des == '0')
									<button class="btn btn-danger">Rp.0</button>
								@endif
							</td>
							
										
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

