@extends ('admin.template.base')


@section('content')
	<div class = "container">
    <div class = "row">
      <div class = "col-md-12 mt-5">
        <div class = "card">
          <div class ="card-header">
          
           <a href="{{url('admin/presensi')}}" class="pull-right btn btn-primary">
      <i class="fas fa-angle-double-left"> Kembali</i>
    </a>  
    <h5 class="ml-auto float-right">Ubah Data Presensi</h5>
          </div>

          <div class="card-body">
							<form action="{{url('admin/presensi', $presensi->id)}}" method="post">
							@csrf
							@method("PUT")
							<div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Id Santri</label>
        <div class="input-group col-sm-10">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
          <input type="text" name="id_santri" value="{{$presensi->id_santri}}" class="form-control bg-light" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
        </div>          
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Bulan</label>
        <div class="input-group col-sm-10">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-table"></i> 
            </div>
          </div>
      <select name="bln" class="form-control bg-light">
                        <option value="<?php date_default_timezone_set('Asia/Pontianak'); echo date("m"); ?>"><?php date_default_timezone_set('Asia/Pontianak'); echo date("m"); ?></option>
                        <option value="01" @if($presensi->bln == '01') selected @endif>01</option>
                        <option value="02" @if($presensi->bln == '02') selected @endif>02</option>
                        <option value="03" @if($presensi->bln == '03') selected @endif>03</option>
                        <option value="04" @if($presensi->bln == '04') selected @endif>04</option>
                        <option value="05" @if($presensi->bln == '05') selected @endif>05</option>
                        <option value="06" @if($presensi->bln == '06') selected @endif>06</option>
                        <option value="07" @if($presensi->bln == '07') selected @endif>07</option>
                        <option value="08" @if($presensi->bln == '08') selected @endif>08</option>
                        <option value="09" @if($presensi->bln == '09') selected @endif>09</option>
                        <option value="10" @if($presensi->bln == '10') selected @endif>10</option>
                        <option value="11" @if($presensi->bln == '11') selected @endif>11</option>
                        <option value="12" @if($presensi->bln == '12') selected @endif>12</option>
                      </select>
                       
        </div>
      </div>
       <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal Presensi</label>
        <div class="col-sm-10">
          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
          <input type="text" name="tgl_presensi" class="form-control bg-light" placeholder="Tanggal Presensi" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')" value="<?php date_default_timezone_set('Asia/Pontianak'); echo date("y/m/d"); ?>">>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Status</label>
        <div class="input-group col-sm-10">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-table"></i> 
            </div>
          </div>
          <select name="status" class="form-control bg-light">
            <option value="hadir" @if($presensi->status == 'hadir') selected @endif>Hadir</option>
            <option value="tidak hadir" @if($presensi->status == 'tidak hadir') selected @endif>Tidak Hadir</option>
            <option value="romadhon" @if($presensi->status == 'romadhon') selected @endif>Romadhon</option>
          </select>
        </div>
      </div>
      
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Keterangan</label>
        <div class="col-sm-10">
          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
          <textarea name="keterangan" class="form-control">{{$presensi->keterangan}}
                </textarea>
          </div>
        </div>
      </div>
     
      <div class="text-right">
        <button class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
        <button class="btn btn-danger" type="reset"><i class="fa fa-times-circle"></i> Reset
        </button>
									</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection