@extends('layouts.master')
@section('tittle', 'Kelas Berjalan')
@section('Pagetittle')
    <h1 class="h3 text-gray-800">Matematika SMA 2</h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Materi</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="materiTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Materi</th>
                                <th>Format</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>12-12-2021</td>
                                <td>Matematika</td>
                                <td>Video</td>
                                <td class="action-column">
                                    <a href="{{ url('/siswa/materi/1') }}" class="btn btn-primary"><i
                                            class="fas fa-fw fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>12-12-2021</td>
                                <td>IPA</td>
                                <td>Text</td>
                                <td class="action-column">
                                    <a href="{{ url('/siswa/materi/2') }}" class="btn btn-primary"><i
                                            class="fas fa-fw fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>12-12-2021</td>
                                <td>Matematika</td>
                                <td>Video</td>
                                <td class="action-column">
                                    <a href="{{ url('/siswa/materi/1') }}" class="btn btn-primary"><i
                                            class="fas fa-fw fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>12-12-2021</td>
                                <td>IPA</td>
                                <td>Video</td>
                                <td class="action-column">
                                    <a href="{{ url('/siswa/materi/2') }}" class="btn btn-primary"><i
                                            class="fas fa-fw fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>12-12-2021</td>
                                <td>Matematika</td>
                                <td>Video</td>
                                <td class="action-column">
                                    <a href="{{ url('/siswa/materi/1') }}" class="btn btn-primary"><i
                                            class="fas fa-fw fa-eye"></i></a>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card
                                            shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Kuis</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="kuisTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Materi</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>12-12-2021</td>
                                <td>Matematika</td>
                                <td>Belum Dikerjakan</td>
                                <td class="action-column">
                                    <a href="{{ url('/siswa/kuis/1') }}" class="btn btn-primary"><i
                                            class="fas fa-fw fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>12-12-2021</td>
                                <td>IPA</td>
                                <td>Sudah Dikerjakan</td>
                                <td class="action-column">
                                    <a href="{{ url('/siswa/kuis/2') }}" class="btn btn-primary"><i
                                            class="fas fa-fw fa-eye"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#materiTable').DataTable({
                pageLength: 5,
            });
            $('#kuisTable').DataTable({
                pageLength: 5,
            });
        });
    </script>
@endpush
