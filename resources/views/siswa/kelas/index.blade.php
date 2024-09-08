@extends('layouts.master')
@section('tittle', 'Kelas Berjalan')
@section('Pagetittle')
    <h1 class="h3 text-gray-800">Kelas Berjalan</h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Kelas</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Guru</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Matematika</td>
                                <td>Andika, Peterpan</td>
                                <td>Bejalan</td>
                                <td class="action-column">
                                    <a href="{{ url('/siswa/kelas/1') }}" class="btn btn-primary"><i
                                            class="fas fa-fw fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>IPA</td>
                                <td>Andika, Peterpan</td>
                                <td>Selesai</td>
                                <td class="action-column">
                                    <a href="{{ url('/siswa/kelas/2') }}" class="btn btn-primary"><i
                                            class="fas fa-fw fa-eye"></i></a>
                                    <a href="{{ url('/siswa/kelas/2') }}" class="btn btn-secondary"><i
                                            class="fas fa-fw fa-print"></i></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
