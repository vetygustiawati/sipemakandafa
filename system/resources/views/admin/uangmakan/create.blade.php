@extends('admin.template.base')

@section('content')
	<div class = "container">
    <div class = "row">
      <div class = "col-md-12 mt-5">
        <div class = "card">
          <div class ="card-header">
          
           <a href="{{url('admin/uangmakan')}}" class="pull-right btn btn-primary">
      <i class="fas fa-angle-double-left"> Kembali</i>
    </a>  
    <h5 class="ml-auto float-right">Tambah Data Uang Makan</h5>
          </div>

          <div class="card-body">

						
					<form action="{{url('admin/uangmakan')}}" method="post">
						@csrf
					
					<!-- <div class="form-group">
	                  <label>ID Santri</label>
	                  <select name="id_santri" class="form-control select2" style="width: 100%;">
	                  	@foreach($list_santri as $uangmakan)
		                    <option value="{{$uangmakan->id}}">{{$uangmakan->id_santri}}-{{$uangmakan->nama_santri}}</option>
	                    @endforeach
	                  </select>
	                </div>		 -->
	                <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Id Santri</label>
        <div class="input-group col-sm-10">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
          <input type="text" name="id_santri" class="form-control bg-light" placeholder="Id Santri" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
        </div>          
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Id User</label>
        <div class="col-sm-10">
          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
          <input type="text" name="id_user" value="03" readonly="" class="form-control bg-light" placeholder="Id User"
          required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
          </div>
        </div>
      </div>
     <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Id Administrasi</label>
        <div class="input-group col-sm-10">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-table"></i> 
            </div>
          </div>
      <select name="id_administrasi" class="form-control">
                        <option value="<?php date_default_timezone_set('Asia/Pontianak'); echo date("m"); ?>"><?php date_default_timezone_set('Asia/Pontianak'); echo date("m"); ?></option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nominal</label>
        <div class="col-sm-10">
          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
          <input type="text" name="nominal" value="300000" readonly="" class="form-control bg-light" placeholder="Nominal"
          required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-10">
          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
          <input type="text" name="tgl" class="form-control bg-light" placeholder="Tanggal Presensi" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')" value="<?php date_default_timezone_set('Asia/Pontianak'); echo date("d/m/Y"); ?>">>
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
            <option value="lunas">Lunas</option>
            <option value="belum lunas">Belum Lunas</option>
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
           <textarea name="keterangan" class="form-control">
            
          </textarea>
          </div>
        </div>
      </div>
      <div class="text-right">
        <button class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
        <button class="btn btn-danger" type="reset"><i class="fa fa-times-circle"></i> Reset
        </button>
      </div>
						
					</form>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection 