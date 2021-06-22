@extends('admin.template.base')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Tambah User</div>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
					</div>
				</div>
				<div class="card-body">

	<form action="{{url('admin/user')}}" method="post">
		@csrf
  
<div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
          <!-- <input type="text" name="nama" class="form-control bg-light" placeholder="Nama"
          required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')"> -->
          <select name="id_santri" class="form-control select2">
          	<option >--Pilih Santri--</option>
          	@foreach ($santri as $d)
          	<option value="{{$d->id}}">{{$d->nama_santri}}</option>
          	@endforeach
          </select>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Email</label>
        <div class="input-group col-sm-10">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-table"></i> 
            </div>
          </div>
          <input type="email" name="email" class="form-control bg-light" placeholder="Email" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
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
          <input type="text" name="username" class="form-control bg-light" placeholder="Username"
          required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
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
          <input type="password" name="password" class="form-control bg-light" placeholder="Password" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
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
          <!-- <input type="text" name="level" class="form-control bg-light" placeholder="Level" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')"> -->
          <select name="level" class="form-control bg-light" placeholder="Level" required="" oninvalid="this.setCustomValidity('Data Belum Lengkap')" oninput="setCustomValidity('')">
            <option value="">--Pilih Level--</option>
            <option value="admin">Admin</option>
            <option value="walisantri">Wali Santri</option>
            <option value="pengasuh">pengasuh</option>
          </select>

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



<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Data User</div>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i></button>
					</div>
					
				</div>
				<div class="card-body">
					<table class="table table-datatable">
							<thead>
									<th>No</th>
									<th>Nama</th>
									<th>Username</th>
									<th>Level</th>
									
							</thead>
								<tbody>
									@foreach($list_user as $user)
									<tr>
										<td>{{$loop->iteration}}</td>
										<!-- <td>
											<div class="btn-group">
											<a href="{{url('admin/user', $user->id)}}"class="btn btn-dark"> <i class="fa fa-info"></i></a>
											<a href="{{url('admin/user', $user->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											@include('admin.template.utils.delete', ['url' => url('admin/user', $user->id)])
											</div>
										</td> -->
                    <td><a href="{{url('admin/user', $user->id)}}">{{$user->nama}}</a></td>
										<td>{{$user->username}}</td>
										<td>{{$user->level}}</td>
										
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