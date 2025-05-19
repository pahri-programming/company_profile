@extends('layouts.admin')
@section('content')
    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">Data Prestasi
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success alert-dimissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dimiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <table class="table table-responsive mx-auto">
                                <form action="{{ route('prestasi.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Tanggal Prestasi</label>
                                        <input type="date" name="tgl_prestasi"
                                            class="form-control @error('tgl_prestasi') is-invalid @enderror">
                                        @error('tgl_prestasi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama Prestasi</label>
                                        <input type="text" name="nama_prestasi"
                                            class="form-control @error('nama_prestasi') is-invalid @enderror">
                                        @error('nama_prestasi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tingkat</label>
                                        <input type="text" name="tingkat"
                                            class="form-control @error('tingkat') is-invalid @enderror">
                                        @error('tingkat')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label><br>
                                        <textarea id="deskripsi" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="4"></textarea>
                                        @error('deskripsi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
                                    <script>
                                        ClassicEditor
                                            .create(document.querySelector('#deskripsi'))
                                            .catch(error => {
                                                console.error(error);
                                            });
                                    </script>   
                                    <div class="form-group">
                                        <label for="">photo</label>
                                        <input type="file" name="photo" id=""
                                            class="form-control @error('photo') is-invalid @enderror">
                                        @error('photo')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                    </div>
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
