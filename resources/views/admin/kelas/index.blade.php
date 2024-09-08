@extends('layouts.master')
@section('tittle', 'Kelola Kelas')
@section('Pagetittle')
    <h1 class="h3 text-gray-800">Kelola Kelas</h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Kelas</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="kelasTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenjang</th>
                                <th>Deskripsi</th>
                                <th>Tutor</th>
                                <th>enroll key</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelas as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->jenjang }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>
                                        @foreach ($item->tutor as $j)
                                            @if ($loop->iteration != $loop->count)
                                                {{ $j->name }},
                                            @else
                                                {{ $j->name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{ $item->enroll_key }}</td>
                                    <td class="action-column">
                                        <form action="{{ url('/admin/kelas/' . $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ url('/admin/kelas/' . $item->id) }}" class="btn btn-info"><i
                                                    class="fas fa-fw fa-recycle"></i></a>
                                            <a href="{{ url('/admin/kelas/' . $item->id . '/edit') }}"
                                                class="btn btn-warning"><i class="fas fa-fw fa-edit"></i></a>
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-fw fa-trash"></i>
                                            </button>
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
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#kelasTable').DataTable({
                pageLength: 5,
            });
            const dataLengthBox = $('#kelasTable_length');
            dataLengthBox.html(
                `<div><a href="{{ url('/admin/kelas/create') }}" data-title="Tambah Akun"
                    id="btn_tambah"
                    class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah</a></div>`
            );
        });
    </script>
@endpush
