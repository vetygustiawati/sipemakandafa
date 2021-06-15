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
							<input type="date" name="dari" id="" class="form-control">
		               	</div>
					</div>
					<div class="col-sm-12">
						<label class="col-sm-3 col-form-label">Sampai Kapan</label>
						<div class="input-group mb-3">
				               <div class="input-group-prepend">
				               	<span class="input-group-text"><i class="fas fa-calendar"></i></span>
				               </div>
							<input type="date" name="sampai" id="" class="form-control">
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
                     <a class="btn btn-primary btn-sm my-1 mr-sm-1" href="{{url('suratmasuk/agendamasukcetak_pdf')}}" target="_blank"
                    role="button"><i class="fas fa-print"></i> Download</a>
            </span>
				</div>
				<div class="card-body table-responsive">
					<div class="table-responsive">
						<table class="table table-datatable">
							<thead>
								<th>NO</th>
								<th>Id Santri </th>
								<th>Nama Santri</th>
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
								<th>{{$d->id_santri}}</th>
								<th>Saya</th>
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
