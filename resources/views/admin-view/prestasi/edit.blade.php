@extends('layouts.admin')
@section('content')
    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">edit Informasi
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success alert-dimissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dimiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <table class="table table-responsive">
                                <form action="{{ route('prestasi.update', $prestasi->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>Tanggal Prestasi</label>
                                        <input type="date" class="form-control" name="tgl_prestasi"
                                            @error('tgl_prestasi') is-invalid @enderror
                                            value="{{ $prestasi->tgl_prestasi }}">
                                        @error('tgl_prestasi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Prestasi</label>
                                        <input type="text" class="form-control" name="nama_prestasi"
                                            @error('nama_prestasi') is-invalid @enderror
                                            value="{{ $prestasi->nama_prestasi }}">
                                        @error('nama_prestasi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Tingkat</label>
                                        <input type="text" class="form-control" name="tingkat"
                                            @error('tingkat') is-invalid @enderror
                                            value="{{ $prestasi->tingkat }}">
                                        @error('tingkat')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label><br>
                                        <textarea id="deskripsi" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror custom-textarea">{{ old('deskripsi', $prestasi->deskripsi) }}</textarea>
                                        @error('deskripsi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <style>
                                        .ck-editor__editable_inline {
                                            min-height: 150px;
                                            /* Ubah ini sesuai kebutuhan */
                                            font-size: 16px;
                                            padding: 12px;
                                        }
                                    </style>
                                    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
                                    <script>
                                        ClassicEditor
                                            .create(document.querySelector('#deskripsi'))
                                            .catch(error => {
                                                console.error(error);
                                            });
                                    </script>
                                    <div class="form-group">
                                        <label for="">Ganti Photo</label>
                                        <img src="{{ asset('storage/prestasi/' . $prestasi->photo) }}" alt=""
                                            style="width: 100px; height: 100px;">
                                        <input type="file" class="form-control" name="photo">
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
