@extends('layouts.admin')
@section('content')
    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">Data Eskul
                            <a href="{{ route('eskul.create') }}" class="btn btn-outline-primary"
                                style="float: right">Tambah
                                Data</a>
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
                                    <th>Nama Eskul</th>
                                    <th>Photo</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp
                                    @foreach ($eskul as $data)
                                        <tr>
                                            <td scope="row">{{ $no++ }}</td>
                                            <td scope="row">{{ $data->nama_eskul }}</td>
                                            <td scope="row"> <img src="{{ asset('storage/eskul/' . $data->photo) }}"
                                                    alt="" style="width: 100px; height: 100px;">
                                            </td>
                                            <td>
                                                <form action="{{ route('eskul.destroy', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('eskul.edit', $data->id) }}"
                                                        class="btn btn-sm btn-success">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
                                                    <a href="{{ route('eskul.show', $data->id) }}"
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
@endsection
