@extends ('admin.template.base')


@section('content')
	<div class = "container">
    <div class = "row">
      <div class = "col-md-12 mt-5">
        <div class = "card">
          <div class ="card-header">
          
           <a href="{{url('admin/santri/putra')}}" a href="{{url('admin/santri/putri')}}" class="pull-right btn btn-primary">
      <i class="fas fa-angle-double-left"> Kembali</i>
    </a>  
    <h5 class="ml-auto float-right">Ubah Data Santri</h5>
          </div>

          <div class="card-body">
							<form action="{{url('admin/santri', $santri->id)}}" method="post">
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
          <input type="text" name="id_santri" value="{{$santri->id_santri}}" class="form-control bg-light" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
        </div>          
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Santri</label>
        <div class="col-sm-10">
          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
          <input type="text" name="nama_santri" value="{{$santri->nama_santri}}" class="form-control bg-light" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-10">
          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
         <input type="text" name="tpt_lahir" value="{{$santri->tpt_lahir}}" class="form-control bg-light" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-10">
          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
          <input type="date" name="tgl_lahir" value="{{$santri->tgl_lahir}}" class="form-control bg-light" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="input-group col-sm-10">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-table"></i> 
            </div>
          </div>
          <select name="jk" class="form-control bg-light">
            <option value="laki-laki" @if($santri->jk == 'laki-laki') selected @endif>Laki-laki</option>
            <option value="perempuan" @if($santri->jk == 'perempuan') selected @endif>Perempuan</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
           <input type="text" name="alamat" value="{{$santri->alamat}}" class="form-control bg-light" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Wali Santri</label>
        <div class="col-sm-10">
          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
           <input type="text" name="nm_wsantri" value="{{$santri->nm_wsantri}}" class="form-control bg-light" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">No HP</label>
        <div class="col-sm-10">
          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
           <input type="text" name="no_hp" value="{{$santri->no_hp}}" class="form-control bg-light" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
          </div>
        </div>
      </div>
      <div class="text-right">
        <button class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
        <!-- <button class="btn btn-danger" type="reset"><i class="fa fa-times-circle"></i> Reset
        </button> -->
      </div>						
							
									</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection