@extends('admin.template.base')

@section('content')
	<div class = "container">
    <div class = "row">
      <div class = "col-md-12 mt-5">
        <div class = "card">
          <div class ="card-header">
          
           <button onclick="window.history.back();" class="pull-right btn btn-primary">
              <i class="fas fa-angle-double-left"> Kembali</i>
            </button> 
    <h5 class="ml-auto float-right">Ubah Data User</h5>
          </div>

          <div class="card-body">
					<form action="{{url('admin/user', $user->id)}}" method="post">
						@csrf
						@method("PUT")
       
<!-- <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
          <input type="text" name="nama" class="form-control bg-light" placeholder="Nama"
          required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
          <select name="id_santri" class="form-control select2">
            <option >--Pilih Santri--</option>
            @foreach ($santri as $d)
            <option value="{{$d->id}}">{{$d->nama_santri}}</option>
            @endforeach
          </select>
          </div>
        </div>
      </div> -->
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Email</label>
        <div class="input-group col-sm-10">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
         <input type="email" name="email" value="{{$user->email}}" class="form-control bg-light" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
        </div>          
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
          <input type="text" name="username" value="{{$user->username}}" class="form-control bg-light" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
          <input type="password" name="password" value="" class="form-control bg-light" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Level</label>
        <div class="col-sm-10">
          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
          <input type="text" name="level" value="{{$user->level}}" class="form-control bg-light" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
          </div>
        </div>
      </div>
      
      <div class="text-right">
        <button class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
     <!--    <button class="btn btn-danger" type="reset"><i class="fa fa-times-circle"></i> Reset
        </button> -->
					</form>
						<table>
							
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection 