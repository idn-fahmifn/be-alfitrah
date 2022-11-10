@extends('layouts.template')

@section('title')
Halaman Program
@endsection
@section('content')

<div class="col-lg-12">
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="font-weight-bold ">Tabel Program</h6>
            <a class="float-right btn btn-primary btn-sm" href="program/create">Tambah <i class="fas fa-plus"></i></a>
        </div>
        <div class="table-responsive p-3">
            <table class="table table-flush" id="dataTable">
                <thead class="thead-light">
                    <tr>
                        <th>Nama Program</th>
                        <th>Show / Hide</th>
                        <th>Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($program as $row)
                    <tr>
                        <td>{{$row->nama}}</td>
                        <td>
                            @if($row->tampil == 'tampilkan')
                            <p class="text-success">published</p>
                            @else
                            <p class="text-danger">hidden</p>
                            @endif
                        </td>
                        
                        <td>
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pilihan</button>
                                <div class="dropdown-menu" x-placement="bottom-start"
                                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(211px, 231px, 0px);">
                                    <a class="dropdown-item" href="{{route('program.edit', $row->id)}}">Detail</a>
                                    <form action="#" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="dropdown-item" onclick="return confirm('Hapus? {{$row->nama}}')">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </td>  
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
