@extends('layouts.admin')
@section('content')
    <!-- Add this inside the <head> tag of your HTML -->


    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">Data Informasi
                            <a href="{{ route('prestasi.create') }}" class="btn btn-outline-primary"
                                style="float: right">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success alert-dimissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dimiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <table class="table table-responsive table center-table">
                                <thead>
                                    <th>No</th>
                                    <th>Tanggal Prestasi</th>
                                    <th>Nama Prestasi</th>
                                    <th>Tingkat</th>
                                    <th>Deskripsi</th>
                                    <th>Photo</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp
                                    @foreach ($prestasi as $data)
                                        <tr>
                                            <td scope="row">{{ $no++ }}</td>
                                            <td scope="row">{{ $data->tgl_prestasi }}</td>
                                            <td scope="row">{{ $data->nama_prestasi }}</td>
                                            <td scope="row">{{ $data->tingkat }}</td>
                                            <td scope="row">{{ Str::limit($data->deskripsi, 50) }}</td>
                                            <td scope="row"> <img src="{{ asset('storage/prestasi/' . $data->photo) }}"
                                                    alt="" style="width: 100px; height: 100px;">
                                            </td>
                                            <td>
                                                <form action="{{ route('prestasi.destroy', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('prestasi.edit', $data->id) }}"
                                                        class="btn btn-sm btn-success">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
                                                    <a href="{{ route('prestasi.show', $data->id) }}"
                                                        class="btn btn-sm btn-warning">
                                                        <i class="bi bi-eye-fill"></i>
                                                    </a>
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Apakah anda Yakin')">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Place before the closing </body> tag -->
@endsection
