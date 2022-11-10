@extends('layouts.template')
@section('title')
Tambah Pengurus
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <p>Tambah Pengurus</p>
            <hr>
        </div>
        <div class="card-body">
            <form action="{{route('user.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Level <span class="text-danger">*</span></label>
                    <select name="level" class="form-control">
                        <option value="">-Pilih Level-</option>
                        <option value="admin">Super Admin</option>
                        <option value="petugas">Pengurus</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Lengkap <span class="text-danger">*</span></label>
                    <input type="text" name="name" required class="form-control">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" required class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Username <span class="text-danger">*</span></label>
                            <input type="text" name="username" required class="form-control">
                        </div>
                    </div>
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
    @endsection
