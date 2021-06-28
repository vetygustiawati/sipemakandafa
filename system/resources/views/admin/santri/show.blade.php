@extends ('admin.template.base')

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
            <form method="post">
<div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                           <img src="{{url("public/$santri->foto")}}">
                            <div class="file btn btn-lg btn-primary">
                               {{$santri->nama_santri}}
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5  style="font-family: times new roman">
                                       DATA SANTRI
                                    </h5>
                                    <h5 style="font-family: times new roman">
                                        Pondok Pesantren Darul Fadhilah
                                    </h5>
                                    <br>
                                    
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                               
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <a href="{{url('admin/santri', $santri->id)}}/edit" class="btn btn-primary btn-sm my-1 mr-sm-1 btn-block"><i class="nav-icon fas fa-pencil-alt"></i> Edit</a>
                        <a href="{{url('admin/santri/del', $santri->id)}}" class="btn btn-danger btn-sm my-1 mr-sm-1 btn-block" onsubmit="return confirm('Apakah anda yakin akan menghapus data ini ??')"><i class="nav-icon fas fa-trash-alt"></i> Delete</a>

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
                                                <h5 style="font-family: times new roman">  {{$santri->id_santri}}</h5>
                                            </div>
                                        </div>
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                               
                            </ul>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5 style="font-family: times new roman"><b><i class="nav-icon fas fa-transgender"></i>  Jenis Kelamin</h5>
                                                <h5 style="font-family: times new roman">{{$santri->jk}}</h5>
                                            </div>
                                        </div>
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                               
                            </ul>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5 style="font-family: times new roman"><b><i class="nav-icon fas fa-archive"></i>  Tempat Lahir</h5>
                                                <h5 style="font-family: times new roman">{{$santri->tpt_lahir}}</h5>
                                            </div>
                                        </div>
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                               
                            </ul>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5 style="font-family: times new roman"><b><i class="nav-icon fas fa-calendar"></i>  Tanggal Lahir</h5>

                                                  <h5 style="font-family: times new roman">{{$santri->tgl_lahir}}</h5>
                                            </div>
                                        </div> 
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                               
                            </ul>  
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5 style="font-family: times new roman"><b><i class="nav-icon fas fa-user-circle"></i> Nama Wali Santri</h5>
                                                 <h5 style="font-family: times new roman">{{$santri->nm_wsantri}}</h5>
                                            </div>
                                        </div>
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                               
                            </ul>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5 style="font-family: times new roman"><b><i class="nav-icon fas fa-home"></i>  Alamat</h5>
                                                 <h5 style="font-family: times new roman">{{$santri->alamat}}</h5>
                                            </div>  
                                        </div>
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                               
                            </ul>
                                        <br>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <h5 style="font-family: times new roman"><b><i class="nav-icon fas fa-calculator"></i>  No. HP</h5>
                                                <h5 style="font-family: times new roman">{{$santri->no_hp}}</h5>
                                            </div>
                                        </div> 
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                               
                            </ul>   
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
</body>
</html>
@endsection


