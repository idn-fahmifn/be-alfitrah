@extends('layouts.template')

@section('title')
Tambah Program
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <p class="text-primary">Form Program</p>
        </div>
        <div class="card-body">
            <form action="{{route('program.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="text-danger text-bold">Apakah anda akan menampilkan program ini di halaman utama?</label>
                        <select name="tampil" class="form-control">
                            <option value="">Pilihan</option>
                            <option value="tampilkan">Tampilkan</option>
                            <option value="sembunyikan">Sembunyikan</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Program <span class="text-danger">*</span></label>
                        <input type="text" name="nama" required class="form-control">
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <label>Thumbnail <span class="text-danger">*</span></label>
                    <input type="file" name="thumbnail" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Deskripsi Program <span class="text-danger">*</span></label>
                    <textarea name="deskripsi" id="" class="form-control" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Kirim</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
