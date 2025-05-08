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
                            <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control"
                                        value="{{ $karyawan->nama }}" disabled>
                                    @error('nama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <input type="text" name="jenis_kelamin" class="form-control"
                                        value="{{ $karyawan->jenis_kelamin }}" disabled>
                                    @error('jenis_kelamin')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Tugas</label><br>
                                    <input type="text" name="tugas"
                                        class="form-control @error('tugas') is-invalid @enderror"
                                        value="{{ $karyawan->tugas }}" disabled>
                                    @error('tugas')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Jabatan</label><br>
                                    <input type="text" name="jabatan"
                                        class="form-control @error('jabatan') is-invalid @enderror"
                                        value="{{ $karyawan->jabatan }}" disabled>
                                    @error('jabatan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Photo</label>
                                    <img src="{{ asset('storage/karyawan/' . $karyawan->photo) }}" alt=""
                                        style="width: 100px; height: 100px;">
                                </div>
                                <div class="mb-2">
                                    <a href="{{ route('karyawan.index') }}" class="btn btn-primary ">Kembali</a>
                                </div>
                            </form>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
