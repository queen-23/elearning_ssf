@extends('layouts.master')
@section('tittle', 'Kelas Berjalan')
@section('Pagetittle')
    <h1 class="h3 text-gray-800">Kuis Matematika</h1>
@endsection


@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Soal</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

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

            $('#dataTable').DataTable({
                pageLength: 5,
            });
            const dataLengthBox = $('#dataTable_length');
            dataLengthBox.html(
                `<div><a href="{{ url('/tutor/soal/create') }}" data-title="Tambah Akun"
                    id="btn_tambah"
                    class="btn btn-primary">
                    Tambah Soal
                </a></div>`
            );
        });
    </script>
@endpush
