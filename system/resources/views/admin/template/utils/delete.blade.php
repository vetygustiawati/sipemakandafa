<form action="{{$url}}" method="post" class="form-inline" onsubmit="return confirm('Yakin Ingin Menghapus Data Ini?')">
	@csrf
	@method("delete")
	<button class="btn btn-danger btn-sm my-1 mr-sm-1 btn-block"><i class="nav-icon fas fa-trash"></i>Hapus</button>
</form>