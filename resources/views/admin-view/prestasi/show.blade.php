@extends('layouts.admin')
@section('content')
    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">Data Informasi
                        </div>
                        <table class="table table-responsive mx-auto">
                            <form action="{{ route('prestasi.update', $prestasi->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                    <label for="">Tanggal Prestasi</label>
                                    <input type="date" name="tgl_prestasi" class="form-control"
                                        value="{{ $prestasi->tgl_prestasi }}" disabled>
                                    @error('tgl_prestasi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Prestasi</label>
                                    <input type="text" name="nama_prestasi" class="form-control"
                                        value="{{ $prestasi->nama_prestasi }}" disabled>
                                    @error('nama_prestasi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Tingkat</label>
                                    <input type="text" name="tingkat" class="form-control"
                                        value="{{ $prestasi->tingkat }}" disabled>
                                    @error('tingkat')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Deskripsi</label><br>
                                    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="4" disabled>{{ $prestasi->deskripsi }}</textarea>
                                    @error('deskripsi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Photo</label><br>
                                    <img src="{{ asset('storage/prestasi/' . $prestasi->photo) }}" alt=""
                                        style="width: 100px; height: 100px;">
                                </div>
                                <div class="mb-2">
                                    <a href="{{ route('prestasi.index') }}" class="btn btn-primary ">Kembali</a>
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
