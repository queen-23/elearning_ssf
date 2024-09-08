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
                                    <form action="" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ url('/tutor/kuis/1') }}" class="btn btn-primary"><i
                                                class="fas fa-fw fa-eye"></i></a>
                                        <a href="{{ url('/tutor/kuis/2') }}" class="btn btn-warning"><i
                                                class="fas fa-fw fa-edit"></i></a>
                                        <button type="submit" class="btn btn-danger"><i
                                                class="fas fa-fw fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>12-12-2021</td>
                                <td>IPA</td>
                                <td>Text</td>
                                <td class="action-column">
                                    <form action="" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ url('/tutor/kuis/1') }}" class="btn btn-primary"><i
                                                class="fas fa-fw fa-eye"></i></a>
                                        <a href="{{ url('/tutor/kuis/2') }}" class="btn btn-warning"><i
                                                class="fas fa-fw fa-edit"></i></a>
                                        <button type="submit" class="btn btn-danger"><i
                                                class="fas fa-fw fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>12-12-2021</td>
                                <td>Matematika</td>
                                <td>Video</td>
                                <td class="action-column">
                                    <form action="" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ url('/tutor/kuis/1') }}" class="btn btn-primary"><i
                                                class="fas fa-fw fa-eye"></i></a>
                                        <a href="{{ url('/tutor/kuis/2') }}" class="btn btn-warning"><i
                                                class="fas fa-fw fa-edit"></i></a>
                                        <button type="submit" class="btn btn-danger"><i
                                                class="fas fa-fw fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>12-12-2021</td>
                                <td>IPA</td>
                                <td>Video</td>
                                <td class="action-column">
                                    <form action="" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ url('/tutor/kuis/1') }}" class="btn btn-primary"><i
                                                class="fas fa-fw fa-eye"></i></a>
                                        <a href="{{ url('/tutor/kuis/2') }}" class="btn btn-warning"><i
                                                class="fas fa-fw fa-edit"></i></a>
                                        <button type="submit" class="btn btn-danger"><i
                                                class="fas fa-fw fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>12-12-2021</td>
                                <td>Matematika</td>
                                <td>Video</td>
                                <td class="action-column">
                                    <form action="" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ url('/tutor/kuis/1') }}" class="btn btn-primary"><i
                                                class="fas fa-fw fa-eye"></i></a>
                                        <a href="{{ url('/tutor/kuis/2') }}" class="btn btn-warning"><i
                                                class="fas fa-fw fa-edit"></i></a>
                                        <button type="submit" class="btn btn-danger"><i
                                                class="fas fa-fw fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Kuis</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="kuisTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Nama</th>
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
                                    <form action="" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ url('/tutor/kuis/1') }}" class="btn btn-primary"><i
                                                class="fas fa-fw fa-eye"></i></a>
                                        <a href="{{ url('/tutor/kuis/2') }}" class="btn btn-warning"><i
                                                class="fas fa-fw fa-edit"></i></a>
                                        <button type="submit" class="btn btn-danger"><i
                                                class="fas fa-fw fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>12-12-2021</td>
                                <td>IPA</td>
                                <td>Sudah Dikerjakan</td>
                                <td class="action-column">
                                    <form action="" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ url('/tutor/kuis/1') }}" class="btn btn-primary"><i
                                                class="fas fa-fw fa-eye"></i></a>
                                        <a href="{{ url('/tutor/kuis/2') }}" class="btn btn-warning"><i
                                                class="fas fa-fw fa-edit"></i></a>
                                        <button type="submit" class="btn btn-danger"><i
                                                class="fas fa-fw fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="kuisModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="kuisModalForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Tambah Gallery</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="judul">Nama Materi</label>
                            <input type="text" class="form-control" id="materi" name="materi" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="materiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="materiModalForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Tambah Gallery</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="judul">Nama Kuis</label>
                            <input type="text" class="form-control" id="kuis" name="kuis" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">format</label>
                            <select class="form-control" id="format" name="format" required>
                                <option value="">pilih format</option>
                                <option value="video">Video</option>
                                <option value="file">Text</option>
                            </select>
                        </div>
                        <div id="filediv" class="form-group">
                            <label for="file">File</label>
                            <input type="file" class="form-control" id="file" name="file">
                        </div>
                        <div id="linkdiv" class="form-group">
                            <label for="link">Link File</label>
                            <input type="text" class="form-control" id="link" name="link">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#filediv').hide();
            $('#linkdiv').hide();
            $('#format').change(function() {
                if ($('#format').val() == 'file') {
                    $('#filediv').show();
                    $('#linkdiv').hide();
                } else if ($('#format').val() == 'video') {
                    $('#filediv').hide();
                    $('#linkdiv').show();
                } else {
                    $('#filediv').hide();
                    $('#linkdiv').hide();
                }
            });
            $('#materiTable').DataTable({
                pageLength: 5,
            });

            $('#kuisTable').DataTable({
                pageLength: 5,
            });
            $('#materiTable_length').html(
                `<div><button data-title="Tambah Akun"
                    id="btn_add_materi" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah</button></div>`
            );
            $('#kuisTable_length').html(
                `<div><button data-title="Tambah Akun"
                    id="btn_add_kuis" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah</button></div>`
            );

            $('#btn_add_materi').on('click', function() {
                $('#materiModal').modal('show');
            });
            $('#btn_add_kuis').on('click', function() {
                $('#kuisModal').modal('show');
            });
        });
    </script>
@endpush
