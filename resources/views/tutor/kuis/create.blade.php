@extends('layouts.master')
@section('tittle', 'Buat Soal')
@section('Pagetittle')
    <h1 class="h3 text-gray-800">Buat Soal</h1>
@endsection
@push('styles')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js" defer></script>
@endpush
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Buat Soal</h6>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <textarea name="soal" id="soal">Soal</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Jawaban</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">A</span>
                            </div>
                            <input type="text" class="form-control" placeholder="jawaban" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">B</span>
                            </div>
                            <input type="text" class="form-control" placeholder="jawaban" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">C</span>
                            </div>
                            <input type="text" class="form-control" placeholder="jawaban" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">D</span>
                            </div>
                            <input type="text" class="form-control" placeholder="jawaban" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Kunci Jawaban</span>
                        </div>
                        <input type="text" class="form-control" placeholder="A/B/C/D" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                    <button class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#soal').summernote({
                height: 200,
            })
        });
    </script>
@endpush
