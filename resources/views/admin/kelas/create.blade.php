@extends('layouts.master')
@section('tittle', 'Tambah Kelas')
@section('Pagetittle')
    <h1 class="h3 text-gray-800">Tambah Kelas</h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Kelas</h6>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/kelas') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Kelas</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="jenjang">Jenjang</label>
                        <select class="form-control" id="jenjang" name="jenjang" required>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="UMUM">UMUM</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tutor">Tutor</label>
                        <select name="tutor[]" class="form-control" id="tutor">
                            @foreach ($tutor as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#tutor').selectize({
                maxItems: null,
                create: false,
            });
            $('#tutor')[0].selectize.setValue('');
        });
    </script>
@endpush
