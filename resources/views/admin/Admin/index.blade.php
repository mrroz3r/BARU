@extends('layouts.admin')
@section('title')
Admin
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Admin Dashboard</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table" id="example">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Username</th>
                  <th>Status</th>
                  <th>Role</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i= 1;
                $user = \App\User::all()->where('role', '1');
                ?>
                @foreach($user as $q)
                <tr>
                  
                  <th scope="row">{{$i++}}</th>
                  <input type="hidden" name="id" value="{{$q->id}}">
                  <td>{{$q->name}}</td>
                  <td>@if($q->status==1)<a class="btn btn-info btn-sm" style="color: white;">Aktif</a> 
                    @elseif($q->status==2)<a class="btn btn-warning btn-sm" style="color: white;">Tidak Aktif</a> 
                  @endif</td>
                  <td>@if($q->role==1)<a class="btn btn-info btn-sm" style="color: white;">Admin</a> 
                    @elseif($q->role==2)<a class="btn btn-success btn-sm" style="color: white;">User</a> 
                  @endif</td>
                  <td>
                  @if($q->status != 2)
                   <a href="{{url('admin/dataadmin/update/'.$q->id)}}" class="btn btn-outline-warning btn-sm">Non Aktifkan</a>
                   @elseif($q->status = 1)
                   <a href="{{url('admin/dataadmin/updatee/'.$q->id)}}" class="btn btn-outline-warning btn-sm">Aktifkan</a>
                   @endif
                   <a href="{{url('admin/dataadmin/delete/'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                     class="btn btn-outline-danger btn-sm">Delete</a>
                   </tr>
                   @endforeach
                 </tbody>
               </table>
             </div>
             <hr>
            <li class="list-group-item float-left">
              <a href="{{url('admin/dataadmin/add')}}" class="btn btn-outline-primary btn-sm">Tambah Data</a>
            </li>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection