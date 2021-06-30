<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<section class="content-header">
  <center><Br><h1>
    LAPORAN PRESENSI MUSYAWARAH WALI SANTRI<br>
    PONDOK PESANTREN DARUL FADHILAH
  </h1></Br></center>
</section>
<section class="content container-fluid">
    <div class="box-body">
      <table class ="table table-bordered">
        
            <thead class="text-center">
                          <tr>
                            <<th>NO</th>
                            <th>NAMA SANTRI</th>
                            <th>NAMA WALI SANTRI</th>
                            <th>TANGGAL</th>
                            <th>BULAN</th>
                            <th>STATUS</th>
                          </tr>
                        </thead>
                        <tbody>
                         @foreach($laporan_presensi as $d)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$d->nama_santri}}</td>
                            <td>{{$d->nm_wsantri}}</td>
                            <td>{{$d->tgl_presensi}}</td>
                            <td>{{$d->bln}}</td>
                            <td>{{$d->status}}</td>
                          </tr>
                          @endforeach
                        </tbody> 
        </table>
    </div>
  </div>
  
<script>
  window.print();
</script>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
