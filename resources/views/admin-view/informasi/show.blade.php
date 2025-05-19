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
                            <form action="{{ route('informasi.update', $informasi->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                    <label for="">Judul</label>
                                    <input type="text" name="judul" class="form-control"
                                        value="{{ $informasi->judul }}" disabled>
                                    @error('judul')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Deskripsi</label><br>
                                    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="4" disabled>{{ $informasi->deskripsi }}</textarea>
                                    @error('deskripsi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Photo</label><br>
                                    <img src="{{ asset('storage/informasi/' . $informasi->photo) }}" alt="">
                                </div>
                                <div class="mb-2">
                                    <a href="{{ route('informasi.index') }}" class="btn btn-primary ">Kembali</a>
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
