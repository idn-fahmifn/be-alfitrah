@extends('layouts.template')

@section('title')
Tambah Acara
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <p class="text-primary">Form Acara</p>
        </div>
        <div class="card-body">
            <form action="{{route('acara.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="text-danger text-bold">Apakah anda akan menampilkan acara ini di halaman
                                utama?</label>
                            <select name="tampil" class="form-control">
                                <option value="">Pilihan</option>
                                <option value="tampilkan">Tampilkan</option>
                                <option value="sembunyikan">Sembunyikan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Acara <span class="text-danger">*</span></label>
                            <input type="text" name="nama" required class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                        <label>Penanggung Jawab Acara <span class="text-danger">*</span></label>
                        <input type="text" name="pic" required class="form-control">
                    </div>
                <div class="form-group">
                    <label>Thumbnail <span class="text-danger">*</span></label>
                    <input type="file" name="thumbnail" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Deskripsi Program <span class="text-danger">*</span></label>
                    <textarea name="deskripsi" id="editor" class="form-control" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Kirim</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
