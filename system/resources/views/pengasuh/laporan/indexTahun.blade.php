@extends('pengasuh.template.base')
@section('content')
<br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Laporan Presensi</div>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i></button>

					</div>
					<span style="float: right">
               <form action="{{url('admin/laporan/laporanTahunan')}}" method="get">
					<input type="hidden" name="tahun" value="{{$tahun ?? ''}}">
               		<button type="submit" class="btn btn-primary btn-sm my-1 mr-sm-1" target="_blank"><i class="fa fa-print"></i> Cetak Laporan Tahunan</button>
               </form>
                    
            </span>
				</div>
				<div class="card-body table-responsive">
					<div class="table-responsive">
						<table class="table table-datatable table-bordered table-sm">
							<thead>
								<th>NO</th>
								<th>Nama Santri</th>
								<th>Nama Wali Santri</th>
								<th>Tanggal</th>
								<th>Bulan</th>
								<th>Status</th>
							</thead>
							<tbody>
							@foreach($laporan_presensi as $d)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$d->nama_santri}}</td>
									<td>{{$d->nm_wsantri}}</td>
									<td>{{$d->tgl_presensi}}</td>
									<td>{{$d->bln}}</td>
									<td><span class="badge badge-pill badge-success">Hadir</span></td>
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
