@extends('admin.template.base')
@section('content')
<br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<!-- <div class="card-header">
				<div class="card-title">Periode Laporan</div>
					<div class="card-tools">
						
					</div>
				</div> -->
				
				<div class="card-body">
				<form action="{{url('admin/laporanCari')}}" method="get">
					<div class="col-sm-12">
						<label class="col-sm-3 col-form-label">Dari Kapan</label>
						<div class="input-group mb-3">
				               <div class="input-group-prepend">
				               	<span class="input-group-text"><i class="fas fa-calendar"></i></span>
				               </div>
							<input type="date" name="dari" value="{{$dari ?? ''}}" id="" class="form-control">
		               	</div>
					</div>
					<div class="col-sm-12">
						<label class="col-sm-3 col-form-label">Sampai Kapan</label>
						<div class="input-group mb-3">
				               <div class="input-group-prepend">
				               	<span class="input-group-text"><i class="fas fa-calendar"></i></span>
				               </div>
							<input type="date" name="sampai" value="{{$sampai ?? ''}}" id="" class="form-control">
		               	</div>
					</div>
					<button type="input" class="btn btn-primary float-right">Cari</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Laporan Presensi</div>
					<div class="card-tools">
						
					</div>
					<span style="float: right">
               
               <a class="btn btn-primary btn-sm my-1 mr-sm-1" ><i class="fas fa-print"></i> Cetak</a>
                    
            </span>
				</div>
				<div class="card-body table-responsive">
					<div class="table-responsive">
						<table class="table table-datatable">
							<thead>
								<th>NO</th>
								<th>Nama Santri</th>
								<th>Nama Wali Santri</th>
								<th>Jan</th>
								<th>Feb</th>
								<th>Mar</th>
								<th>Apr</th>
								<th>Mei</th>
								<th>Jun</th>
								<th>Jul</th>
								<th>Agt</th>
								<th>Sep</th>
								<th>Okt</th>
								<th>Nov</th>
								<th>Des</th>
							</thead>
							<tbody>
			                @foreach ($laporan_presensi as $d)
							<tr>
								<th>{{$loop->iteration}}</th>
								<td>{{$d->nama_santri}}</a></td>
								<td>{{$d->nm_wsantri}}</a></td>
										<!-- jan -->
										<td>
											@if($d->jan == 'hadir')
											<button class="btn btn-success"><i class="fa fa-check"></i></button>
											@elseif($d->jan == '0')
											<button class="btn btn-danger"><i class="fa fa-times"></i></button>
											
											@endif
										</td>							<td><!-- feb -->
								@if($d->feb == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($d->feb == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
									
								@endif
							</td>
							<td><!-- mar -->
								@if($d->mar == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($d->mar == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- apr -->
								
							<!-- 	<h6>Ramadhan</h6> -->
								@if($d->apr == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($d->apr == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- mei -->
								@if($d->mei == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($d->mei == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- jun -->
								@if($d->jun == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($d->jun == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- jul -->
								@if($d->jul == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($d->jul == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- agu -->
								@if($d->agu == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($d->agu == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- sep -->
								@if($d->sep == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($d->sep == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- okt -->
								@if($d->okt == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($d->okt == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- nov -->
								@if($d->nov == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($d->nov == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- des -->
								@if($d->des == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($d->des == '0')
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
</div>
@endsection
