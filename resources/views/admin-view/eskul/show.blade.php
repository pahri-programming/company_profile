@extends('layouts.admin')
@section('content')
    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">Data Eskul
                        </div>
                        <table class="table table-responsive mx-auto">
                            <form action="{{ route('eskul.update', $eskul->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                    <label for="">Nama Eskul</label>
                                    <input type="text" name="nama_eskul" class="form-control"
                                        value="{{ $eskul->nama_eskul }}" disabled>
                                    @error('nama_eskul')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Photo</label><br>
                                    <img src="{{ asset('storage/eskul/' . $eskul->photo) }}" alt=""
                                        style="width: 100px; height: 100px;">
                                </div>
                                <div class="mb-2">
                                    <a href="{{ route('eskul.index') }}" class="btn btn-primary ">Kembali</a>
                                </div>
                            </form>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
