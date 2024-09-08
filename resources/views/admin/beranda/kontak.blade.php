@extends('layouts.master')
@section('tittle', 'Setting Beranda | Kontak')
@section('Pagetittle')
    <h1 class="h3 text-gray-800">Setting Beranda | Kontak</h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Kontak</h6>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/beranda/kontak') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6">

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input value="{{ $kontak->email ?? '' }}" type="email" class="form-control" id="email"
                                    name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="no_telp">No. Telepon</label>
                                <input value="{{ $kontak->no_telp ?? '' }}" type="text" class="form-control"
                                    id="no_telp" name="no_telp" required>
                            </div>
                            <div class="form-group">
                                <label for="">Tentang</label>
                                <textarea class="form-control" id="tentang" name="tentang" rows="7" required>{{ $kontak->tentang ?? '' }}</textarea>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <input value="{{ $kontak->facebook ?? '' }}" type="text" class="form-control"
                                    id="facebook" name="facebook" required>
                            </div>
                            <div class="form-group">
                                <label for="instagram">Instagram</label>
                                <input value="{{ $kontak->instagram ?? '' }}" type="text" class="form-control"
                                    id="instagram" name="instagram" required>
                            </div>
                            <div class="form-group">
                                <label for="youtube">Youtube</label>
                                <input value="{{ $kontak->youtube ?? '' }}" type="text" class="form-control"
                                    id="youtube" name="youtube" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3" required>{{ $kontak->alamat ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
