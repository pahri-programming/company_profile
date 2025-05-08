@extends('layouts.admin')
@section('content')
    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">edit Fasilitas
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
                                <form action="{{ route('fasilitas.update', $fasilitas->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>Nama Fasilitas</label>
                                        <input type="text" class="form-control" name="nama_fasilitas"
                                            @error('nama_fasilitas') is-invalid @enderror value="{{ $fasilitas->nama_fasilitas }}" >
                                        @error('nama_fasilitas')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Ganti Photo</label>
                                        <img src="{{ asset('storage/fasilitas/' . $fasilitas->photo) }}" alt=""
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
