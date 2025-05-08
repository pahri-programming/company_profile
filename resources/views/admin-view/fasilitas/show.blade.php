@extends('layouts.admin')
@section('content')
    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">Data Fasilitas
                        </div>
                        <table class="table table-responsive mx-auto">
                            <form action="{{ route('fasilitas.update', $fasilitas->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                    <label for="">Nama Fasilitas</label>
                                    <input type="text" name="nama_fasilitas" class="form-control"
                                        value="{{ $fasilitas->nama_fasilitas }}" disabled>
                                    @error('nama_fasilitas')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Photo</label><br>
                                    <img src="{{ asset('storage/fasilitas/' . $fasilitas->photo) }}" alt=""
                                        style="width: 100px; height: 100px;">
                                </div>
                                <div class="mb-2">
                                    <a href="{{ route('fasilitas.index') }}" class="btn btn-primary ">Kembali</a>
                                </div>
                            </form>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
