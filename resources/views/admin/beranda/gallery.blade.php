@extends('layouts.master')
@section('tittle', 'Setting Beranda | Gallery')
@section('Pagetittle')
    <h1 class="h3 text-gray-800">Setting Beranda | Gallery</h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Gallery</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Jenis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gallery as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>{{ $item->jenis }}</td>
                                    <td class="action-column" style="white-space: nowrap">
                                        <form action="{{ url('/admin/gallery/' . $item->uuid) }}" method="post">
                                            <a href="{{ url('/admin/gallery/' . $item->uuid . '/edit') }}"
                                                class="btn btn-warning"><i class="fas fa-fw fa-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                                                    class="fas fa-fw fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="dataModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="modalForm" method="POST" enctype="multipart/form-data">
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
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <select class="form-control" id="jenis" name="jenis" required>
                                <option value="">pilih jenis</option>
                                <option value="foto">Foto</option>
                                <option value="video">Video</option>
                            </select>
                        </div>
                        <div class="form-group" id="bucketVideo">
                            <label for="file">Link Video</label>
                            <input type="text" class="form-control" name="link">
                        </div>
                        <div id="bucketFoto" class="form-group">
                            <label for="file">File</label>
                            <img width=80 src="" alt="" id="imginput">
                            <input type="file" class="form-control" id="file" name="file">
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
            $('#bucketVideo').hide();
            $('#bucketFoto').hide();
            $('#dataTable').DataTable();
            const dataLengthBox = $('#dataTable_length');
            dataLengthBox.html(
                `<div><button data-title="Tambah Akun" id="btn_tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</button></div>`
            );
            $('#btn_tambah').on('click', function() {

                $('#dataModal').modal('show');
            });
            $('#file').on('change', function() {
                const file = $(this).get(0).files;
                if (file.length > 0) {
                    const fileReader = new FileReader();
                    fileReader.onload = function(e) {
                        $('#imginput').attr('src', e.target.result);
                    }
                    fileReader.readAsDataURL(file[0]);
                }
            });
            $('#jenis').on('change', function() {
                if ($(this).val() == 'foto') {
                    $('#bucketFoto').show();
                    $('#bucketVideo').hide();
                } else {
                    $('#bucketFoto').hide();
                    $('#bucketVideo').show();
                }
            });
        });
    </script>
@endpush
