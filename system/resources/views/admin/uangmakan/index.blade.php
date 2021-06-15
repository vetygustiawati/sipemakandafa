@extends('admin.template.base')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					<h4>Data Uang Makan</h4>
					
					<a href="{{url('admin/uangmakan/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>Tambah Data</a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-datatable table-bordered table-sm table-hover">
							<thead>
								<th>No</th>
								<!-- <th>Aksi</th> -->
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
								<td><a href="{{url('admin/uangmakan', $uangmakan->iduangmakan)}}">{{$uangmakan->nama_santri}}</a></td>
								<td>
									@if($uangmakan->jan == '300000')
									<a href="{{url('admin/uangmakan/kwitansiThermo',$uangmakan->idu)}}"  target="_blank" class="badge badge-success">Rp.300.000</a>
									@elseif($uangmakan->jan == '0')
									<a href="#" class="badge badge-danger">Rp.0</a>
									@endif
								</td>							
								<td><!-- feb -->
									@if($uangmakan->feb == '300000')
										<a href="{{url('admin/uangmakan/kwitansiThermo',$uangmakan->idu)}}"  target="_blank" class="badge badge-success">Rp.300.000</a>
									@elseif($uangmakan->feb == '0')
										<a href="#" class="badge badge-danger">Rp.0</a>
										
									@endif
								</td>
								<td><!-- mar -->
									@if($uangmakan->mar == '300000')
										<a href="{{url('admin/uangmakan/kwitansiThermo',$uangmakan->idu)}}"  target="_blank" class="badge badge-success">Rp.300.000</a>
									@elseif($uangmakan->mar == '0')
										<a href="#" class="badge badge-danger">Rp.0</a>
									@endif
								</td>
								<td><!-- apr -->
									@if($uangmakan->apr == '300000')
										<a href="{{url('admin/uangmakan/kwitansiThermo',$uangmakan->idu)}}"  target="_blank" class="badge badge-success">Rp.300.000</a>
									@elseif($uangmakan->apr == '0')
										<a href="#" class="badge badge-danger">Rp.0</a>
										
									@endif
								</td>
								<td><!-- mei -->
									@if($uangmakan->mei == '300000')
										<a href="{{url('admin/uangmakan/kwitansiThermo',$uangmakan->idu)}}"  target="_blank" class="badge badge-success">Rp.300.000</a>
									@elseif($uangmakan->mei == '0')
										<a href="#" class="badge badge-danger">Rp.0</a>
									@endif
								</td>
								<td><!-- jun -->
									@if($uangmakan->juni == '300000')
										<a href="{{url('admin/uangmakan/kwitansiThermo',$uangmakan->idu)}}"  target="_blank" class="badge badge-success">Rp.300.000</a>
									@elseif($uangmakan->juni == '0')
										<a href="#" class="badge badge-danger">Rp.0</a>
									@endif
								</td>
								<td><!-- jul -->
									@if($uangmakan->juli == '300000')
										<a href="{{url('admin/uangmakan/kwitansiThermo',$uangmakan->idu)}}"  target="_blank" class="badge badge-success">Rp.300.000</a>
									@elseif($uangmakan->juli == '0')
										<a href="#" class="badge badge-danger">Rp.0</a>
									@endif
								</td>
								<td><!-- agu -->
									@if($uangmakan->agt == '300000')
										<a href="{{url('admin/uangmakan/kwitansiThermo',$uangmakan->idu)}}"  target="_blank" class="badge badge-success">Rp.300.000</a>
									@elseif($uangmakan->agt == '0')
										<a href="#" class="badge badge-danger">Rp.0</a>
									@endif
								</td>
								<td><!-- sep -->
									@if($uangmakan->sep == '300000')
										<a href="{{url('admin/uangmakan/kwitansiThermo',$uangmakan->idu)}}"  target="_blank" class="badge badge-success">Rp.300.000</a>
									@elseif($uangmakan->sep == '0')
										<a href="#" class="badge badge-danger">Rp.0</a>
									@endif
								</td>
								<td><!-- okt -->
									@if($uangmakan->okt == '300000')
										<a href="{{url('admin/uangmakan/kwitansiThermo',$uangmakan->idu)}}"  target="_blank" class="badge badge-success">Rp.300.000</a>
									@elseif($uangmakan->okt == '0')
										<a href="#" class="badge badge-danger">Rp.0</a>
									@endif
								</td>
								<td><!-- nov -->
									@if($uangmakan->nov == '300000')
										<a href="{{url('admin/uangmakan/kwitansiThermo',$uangmakan->idu)}}"  target="_blank" class="badge badge-success">Rp.300.000</a>
									@elseif($uangmakan->nov == '0')
										<a href="#" class="badge badge-danger">Rp.0</a>
									@endif
								</td>
								<td><!-- des -->
									@if($uangmakan->des == '300000')
										<a href="{{url('admin/uangmakan/kwitansiThermo',$uangmakan->idu)}}"  target="_blank" class="badge badge-success">Rp.300.000</a>
									@elseif($uangmakan->des == '0')
										<a href="#" class="badge badge-danger">Rp.0</a>
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
</div>
@endsection

