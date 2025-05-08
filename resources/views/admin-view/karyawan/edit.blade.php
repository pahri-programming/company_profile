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
                                <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="nama"
                                            @error('nama') is-invalid @enderror value="{{ $karyawan->nama }}">
                                        @error('nama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id="" class="form-control"
                                            @error('jenis_kelamin') is-invalid @enderror
                                            value="{{ $karyawan->jenis_kelamin }}">
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                            @error('jenis_kelamin')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tugas</label>
                                        <input type="text" class="form-control" name="tugas"
                                            @error('tugas') is-invalid @enderror value="{{ $karyawan->tugas }}">
                                        @error('tugas')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <input type="text" class="form-control" name="jabatan"
                                            @error('jabatan') is-invalid @enderror value="{{ $karyawan->jabatan }}"
                                        >
                                        @error('jabatan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Ganti Photo</label>
                                        <img src="{{ asset('storage/karyawan/' . $karyawan->photo) }}" alt=""
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
