@extends('admin.template.base')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-16 mt-5">
			<div class="card">
				<div class="card-header">
					<H4>Data Presensi</H4>
					<a href="{{url('admin/presensi/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>Tambah Data</a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
							<thead>
									<th>No</th>
									<th>Aksi</th>
									<th>Nama Santri</th>
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
									@foreach($list_presensi as $presensi)
									<tr>
										<td>{{$loop->iteration}}</td>
										<td>
											<div class="btn-group">
											<a href="{{url('admin/presensi', $presensi->idpresensi)}}"class="btn btn-dark"> <i class="fa fa-info"></i></a>
											<a href="{{url('admin/presensi', $presensi->idpresensi)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											@include('admin.template.utils.delete', ['url' => url('admin/presensi', $presensi->idpresensi)])
											</div>
										</td>
										<td>{{$presensi->nama_santri}}</td>
										<!-- jan -->
										<td>
											@if($presensi->jan == 'hadir')
											<button class="btn btn-success"><i class="fa fa-check"></i></button>
											@elseif($presensi->jan == '0')
											<button class="btn btn-danger"><i class="fa fa-times"></i></button>
											
											@endif
										</td>							<td><!-- feb -->
								@if($presensi->feb == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->feb == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
									
								@endif
							</td>
							<td><!-- mar -->
								@if($presensi->mar == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->mar == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- apr -->
								
								<h6>Ramadhan</h6>
								<!-- @if($presensi->apr == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->apr == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
									@elseif($presensi->apr == 'romadhon')
											<h6>Romadhon</h6>
								@endif -->
							</td>
							<td><!-- mei -->
								@if($presensi->mei == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->mei == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- jun -->
								@if($presensi->jun == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->jun == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- jul -->
								@if($presensi->jul == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->jul == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- agu -->
								@if($presensi->agu == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->agu == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- sep -->
								@if($presensi->sep == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->sep == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- okt -->
								@if($presensi->okt == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->okt == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- nov -->
								@if($presensi->nov == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->nov == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- des -->
								@if($presensi->des == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->des == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
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