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
                                        <label>Jenis Kelamin</label>
                                        <select name="jenis_kelamin"
                                            class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                            <option value="Laki-laki"
                                                {{ $karyawan->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                                            </option>
                                            <option value="Perempuan"
                                                {{ $karyawan->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                                            </option>
                                        </select>
                                        @error('jenis_kelamin')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Tugas</label>
                                        <select name="tugas" class="form-control @error('tugas') is-invalid @enderror">
                                            <option value="b.indonesia"
                                                {{ old('tugas', $karyawan->tugas) == 'b.indonesia' ? 'selected' : '' }}>
                                                B.indonesia</option>
                                            <option value="b.inggris"
                                                {{ old('tugas', $karyawan->tugas) == 'b.inggris' ? 'selected' : '' }}>
                                                B.Inggris</option>
                                            <option value="penjaskes"
                                                {{ old('tugas', $karyawan->tugas) == 'penjaskes' ? 'selected' : '' }}>
                                                Penjaskes</option>
                                            <option value="ppkn"
                                                {{ old('tugas', $karyawan->tugas) == 'ppkn' ? 'selected' : '' }}>Ppkn
                                            </option>
                                            <option value="Matematika"
                                                {{ old('tugas', $karyawan->tugas) == 'Matematika' ? 'selected' : '' }}>
                                                Matematika</option>
                                            <option value="Kimia"
                                                {{ old('tugas', $karyawan->tugas) == 'Kimia' ? 'selected' : '' }}>Kimia
                                            </option>
                                        </select>
                                        @error('tugas')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <select class="form-control @error('jabatan') is-invalid @enderror" name="jabatan">
                                            <option value="tata usaha"
                                                {{ old('jabatan', $karyawan->jabatan) == 'tata usaha' ? 'selected' : '' }}>
                                                Tata Usaha</option>
                                            <option value="guru"
                                                {{ old('jabatan', $karyawan->jabatan) == 'guru' ? 'selected' : '' }}>Guru
                                            </option>
                                            <option value="kepala sekolah"
                                                {{ old('jabatan', $karyawan->jabatan) == 'kepala sekolah' ? 'selected' : '' }}>
                                                Kepala Sekolah</option>
                                            <option value="staf"
                                                {{ old('jabatan', $karyawan->jabatan) == 'staf' ? 'selected' : '' }}>Staff
                                            </option>
                                            <option value="bimbingan konseling"
                                                {{ old('jabatan', $karyawan->jabatan) == 'bimbingan konseling' ? 'selected' : '' }}>
                                                Bimbingan Konseling</option>
                                            <option value="wakil kepala sekolah"
                                                {{ old('jabatan', $karyawan->jabatan) == 'wakil kepala sekolah' ? 'selected' : '' }}>
                                                Wakil Kepala Sekolah</option>
                                        </select>
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
