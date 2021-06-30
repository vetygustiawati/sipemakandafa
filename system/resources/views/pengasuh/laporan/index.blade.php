@extends('pengasuh.template.base')
@section('content')
<br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Filter</div>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
					</div>
				</div>
				
				<div class="card-body">
				<form action="{{url('pengasuh/laporanCari')}}" method="get">
					<div class="col-sm-12">
						<label class="col-sm-3 col-form-label">Tahun</label>
						<div class="input-group mb-3">
				               <div class="input-group-prepend">
				               	<span class="input-group-text"><i class="fas fa-calendar"></i></span>
				               </div>
							<input type="text" name="tahun" id="" placeholder="Tahun" class="form-control">
		               	</div>
					</div>
					<div class="col-sm-12">
						<label class="col-sm-3 col-form-label">Bulan</label>
						<div class="input-group mb-3">
				               <div class="input-group-prepend">
				               	<span class="input-group-text"><i class="fas fa-calendar"></i></span>
				               </div>
				            <select name="bulan" class="form-control" required="">
				            	<option>--Pilih Bulan--</option>
				            	<option value="01">1-Januari</option>
				            	<option value="02">2-Februari</option>
				            	<option value="03">3-Maret</option>
				            	<option value="04">4-April</option>
				            	<option value="05">5-Mei</option>
				            	<option value="06">6-Juni</option>
				            	<option value="07">7-Juli</option>
				            	<option value="08">8-Agustus</option>
				            	<option value="09">9-September</option>
				            	<option value="10">10-Oktober</option>
				            	<option value="11">11-November</option>
				            	<option value="12">12-Desember</option>
				            </select>
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
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i></button>
						
					</div>
					<span style="float: right">
               <form action="{{url('pengasuh/laporan/laporanBulanan')}}" method="get">
					<input type="text" name="tahun" value="{{$tahun ?? ''}}">
					<input type="text" name="bulan" value="{{$bulan ?? ''}}">
               		<button type="submit" class="btn btn-primary btn-sm my-1 mr-sm-1" target="_blank"><i class="fa fa-print"></i>Cetak Laporan</button>
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
