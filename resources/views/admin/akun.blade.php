@extends('layouts.master')
@section('tittle', 'Kelola Akun')
@section('Pagetittle')
    <h1 class="h3 text-gray-800">Kelola Akun</h1>
@endsection

@section('content')
    <div class="container-fluid">
        {{-- <h1 class="h3 mb-2 text-gray-800">Kelola Akun</h1> --}}
        {{-- <p class="mb-4">Kelola Akun Pengguna</p> --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Akun Pengguna</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td class="action-column">
                                        <button data-id="{{ $user->id }}" data-nama="{{ $user->name }}"
                                            data-username="{{ $user->username }}" data-role="{{ $user->role }}"
                                            data-alamat="asdasd" data-tgl_lahir="2021-08-01" data-email="asdasd@sada.asd"
                                            data-no_telp="asdasd" class="btn btn-warning btn-sm btn_edit">Edit</button>
                                        <form action="{{ url('admin/akun/' . $user->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
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
            <form id="modalForm" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Edit Akun Petugas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputNama">Nama</label>
                                <input name="name" type="text" class="form-control" id="inputNama">
                                <label for="inputUsername">Username</label>
                                <input name="username" type="text" class="form-control" id="inputUsername">
                                <label for="inputPassword">Password</label>
                                <input name="password" type="password" class="form-control" id="inputPassword">
                                <label for="inputRole">Role</label>
                                <select name="role" id="inputRole" class="form-control">
                                    <option value="" disabled>Pilih Role</option>
                                    <option value="tutor">Tutor</option>
                                    <option value="siswa">Siswa</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAlamat">Alamat</label>
                                <input name="alamat" type="text" class="form-control" id="inputAlamat">
                                <label for="inputTanggalLahir">Tanggal Lahir</label>
                                <input name="tgl_lahir" type="date" class="form-control" id="inputTanggalLahir">
                                <label for="inputEmail">Email</label>
                                <input name="email" type="email" class="form-control" id="inputEmail">
                                <label for="inputTelepon">No. Telepon</label>
                                <input name="no_telp" type="text" class="form-control" id="inputTelepon">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
{{-- @dd($users) --}}
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
            const dataLengthBox = $('#dataTable_length');
            dataLengthBox.html(
                `<div><button data-title="Tambah Akun" id="btn_tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</button></div>`
            );
            const btn_modal = document.querySelectorAll('.btn_edit, #btn_tambah');
            console.log(btn_modal);
            btn_modal.forEach(button => {
                button.addEventListener('click', function() {
                    const modalTitle = document.querySelector('#modalTitle');
                    const modalForm = document.querySelector('#modalForm');
                    if (this.id == 'btn_tambah') {
                        // console.log(this);
                        modalTitle.innerHTML = this.getAttribute('data-title');
                        modalForm.action = "{{ url('admin/akun') }}";
                    } else {
                        console.log(this.parentElement.parentElement);
                        modalForm.action = "{{ url('admin/akun') }}/" + this.getAttribute(
                            'data-id');
                        modalTitle.innerHTML = 'Edit Akun';
                        const nama = this.getAttribute('data-nama');
                        const username = this.getAttribute('data-username');
                        const role = this.getAttribute('data-role');
                        const alamat = this.getAttribute('data-alamat');
                        const tgl_lahir = this.getAttribute('data-tgl_lahir');
                        const email = this.getAttribute('data-email');
                        const no_telp = this.getAttribute('data-no_telp');

                        document.querySelector('#inputNama').value = nama;
                        document.querySelector('#inputUsername').value = username;
                        document.querySelector('#inputRole').value = role;
                        document.querySelector('#inputAlamat').value = alamat;
                        document.querySelector('#inputTanggalLahir').value = tgl_lahir;
                        document.querySelector('#inputEmail').value = email;
                        document.querySelector('#inputTelepon').value = no_telp;
                    }
                    $('#dataModal').modal('show');
                })
            });
        });
    </script>
@endpush
@push('styles')
    <style>
        /* Set a fixed width for the action column */
        .action-column {
            width: 120px;
            white-space: nowrap;
        }

        /* Ensure buttons are displayed inline */
        .action-column button {
            margin: 0 2px;
        }
    </style>
@endpush
