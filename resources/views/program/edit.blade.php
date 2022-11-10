@extends('layouts.template')

@section('title')
Halaman Detail
@endsection
@section('content')

<div class="col-md-8">
    <div class="card">
        <div class="card-header d-flex flex-row align-items-center justify-content-between">
            <p>{{$program->nama}}</p>
            <p class="float-right">
                @if($program->tampil == 'tampilkan')
                <span class="text-success">Published</span>
                @else
                <span class="text-danger">Hidden</span>
                @endif
            </p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-borderless">
                    <tr>
                        <td colspan="3" class="text-center">
                        <img src="https://img.freepik.com/free-vector/pair-programming-concept-illustration_114360-3941.jpg?w=2000" width="200px">
                        </td>
                    </tr>
                    <tr>
                        <th>Nama Program</th>
                        <td>:</td>
                        <td>{{$program->nama}}</td>
                    </tr>
                    <tr>
                        <th>Deskripsi Program</th>
                        <td>:</td>
                        <td>{{$program->deskripsi}}</td>
                    </tr>  
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            <p>Ubah Petugas</p>
        </div>
        <div class="card-body">
            <form action="{{route('program.update', [$program->id])}}" method="post">
                @csrf
                {{method_field('PUT')}}
                <div class="form-group">
                    <label>Nama Lengkap <span class="text-danger">*</span></label>
                    <input type="text" name="name" required value="{{$program->name}}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email <span class="text-danger">*</span></label>
                    <input type="email" name="email" value="{{$program->email}}" required class="form-control">
                </div>
                <div class="form-group">
                    <label>programname <span class="text-danger">*</span></label>
                    <input type="text" name="programname" value="{{$program->programname}}" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Password <span class="text-danger">*</span></label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-refresh"></i> Kirim</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
