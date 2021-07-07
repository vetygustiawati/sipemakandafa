@extends ('walisantri.template.base')

@section('content')

<!DOCTYPE html>
<html>

<style type="text/css">
    body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>
<head>
    <title>SIPEMAKAN</title>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            @foreach($list_presensi as $presensi)
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                           <img src="{{url("public/$presensi->foto")}}">
                            <div class="file btn btn-lg btn-primary">
                               {{$presensi->nama_santri}}
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5  style="font-family: times new roman">
                                       DATA KEHADIRAN WALI SANTRI
                                    </h5>
                                    <h5 style="font-family: times new roman">
                                        Pondok Pesantren Darul Fadhilah
                                    </h5>
                                    <br>
                                    
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                               
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-4">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5 style="font-family: times new roman"><b><i class="nav-icon fas fa-key"></i>  Id Santri</h5>
                                                <h5 style="font-family: times new roman">  {{$presensi->id_santri}}</h5>
                                            </div>
                                        </div>
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                               
                            </ul>
                                        <br>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <h5 style="font-family: times new roman"><b><i class="nav-icon fas fa-user-graduate"></i> Nama Santri</h5>
                                                 <h5 style="font-family: times new roman">{{$presensi->nama_santri}}</h5>
                                            </div>
                                        </div>
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                               
                            </ul>
                                        <br>
                            <div class="row">
                                            <div class="col-md-6">
                                                <h5 style="font-family: times new roman"><b><i class="nav-icon fas fa-user-circle"></i> Nama Wali Santri</h5>
                                                 <h5 style="font-family: times new roman">{{$presensi->nm_wsantri}}</h5>
                                            </div>
                                        </div>
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                               
                            </ul>
                                        <br>
                                        
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Jan</th>
                                <th>Feb</th>
                                <th>Mar</th>
                                <th>Apr</th>
                                <th>Mei</th>
                                <th>Juni</th>
                                <th>Juli</th>
                                <th>Agt</th>
                                <th>Sep</th>
                                <th>Okt</th>
                                <th>Nov</th>
                                <th>Des</th>
                            </thead>
                            <tbody>
                            @foreach($list_presensi as $presensi)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
											@if($presensi->jan == 'hadir')
											<button class="btn btn-success"><i class="fa fa-check"></i></button>
											@elseif($presensi->jan == '0')
											<button class="btn btn-danger"><i class="fa fa-times"></i></button>
											
											@endif
										</td>							<td><!-- feb -->
								@if($presensi->feb == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->feb == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
									
								@endif
							</td>
							<td><!-- mar -->
								@if($presensi->mar == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->mar == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- apr -->
								
							<!-- 	<h6>Ramadhan</h6> -->
								@if($presensi->apr == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->apr == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- mei -->
								@if($presensi->mei == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->mei == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- jun -->
								@if($presensi->jun == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->jun == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- jul -->
								@if($presensi->juli == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->juli == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- agu -->
								@if($presensi->agu == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->agu == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- sep -->
								@if($presensi->sep == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->sep == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- okt -->
								@if($presensi->okt == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->okt == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- nov -->
								@if($presensi->nov == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->nov == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- des -->
								@if($presensi->des == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($presensi->des == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
                                </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </form>  
            @endforeach
        </div>
</body>
</html>
@endsection




