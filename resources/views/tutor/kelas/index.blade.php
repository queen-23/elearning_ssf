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
                                <th>jenjang</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelas as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>
                                        @foreach ($item->tutor as $j)
                                            @if ($loop->iteration != $loop->count)
                                                {{ $j->name }},
                                            @else
                                                {{ $j->name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{ $item->jenjang }}</td>
                                    <td class="action-column">
                                        <a href="{{ url('/tutor/kelas/' . $item->id) }}" class="btn btn-primary"><i
                                                class="fas fa-fw fa-eye"></i></a>
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

            $('#dataTable').DataTable({
                pageLength: 5,
            });

        });
    </script>
@endpush
