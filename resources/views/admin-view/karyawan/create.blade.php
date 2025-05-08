 @extends('layouts.admin')
 @section('content')
     <div class="row">
         <!-- [ sample-page ] start -->
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-md-10">
                     <div class="card">
                         <div class="card-header">Data Karyawan
                         </div>
                         <div class="card-body">
                             @if (session('success'))
                                 <div class="alert alert-success alert-dimissible fade show" role="alert">
                                     {{ session('success') }}
                                     <button type="button" class="btn-close" data-bs-dimiss="alert"
                                         aria-label="Close"></button>
                                 </div>
                             @endif
                             <table class="table table-responsive mx-auto">
                                 <form action="{{ route('karyawan.store') }}" method="POST" enctype="multipart/form-data">
                                     @csrf
                                     <div class="form-group">
                                         <label for="">Nama</label>
                                         <input type="text" name="nama" class="form-control">
                                         @error('nama')
                                             <div class="invalid-feedback">{{ $message }}</div>
                                         @enderror
                                     </div>
                                     <div class="form-group">
                                         <label for="">Jenis Kelamin</label>
                                         <select name="jenis_kelamin" id="" class="form-control">
                                             <option value="Laki-laki">Laki-laki</option>
                                             <option value="Perempuan">Perempuan</option>
                                             @error('jenis_kelamin')
                                                 <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="">Tugas</label>
                                         <input type="text" name="tugas" class="form-control">
                                         @error('tugas')
                                             <div class="invalid-feedback">{{ $message }}</div>
                                         @enderror
                                     </div>
                                     <div class="form-group">
                                         <label for="">Jabatan</label>
                                         <input type="text" name="jabatan" class="form-control">
                                         @error('jabatan')
                                             <div class="invalid-feedback">{{ $message }}</div>
                                         @enderror
                                     </div>
                                     <div class="form-group">
                                         <label for="">photo</label>
                                         <input type="file" name="photo" id=""
                                             class="form-control @error('photo') is-invalid @enderror">
                                         @error('photo')
                                             <div class="invalid-feedback">{{ $message }}</div>
                                         @enderror
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
     </div>
 @endsection
