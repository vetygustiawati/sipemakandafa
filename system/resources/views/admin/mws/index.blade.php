@extends('admin.template.base')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-1">
			<div class="card">
              <div class="card-header">
                <h5 class="card-title"> <b>Tambah Jadwal MWS</b> </h5>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool btn-dark" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
				<div class="card-body">
					<form method="post" class="form-data" id="form-data">  
						@csrf  
			        	<input type="hidden" name="id" id="id">
			        	<div class="row">
			        		<div class="col-sm-3">
			        			<div class="form-group">
									<label>Bulan</label>
									<select name="bulan"  class="form-control" required="">
										<option value="">--Pilih Bulan--</option>
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
			        		<div class="col-sm-3">
				            	<div class="form-group">
									<label>Bulan</label>
									<input type="text" id="bulan" class="form-control" required="true" readonly="">
								</div>
				            </div>
				            <div class="col-sm-3">
				            	<div class="form-group">
									<label>Tahun</label>
									<input type="text" name="tahun" id="tahun" class="form-control" required="true" placeholder="2021">
								</div>
				            </div>
				            <div class="col-sm-3">
				            	<div class="form-group">
									<label>Hari</label>
									<input type="date" name="hari" id="hari" class="form-control" required="true">
								</div>
				            </div>
						</div>
						<div class="row">
					        <div class="col-sm-12">
								<div class="form-group">
									<label>Keterangan</label>
									<textarea name="ket" id="ket" class="form-control" ></textarea>
								</div>
							</div>
				        </div>
						
						<div class="form-group">
							<button type="submit" name="simpan" id="simpan" class="btn btn-dark float-right">
								<i class="fa fa-save"></i> Simpan
							</button>
						</div>
		        	</form>
				</div>
			</div>
			<div class="card">
              <div class="card-header">
                <h5 class="card-title"> <b>Index Jadwal MWS</b> </h5>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool btn-dark" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
				<div class="card-body">
<div class="col-md-auto">
	<div class="table-responsive">
<table class="table table-datatable table-bordered table-sm table-hover">
	<thead>
		<tr>
			<th>No</th>
			<th>Aksi</th>
			<th>Tahun</th>
			<th>Bulan</th>
			<th>Hari</th>
			<th>Ket</th>
		</tr>
	</thead>
	<tbody>
		@foreach($list_mws as $d)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>
				<div class="btn-group">
				<button id="{{$d->id}}" class="btn btn-warning btn-sm edit_data"><i class="fa fa-edit"></i></button>
				<form action="{{url('admin/mws',$d->id)}}" method="post" class="form-inline" onsubmit="return confirm('Apakah anda yakin akan menghapus data ini ??')">
					@csrf
					@method("delete")
					<button class="btn btn-danger btn-sm"><i class="nav-icon fas fa-trash"></i></button>
				</form>
				</div>
			</td>
			<td>{{$d->tahun}}</td>
			<td>{{$d->bulan}}</td>
			<td>{{$d->hari}}</td>
			<td>{{$d->ket}}</td>
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
</div>
@endsection
@push('mwsScript')
<script type="text/javascript">
	$(document).ready(function(){
	$("#simpan").click(function(){
        var data = $('.form-data').serializeArray();
        var bulan = document.getElementById("bulan").value;
        var tahun = document.getElementById("tahun").value;
        var hari = document.getElementById("hari").value;
        var ket = document.getElementById("ket").value;

        if (bulan!=""  && tahun!=""  && hp!="" && ket!="") {
        	$.ajax({
	            type: 'POST',
	            url: "admin/mws",
	            data: data,
	            success: function() {
	                location.reload();
	            }, error: function(response){
		        console.log(response.responseText);
                    }
                });
        }
    });
});

$(document).on('click', '.edit_data', function(){
    $('html, body').animate({ scrollTop: 0 }, 'slow');
    var id = $(this).attr('id');
    $.ajax({
        type: 'GET',
        url: "mws/edit/"+id,
        dataType:'json',
        success: function(response) {
            $('html, body').animate({ scrollTop: 30 }, 'slow');
            document.getElementById("id").value = response.mws.id;
            document.getElementById("bulan").value = response.mws.bulan;
            document.getElementById("tahun").value = response.mws.tahun;
            document.getElementById("hari").value = response.mws.hari;
            document.getElementById("ket").value = response.mws.ket;
        }, error: function(response){
           console.log(response.responseText);
        }
    });
});

$(document).on('click', '.hapus_data', function confirmDelete(){
    	var x = confirm("Apakah anda yakin akan menghapus data ini ???");
    	var id = $(this).attr('id');
    	if (x){
			$.ajax({
		        type: 'GET',
		        url: "admin/pendaftaran/"+id,
		        // data: {id:id},
		        success: function() {
					location.reload();
		            // $('.data').load("data.php");
		        }, error: function(response){
		            console.log(response.responseText);
		        }
		    });
		} else {
			return false;
		}
});
</script>
@endpush
