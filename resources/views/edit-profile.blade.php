@extends('layouts.master')
@section('tittle', 'Setting Profil')
@section('Pagetittle')
    <h1 class="h3 text-gray-800">Setting Profil</h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Akun</h6>
            </div>
            <div class="card-body">
                <form method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" value="{{ $user->name }}" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" value="{{ $user->username }}" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
